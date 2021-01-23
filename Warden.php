<?php
session_start();
if (isset($_SESSION['role']))
 {
	if ($_SESSION['role'] != 'Warden')
	 {
		header('Location: login.php');
	}
 }
else
{
	header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Hostel Management System </title>
</head>
<body>
 <h2>Welcome <?php echo $_SESSION['role']; ?>
   </h2>
</body>
</html>