<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property int|null $rating
 * @property string|null $created_on
 */
class Articles extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'rating'], 'default', 'value' => null],
            [['title'], 'required'],
            [['title', 'description'], 'string'],
            [['rating'], 'default', 'value' => null],
            [['rating'], 'integer'],
            [['created_on'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'rating' => 'Rating',
            'created_on' => 'Created On',
        ];
    }

}
