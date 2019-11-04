<html> <head>
<title> Листинг 10-3. HTML-форма с выбором из списка 
</title> </head> <body>
<!--
Здесь в скрипт ls10-4.php передаются: 
1) переменная $user 
2) массив hobby[] со значениями, которые были выбраны 
   в форме
-->
<form action="z06-5.php" method="POST">
<p>Введите email
<p><input type="text" name="mail">
<p><input type="submit" value="Отправить">
</form>
</body> 
<?php  
if (empty($_POST['mail'])) {echo "Введите свой майл. Поле пустое";}
?>
</html>
