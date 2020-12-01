<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "days".
 *
 * @property int $idDay
 * @property int $day
 * @property int $numberBlock
 *
 * @property Blockmaterials $numberBlock0
 */
class Days extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'days';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['day', 'numberBlock'], 'required'],
            [['day', 'numberBlock'], 'integer'],
            [['numberBlock'], 'exist', 'skipOnError' => true, 'targetClass' => Blockmaterials::className(), 'targetAttribute' => ['numberBlock' => 'numberBlock']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idDay' => 'Id Day',
            'day' => 'Day',
            'numberBlock' => 'Number Block',
        ];
    }

    /**
     * Gets query for [[NumberBlock0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNumberBlock0()
    {
        return $this->hasOne(Blockmaterials::className(), ['numberBlock' => 'numberBlock']);
    }
}
