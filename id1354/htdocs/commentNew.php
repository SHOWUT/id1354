<?php
ini_set('display_errors', 1);
require_once 'comment.php';
session_start();
$fileComment = __DIR__ . '/userComment.txt';
if (!empty($_GET['comment']) ) {
    $commentEntry = new Comment($_SESSION['uName'], $_GET['comment']);
    file_put_contents($fileComment, serialize($commentEntry) . "#\n", FILE_APPEND);
}

if ($_GET['recipe'] == "meatballs") 
    { include 'rMeatballs.php'; } 
else 
    { include 'rPancakes.php'; } 


