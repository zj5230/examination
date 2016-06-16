<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>考试完成</title>
<?php
	include('config.php');
	session_start();
	$name=$_SESSION['username'];
	for($i=1;$i<11;$i++)
	{
		$subject[]=$_POST[$i];
		
	}
	$date=date('y-m-d',time());
	foreach($subject as $value)
	{
		mysql_query("insert into achievement(name,number,date) values ('$name','$value','$date')");
	}
?>
</head>

<body>
</body>
</html>
