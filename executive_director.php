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
<div class="user"><a href="javascript:showmenu(UserList)"><?php session_start();echo $_SESSION['username']; ?></a>
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
<?php
//分页显示
$pagesize=10;//每页记录数
$tmpArr=mysql_fetch_array($rs);
$numAL=mysql_num_rows($rs);//取得记录总数
$pages=intval($numAL/$pagesize);//计算总页数
if($numAL%$pagesize)$pages++;//设置缺省页码
if(isset($_GET['page']))
{
	$page=intval($_GET['page']);
}
else
{
	$page=1;//设置第一页
}
$offset=$pagesize*($page-1);//计算记录偏移量
$total=mysql_query("select * from personnel_management limit $offset,$pagesize	",$conn);//取得当前页记录集
$curNum=mysql_num_rows($total);//当前页实际记录数
$first=1;
$prev=$page-1;
$next=$page+1;
$last=$pages;

?>
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
<?php while($row=mysql_fetch_row($total)) echo "<tr> <td> $row[0] </td>
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

<?php
//分页显示
$pagesize=10;//每页记录数
$tmpArr=mysql_fetch_array($rs);
$numAL=mysql_num_rows($rs);//取得记录总数
$pages=intval($numAL/$pagesize);//计算总页数
if($numAL%$pagesize)$pages++;//设置缺省页码
if(isset($_GET['page']))
{
	$page=intval($_GET['page']);
}
else
{
	$page=1;//设置第一页
}
$offset=$pagesize*($page-1);//计算记录偏移量
$total=mysql_query("select * from personnel_management limit $offset,$pagesize	",$conn);//取得当前页记录集
$curNum=mysql_num_rows($total);//当前页实际记录数
$first=1;
$prev=$page-1;
$next=$page+1;
$last=$pages;

?>
<ul id="PageNum">
<li><?php if($page>1)
{echo "<a href='?page=".$first."'>首页</a></li>";
 echo "<li><a href='?page=".$prev."'>上一页</a></li>";} 
for ($i=1;$i<$page;$i++){echo "<li><a href='?page=".$i."'>[".$i."]</a></li>";} //先输出当前页之前的
if($page>0)echo "<li><a>".$page."</li></a>";//再输出当前页
for($i=$page+1;$i<=$pages;$i++){echo "<li><a href='?page=".$i."'>[".$i."]</a></li>";}//接着输出当前页之后

?>
<?php
if($page<$pages)
{
echo "<li><a href='?page=".$next."'>下一页</a></li>";
echo "<li><a href='?page=".$last."'>尾页</a></li>";
}
?>
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