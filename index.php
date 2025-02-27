<?php
require_once 'core/init.php';

if(Session::exists('home')) {
    echo '<p>' . Session::flash('home') . '</p>';
}

$user = new User(); //current user
if($user->isLoggedIn()) {
    ?>
    <p>Hello <a href="profile.php?user=<?php echo escape($user->data()->username); ?>"><?php echo escape($user->data()->username); ?></a>!</p>

    <ul>
        <li><a href="logout.php">Log Out</a></li>
        <li><a href="update.php">Update Profile</a></li>
        <li><a href="changepassword.php">Change Password</a></li>
    </ul>
<?php
    if($user->hasPermission('admin')) {
        echo '<p>You are an administrator.</p>';
    }
} else {
    echo '<p>You must <a href="login.php">log in</a> or <a href="register.php">register</a>.</p>';
}