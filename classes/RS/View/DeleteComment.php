<?php
namespace RS\View;
use Id1354fw\View\AbstractRequestHandler;
use RS\Integration\CommentDAO;
use \RS\Controller\Controller;

class DeleteComment extends AbstractRequestHandler{
	private $cid;
	
	public function setCid($cid){
		$this->cid = $cid;
	}
	
	protected function doExecute(){		

		$controller = new Controller();
		$controller->deleteComment($this->cid);
		
		$referrer = basename($_SERVER['HTTP_REFERER'],".php");		
		header("Location: " . $referrer . "#comment-form");
	}
}
?>