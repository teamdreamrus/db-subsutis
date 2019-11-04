 <html> <head>
<title> Листинг 10-2. Чтение данных формы 
        из листинга 10-1 </title> </head>
      
         <body>
           
        <p><b>Выберите горизонтальное расположение:</b>
<form action="<? print $PHP_SELF ?>"  method="GET">
<p><input type="radio" name="a" value="left" >cлева
<p><input type="radio" name="a" value="center">по центру
<p><input type="radio" name="a" value="right">справа
<p><b>Выберите вертикальное расположение:</b>
<p><input type="checkbox" name="va" value="top" >сверху
<p><input type="checkbox" name="va" value="middle">посередине
<p><input type="checkbox" name="va" value="bottom">внизу
<p><input type="submit" value="Выполнить">
</form>
<?php 
/* Из файла ls10-1.php предается переменная $bg с названием цвета. Здесь она используется для задания цвета посещенной гиперссылки и цвета фона маленькой таблицы (прямоугольника) 
*/
$a=$_GET["a"];
$va=$_GET["va"];
if (!isset ($a)) {$a = "left";}
if (!isset ($va)) {$va = "top";}
print "<body text=black link=white 
        alink=maroon >\n";
print "<p><table border=1 width=100 height=100 align=center>\n";
print "<tr> <td align=$a valign=$va>Текст</td>
</tr></table>\n";
print "<p align=center><a href='z08-1a.php'>назад</a>";
?>
</body> </html> 
