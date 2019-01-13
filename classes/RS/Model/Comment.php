<?php
namespace RS\Model;

class Comment{
  var $uid;
  var $message;
 
  
	function __construct($cid, $rid, $uid, $message) {

		$this->cid = $cid;
		$this->rid = $rid;
		$this->uid = $uid;
		$this->message = $message;
	}
  
	public function setUid($uid){
		$this->uid = $uid;
	}

	public function getCid() {
		return $this->cid;
	}

	public function getRid() {
		return $this->rid;
	}

	public function getUid() {
		return $this->uid;
	}

	public function getMessage() {
		return $this->message;
	}
	
}
?>