<html> <head>
<title> Листинг 6-2. Использование блоков else и elseif </title> </head> <body>  
<?php  
$var = $_GET['lang'];
switch($var){
    case "ru":
        print "Русский";
        break;
    case "en":
        print "English";
        break;
    case "fr":
        print "Franch";
        break;
    case "de":
        print "Germany";
        break; 
    default: 
        print "Непонятно, просто $var";
}

?>
</body> </html>
