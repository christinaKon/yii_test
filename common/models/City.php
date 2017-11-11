<?php

namespace common\models;


/**
 * This is the model class for table "city".
 *
 * @property integer $id
 * @property string $city
 * @property string $region
 *
 * @property MySmi[] $mySmis
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city', 'region'], 'required'],
            [['city', 'region'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city' => 'City',
            'region' => 'Region',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMySmis()
    {
        return $this->hasMany(MySmi::className(), ['city_id' => 'id']);
    }
}
