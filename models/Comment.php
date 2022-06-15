<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $subject
 * @property string $message
 * @property int|null $reguest_id
 *
 * @property Request $reguest
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'message'], 'required'],
            [['message'], 'string'],
            [['reguest_id'], 'integer'],
            [['name', 'email'], 'string', 'max' => 60],
            [['subject'], 'string', 'max' => 150],
            [['reguest_id'], 'exist', 'skipOnError' => true, 'targetClass' => Request::className(), 'targetAttribute' => ['reguest_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ФИО',
            'email' => 'Email',
            'subject' => 'Тема',
            'message' => 'Сообщение',
            'reguest_id' => 'Номер заявки',
        ];
    }

    /**
     * Gets query for [[Reguest]].
     *
     * @return \yii\db\ActiveQuery|ReguestsQuery
     */
    public function getReguest()
    {
        return $this->hasOne(Request::className(), ['id' => 'reguest_id'])->inverseOf('comments');
    }

    /**
     * {@inheritdoc}
     * @return CommentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CommentQuery(get_called_class());
    }
}
