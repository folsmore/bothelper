<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blocktasks".
 *
 * @property int $idEntry
 * @property int $numberBlock
 * @property string $Task
 *
 * @property Answers[] $answers
 * @property Blockmaterials $numberBlock0
 */
class Blocktasks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blocktasks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['numberBlock', 'Task'], 'required'],
            [['numberBlock'], 'integer'],
            [['Task'], 'string', 'max' => 255],
            [['numberBlock'], 'exist', 'skipOnError' => true, 'targetClass' => Blockmaterials::className(), 'targetAttribute' => ['numberBlock' => 'numberBlock']],
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
            'Task' => 'Task',
        ];
    }

    /**
     * Gets query for [[Answers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnswers()
    {
        return $this->hasMany(Answers::className(), ['Task' => 'idEntry']);
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
