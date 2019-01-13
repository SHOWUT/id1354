<?php
namespace RS\View;
use Id1354fw\View\AbstractRequestHandler;
/**
* 
*/
class LogoutUser extends AbstractRequestHandler{

    private $logout;

    public function setLogout($logout){
		$this->logout = $logout;
    }
	protected function doExecute(){
		$this->session->invalidate();
		$this->session->restart();
		
		$referrer = basename($_SERVER['HTTP_REFERER'],".php");	
		header("Location: " . $referrer);
	}
}
?>