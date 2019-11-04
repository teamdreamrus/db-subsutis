<html> <head>
<title> Листинг 1-2. Документ, содержащий РНР-команды 
        и HTML-текст </title> 
</head> <body> 
<p><i>Таблица умножения</i> 
<?php
print "<table border=1 cellpadding=5>\n";

$color="<font color='blue'>";
for($y=0;$y<11;$y++){
    print "<tr>\n"; 
    for($x=0;$x<11;$x++){
        print "\t<td>";
        if($x+$y==0)
        print "<font color=red>+</font>";
        elseif($x==0)
        print "<font color=blue>".($y)."</font>";
        elseif($y==0)
        print "<font color=blue>".($x)."</font>";
        else {
            print $y+$x;
            print "</td>";
        }
    }
    
   
}
print "</table>"; 


?>

</body> </html>
