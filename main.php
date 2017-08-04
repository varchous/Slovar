<?php
if($_POST['tr'])
echo "<textarea id='2' cols='30' rows='10'></textarea>";
$S=$_POST['text'];
$S2=explode(" ",$S);
$user='root';
$host='localhost';
$pas='1111';
$link=mysql_connect($host,$user,$pas);
if(!$link){echo ("нет подключения");}
mysql_select_db('slovar');
$S3="";
for ($i=0;$i<count($S2);$i++)
{
	$res=mysql_query("SELECT rus FROM re where eng like '$S2[$i]' ;");
	if(mysql_num_rows($res)==0) {echo('error');}
	else { $S3=$S3.str_replace(array("\n","\r"),' ',mysql_result($res,0));  /*echo(mysql_result($res,0));*/ } 
}
echo($S3);
?>