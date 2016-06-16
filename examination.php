<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>开始考试</title>
<style>
	body{
		background:#CCC;
	}
</style>
</head>

<body>
<form  name="name" method="POST" action="http://127.0.0.1/examination/good.php" >
	<p>1.关于PC防火墙的功能，以下（       ）描述是错误的</p>
    <p><input type="radio" id="1_A"  name="1" value="1_A" /> 防火墙可以检查进出内部网的通信量</p>
    <p><input type="radio" id="1_B"  name="1" value="1_B"/> 防火墙可以应用网关技术应用层上建立协议过滤和转发功能</p>
    <p><input type="radio" id="1_C"  name="1" value="1_C"/> 防火墙可以使用过滤技术在网络层对数据包进行选择</p>
    <p><input type="radio" id="1_D"  name="1" value="1_D"/> 防火墙可以阻止来自内部的威胁和攻击</p>
    
    <p>2.ARP协议的主要功能是（       ）</p>
    <p><input type="radio" id="2_A"  name="2" value="2_A" /> 将IP地址解析为物理地址</p>
    <p><input type="radio" id="2_B"  name="2" value="2_B" /> 将物理地址解析为IP</p>
    <p><input type="radio" id="2_C"  name="2" value="2_C" /> 将主机名解析为IP地址</p>
    <p><input type="radio" id="2_D"  name="2" value="2_D" /> 将IP地址解析为主机名</p>
    
    <p>3.PPPOE包含（       ）和（       ）两个阶段</p>
    <p><input type="radio" id="3_A"  name="3" value="3_A" /> 发送和接收</p>
    <p><input type="radio" id="3_B"  name="3" value="3_B" /> PPP验证和传输</p>
    <p><input type="radio" id="3_C"  name="3" value="3_C" /> 发现和PPP会话</p>
    <p><input type="radio" id="3_D"  name="3" value="3_D" /> 会话和传输</p>
   
    <p>4.已知一台计算机A的IP地址为：132.121.100.1，子网掩码为255.255.0.0，则这台计算机属于（  ）</p>
    <p><input type="radio" id="4_A"  name="4" value="4_A" /> A类网</p>
    <p><input type="radio" id="4_B"  name="4" value="4_B" /> B类网</p> 
    <p><input type="radio" id="4_C"  name="4" value="4_C" /> C类网</p>
    <p><input type="radio" id="4_D"  name="4" value="4_D" /> 类网</p>
    <p>
    <p>5.防火墙的安全控制功能不能工作在下面的哪一个部分（  ）</p>
    <p><input type="radio" id="5_A"  name="5" value="5_A" /> 传输层</p>
    <p><input type="radio" id="5_B"  name="5" value="5_B" /> 网络层</p>
    <p><input type="radio" id="5_C"  name="5" value="5_C" /> 数据链路层</p>
    <p><input type="radio" id="5_D"  name="5" value="5_D" /> 物理层 </p>
    <p>
    <p>6.透明桥接主要工作在网络协议的哪一层</p>
    <p><input type="radio" id="6_A"  name="6" value="6_A" /> 第1层</p> 
    <p><input type="radio" id="6_B"  name="6" value="6_B" /> 第2层</p>
    <p><input type="radio" id="6_C"  name="6" value="6_C" /> 第3层</p>
    <p><input type="radio" id="6_D"  name="6" value="6_D" /> 第4层</p>
    <p>
    <p>7.目前普通用户一般采用哪种方式上网</p>
    <p><input type="radio" id="7_A"  name="7" value="7_A"/> PPPOE拨号</p>
    <p><input type="radio" id="7_B"  name="7" value="7_B" /> WLAN</p>
    <p><input type="radio" id="7_C"  name="7" value="7_C"/> 光纤直接入户</p>
    <p><input type="radio" id="7_D"  name="7" value="7_D"/> Cable Modem</p>
    <p>
    <p>8.一个C类网络，如果掩码为255.255.255.248，每个子网有效主机数为（       ），问该C网络总共能提供（       ）个主机地址</p>
    <p><input type="radio" id="8_A"  name="8" value="8_A" /> 8,224 </p>
    <p><input type="radio" id="8_B"  name="8" value="8_B" /> 4,252</p>
    <p><input type="radio" id="8_C"  name="8" value="8_C" /> 6,192</p>
    <p><input type="radio" id="8_D"  name="8" value="8_D" /> 16,240 </p>
    <p>
    <p>9.PPP认证方式有（       ）</p>
    <p><input type="radio" id="9_A"  name="9" value="9_A" />CHECK</p>
    <p><input type="radio" id="9_B"  name="9" value="9_B" /> CHAP</p>
    <p><input type="radio" id="9_C"  name="9" value="9_C" />RAP</p>
    <p><input type="radio" id="9_D"  name="9" value="9_D" /> RAP</p>
    <p>
    <p>10.防火墙安全控制技术主要有以下哪几种</p>
    <p><input type="radio" id="10_A"  name="10" value="10_A" /> 包过滤</p>
    <p><input type="radio" id="10_B"  name="10" value="10_B" /> 代理</p>
    <p><input type="radio" id="10_C"  name="10" value="10_C" /> 状态检测</p>
    <p><input type="radio" id="10_D"  name="10" value="10_D" /> 安全认证</p>
    <input type="submit" name="Assignment" value="交卷" />
</form>
</body>
</html>