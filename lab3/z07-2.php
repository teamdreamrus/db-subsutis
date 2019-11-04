<html> <head>
<title> Листинг 9-5. Добавление элементов к массиву 
</title> </head> 
<body> 
<?php 


$kvd = array();
$treug = array();

for($i=1;$i<=30;$i++){
    array_push($treug,($i*($i+1)/2));
    array_push($kvd,($i*$i));
}


   print "<table border=1 cellpadding=5>\n";

   
   for($y=1;$y<=30;$y++){
       print "<tr>\n"; 
       for($x=1;$x<=30;$x++){
           $sum=$x*$y;
           $color="";
           
           if(($x==0) and ($y==0)) {
               $color="red";
               $sum="+";
               print "\t<td bgcolor=$color>".$sum."</td>";
               continue;
           }
           elseif($x==0 and $y!=0)
           $sum=$y;
           elseif($x!=0 and $y==0)
           $sum=$x;

           if(in_array($sum,$kvd) and in_array($sum,$treug))
            $color="red";
           elseif(in_array($sum,$kvd))
           $color="blue";
           elseif(in_array($sum,$treug))
           $color="green";
           
           print "\t<td bgcolor=$color>".$sum."</td>";
           
       }
       print "</tr>\n";
      
   }
   print "</table>"; 
   






?>
</body> </html>
