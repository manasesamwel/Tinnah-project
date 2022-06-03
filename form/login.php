<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit(); 
	}else{
		// hashing the password
        // $pass = md5($pass);
        
		$sql = mysqli_query($conn, "SELECT * FROM users WHERE user_name='$uname' LIMIT 1");
		if (mysqli_num_rows($sql) == 0) {
			header("Location: index.php?error=Incorect User name or password");
		}
		else{
			$row = mysqli_fetch_array($sql);
			$password_check = (password_verify($pass,  $row['password']));
		    if (!$password_check){
			header("Location: index.php?error=Incorect User name or password");
		 
		} else{
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: ../index.php");
			}
		} 
	}
	
} 
