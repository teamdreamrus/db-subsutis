<html> <head>
<title> Листинг 6-2. Использование блоков else и elseif </title> </head> <body>  
<?php  
$var = $_GET['lang'];

if ($var == "ru") {print "Русский";} 
elseif ($var == "en") {print "English";}
elseif ($var == "fr") {print "Franch";}
elseif ($var == "de") {print "Germany";}
else {print "Непонятно, просто $var";}
?>
</body> </html>
