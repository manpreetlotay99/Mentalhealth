<?php

use yii\db\Migration;

/**
 * Class m230503_052233_projectmigration
 */
class m230503_052233_projectmigration extends Migration
{
    /**
     * {@inheritdoc}
     */
   
    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
		
		$this->createTable('{{%patient_info}}', [
            'id' => $this->primaryKey(),
            'fname' => $this->string()->notNull(),
            'lname' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'gender' => $this->string(),
            'date_of_birth' => $this->date(),
            'city' => $this->string(),
            'state' => $this->string(),
            'profile_pic' => $this->string(),
        ], );
		
		$this->createIndex(
            '{{%idx-patient_id}}',
            '{{%patient_info}}',
            'id'
        );


        $this->createTable('{{%medical_record}}', [
            'id' => $this->primaryKey(),
			'patient_id'=> $this-> integer()->notNull(),
            'date' => $this->date()->notNull(),
            'past_illnesses' => $this->string(),
            'surgeries' => $this->string(),
            'hospitalisation' => $this->string(),
            'allergies' => $this->string(),
            'medications' => $this->string(),
            'immunizations' => $this->string(),
        ], $tableOptions);

         $this->createIndex(
            '{{%idx-medical_record-patient_id}}',
            '{{%medical_record}}',
            'patient_id'
        );
		
		 $this->addForeignKey(
            '{{%fk-medical_record-patient_id}}',
            '{{%medical_record}}',
            'patient_id',
            '{{%patient_info}}',
            'id',
            'CASCADE'
        );
		
        $this->createTable('{{%cms}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'url_key' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'meta_title' => $this->string(),
            'meta_description' => $this->string(),
            'meta_keyword' => $this->string(),
        ], );

        $this->createTable('{{%testimonial}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'date' => $this->string()->notNull(),
            'rating'=>$this->string()->notNull(),
        ], );

        $this->createTable('{{%wellness_resource}}', [
            'id' => $this->primaryKey(),
            'resource_type' => $this->string()->notNull(),
            'resource_title' => $this->string()->notNull(),
            'resource_image' => $this->string()->notNull(),
            'resource_category' => $this->string(),
        ], );

        $this->createTable('{{%appointment}}', [
            'id' => $this->primaryKey(),
			'patient_id'=> $this-> integer()->notNull(),
            'doctor_id' => $this->string()->notNull(),
            'app_date_time' => $this->dateTime()->notNull(),
            'app_duration' => $this->string()->notNull(),
            'app_status' => $this->string()->notNull(),
            'app_note' => $this->string(),
        ], );
		
		 $this->createIndex(
            '{{%idx-appointment-patient_id}}',
            '{{%appointment}}',
            'patient_id'
        );
		
		 $this->addForeignKey(
            '{{%fk-appointment-patient_id}}',
            '{{%appointment}}',
            'patient_id',
            '{{%patient_info}}',
            'id',
            'CASCADE'
        );

    }

    public function down()
    {
        //echo "m230503_052233_projectmigration cannot be reverted.\n";
        $this->dropTable('{{%medical_record}}');
        $this->dropTable('{{%patient_info}}');
        $this->dropTable('{{%cms}}');
        $this->dropTable('{{%testimonial}}');
        $this->dropTable('{{%wellness_resource}}');
        $this->dropTable('{{%appointment}}');
        //return false;
        echo "Successful";
    }
    

}
