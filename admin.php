<meta http-equiv="content-type" content="text/html; charset=gb2312">
<?php
//��¼
if(!isset($_POST['submit'])){
    exit('�Ƿ�����!');
}
$username = htmlspecialchars($_POST['inputEmail']);
//$password = MD5($_POST['password']);
$password = $_POST['inputPassword'];
//�������ݿ������ļ�
include('config.php');
//����û����������Ƿ���ȷ
$check_query = mysql_query("select jurisdiction from admin where name='$username' and pass='$password'");
//$result = mysql_fetch_array($check_query);
if($result = mysql_fetch_array($check_query)){
    //��¼�ɹ�
	session_start();
    $_SESSION['username'] = $username;
    $_SESSION['userid'] = $result['jurisdiction'];
    echo $username,' ��ӭ�㣡���� <a href="examination.php">��ʼ����</a><br />';
    echo '����˴� <a href="index.php">ע��</a> ��¼��<br />';
 
} else {
    exit('��¼ʧ�ܣ�����˴� <a href="javascript:history.back(-1);">����</a> ����');
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


//ע����¼
if($_GET['action'] == "logout"){
    unset($_SESSION['userid']);
    unset($_SESSION['username']);
    echo 'ע����¼�ɹ�������˴� <a href="login.html">��¼</a>';
    exit;
}

?>
*/