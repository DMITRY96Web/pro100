<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reguests".
 *
 * @property int $id
 * @property string $name
 * @property string $number_car
 * @property string $date
 * @property string $time
 * @property string $phone
 * @property string|null $comment
 * @property int|null $service_id
 * @property int|null $user_id
 *
 * @property Comment[] $comments
 * @property Service $service
 * @property User $user
 */
class Request extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reguests';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'number_car', 'date', 'time', 'phone'], 'required'],
            [['date', 'time'], 'safe'],
            [['comment'], 'string'],
            [['service_id', 'user_id'], 'integer'],
            [['name'], 'string', 'max' => 60],
            [['number_car'], 'string', 'max' => 10],
            [['phone'], 'string', 'max' => 20],
            [['service_id'], 'exist', 'skipOnError' => true, 'targetClass' => Service::className(), 'targetAttribute' => ['service_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'number_car' => 'Номер машины',
            'date' => 'Дата',
            'time' => 'Время',
            'phone' => 'Телефон',
            'comment' => 'Комментарий',
            'service_id' => 'Услуга',
            'user_id' => 'Пользователь',
        ];
    }

    /**
     * Gets query for [[Comments]].
     *
     * @return \yii\db\ActiveQuery|CommentsQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['reguest_id' => 'id'])->inverseOf('reguest');
    }

    /**
     * Gets query for [[Service]].
     *
     * @return \yii\db\ActiveQuery|ServicesQuery
     */
    public function getService()
    {
        return $this->hasOne(Service::className(), ['id' => 'service_id'])->inverseOf('requests');
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery|UsersQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id'])->inverseOf('requests');
    }

    /**
     * {@inheritdoc}
     * @return RequestQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RequestQuery(get_called_class());
    }
}
