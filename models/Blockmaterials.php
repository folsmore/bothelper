<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blockmaterials".
 *
 * @property int $idEntry
 * @property int $numberBlock
 * @property string $Content
 *
 * @property Blocktasks[] $blocktasks
 * @property Days[] $days
 */
class Blockmaterials extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blockmaterials';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['numberBlock', 'Content'], 'required'],
            [['numberBlock'], 'integer'],
            [['Content'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idEntry' => 'Id Entry',
            'numberBlock' => 'Number Block',
            'Content' => 'Content',
        ];
    }

    /**
     * Gets query for [[Blocktasks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBlocktasks()
    {
        return $this->hasMany(Blocktasks::className(), ['numberBlock' => 'numberBlock']);
    }

    /**
     * Gets query for [[Days]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDays()
    {
        return $this->hasMany(Days::className(), ['numberBlock' => 'numberBlock']);
    }
}
