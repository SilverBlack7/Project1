<?php
require 'database.php';
session_start();
/*$user = $_SESSION['username'];
$sql = "SELECT * FROM $user";
$result = mysqli_query($dbc, $sql);
	if(mysqli_num_rows($result) > 0)
	{
		echo"<table>";
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
                        echo "<td>".$row['message']."</td>";
                        echo "<td>".$row['sender']."</td>";
			echo "</tr>"; 
		}
		echo"</table>";       
        }

if(isset($_POST['logout_btn']))
{
	$user = $_SESSION['username'];
	$sql = "SELECT * FROM $user;
	$result = mysqli_query($dbc, $sql);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
	header('Location: login.php');
}*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Message Center</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>

	<div class="header">
		USER: <?php echo $_SESSION['username']; ?>
	</div>


	<h1>Message Center</h1>
	<div>
		<h4> Your messages </h4>
		
	

	
	<table align="center" width=30% border=1px solid border-collapse="collapse">
		<tr>
			<th> Message</th>
			<th> Sender</th>
		</tr>
		<?php

$user = $_SESSION['username'];
$sql = "SELECT * FROM $user";
$result = mysqli_query($dbc, $sql);
	if(mysqli_num_rows($result) > 0)
	{
		
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
                        echo "<td>".$row['message']."</td>";
                        echo "<td>".$row['sender']."</td>";
			echo "</tr>"; 
		}
		      
        }
?>
	</table>
</div>

<p>
	<h3> <a href="send_msg.php">Send a message</a></h3>
</p>
<p>
	<form action="login.php" method="POST">
		
		
		<input type="submit" value="Logout" name="logout_btn">
	
	</form>
</p>

</body>
</html>