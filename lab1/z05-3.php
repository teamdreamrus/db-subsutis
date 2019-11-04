<html> <head>
<title> Листинг 2-1. Создание динамической переменной 
        и обращение к ней 
</title> </head> <body> 
<?php
$breakfast="gamburger";
$breakfast2=&$breakfast;
 print "$breakfast2<br>";
 $breakfast ="tea";
 print "$breakfast2<br>";
 
?>
</body> </html> 

