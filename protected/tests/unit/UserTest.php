<?php

class UserTest extends CDbTestCase{
    public $fixtures = array(
        'Users' => 'User',
        'User_Groups' => 'UserGroup',
    );
    
    public function testTesting(){
        $this->assertTrue(true);
    }
    
    public function testGetUser(){
        $user = User::model()->findByPk(1);
        $this->assertEquals('Jibril13', $user->Username);
    }
}