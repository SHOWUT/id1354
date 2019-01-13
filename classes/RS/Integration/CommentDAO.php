<?php

namespace RS\Integration;
include __DIR__ . '/../Model/Comment.php';
use RS\Model\Comment;

class CommentDAO{

    private $connection;


	/**
     * Connects to the database and empties it.
     * 
     * @throws \mysqli_sql_exception If unable to connect to the database or to empty it. 
     */
    public function __construct() {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		$this->connection = new \mysqli('localhost', 'root', '', 'loginsystem');
		$this->connection->set_charset("utf8");
    }	

    public function addComment($rid, $uid, $message){
		$sql = $this->connection->prepare("INSERT INTO comments ( rid, uid, message ) VALUES (?, ?, ?)");
		$sql->bind_param("sss", $rid, $uid, $message);
		$sql->execute();
    }

    public function deleteComment($cid){
		$sql = $this->connection->prepare("DELETE FROM comments WHERE cid=?");
		$sql->bind_param("i", $cid);
		$sql->execute();
    }
    
    public function showComments($rid){
		$sql = $this->connection->prepare("SELECT * FROM comments WHERE rid=?");
		$sql->bind_param("s", $rid);
		$sql->execute();
		
		$result = $sql->get_result();
		$comments = array();
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				$comments[] = new Comment($row['cid'], $row['rid'], $row['uid'], $row['message']);
			}
		}
		return $comments;
	}
    
    public function __destruct() {
        $this->connection->close();
    }

}
