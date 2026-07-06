<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "university".
 *
 * @property int $id
 * @property string $university_name
 * @property string $programme
 * @property string $location
 *
 * @property Interns[] $interns
 */
class University extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'university';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['university_name', 'programme', 'location'], 'required'],
            [['university_name', 'programme', 'location'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'university_name' => 'University Name',
            'programme' => 'Programme',
            'location' => 'Location',
        ];
    }

    /**
     * Gets query for [[Interns]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInterns()
    {
        return $this->hasMany(Interns::class, ['university_id' => 'id']);
    }

}
