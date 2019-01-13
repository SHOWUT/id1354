<?php
namespace RS\View;
use Id1354fw\View\AbstractRequestHandler;
use RS\Integration\userDAO;
use \RS\Controller\Controller;

class SignupUser extends AbstractRequestHandler{
    private $uid;
    private $mail;
    private $pwd;
    private $pwdRepeat;
    private $signupSubmit;
	
	public function setUid($uid){
		$this->username = htmlentities($uid, ENT_QUOTES);
    }
    
    public function setMail($mail){
		$this->mail = htmlentities($mail, ENT_QUOTES);
	}
	
	public function setPwd($pwd){
		$this->password = htmlentities($pwd, ENT_QUOTES);
	}
	
	public function setPwdRepeat($pwdRepeat){
		$this->password = htmlentities($pwdRepeat, ENT_QUOTES);
    }
    
    public function setSignupSubmit($signupSubmit){
		$this->signupSubmit = $signupSubmit;
    }
	
	protected function doExecute(){		
		if(isset($_POST['uid']) and isset($_POST['mail']) and isset($_POST['pwd']) and isset($_POST['pwdRepeat'])){
			if($_POST['pwd'] === $_POST['pwdRepeat']){
				$controller = new Controller();
				$controller->signupUser($_POST['uid'], $_POST['mail'], $_POST['pwd']);
			}
		}
		
		header("Location: Index");
	}
}
?>