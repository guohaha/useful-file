<? 
//�������ݿ��ļ� 
$connect=mysql_connect("localhost","root","123456") or die("�������ݿ�ʧ�ܣ�"); 
//�������ݿ�(test) 
mysql_select_db("test",$connect) or die (mysql_error());

mysql_query("SET NAMES 'GBK'");


$temp=file("abc.csv");//����EXCEL�ļ�,��ʽΪ.csv 
$time = time();
for ($i=0;$i <count($temp);$i++) 
{ 
	$string=explode(",",$temp[$i]);//ͨ��ѭ���õ�EXCEL�ļ���ÿ�м�¼��ֵ 
	
	$time = time();
	//��EXCEL�ļ���ÿ�м�¼��ֵ���뵽���ݿ���
		
	$q="insert into news(Title,Summary,Content,SendTime,SendTime) values('$string[1]','$string[2]','$string[3]','$string[4]',$time);"; 
	mysql_query($q) or die (mysql_error());
	
	if (!mysql_error()); 
	{ 
	echo "success!"; 
	} 	
	unset($string);
} 
?> 
