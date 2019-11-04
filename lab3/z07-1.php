<html> <head>
<title> Листинг 9-5. Добавление элементов к массиву 
</title> </head> 
<body> 
<?php 


//1
$treug = array();
print "<strong>1)</strong>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
for($i=1;$i<=10;$i++){
    array_push($treug,($i*($i+1)/2));
}
foreach ($treug as $val) {
       print "$val"."&nbsp;&nbsp;";
   }
print "<br>";

//2

$kvd = array();
print "<strong>2)</strong>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
for($i=1;$i<=10;$i++){
    array_push($kvd,($i*$i));
}
foreach ($kvd as $val) {
       print "$val"."&nbsp;&nbsp;";
   }
print "<br>";


//3
$rez = array();
print "<strong>3)</strong>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";


    
foreach ($treug as $val){
    array_push($rez,$val);
}
foreach ($kvd as $val){
    array_push($rez,$val);
}
foreach ($rez as $val) {
       print "$val"."&nbsp;&nbsp;";
   }
print "<br>";



//4
print "<strong>4)</strong>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
sort($rez);   
foreach ($rez as $val) {
       print "$val"."&nbsp;&nbsp;";
   }
print "<br>";

//5
print "<strong>5)</strong>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
array_shift($rez);   
foreach ($rez as $val) {
       print "$val"."&nbsp;&nbsp;";
   }
print "<br>";


//6
print "<strong>6)</strong>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
$rez=array_unique($rez);  
foreach ($rez as $val) {
       print "$val"."&nbsp;&nbsp;";
   }
print "<br>";


?>
</body> </html>
