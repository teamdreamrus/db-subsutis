<html> <head>
<title> Листинг 2-1. Создание динамической переменной 
        и обращение к ней 
</title> </head> <body> 
<?php
$breakfast="gamburger";
$$breakfast=" and tea";
 print "$breakfast $gamburger<br>";
 print "$breakfast"; print "$$breakfast<br>";
 print $breakfast; print $$breakfast;
?>
</body> </html> 

