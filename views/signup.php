<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>TASTY RECIPES</title>
    <link rel="stylesheet" type="text/css" href="../../resources/css/reset.css">
    <link rel="stylesheet" type="text/css" href="../../resources/css/styleGeneral.css">
</head>

<body>
        <div id="banner">
            <?php include 'resources/fragments/header.php' ?>
        </div>   

        <nav id="navbar">
            <?php include 'resources/fragments/nav.php' ?>
        </nav>

        <main>
             <div class="header">
             <h1>Signup</h1>
            </div>
            <?php
                if (isset($_GET['error']) ) {
                    if ($_GET['error'] == "emptyfields") {
                        echo '<p class="signup-error">NOTE: Fill in all fields</p>';
                    }
                    elseif ($_GET['error'] == "invalidmailnuid") {
                        echo '<p class="signup-error">NOTE: Invalid username and e-mail</p>';
                    }
                    elseif ($_GET['error'] == "invalidmail") {
                        echo '<p class="signup-error">NOTE: Invalid e-mail</p>';
                    }
                    elseif ($_GET['error'] == "passwordcheck") {
                        echo '<p class="signup-error">NOTE: Password does not match</p>';
                    }
                    elseif ($_GET['error'] == "passwordcheck") {
                        echo '<p class="signup-error">NOTE: Password does not match</p>';
                    }
                    elseif ($_GET['error'] == "usertaken") {
                        echo '<p class="signup-error">NOTE: Username is taken</p>';
                    }
                }
                elseif ($_GET['signup'] == "success") {
                    echo '<p class="signup-success">Signup was successful</p>';
                }
            ?>
            <div class="signup-form">
            <form action="SignupUser" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdRepeat" placeholder="Repeat password">
            <button type="submit" name="signupSubmit">Signup</button>
            </form>
            </div>
        </main>


</body>