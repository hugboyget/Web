<!DOCTYPE html>
<?php
include"php/session.php";
check_session();
?>
<html>
<head>
<meta charset="utf-8">
<title>耳倾之梦 | User</title>
	 <link rel="stylesheet" href="css/userhome.css">
</head>
<body>

<div class="header">
  <h1>My message.</h1>
  <p>但愿美好的记忆，不要从岁月里匆匆走过，让它永驻我们的心中。 —————佚名 </p>
</div>

<div class="topnav">
  <a href="index.php"> Home </a>
  <a href="php/exit.php"> Logout </a>
  <a href="user.php"  style="float:right">AboutMe</a>
</div>


<div class="row">
<div class="leftcolumn">

<?php
include"php/public.php";
session_start();
$user = $_SESSION['username'];
$data = mysql_query("SELECT * FROM message WHERE username = $user  order by id desc");
while($row= mysql_fetch_array($data))
{

echo "
<div class='card'>
<h2>Title:".$row['title']."</h2>     
      <h5>Post time:&nbsp".$row['post_time']."</h5>    
      <p>Author:&nbsp".$row['username']."&nbsp&nbsp&nbsp&nbspSex:".$row['sex']."</p>
      <p>Message:<br/><br/>&nbsp&nbsp".$row['content']."</p>"."<hr/>";
$time =base64_encode($row['post_time']);
echo '

<a href="php/delete.php?id='.$time.'">
<img src="css/jpg/icon_delete.png"  style="right: 1rem;width: 2rem; height: 2rem;"/>
</a>

<a href="php/edi.php?id='.$time.'">
<img src="css/jpg/icon_edi.png" style="left: 6rem;width: 2rem; height: 2rem;"/>
</a>

<a href="http://www.heihei.work/comment.php?id='.$time.'">
<img src="css/jpg/icon_comment.png" style="left: 11rem;width: 2rem; height: 2rem;"/>
</a>

<a href="php/love.php?id='.$time.'">
<img src="css/jpg/icon_love.png" style="left: 16rem;width: 2rem; height: 2rem;"/>
</a>
</div> 

'; 
}
mysql_close($con);
?>
 
</div>
</div>


<div class="footer">

  <p>Powered By: www.heiehi.work  &copy;豫ICP备20007688号</p>
  
</div>

<!-- add -->
<a href="http://www.heihei.work/add.php">

<img src="css/jpg/icon_add.png" class="imgadd" />
</a>
<a href="http://www.heihei.work/php/find.php">
<img src="css/jpg/icon_find.png"style="left: 6rem;" class="imgadd" />

</a>

</body>
</html>
