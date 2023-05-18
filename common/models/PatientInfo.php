<?php

namespace common\models;
use yii\base\Model;
use yii\web\UploadedFile;
use Yii;

/**
 * This is the model class for table "patient_info".
 *
 * @property int $id
 * @property string $fname
 * @property string $lname
 * @property string $email
 * @property string $phone
 * @property string|null $gender
 * @property string|null $date_of_birth
 * @property string|null $city
 * @property string|null $state
 * @property string|null $profile_pic
 *
 * @property Appointment[] $appointments
 * @property MedicalRecord[] $medicalRecords
 */
class PatientInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'patient_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fname', 'lname', 'email', 'phone'], 'required'],
            [['date_of_birth'], 'safe'],
            [['fname', 'lname', 'email', 'phone', 'gender', 'city', 'state', 'profile_pic'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fname' => 'First Name',
            'lname' => 'Lname',
            'email' => 'Email',
            'phone' => 'Phone',
            'gender' => 'Gender',
            'date_of_birth' => 'Date Of Birth',
            'city' => 'City',
            'state' => 'State',
            'profile_pic' => 'Profile Pic',
        ];
    }

    /**
     * Gets query for [[Appointments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAppointments()
    {
        return $this->hasMany(Appointment::class, ['patient_id' => 'id']);
    }

    /**
     * Gets query for [[MedicalRecords]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMedicalRecords()
    {
        return $this->hasMany(MedicalRecord::class, ['patient_id' => 'id']);
    }
}
