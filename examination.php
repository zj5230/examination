<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ʼ����</title>
<style>
	body{
		background:#CCC;
	}
</style>
</head>

<body>
<form  name="name" method="POST" action="http://127.0.0.1/examination/good.php" >
	<p>1.����PC����ǽ�Ĺ��ܣ����£�       �������Ǵ����</p>
    <p><input type="radio" id="1_A"  name="1" value="1_A" /> ����ǽ���Լ������ڲ�����ͨ����</p>
    <p><input type="radio" id="1_B"  name="1" value="1_B"/> ����ǽ����Ӧ�����ؼ���Ӧ�ò��Ͻ���Э����˺�ת������</p>
    <p><input type="radio" id="1_C"  name="1" value="1_C"/> ����ǽ����ʹ�ù��˼��������������ݰ�����ѡ��</p>
    <p><input type="radio" id="1_D"  name="1" value="1_D"/> ����ǽ������ֹ�����ڲ�����в�͹���</p>
    
    <p>2.ARPЭ�����Ҫ�����ǣ�       ��</p>
    <p><input type="radio" id="2_A"  name="2" value="2_A" /> ��IP��ַ����Ϊ�����ַ</p>
    <p><input type="radio" id="2_B"  name="2" value="2_B" /> �������ַ����ΪIP</p>
    <p><input type="radio" id="2_C"  name="2" value="2_C" /> ������������ΪIP��ַ</p>
    <p><input type="radio" id="2_D"  name="2" value="2_D" /> ��IP��ַ����Ϊ������</p>
    
    <p>3.PPPOE������       ���ͣ�       �������׶�</p>
    <p><input type="radio" id="3_A"  name="3" value="3_A" /> ���ͺͽ���</p>
    <p><input type="radio" id="3_B"  name="3" value="3_B" /> PPP��֤�ʹ���</p>
    <p><input type="radio" id="3_C"  name="3" value="3_C" /> ���ֺ�PPP�Ự</p>
    <p><input type="radio" id="3_D"  name="3" value="3_D" /> �Ự�ʹ���</p>
   
    <p>4.��֪һ̨�����A��IP��ַΪ��132.121.100.1����������Ϊ255.255.0.0������̨��������ڣ�  ��</p>
    <p><input type="radio" id="4_A"  name="4" value="4_A" /> A����</p>
    <p><input type="radio" id="4_B"  name="4" value="4_B" /> B����</p> 
    <p><input type="radio" id="4_C"  name="4" value="4_C" /> C����</p>
    <p><input type="radio" id="4_D"  name="4" value="4_D" /> ����</p>
    <p>
    <p>5.����ǽ�İ�ȫ���ƹ��ܲ��ܹ������������һ�����֣�  ��</p>
    <p><input type="radio" id="5_A"  name="5" value="5_A" /> �����</p>
    <p><input type="radio" id="5_B"  name="5" value="5_B" /> �����</p>
    <p><input type="radio" id="5_C"  name="5" value="5_C" /> ������·��</p>
    <p><input type="radio" id="5_D"  name="5" value="5_D" /> ����� </p>
    <p>
    <p>6.͸���Ž���Ҫ����������Э�����һ��</p>
    <p><input type="radio" id="6_A"  name="6" value="6_A" /> ��1��</p> 
    <p><input type="radio" id="6_B"  name="6" value="6_B" /> ��2��</p>
    <p><input type="radio" id="6_C"  name="6" value="6_C" /> ��3��</p>
    <p><input type="radio" id="6_D"  name="6" value="6_D" /> ��4��</p>
    <p>
    <p>7.Ŀǰ��ͨ�û�һ��������ַ�ʽ����</p>
    <p><input type="radio" id="7_A"  name="7" value="7_A"/> PPPOE����</p>
    <p><input type="radio" id="7_B"  name="7" value="7_B" /> WLAN</p>
    <p><input type="radio" id="7_C"  name="7" value="7_C"/> ����ֱ���뻧</p>
    <p><input type="radio" id="7_D"  name="7" value="7_D"/> Cable Modem</p>
    <p>
    <p>8.һ��C�����磬�������Ϊ255.255.255.248��ÿ��������Ч������Ϊ��       �����ʸ�C�����ܹ����ṩ��       ����������ַ</p>
    <p><input type="radio" id="8_A"  name="8" value="8_A" /> 8,224 </p>
    <p><input type="radio" id="8_B"  name="8" value="8_B" /> 4,252</p>
    <p><input type="radio" id="8_C"  name="8" value="8_C" /> 6,192</p>
    <p><input type="radio" id="8_D"  name="8" value="8_D" /> 16,240 </p>
    <p>
    <p>9.PPP��֤��ʽ�У�       ��</p>
    <p><input type="radio" id="9_A"  name="9" value="9_A" />CHECK</p>
    <p><input type="radio" id="9_B"  name="9" value="9_B" /> CHAP</p>
    <p><input type="radio" id="9_C"  name="9" value="9_C" />RAP</p>
    <p><input type="radio" id="9_D"  name="9" value="9_D" /> RAP</p>
    <p>
    <p>10.����ǽ��ȫ���Ƽ�����Ҫ�������ļ���</p>
    <p><input type="radio" id="10_A"  name="10" value="10_A" /> ������</p>
    <p><input type="radio" id="10_B"  name="10" value="10_B" /> ����</p>
    <p><input type="radio" id="10_C"  name="10" value="10_C" /> ״̬���</p>
    <p><input type="radio" id="10_D"  name="10" value="10_D" /> ��ȫ��֤</p>
    <input type="submit" name="Assignment" value="����" />
</form>
</body>
</html>