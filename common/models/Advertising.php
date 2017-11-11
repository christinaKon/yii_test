<?php

namespace common\models;


/**
 * This is the model class for table "advertising".
 *
 * @property integer $id
 * @property integer $type
 * @property string $banner_code
 */
class Advertising extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'advertising';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'banner_code'], 'required'],
            [['type'], 'integer'],
            [['banner_code'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'banner_code' => 'Banner Code',
        ];
    }
}
