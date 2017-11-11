<?php

namespace common\models;


/**
 * This is the model class for table "languages".
 *
 * @property integer $id
 * @property string $name
 * @property string $small_name
 */
class Languages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'languages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'small_name'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['small_name'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'small_name' => 'Small Name',
        ];
    }
}
