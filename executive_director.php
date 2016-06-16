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
	$conn = mysql_connect("127.0.0.1","root","root") or die("数据库链接错误".mysql_error());
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
    <p><span>人单合一</span></p>
  </blockquote>
</div>
<!-- /Logo -->

<!-- menu_list -->

<div class="menu_list">
<dl>
<dt>人员管理</dt>
<dt>试题管理</dt>
<dt>成绩查询</dt>
<dt>修改密码</dt>
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
<h1 title="青岛海尔人单合一系统管理后台">考试后台管理系统</h1>
<script language="javascript">
function showmenu(id){id.style.visibility = "visible";}
function hidmenu(){UserList.style.visibility = "hidden";}
document.onclick = hidmenu;
</script>
<div class="user"><a href="javascript:showmenu(UserList)">admin</a>
<div id="UserList"><a href="">修改</a>
<a href="">注销</a>
<a href="">退出</a></div>
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
<h2>人员管理列表</h2>
<table cellpadding="0" cellspacing="0">
<tr>
<th>编号</th>
<th>姓名</th>
<th>职位</th>
<th>操作</th>
<?php while($row=mysql_fetch_row($rs)) echo "<tr> <td> $row[0] </td>
<td> $row[1] </td>
<td> $row[2] </td> 
<td><a href='#'>修改</a> | <a href='#'>删除</a></td></tr>"
?>

</tr>
</table>
<p class="msg">共找到<?php $query = mysql_query("select count(*) from Personnel_management",$conn);$a=mysql_fetch_row($query);echo $a[0]; ?>条记录，当前显示从第1条至第10条</p>
</div>
</div>
<!-- /MainForm -->


<!-- PageNum -->
<ul id="PageNum">
<li><a href="">首页</a></li>
<li><a href="">上一页</a></li>
<li><a href="">1</a></li>
<li><a href="">2</a></li>
<li><a href="">3</a></li>
<li><a href="">4</a></li>
<li><a href="">5</a></li>
<li><a href="">6</a></li>
<li><a href="">下一页</a></li>
<li><a href="">尾页</a></li>
</ul>
<!-- /PageNum -->
</div>
<!-- /Contents -->

<!-- /footer -->
<footer>
<address>电子邮箱：liantong@haiersoft.com  技术支持：联通海尔项目组<br>青岛海尔软件有限公司版权所有  Copyright &copy; 2015 Haiersoft Corporation, All Rights.</address>
</footer>
<!-- /footer -->

</div>
<!-- /wrap_right -->
</body>
</html>