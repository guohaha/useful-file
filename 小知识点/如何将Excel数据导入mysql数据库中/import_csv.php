<? 
//连接数据库文件 
$connect=mysql_connect("localhost","root","123456") or die("链接数据库失败！"); 
//连接数据库(test) 
mysql_select_db("test",$connect) or die (mysql_error());

mysql_query("SET NAMES 'GBK'");


$temp=file("abc.csv");//连接EXCEL文件,格式为.csv 
$time = time();
for ($i=0;$i <count($temp);$i++) 
{ 
	$string=explode(",",$temp[$i]);//通过循环得到EXCEL文件中每行记录的值 
	
	$time = time();
	//将EXCEL文件中每行记录的值插入到数据库中
		
	$q="insert into news(Title,Summary,Content,SendTime,SendTime) values('$string[1]','$string[2]','$string[3]','$string[4]',$time);"; 
	mysql_query($q) or die (mysql_error());
	
	if (!mysql_error()); 
	{ 
	echo "success!"; 
	} 	
	unset($string);
} 
?> 
