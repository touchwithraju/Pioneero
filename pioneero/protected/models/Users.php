<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $zip
 * @property string $email
 * @property string $password
 * @property string $status
 * @property string $mail_check
 * @property string $ip_address
 * @property string $date_added
 * @property string $email_check_date
 * @property string $last_modified
 *
 * The followings are the available model relations:
 * @property UsersInterests[] $usersInterests
 */
class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, last_name, zip, email, password, ip_address', 'length', 'max'=>255),
			array('status, mail_check', 'length', 'max'=>1),
			array('date_added, email_check_date, last_modified', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, first_name, last_name, zip, email, password, status, mail_check, ip_address, date_added, email_check_date, last_modified', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'usersInterests' => array(self::HAS_MANY, 'UsersInterests', 'users_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'zip' => 'Zip',
			'email' => 'Email',
			'password' => 'Password',
			'status' => 'Status',
			'mail_check' => 'Mail Check',
			'ip_address' => 'Ip Address',
			'date_added' => 'Date Added',
			'email_check_date' => 'Email Check Date',
			'last_modified' => 'Last Modified',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('mail_check',$this->mail_check,true);
		$criteria->compare('ip_address',$this->ip_address,true);
		$criteria->compare('date_added',$this->date_added,true);
		$criteria->compare('email_check_date',$this->email_check_date,true);
		$criteria->compare('last_modified',$this->last_modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        function auth($email,$password)
        {
                 $user = Yii::app()->db->createCommand()
                    ->select('*')
                    ->from('users u')
                    ->where('email=:email and password=:password', array(':email'=>$email,':password'=>$password))
                    ->queryRow();
                 return $user;
        }
        function forgot($email)
        {
                 $user = Yii::app()->db->createCommand()
                    ->select('*')
                    ->from('users u')
                    ->where('email=:email', array(':email'=>$email))
                    ->queryRow();
                 return $user;
        }
        
}