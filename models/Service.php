<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property string $name
 * @property string|null $image
 * @property string|null $text
 * @property string $price
 *
 * @property Request[] $reguests
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price'], 'required'],
            [['name', 'image', 'text', 'price'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Услуга',
            'image' => 'Изображение',
            'text' => 'Текст',
            'price' => 'Цена',
        ];
    }

    /**
     * Gets query for [[Reguests]].
     *
     * @return \yii\db\ActiveQuery|ReguestsQuery
     */
    public function getReguests()
    {
        return $this->hasMany(Request::className(), ['service_id' => 'id'])->inverseOf('service');
    }

    /**
     * {@inheritdoc}
     * @return ServiceQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ServiceQuery(get_called_class());
    }
}
