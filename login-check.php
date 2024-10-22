<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data); // Escape special characters for security
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: login.php?error=User Name is required");
	    exit();
	} else if (empty($pass)) {
        header("Location: login.php?error=Password is required");
	    exit();
	} else {
		// hashing the password for security
        $pass = md5($pass); 

		// Secure SQL query using prepared statements to prevent SQL injection
		$sql = "SELECT * FROM users WHERE user_name=? AND user_password=?";
		$stmt = mysqli_prepare($conn, $sql);
		mysqli_stmt_bind_param($stmt, "ss", $uname, $pass);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['user_password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['user_name']; // Changed to store user_name since 'name' doesn't exist in the database structure
            	$_SESSION['userid'] = $row['userid'];
            	header("Location: user-display.php");
		        exit();
            } else {
				header("Location: login.php?error=Incorrect User name or password");
		        exit();
			}
		} else {
			header("Location: login.php?error=Incorrect User name or password");
	        exit();
		}
	}
} else {
	header("Location: login.php");
	exit();
}
?>
