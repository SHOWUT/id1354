<?php
?><?php
namespace RS\Integration;
include __DIR__ . '/../Model/User.php';
use RS\Model\User;
/**
 * Handles all SQL calls to the tasty recipes database.
 */
class UserDAO{
	
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
	
	public function retrieveUser($uid){
		$sql = $this->connection->prepare("SELECT uidUsers, pwdUsers FROM users WHERE uidUsers=?");
		$sql->bind_param("s", $uid);
		$sql->execute();
		
		$result = $sql->get_result();
		if ($result->num_rows == 0){ // User doesn't exist
			return null;
		}else{
			$user = $result->fetch_assoc();
			$userObj = new User($user['uidUsers'], $user['emailUsers'], $user['pwdUsers']);
			return $userObj;
		}
	}
	
	public function registerUser($uid, $mail, $pwd){	
		$sql = $this->connection->prepare("INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?,?,?)");
		$sql->bind_param("sss", $uid, $mail, password_hash($pwd, PASSWORD_DEFAULT));
		$sql->execute();
	}
	
	/**
     * Closes the connection to the <code>persons</code> database.
     */
    public function __destruct() {
        $this->connection->close();
    }
}
?>