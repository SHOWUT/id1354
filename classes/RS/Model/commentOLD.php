
<?php
session_start();
include 'resources/includes/dbh.inc.php';


    if (isset($_POST['comment-submit']) && isset($_POST['addcom']) ) {
        
        $uid= $_POST['uid'];
        $message= $_POST['message'];
        $rid= $_POST['rid'];
        
        $sql= "INSERT INTO comments ( rid, uid, message ) VALUES ('".$rid."', '".$uid."', '".$message."')";
        $result= mysqli_query($conn, $sql);

    }
     
    function showComments($conn,$ridp) {      
        $sql= "SELECT * FROM comments WHERE rid='$ridp'"; 
        $result= mysqli_query($conn, $sql);
        while ( $row= $result->fetch_assoc() ) {
            echo "<div class='comment-box'><p>";
            echo $row['uid']."<br></p>";
            echo nl2br($row['message']);
            echo "</div>";

            if ($_SESSION['userUid'] == $row['uid']) {
                echo "<form class='delete-form' method='POST' action'".deleteComments($conn)."'>
                <input type='hidden' name='cid' value='".$row['cid']."'>
                <button type='submit' name='comment-delete'>Delete</button>
                </form>";
            }
          
        }
        exit(); 
    }

    function deleteComments($conn) {
        if (isset($_POST['comment-delete']) ) {
            $cid= $_POST['cid'];

            $sql= "DELETE FROM comments WHERE cid= '$cid'";
            $result= $conn->query($sql);
            echo "<meta http-equiv='refresh' content='0'>";
        }
    }

    if ($rid == '1') {
        header("Location: rMeatballs.php");
        exit();  
    }
    elseif ($rid == '2') {
        header("Location: rPancakes.php");
        exit();  
    }
    



