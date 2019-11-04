<html> <head>
<title> Листинг 3-2. Преобразование типа переменной </title> </head> <body> 
<?php
$NUM_E = 2.71828; 
print "Число e равно $NUM_E<br>";
$num_e1=$NUM_E;
print gettype($num_e1);

$num_e1=(string)$NUM_E;
print gettype($num_e1);

$num_e1=(integer)$NUM_E;
print gettype($num_e1);


$num_e1=(boolean)$NUM_E;
print gettype($num_e1);

?>
</body> </html>
