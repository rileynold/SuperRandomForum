<?php

/**
 * This is the model class for table "Posts".
 *
 * The followings are the available columns in table 'Posts':
 * @property integer $PostID
 * @property string $Subject
 * @property string $Content
 * @property string $DateCreated
 * @property integer $CreatorID
 * @property integer $ForumID
 */
class Post extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Post the static model class
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
		return 'Posts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Subject, Content, DateCreated, CreatorID, ForumID', 'required'),
			array('CreatorID, ForumID', 'numerical', 'integerOnly'=>true),
			array('Subject', 'length', 'max'=>128),
			array('Content', 'length', 'max'=>3000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PostID, Subject, Content, DateCreated, CreatorID, ForumID', 'safe', 'on'=>'search'),
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
			'PostID' => 'Post',
			'Subject' => 'Subject',
			'Content' => 'Content',
			'DateCreated' => 'Date Created',
			'CreatorID' => 'Creator',
			'ForumID' => 'Forum',
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

		$criteria->compare('PostID',$this->PostID);
		$criteria->compare('Subject',$this->Subject,true);
		$criteria->compare('Content',$this->Content,true);
		$criteria->compare('DateCreated',$this->DateCreated,true);
		$criteria->compare('CreatorID',$this->CreatorID);
		$criteria->compare('ForumID',$this->ForumID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}