<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "statustasks".
 *
 * @property int $idEntry
 * @property int $day
 * @property int $userr
 * @property int|null $Success
 *
 * @property Users $userr0
 */
class Statustasks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'statustasks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['day', 'userr'], 'required'],
            [['day', 'userr', 'Success'], 'integer'],
            [['userr'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['userr' => 'idUser']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idEntry' => 'Id Entry',
            'day' => 'Day',
            'userr' => 'Userr',
            'Success' => 'Success',
        ];
    }

    /**
     * Gets query for [[Userr0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserr0()
    {
        return $this->hasOne(Users::className(), ['idUser' => 'userr']);
    }
}
