<meta http-equiv="content-type" content="text/html; charset=gb2312">
<?php
//登录
if(!isset($_POST['submit'])){
    exit('非法访问!');
}
$username = htmlspecialchars($_POST['inputEmail']);
//$password = MD5($_POST['password']);
$password = $_POST['inputPassword'];
//包含数据库连接文件
include('config.php');
//检测用户名及密码是否正确
$check_query = mysql_query("select jurisdiction from admin where name='$username' and pass='$password'");
//$result = mysql_fetch_array($check_query);
if($result = mysql_fetch_array($check_query)){
    //登录成功
	session_start();
    $_SESSION['username'] = $username;
    $_SESSION['userid'] = $result['jurisdiction'];
    echo $username,' 欢迎你！进入 <a href="examination.php">开始考试</a><br />';
    echo '点击此处 <a href="index.php">注销</a> 登录！<br />';
 
} else {
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}
switch($_SESSION['userid'])
	{
		case 1:
		header("Location:administrators.php");
		break;
		case 2:
		header("Location:executive_director.php");
		break;
		case 3:
		header("Location:examination.php");
	}


//注销登录
if($_GET['action'] == "logout"){
    unset($_SESSION['userid']);
    unset($_SESSION['username']);
    echo '注销登录成功！点击此处 <a href="login.html">登录</a>';
    exit;
}

?>
*/