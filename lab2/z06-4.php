<html> <head>
<title> Листинг 8-4. Доступ к глобальной переменной 
</title> </head> <body> 
<form action = "z06-4.php" method = "POST"><input name = "ent"><input type = "submit"></form>
<?php


$size =0;
if(isset($_POST['ent'])){
   $size = $_POST['ent'];

    for($i=0;$i<$size;$i++){
   
    print_r("<input>");
    
    
   // print "<p>Выходной: $days[$i] ";
   
}
} 
?> </body> </html>
