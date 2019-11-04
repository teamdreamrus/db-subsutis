<html> <head>
<title> Листинг 9-5. Добавление элементов к массиву 
</title> </head> 
<body> 
<!--
    <style>
TABLE {
    font-size: 1;
   }
</style>
-->
<?php 




   print "<table border=1 cellpadding=0>\n";

   
   for($y=1;$y<=30;$y++){
       print "<tr>\n"; 
       for($x=1;$x<=30;$x++){
           $rez=$x*$y;
            $ost=$rez % 7;
           $color="";
           switch($ost){
               case 1:
               $color = "aqua";
               break;
               case 2:
               $color = "blue";
               break;
               case 3:
               $color = "yellow";
               break;
               case 4:
               $color = "purple";
               break;
               case 5:
               $color = "red";
               break;
               case 6:
               $color = "lime";
               break;
            
               default:
               $color = "";
               break;
           }

           
           print "\t<td hieght='15px' width='14px' bgcolor=$color>&nbsp;</td>";
           
       }
       print "</tr>\n";
      
   }
   print "</table>"; 
   






?>
</body> </html>
