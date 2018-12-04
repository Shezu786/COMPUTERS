<html>
	<head>Login</head>
	<body>
		<form action="" method="post">
  <table>
    <tr>
      <td><h3>Login</h3></td>
    </tr>
    <tr>
      <td >Username</td>
      <td><input name="Username" type="text"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input name="Password" type="password" ></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit" value="Login"></td>
    </tr>
  </table>
</form>
<?php session_start();
if(isset($_POST['Submit'])){
	$logins = array('Shehzad' => '123456','username1' => 'password1','username2' => 'password2');

	$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
	$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

	if (isset($logins[$Username]) && $logins[$Username] == $Password){
		$_SESSION['UserData']['Username']=$logins[$Username];
		header("location:homepage.php");
		exit;
	} 
	else {
		$msg="<span style='color:red'>Invalid Login Details</span>";
	}
}
?>
</body>
</html>
/* Here we are going to make some changes in Login.php file */
/* Here we are going to add marquee for login using marquee tag
	<marque> Login Here </marque> */
