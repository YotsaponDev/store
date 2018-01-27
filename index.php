<!DOCTYPE html>
<html>
<head >
	<meta charset="UTF-8" />
	<title>.:บ้านของบอส:.</title>
 
<link rel="stylesheet" type="text/css" href="css\login1.css" />
	
</head>
<style>
body {
    background-color:black;
}
</style>
<body>

<center><h3>ยินดีต้อนรับสู่ระบบร้านค้า</h3></center>

<center><div>
  <form method="post" action="c_login.php">
    <label for="fname">Username</label><br>
    <input type="text" id="txtUsername" name="txtUsername" placeholder="ป้อนชื่อผู้ใช้..">

    <label for="lname">Password</label><br>
    <input type="Password" id="txtPassword" name="txtPassword" placeholder="ป้อนรหัสผ่าน..">
  
    <input type="submit" value="Login">
  </form>
</div></center>

</body>
</html>