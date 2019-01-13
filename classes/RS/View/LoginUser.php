<?php
namespace RS\View;
use Id1354fw\View\AbstractRequestHandler;
use \RS\Controller\Controller;
/**
* 
*/
class LoginUser extends AbstractRequestHandler{
	private $mailuid;
    private $pwd;
    private $loginSubmit;
	
	public function setReferrer($referrer){
		$this->referrer = $referrer;
	}
	
	public function setMailuid($mailuid){
		$this->username = htmlentities($mailuid, ENT_QUOTES);
	}
	
	public function setPwd($pwd){
		$this->password = htmlentities($pwd, ENT_QUOTES);
    }
    
    public function setLoginSubmit($loginSubmit){
		$this->loginSubmit = $loginSubmit;
    }
	
	protected function doExecute(){		
		$controller = new Controller();
		
		if($controller->verifyLogin($this->username, $this->password)){
            $this->session->set('uid', $this->username);
		}
		
		$referrer = basename($_SERVER['HTTP_REFERER'],".php");		
		header("Location: " . $referrer);
	}
}
?>