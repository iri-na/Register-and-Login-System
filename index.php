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
//    'username' => 'jenna',
//    'password' => 'password',
//    'salt' => '',
//    'name' => '',
//    'joined' => '2020-08-20 12:21:52',
//    'group' => '1'
//));

//$user = DB::getInstance()->update('users', '3', array(
//    'password' => 'hi!!'
//));

if(Session::exists('home')) {
    echo '<p>' . Session::flash('home') . '</p>';
}

$user = new User(); //current user
if($user->isLoggedIn()) {
    ?>
    <p>Hello <a href="#"><?php echo escape($user->data()->username); ?></a>!</p>

    <ul>
        <li><a href="logout.php">Log Out</a></li>
    </ul>
<?php
} else {
    echo '<p>You must <a href="login.php">log in</a> or <a href="register.php">register</a>.</p>';
}