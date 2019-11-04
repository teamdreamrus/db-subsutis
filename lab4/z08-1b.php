<html> <head>
<title> Листинг 10-2. Чтение данных формы 
        из листинга 10-1 </title> </head> <body>
<?php 
/* Из файла ls10-1.php предается переменная $bg с названием цвета. Здесь она используется для задания цвета посещенной гиперссылки и цвета фона маленькой таблицы (прямоугольника) 
*/
print "<body text=black link=white 
        alink=maroon vlink=$bg>\n";
print "<p><table border=1 width=100 height=100 align=center>\n";
print "<tr> <td align=right bgcolor=$bg>Текст</td>
</tr></table>\n";
print "<p align=center><a href='z08-1a.php'>назад</a>";
?>
</body> </html>
