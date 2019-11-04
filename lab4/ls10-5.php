<html> <head>
<title> Листинг 10-4. Обработка данных формы 
        из листинга 10-3 </title> </head> <body> 
<?php
$user=$_POST["user"];
print "<p>$user, оказывается, вы предпочитаете";
print "<ul>\n";
$HTTP_POST_VARS=$_POST['hobby'];
foreach ($HTTP_POST_VARS as $key=>$value) {
    print "$key = $value<br>\n";
}
print "</ul>\n";
?>
 </body> </html> 


