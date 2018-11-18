<?php

/**
 * Holds one comment entry.
 */
class Comment {

    private $userName;
    private $comment;
    private $timestamp;
    private $deleted;

    public function __construct($userName, $comment) {
        $this->userName = $userName;
        $this->comment = $comment;
        $this->timestamp = time();
        $this->deleted = false;
    }

   
    public function getUserName() {
        return $this->userName;
    }

   
    public function getComment() {
        return $this->comment;
    }

  
    public function getTimestamp() {
        return $this->timestamp;
    }

  
    public function isDeleted() {
        return $this->deleted;
    }

  
    public function setDeleted($deleted) {
        $this->deleted = $deleted;
    }

}
