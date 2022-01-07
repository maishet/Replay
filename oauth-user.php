<?php

// By Ingenious Gurus:  https://ingeniousgurus.com


class OauthUser {
    public $host          = "localhost";
    public $username      = "root";
    public $password      = "1234";
    public $database_name = "database_to_import";
    public $table         = 'users';
	public $db;
    
    function __construct(){
		// Connect to the MySQL database
		$this->db = new mysqli($this->host, $this->username, $this->password, $this->database_name);
		if($this->db->connect_error){
			die("Failed to connect with MySQL database: " . $this->db->connect_error);
			
		}
    }
	
	function verifyUser($userInfo) {

	
		
		$qry_body = "	`oauth_provider` = 'facebook',
							`oauth_id`		 = '".$userInfo['id']."',
							`name`           = '".$userInfo['name']."',
							`first_name`     = '".$userInfo['first_name']."', 
							`last_name`      = '".$userInfo['last_name']."', 
							`email`          = '".$userInfo['email']."', 
							`picture`        = '".$userInfo['picture']['url']."'";

						//exit();

		
		$select_qry = "select * from `users` where `oauth_provider`='facebook' and `oauth_id`= '".$userInfo['id']."'";
		$res = $this->db->query($select_qry);
		if($res->num_rows > 0) {
			//Update user details if it is already exists in the table
            $qry = "update ".$this->table." set ".$qry_body." WHERE `oauth_provider` = 'facebook' AND `oauth_id` = '".$userInfo['id']."'";
		} else {
			//Insert into table if user not exists in the table
            $qry = "insert into ".$this->table." set ".$qry_body.", `created_at`='".date("Y-m-d H:i:s")."'";		
		}

		$this->db->query($qry);
		$_SESSION['user_is_login']     = true;
		$_SESSION['user_id']      = $userInfo['id'];
		$_SESSION['user_name']    = $userInfo['name'];
		$_SESSION['user_fname']   = $userInfo['first_name'];
		$_SESSION['user_lname']   = $userInfo['last_name'];
		$_SESSION['user_email']   = $userInfo['email'];
		$_SESSION['user_picture'] = $userInfo['picture']['url'];
		header('location:home.php'); //esto se cambia para direccionar
		//$qry = "insert into ".$this->table."(oauth_id, name, first_name, last_name, email) values ('".$userInfo['id']."', '".$userInfo['name']."', '".$userInfo['first_name']."', '".$userInfo['last_name']."', '".$userInfo['email']."')";

		exit();

	}
	
}
?>