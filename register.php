
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>

	<div class="header"> 
	<?php
		require_once 'database.php';
		if(isset($_POST['submit_btn']))
		{
			$username = mysqli_real_escape_string ($dbc,$_POST['username']);
			$password = mysqli_real_escape_string ($dbc,$_POST['password']);
			$rpassword = mysqli_real_escape_string ($dbc,$_POST['rpassword']);
			$check="SELECT * FROM users WHERE uname = '$username'";
			$rs = mysqli_query($dbc,$check);
			if(mysqli_num_rows($rs) > 0)
			{
   				 echo '<h4 style="color:red">Username already exists</h4>';
			}
			else
			{
				if($password!=$rpassword)
				{
					echo '<h4 style="color:red">Passwords do not match</h4>';
				}
				else
				{
					$sql = "INSERT INTO users (`id`, `uname`, `pass`, `rpass`) VALUES (NULL, '$username', md5('$password'), md5('$password'))";	
					$result = mysqli_query($dbc,$sql);
					if($result)
					{
						header('Location:login.php');
					}
					else
					{
						echo "not success";
					}
				}
			}
		}
			else
			{
				echo"<h4>APP NAME</h4>";
			}
	
?>
	</div>

	<div class="main">
	<h1>Register</h1>
	<span>or <a href="login.php">login here</a></span>

	<form action="register.php" method="POST">
		
		<input type="text" placeholder="Enter your username" name="username" required>
		<input type="password" placeholder="Password" name="password" required>
		<input type="password" placeholder="Re-type password" name="rpassword" required>
		<input type="submit" name="submit_btn">

	</form>
	</div>

</body>
</html>