<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "answers".
 *
 * @property int $idAnsw
 * @property string $Answer
 * @property int|null $Marker
 * @property int $Task
 *
 * @property Blocktasks $task
 */
class Answers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'answers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Answer', 'Task'], 'required'],
            [['Marker', 'Task'], 'integer'],
            [['Answer'], 'string', 'max' => 255],
            [['Task'], 'exist', 'skipOnError' => true, 'targetClass' => Blocktasks::className(), 'targetAttribute' => ['Task' => 'idEntry']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idAnsw' => 'Id Answ',
            'Answer' => 'Answer',
            'Marker' => 'Marker',
            'Task' => 'Task',
        ];
    }

    /**
     * Gets query for [[Task]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTask()
    {
        return $this->hasOne(Blocktasks::className(), ['idEntry' => 'Task']);
    }
}
