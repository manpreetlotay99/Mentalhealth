<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "wellness_resource".
 *
 * @property int $id
 * @property string $resource_type
 * @property string $resource_title
 * @property string $resource_image
 * @property string|null $resource_category
 */
class WellnessResource extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wellness_resource';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['resource_type', 'resource_title', 'resource_image'], 'required'],
            [['resource_type', 'resource_title', 'resource_image', 'resource_category'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'resource_type' => 'Resource Type',
            'resource_title' => 'Resource Title',
            'resource_image' => 'Resource Image',
            'resource_category' => 'Resource Category',
        ];
    }
}
