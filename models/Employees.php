<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employees".
 *
 * @property int $id
 * @property string $name
 * @property string $designation
 * @property int $contact
 * @property string $email
 */
class Employees extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'designation', 'contact', 'email'], 'required'],
            [['contact'], 'integer'],
            [['name', 'email'], 'string', 'max' => 50],
            [['designation'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'designation' => 'Designation',
            'contact' => 'Contact',
            'email' => 'Email',
        ];
    }
}
