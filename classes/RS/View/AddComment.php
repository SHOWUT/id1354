<?php
namespace RS\View;
use Id1354fw\View\AbstractRequestHandler;
use RS\Integration\CommentDAO;
use \RS\Controller\Controller;

class AddComment extends AbstractRequestHandler{
    private $rid;
    private $uid;
    private $message;
    private $commentSubmit;
    
    public function setRid($rid){
		$this->rid = $rid;
    }
    
    public function setUid($uid){
		$this->uid = $uid;
    }
    
	public function setMessage($message){
		$this->message = htmlentities($message, ENT_QUOTES);
    }
    
    public function setCommentSubmit($commentSubmit){
		$this->commentSubmit = $commentSubmit;
	}
	
	protected function doExecute(){		
		$controller = new Controller();
		$controller->addComment($this->rid, $this->uid, $this->message);
		
		$referrer = basename($_SERVER['HTTP_REFERER'],".php");		
		header("Location: " . $referrer . "#comment-form");
	}
}
?>