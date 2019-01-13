<?php
namespace RS\Model;

class User{
  var $uid;
  var $mail;
  var $pwd;
  
	function __construct($uid, $mail,$pwd) {
        $this->username = $uid;
        $this->mail = $mail;
		$this->password = $pwd;
	}
  
	public function setUsername($uid){
		$this->username = $uid;
    }
    
    public function setMail($mail){
		$this->mail = $mail;
	}
	
	public function setPassword($pwd){
		$this->password = $pwd;
    }
    
	public function getUsername() {
		return $this->username;
    }
    
    public function getMail(){
		return $this->mail;
	}

	public function getPassword() {
		return $this->password;
	}
	
	//Checks and compares this user with the  parametres uid and pwd.
	public function equals($uid, $pwd){
		if($this->getUsername() === $uid and password_verify($pwd, $this->getPassword())) {
			return true;
		}
		return false;
	}
}
?>