<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cms".
 *
 * @property int $id
 * @property string $title
 * @property string $url_key
 * @property string $description
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property string|null $meta_keyword
 */
class Cms extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cms';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'url_key', 'description'], 'required'],
            [['title', 'url_key', 'description', 'meta_title', 'meta_description', 'meta_keyword'], 'string', 'max' => 255],
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
            'url_key' => 'Url Key',
            'description' => 'Description',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
            'meta_keyword' => 'Meta Keyword',
        ];
    }
}
