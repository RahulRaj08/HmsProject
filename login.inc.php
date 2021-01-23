<?php
require_once "dbh.inc.php";
session_start();
$role = "";
$USer = "";
if(isset($_POST["btn"])) 
{
    $username = $_POST["cid"];
    $password = $_POST["pass"];

    $query = "SELECT * FROM users WHERE Cid='$username' AND Password='$password' ";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) > 0){
    	while($row = mysqli_fetch_assoc($result))
    	{
    		if ($row['Role'] == "Admin")
    		 {
    			$_SESSION['User'] = $row["Cid"];
    			$_SESSION['role'] = $row["Role"];
    			header('Location: ../Admin.php');
    		 }

    		 elseif ($row['Role'] == "Warden")
    		  {
    		 	$_SESSION['User'] = $row["Cid"];
    			$_SESSION['role'] = $row["Role"];
    			header('Location: ../Warden.php');
    		 }

    		 else
    		 {
    		 	$_SESSION['User'] = $row["Cid"];
    			$_SESSION['role'] = $row["Role"];
    			header('Location: ../Student.php');
    		 }
    	}

    }
}

