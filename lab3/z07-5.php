<html> <head>
<title> Листинг 9-5. Добавление элементов к массиву 
</title> </head> 
<body> 
<!--
    <style>
TABLE {
    font-size: 1;
   }
</style>
-->
<?php 
//1
print "<br><strong>1)</strong><br>";
$cust = array("cnum"=>2001,"cname"=>"Hoffman","city"=>"London","snum"=>1001,"rating"=>100);

foreach ($cust as $key => $val) {
    echo "$key => $val\n<br>";
}

//2
print "<br><strong>2)</strong><br>";
asort($cust);
foreach ($cust as $key => $val) {
    echo "$key => $val\n<br>";
}


//3
print "<br><strong>3)</strong><br>";
ksort($cust);
foreach ($cust as $key => $val) {
    echo "$key => $val<br>";
}

//4
print "<br><strong>4)</strong><br>";
sort($cust);
foreach ($cust as $key => $val) {
    echo "$key => $val<br>";
}

?>
</body> </html>
