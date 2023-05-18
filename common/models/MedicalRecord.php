<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "medical_record".
 *
 * @property int $id
 * @property int $patient_id
 * @property string $date
 * @property string|null $past_illnesses
 * @property string|null $surgeries
 * @property string|null $hospitalisation
 * @property string|null $allergies
 * @property string|null $medications
 * @property string|null $immunizations
 *
 * @property PatientInfo $patient
 */
class MedicalRecord extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'medical_record';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_id', 'date'], 'required'],
            [['patient_id'], 'integer'],
            [['date'], 'safe'],
            [['past_illnesses', 'surgeries', 'hospitalisation', 'allergies', 'medications', 'immunizations'], 'string', 'max' => 255],
            [['patient_id'], 'exist', 'skipOnError' => true, 'targetClass' => PatientInfo::class, 'targetAttribute' => ['patient_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'patient_id' => 'Patient ID',
            'date' => 'Date',
            'past_illnesses' => 'Past Illnesses',
            'surgeries' => 'Surgeries',
            'hospitalisation' => 'Hospitalisation',
            'allergies' => 'Allergies',
            'medications' => 'Medications',
            'immunizations' => 'Immunizations',
        ];
    }

    /**
     * Gets query for [[Patient]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatient()
    {
        return $this->hasOne(PatientInfo::class, ['id' => 'patient_id']);
    }
}
