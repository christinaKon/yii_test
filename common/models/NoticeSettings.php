<?php

namespace common\models;


/**
 * This is the model class for table "notice_settings".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $notice_id
 * @property integer $value
 *
 * @property Notices $notice
 * @property User $user
 */
class NoticeSettings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notice_settings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'notice_id', 'value'], 'required'],
            [['user_id', 'notice_id', 'value'], 'integer'],
            [['notice_id'], 'exist', 'skipOnError' => true, 'targetClass' => Notices::className(), 'targetAttribute' => ['notice_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'notice_id' => 'Notice ID',
            'value' => 'Value',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNotice()
    {
        return $this->hasOne(Notices::className(), ['id' => 'notice_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
