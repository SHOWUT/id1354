<?php   

$enteredUsername = $_GET['uName'];
$enteredPassword = $_GET['pass'];
$fileUser = file("userDB.txt");

foreach($fileUser as $user) {
$info_section = explode('_'  , $user);
if($info_section[0] == $enteredUsername && $info_section[1] == $enteredPassword) {
    session_start();
    $_SESSION['uName'] = $enteredUsername;
    $_SESSION['pass'] = $enteredPassword;
}
}
    include 'index.php';

if ($_SESSION['uName'] !== $enteredUsername) {
    include 'index.php?error=noSuchUser';
}
  

