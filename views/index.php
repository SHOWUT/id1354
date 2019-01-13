<?php
session_start();
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

        <div class="header">
                <h1>New recipe calendar</h1>
                </div>
  
                <div class="pictureCalendarPromo"></div>

    <div class="block">
        <p>Dear readers, if you dont know what to cook today check out our recipe calendar for ideas!</p>
    </div>
    <a class="buttonCalendar" href="ShowCalendar">Go to calendar</a>
</body>
</html>