<?php
$con = mysql_connect("www.example.work:3306","beyond","12345");
if(!$con)
{
	die('Could not connect Mysql:'. mysql_error());
}
mysql_select_db("newlyb",$con);

?>