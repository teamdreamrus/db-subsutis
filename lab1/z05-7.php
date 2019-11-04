<html> <head>
<title> Листинг 6-2. Использование блоков else и elseif </title> </head> <body>  
<?php  
$var = $_GET['lang'];
$str = ($var == "ru") ? "Russian" : "English";
print $str;

?>
</body> </html>
