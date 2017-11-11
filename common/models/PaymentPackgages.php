<?php

namespace common\models;


/**
 * This is the model class for table "payment_packgages".
 *
 * @property integer $id
 * @property string $name
 * @property string $photo
 * @property string $description
 * @property double $price
 *
 * @property PaymentLog[] $paymentLogs
 */
class PaymentPackgages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'payment_packgages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'price'], 'required'],
            [['description'], 'string'],
            [['price'], 'number'],
            [['name','photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'description' => 'Описание',
            'price' => 'цена',
            'photo' => 'Картинка',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaymentLogs()
    {
        return $this->hasMany(PaymentLog::className(), ['payment_id' => 'id']);
    }
}
