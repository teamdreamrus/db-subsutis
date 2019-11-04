<?php
/* Заменить цикл foreach в листинге ls10-4.php
   Листинг 10-7. Независимое от метода чтение данных 
*/
$user=$_POST["user"];
print "<p>$user, оказывается, вы предпочитаете";
print "<ul>\n";
$HTTP_POST_VARS=$_POST['hobby'];
$PARAMS = (isset($HTTP_POST_VARS))
? $HTTP_POST_VARS : $HTTP_GET_VARS;
foreach ($PARAMS as $key=>$value)
{  #1
  if (gettype($value) == "array") 
    {  #2
     print "$key = <br>\n";
     foreach ($value as $v) 
     print "$v<br>";
    }  #2
    else
        {print "$key = $value<br>\n";
        }
}  #1
?>
