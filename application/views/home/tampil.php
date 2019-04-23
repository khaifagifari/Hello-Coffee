<html>
<head>
<title>Halaman Komentar</title>
<h1><center>Komentar Anda </center> </h1>
<?
mysql_connect("localhost","root","");
mysql_select_db("komentar");
$result=mysql_query("select * from data order by id DESC");
while($data=mysql_fetch_row($result))
{
echo "<hr/>";
echo "<b>$data[1]</b><br>";
echo "email : <i>$data[2]</i><br>";
echo "$data[3]<br>";
}
?>
</body>
</html>