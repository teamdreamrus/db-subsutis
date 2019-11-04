<?php
$list_sites=array("yandex.ru","rambler.ru","google.com","yahoo.com","altavista.com");
$day=$_POST["day"];
if ($day != "") {
    header( "Location: http://www.".$day );
    exit;
}
else { // начало блока else
?> 
<html> <head>
<title> Листинг 10-9. Посылка заголовка с помощью
        функции header() </title> </head> <body>
<form action = "<? print $PHP_SELF ?>" method="post">

<?php
$i=0;
$x=count($list_sites);
print '<select  name="day">
<option value = "">Поисковые системы';
while($i!=$x){
    print "<option value=".$list_sites[$i].">".$list_sites[$i];
    $i++;
}

print '</select>
<input type="submit" value="Перейти">
</form>';
} // конец блока else
?>
</body> </html> 
