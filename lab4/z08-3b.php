<html> <head>
<title> Листинг 10-4. Обработка данных формы 
        из листинга 10-3 </title> </head> <body> 
<?php  
$trues=array(6,9,4,1,3,2,5,8,7);
$user=$_POST['user'];
$asks=$_POST['ask'];

$rez=0;
for($i=0;$i<9;$i++){
      if($trues[$i]==$asks[$i])
      $rez++;
}
print $user;
print "<br>Количество правильных ответов:".$rez."<br>";
switch($rez){
     case   9:print "великолепно знаете географию";break;
     case 8: print"отлично знаете географию";break;
     case 7: print"очень хорошо знаете географию"; break;
     case 6:print "хорошо знаете географию"; break;
case 5: print"удовлетворительно знаете географию";break;
case 4: print"терпимо знаете географию";break;
case 3:print "плохо знаете географию";break;
case 2: print"очень плохо знаете географию";break;
default: 
print"вообще не знаете географию";
 break;
        
}


?>
 </body> </html> 
