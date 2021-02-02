<?php
$con = mysql_connect("www.heihei.work:3306","jjf","12580");
if(!$con)
{
	die('Could not connect Mysql:'. mysql_error());
}
mysql_select_db("newlyb",$con);

?>