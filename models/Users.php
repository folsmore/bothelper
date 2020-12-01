<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $idUser
 * @property string $phone
 * @property string|null $name
 * @property string|null $lastName
 *
 * @property Statustasks[] $statustasks
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone'], 'required'],
            [['phone'], 'string', 'max' => 16],
            [['name', 'lastName'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idUser' => 'Id User',
            'phone' => 'Phone',
            'name' => 'Name',
            'lastName' => 'Last Name',
        ];
    }

    /**
     * Gets query for [[Statustasks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatustasks()
    {
        return $this->hasMany(Statustasks::className(), ['userr' => 'idUser']);
    }
}
