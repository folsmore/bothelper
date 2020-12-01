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
}
