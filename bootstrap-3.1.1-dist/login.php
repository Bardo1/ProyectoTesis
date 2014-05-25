<?php
ob_start();
session_start();
 
$username = $_POST['username'];
$password =  $_POST['password'];

$conn = mysql_connect('localhost','root','');
mysql_select_db('NuevaBase',$conn);

$username = mysql_real_escape_string($username);
$query = "SELECT id, username, password, salt
        FROM login WHERE username = '$username';";

$result = mysql_query($query);
 
if(mysql_num_rows($result) == 1) // User not found. So, redirect to login_form again.
{
	 echo "si lo encontró";
	echo "User not found. So, redirect to login_form again.";
  //  header('Location: entrar.html');
}
 
$userData = mysql_fetch_array($result, MYSQL_ASSOC);
$hash = hash('sha256', $userData['salt'] . hash('sha256', $password) );
 
if($hash != $userData['password']) // Incorrect password. So, redirect to login_form again.
{
	echo $password;
	echo $password;
	echo $password;
	echo $password;
	echo "Incorrect password. So, redirect to login_form again.";
   // header('Location: entrar.html');
}else{ // Redirect to home page after successful login.
	session_regenerate_id();
	$_SESSION['sess_user_id'] = $userData['id'];
	$_SESSION['sess_username'] = $userData['username'];
	session_write_close();
	header('Location: home.php');
}
?>