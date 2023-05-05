<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "appointment".
 *
 * @property int $id
 * @property int $patient_id
 * @property string $doctor_id
 * @property string $app_date_time
 * @property string $app_duration
 * @property string $app_status
 * @property string|null $app_note
 *
 * @property PatientInfo $patient
 */
class Appointment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'appointment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_id', 'doctor_id', 'app_date_time', 'app_duration', 'app_status'], 'required'],
            [['patient_id'], 'integer'],
            [['app_date_time'], 'safe'],
            [['doctor_id', 'app_duration', 'app_status', 'app_note'], 'string', 'max' => 255],
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
            'doctor_id' => 'Doctor ID',
            'app_date_time' => 'App Date Time',
            'app_duration' => 'App Duration',
            'app_status' => 'App Status',
            'app_note' => 'App Note',
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
