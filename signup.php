<?php
	include "auth.php";
	session_start();
	if($_POST["signup"] === "OK")
	{
		if(auth($_POST["login"], $_POST["passwd"]) === FALSE && $_POST["passwd"] == $_POST["passwd2"])
		{
			$_SESSION["login"] = $_POST["login"];
			$_SESSION["signup"] = $_POST["signup"];
			$_SESSION["passwd"] = $_POST["passwd"];
			header('LOCATION: create.php');
		}
	else
		echo "ERROR"."\n";
	}

?>

<!DOCTYPE html>
<html>
	<title>SIGN UP</title>
	<body>
		<form action="signup.php" method="POST">
			Username: <input type="text" name="login" value="" placeholder="Create your Username" required/>
			<br/>
			Password: <input type="password" name="passwd" value="" placeholder="Enter your password" required/>
			<br/>
			Password: <input type="password" name="passwd2" value="" placeholder="Re-Enter your password" required/>
			<br/>
			<a href="index.php"><button  type="submit" name="signup" value="OK">SIGN UP</button></a>
		</form>
	</body>
</html>

