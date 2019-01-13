<?php

namespace RS\Controller;

use RS\Integration\UserDAO;
use RS\Model\User;
use RS\Integration\CommentDAO;


/**
 * The applications controller, all calls to the model pass through here. 
 */
class Controller {

    private $userDAO;
    private $commentDAO;

    public function __construct() {
        $this->userDAO = new UserDAO();
        $this->commentDAO = new CommentDAO();
    }

    public function signupUser($uid, $mail, $pwd){
		$user = $this->userDAO->retrieveUser($uid);
		if($user == null){
			$this->userDAO->registerUser($uid, $mail, $pwd);
		}
    }
    
    public function verifyLogin($mailuid, $pwd) {
        $user = $this->userDAO->retrieveUser($mailuid);
		if($user != null){
			if($user->equals($mailuid, $pwd)){
				return true;
			}
		}
		return false;
    }

    public function addComment($rid, $uid, $message) {
        $this->commentDAO->addComment($rid, $uid, $message);
    }

    public function deleteComment($cid){
		$this->commentDAO->deleteComment($cid);
    }
    
    public function showComments($rid){
		$comments = $this->commentDAO->showComments($rid);
		return $comments;
	}
}