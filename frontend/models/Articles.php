<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "artciles".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $created_at
 * @property string $photo
 *
 * @property Comments[] $comments
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'artciles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['content'], 'string'],
            [['created_at'], 'safe'],
            [['title'], 'string', 'max' => 255],
            [['photo'], 'string', 'max' => 120],
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
            'content' => 'Content',
            'created_at' => 'Created At',
            'photo' => 'Photo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['article_id' => 'id']);
    }
}
