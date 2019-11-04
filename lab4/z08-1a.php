<html> <head>
<title> Листинг 10-1. Простая HTML-форма </title> 
</head> <body> 
<!--
Форма для задания цвета через переменную $bg. 
Ее использование — в скрипте ls10-2.php
-->
<p><b>Выберите горизонтальное расположение:</b>
<form action="ls10-2.php" method="GET">
<p><input type="radio" name="bg" value="left">cлева
<p><input type="radio" name="bg" value="center">по центру
<p><input type="radio" name="bg" value="right">справа
<p><b>Выберите вертикальное расположение:</b>
<p><input type="checkbox" name="bg" value="top">сверху
<p><input type="checkbox" name="bg" value="middle">посередине
<p><input type="checkbox" name="bg" value="bottom">внизу
<p><input type="submit" value="Выполнить">
</form>
</body> </html>
