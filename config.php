<?php
// ******************** 数据库设置 ********************
$dbserver   = "127.0.0.1";
$dbuser     = "root";              							// 数据库用户名
$dbpassword = "root";               						// 数据库密码
$dbdatabase = "examination";       						// 数据库名称
///////////
 $conn = mysql_connect("127.0.0.1","root","root") or die("数据库链接错误".mysql_error());
 mysql_select_db("examination",$conn) or die("数据库访问错误".mysql_error());
?>