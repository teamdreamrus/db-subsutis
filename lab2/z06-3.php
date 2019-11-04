<html> <head>
<title> Листинг 8-3. Функция-переменная </title>
</head> <body> 
<?php
// Приветствие на русском языке
   function ru($a) { print "<p><font color=$a>Здравствуйте!</font>"; }
// Приветствие на английском языке
   function en($a) { print "<p><font color=$a>Hello!</font>"; }
   function fr($a) { print "<p><font color=$a>Bonjour!</font>"; }
   function de($a) { print "<p><font color=$a>Guten Tag!</font>"; }
   
$color="";
if(isset($_GET['lang'])){
    $lang = $_GET['lang'];
    if(isset($_GET['color']))
    $color = $_GET['color'];
    $lang($color);
}
else print "enter data to adress line";

    



?>
</body> </html>
