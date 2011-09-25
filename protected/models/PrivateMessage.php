<?php

/**
 * This is the model class for table "Private_Messages".
 *
 * The followings are the available columns in table 'Private_Messages':
 * @property integer $MessageID
 * @property integer $SenderID
 * @property integer $ReceiverID
 * @property string $Subject
 * @property string $Content
 * @property string $DateSent
 */
class PrivateMessage extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return PrivateMessage the static model class
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
		return 'Private_Messages';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SenderID, ReceiverID, Subject, Content, DateSent', 'required'),
			array('SenderID, ReceiverID', 'numerical', 'integerOnly'=>true),
			array('Subject', 'length', 'max'=>128),
			array('Content', 'length', 'max'=>2000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('MessageID, SenderID, ReceiverID, Subject, Content, DateSent', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'MessageID' => 'Message',
			'SenderID' => 'Sender',
			'ReceiverID' => 'Receiver',
			'Subject' => 'Subject',
			'Content' => 'Content',
			'DateSent' => 'Date Sent',
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

		$criteria->compare('MessageID',$this->MessageID);
		$criteria->compare('SenderID',$this->SenderID);
		$criteria->compare('ReceiverID',$this->ReceiverID);
		$criteria->compare('Subject',$this->Subject,true);
		$criteria->compare('Content',$this->Content,true);
		$criteria->compare('DateSent',$this->DateSent,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}