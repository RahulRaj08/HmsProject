<!DOCTYPE html>
<html>
<head>
	<title> Hostel Management System </title>
</head>
<body>
 <h2> Log in </h2>
 <form action="include/login.inc.php" method="POST">
  <table> 
   <tr> 
 	<td>
 		Username: <input type="text" name="cid" placeholder="Enter your Id">
 	</td>
   </tr> 
   <tr>	
 	<td>
 		Password: <input type="password" name="pass" placeholder="Enter your password">
 	</td>
   </tr>	
   <tr>
    <td>
    	<input type="submit" name="btn" value="Login" >
    </td>
   </tr> 	
   </table> 
 </form>
</body>
</html>