<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=gb2312">
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="generator" content="" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<link href="css/haiersoft.css" rel="stylesheet" type="text/css" media="screen,print" />
<link href="css/print.css" rel="stylesheet" type="text/css"  media="print" />
<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/side.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
<?php
	$conn = mysql_connect("127.0.0.1","root","root") or die("���ݿ����Ӵ���".mysql_error());
	mysql_select_db("examination", $conn);
	$rs = mysql_query("select * from Personnel_management",$conn);
	
?>
</head>

<body>
<!-- wrap_left -->
<div class="wrap_left" id="frmTitle" name="fmTitle">
<!-- Logo -->
<div id="Logo">
  <blockquote>
    <p><span>�˵���һ</span></p>
  </blockquote>
</div>
<!-- /Logo -->

<!-- menu_list -->

<div class="menu_list">
<dl>
<dt>��Ա����</dt>
<dt>�������</dt>
<dt>�ɼ���ѯ</dt>
<dt>�޸�����</dt>
</dl>
</div>
<!-- /menu_list -->
</div>
<!-- /wrap_left -->

<!-- picBox -->
<div class="picBox" onclick="switchSysBar()" id="switchPoint"></div>
<!-- /picBox -->



<!-- wrap_right -->
<div class="wrap_right">
<header>
<!-- Header -->
<div id="Header">
<!-- Head -->
<div id="Head">
<h1 title="�ൺ�����˵���һϵͳ������̨">���Ժ�̨����ϵͳ</h1>
<script language="javascript">
function showmenu(id){id.style.visibility = "visible";}
function hidmenu(){UserList.style.visibility = "hidden";}
document.onclick = hidmenu;
</script>
<div class="user"><a href="javascript:showmenu(UserList)">admin</a>
<div id="UserList"><a href="">�޸�</a>
<a href="">ע��</a>
<a href="">�˳�</a></div>
</div>
</div>
<!-- /Head -->
<nav>

</nav>
</div>
<!-- /Header -->
</header>


<!-- Contents -->
<dl class="select" style="width:200px;">
  
</dl>
<div id="Contents">
<script type="text/javascript">
$(function(){
$(".select").each(function(){
var s=$(this);
var z=parseInt(s.css("z-index"));
var dt=$(this).children("dt");
var dd=$(this).children("dd");
var _show=function(){dd.slideDown(200);dt.addClass("cur");s.css("z-index",z+1);};
var _hide=function(){dd.slideUp(200);dt.removeClass("cur");s.css("z-index",z);};
dt.click(function(){dd.is(":hidden")?_show():_hide();});
dd.find("a").click(function(){dt.html($(this).html());_hide();});
$("body").click(function(i){ !$(i.target).parents(".select").first().is(s) ? _hide():"";});})})
</script>
<!-- TopMain -->
<div id="TopMain">
<!-- MainForm -->
<div id="MainForm">
<div class="form_boxA">
<h2>��Ա�����б�</h2>
<table cellpadding="0" cellspacing="0">
<tr>
<th>���</th>
<th>����</th>
<th>ְλ</th>
<th>����</th>
<?php while($row=mysql_fetch_row($rs)) echo "<tr> <td> $row[0] </td>
<td> $row[1] </td>
<td> $row[2] </td> 
<td><a href='#'>�޸�</a> | <a href='#'>ɾ��</a></td></tr>"
?>

</tr>
</table>
<p class="msg">���ҵ�<?php $query = mysql_query("select count(*) from Personnel_management",$conn);$a=mysql_fetch_row($query);echo $a[0]; ?>����¼����ǰ��ʾ�ӵ�1������10��</p>
</div>
</div>
<!-- /MainForm -->


<!-- PageNum -->
<ul id="PageNum">
<li><a href="">��ҳ</a></li>
<li><a href="">��һҳ</a></li>
<li><a href="">1</a></li>
<li><a href="">2</a></li>
<li><a href="">3</a></li>
<li><a href="">4</a></li>
<li><a href="">5</a></li>
<li><a href="">6</a></li>
<li><a href="">��һҳ</a></li>
<li><a href="">βҳ</a></li>
</ul>
<!-- /PageNum -->
</div>
<!-- /Contents -->

<!-- /footer -->
<footer>
<address>�������䣺liantong@haiersoft.com  ����֧�֣���ͨ������Ŀ��<br>�ൺ�����������޹�˾��Ȩ����  Copyright &copy; 2015 Haiersoft Corporation, All Rights.</address>
</footer>
<!-- /footer -->

</div>
<!-- /wrap_right -->
</body>
</html>