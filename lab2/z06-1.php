<html> <head>
<title> Листинг 1-2. Документ, содержащий РНР-команды 
        и HTML-текст </title> 
</head> <body> 
<p><i>Таблица умножения</i> 
<?php
print "<table border=1 cellpadding=5>\n";
$y=1;
$color="\t<td bgcolor='blue'>";
while($y<11){
    print "<tr>\n"; 
    $x=1;
    while($x<11){
        if($x==$y)
            print $color;
            else
            print "\t<td>"; 
           print ($x*$y); 
           print "</td>\n"; 
           $x++;
    }
    
    $y++;
}
print "</table>"; 


?>

</body> </html>
