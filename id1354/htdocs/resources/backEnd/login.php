<?php   
//$fileUser = __DIR__ . 'userDB.txt';
$enteredUsername = $_GET['uName'];
$enteredPassword = $_GET['pass'];
//$fileUser = fopen('userDB.txt','r');
$fileUser = file("userDB.txt");

foreach($fileUser as $user) {
$info_section = explode('_'  , $user);
if($info_section[0] == $enteredUsername && $info_section[1] == $enteredPassword) {
    session_start();
    $_SESSION['uName'] = $enteredUsername;
    $_SESSION['pass'] = $enteredPassword;
    //echo "nice";
}
}
/*
    echo "Invalid username or password!";
    echo $info_section[0];
    echo $info_section[1];
    */
    include 'index.php';
    // header("Location: ../../index.php");
/*
if( ($enteredUsername == fgets($fileUser)) && ($enteredPassword == fgets($fileUser) ){
    session_start();
    $_SESSION['uName'] = $_GET['uName'];
    $_SESSION['pass'] = $_GET['pass'];
    include '../index.php';
}
else{
    echo "Invalid username or password!";
}

fclose($fileUser);
*/
/*
$readin = file('userDB.txt');
foreach($readin as $fname){
    echo $fname . ',';
}


if entered username or entered password does not equal the ones in the txt file
then send them back to the same page they came from 
exit(); this file. 

so when the user is logged in, mby have some variable that becomes true. THen when u want to comment u check if that
variable is true. 
*/ 