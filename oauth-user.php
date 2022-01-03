<?php

// By Ingenious Gurus:  https://ingeniousgurus.com


class OauthUser {
    private $host          = "localhost";
    private $username      = "root";
    private $password      = "1234";
    private $database_name = "replay";
    private $table         = 'usuarios';
	private $db;
    
    function __construct(){
		// Connect to the MySQL database
		$this->db = new mysqli($this->host, $this->username, $this->password, $this->database_name);
		if($this->db->connect_error){
			die("Failed to connect with MySQL database: " . $this->db->connect_error);
			
		}
    }
	
	function verifyUser($userInfo) {
		//`picture`        = '".$userInfo['picture']['url']."'";
		$qry_body = "	`oauth_provider` = 'facebook',
							`idlogin`		 = '".$userInfo['id']."',
							`nombre`           = '".$userInfo['first_name']."',
							`apellido`     = '".$userInfo['last_name']."',
							`correo`          = '".$userInfo['email']."'"; 
							

						//exit();

		
		$select_qry = "select * from `usuarios` where `oauth_provider`='facebook' and `oauth_id`= '".$userInfo['id']."'";
		$res = $this->db->query($select_qry);
		if($res->num_rows > 0) {
			//Update user details if it is already exists in the table
            $qry = "update ".$this->table." set ".$qry_body." WHERE `oauth_provider` = 'facebook' AND `oauth_id` = '".$userInfo['id']."'";
		} else {
			//Insert into table if user not exists in the table
            $qry = "insert into ".$this->table." set ".$qry_body."";		
		}

		$this->db->query($qry);
		$_SESSION['user_is_login']     = true;
		$_SESSION['user_id']      = $userInfo['id'];
		$_SESSION['user_name']    = $userInfo['name'];
		$_SESSION['user_fname']   = $userInfo['first_name'];
		$_SESSION['user_lname']   = $userInfo['last_name'];
		$_SESSION['user_email']   = $userInfo['email'];
		$_SESSION['user_picture'] = $userInfo['picture']['url'];
		header('location:welcome.php');
		print_r("sdasdadasdasdasdasssssssssssaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa");
		

		exit();
	}
	
}
?>