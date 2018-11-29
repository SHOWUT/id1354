<?php
/**
 * Delete specified comment by considering the timestamp set and the username.  
 */
require_once 'comment.php';
session_start();

if (!empty($_GET['timestamp'])) {
    $fileComment = __DIR__ . '/userComment.txt';
    $commentEntries = explode("#\n", file_get_contents($fileComment));
    for ($i = count($commentEntries) - 1; $i >=0; $i--) {
        $commentEntry = unserialize($commentEntries[$i]);
        if ($commentEntry instanceof comment && $commentEntry -> getTimestamp() == $_GET['timestamp']) {
            $commentEntry-> setDeleted(true);
            $commentEntries[$i] = serialize($commentEntry);
            break;
        }
    }
    file_put_contents($fileComment, implode("#\n", $commentEntries));
}

if ($_GET['recipe'] == "meatballs") 
    { include 'rMeatballs.php'; } 
else 
    { include 'rPancakes.php'; } 