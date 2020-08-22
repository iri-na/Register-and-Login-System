<?php
require_once 'core/init.php';

//$user = DB::getInstance()->get('users', array('username', '=', 'irina'));
//$user = DB::getInstance()->query("SELECT * FROM users");

//if (!$user->count()) {
//    echo 'No user';
//} else {
//    foreach($user->results() as $user) {
//        print_r($user);
////        echo $user->username, '<br>';
//    }
//}

//$user = DB::getInstance()->insert('users', array(
//    'id' => '9',
//    'username' => 'hong',
//    'password' => 'password',
//    'salt' => '',
//    'name' => '',
//    'joined' => '2020-08-20 12:21:52',
//    'group' => '1'
//));

$user = DB::getInstance()->update('users', '3', array(
    'password' => 'hi!!'
));