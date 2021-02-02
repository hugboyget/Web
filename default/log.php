<!DOCTYPE html>
<html lang="en" dir="ltr">
<style>
body{
  background:url("css/jpg/hacker.jpg");
  color: red;
  margin-top: 180px;
  margin-left: 150px;
  padding: 0;
  font-family: sans-serif;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;

}
</style>
<head>
    <meta charset="utf-8">
    <title>登录日志</title>
    <link rel="stylesheet" href="css/find.css">
</head>
<body style="font-family: YouYuan;">
<h1 style="color:white">All Log !</h1>
<?php

include"php/public.php";
$data1 = mysql_query("SELECT * FROM all_ip order by id desc");
$data2 = mysql_query("SELECT * FROM log order by id desc");

echo'<div style="color:red">';
while($row= mysql_fetch_array($data1))
{
echo"<br>";
echo"
<p>用户:  ".$row['username']."  IP:  ".$row['ip']."  登录时刻：  ".$row['login_time']."  退出时刻:  ".$row['logout_time']."  实时状态:  ".$row['status']."  ID:  ".$row['id']."</p>
";
}
echo'</div>';



echo'<div style="color:lightgreen">';
while($row= mysql_fetch_array($data2))
{
echo"<br>";
echo"
<p>  用户:  ".$row['username']."  IP:  ".$row['ip']."  登录时刻：  ".$row['login_time']."  退出时刻:  ".$row['logout_time']."  ID:  ".$row['id']."</p>
";
}
echo'</div>';

mysql_close($con);
?>

</body>
</html>





