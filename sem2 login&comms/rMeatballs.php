<?php
session_start();
include 'resources/includes/dbh.inc.php';
#ini_set('display_errors',1); #for error check
require_once('comment.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Meatballs - Tasty Recipes</title>
    <link rel="stylesheet" href="resources/css/reset.css">
    <link rel="stylesheet" href="resources/css/styleGeneral.css">
    <link rel="stylesheet" href="resources/css/styleRecipe.css">
</head>
<body>
        <div id="banner">
            <?php include 'resources/fragments/header.php' ?>
        </div>   

        <nav id="navbar">
            <?php include 'resources/fragments/nav.php' ?>
        </nav>

    <div class="header">
    <h1>Meatballs</h1>
    </div>

    <div class="pictureMeatballs"></div>

    <section class="block">
        <h3>INGREDIENTS</h3>
        <ul>
            <li>500 g ground beef</li>
            <li>1 dl breadcrumbs</li>
            <li>1 dl milk</li>
            <li>1 small yellow onion</li>
            <li>1 egg</li>
            <li>1 tsp salt</li>
            <li>1 tsp black pepper</li>
            <li>1 tsp soya</li>
            <li>50 g butter</li>
        </ul>
    </section>

    <section class="block"> 
        <h3>INSTRUCTIONS</h3>
        <ol>
            <li>Mix breadcrumbs with milk, let it cool for 10 min.</li>
            <li>Mix ground beef,black pepper and salt. Throw in all the other remainding ingredients(except butter) and mix well.</li>
            <li>Damp hands then start making meatballs.</li>
            <li>Put butter in the pan and start frying the meatballs.</li>
            <li>Enjoy.</li>
        </ol>
    </section>

    <div class="comments">
        <h3>COMMENTS</h3>
        <ul>
            <?php
            if( isset($_SESSION['userId']) ) {
            ?>
                <div class='comment-form'>
                <form action=comment.php  method="POST">
                <input type='hidden' name='rid' value='1'/>
                <input type='hidden' name='uid' value='<?php echo $_SESSION['userUid']; ?>'>
                <input type='hidden' name='addcom' value='add'/>
                <textarea name='message' placeholder='Type your comment in this box, then press the green button when done!'></textarea>
                <button type='submit' name='comment-submit'>Comment</button>
                </form>
                </div>
            <?php     
            }
        
            $ridp= '1';
            showComments($conn,$ridp);
                
            ?>

        </ul>

    </div>
</body>
</html>