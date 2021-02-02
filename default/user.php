<!DOCTYPE html>
<html>
<?php
include"php/session.php";
check_session();
?>
<head>
<meta charset="utf-8">
<title>耳倾之梦 | About me</title>
	    <link rel="stylesheet" href="css/user.css">
</head>
<body>
<h1 align="center">ABOUT ME | Register message !</h1>
<hr/>

<?php
include "php/getuser.php";

echo"
<p><b>Username:</b>  ".$username." </p>
<p><b>Password:</b>  ".md5($password)."(密码已自动加密)</p>
<p><b>Sex:</b>  ".$sex." </p>
<p><b>Adress:</b>  ".$adress." </p>
<p><b>E-mail:</b><i>  ".$email." </i></p>
<p><b>Register Time:</b>  ".$register_time." </p>
"."<hr/>";
echo"You are the ".$id." person to sign up for this website";
?>

</body>
	
<footer>		
<div class="div_footer">
  <p>Powered By: www.heiehi.work  &copy;豫ICP备20007688号</p>
</div>		 
</footer>
 
</html>
