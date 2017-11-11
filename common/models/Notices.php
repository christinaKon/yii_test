<?php

namespace common\models;


/**
 * This is the model class for table "notices".
 *
 * @property integer $id
 * @property string $name
 * @property string $message
 * @property string $description
 *
 * @property NoticeSettings[] $noticeSettings
 */
class Notices extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notices';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['message', 'description'], 'string'],
            [['name'], 'string', 'max' => 255],
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
            'message' => 'Message',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNoticeSettings()
    {
        return $this->hasMany(NoticeSettings::className(), ['notice_id' => 'id']);
    }
}
