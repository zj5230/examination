<?php
// ******************** ���ݿ����� ********************
$dbserver   = "127.0.0.1";
$dbuser     = "root";              							// ���ݿ��û���
$dbpassword = "root";               						// ���ݿ�����
$dbdatabase = "examination";       						// ���ݿ�����
///////////
 $conn = mysql_connect("127.0.0.1","root","root") or die("���ݿ����Ӵ���".mysql_error());
 mysql_select_db("examination",$conn) or die("���ݿ���ʴ���".mysql_error());
?>