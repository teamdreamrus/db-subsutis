<?php
 $file_array = file("notebook_br31.txt");
 $res= "";
 print "<table border='1' cellpadding='10'>";
foreach($file_array as $value){
    $res = "<td>".rtrim($value,"| \n");
    $res = str_replace("|","</td><td>",$res);
    preg_match("/[\S]+\@[\S]+/",$res,$mathes);
   $res= preg_replace("/[\S]+\@[\S]+/","<a href='mailto:".$mathes[0]."'>".$mathes[0]."</a>",$res); 
print ("<tr>".$res."</tr>");
}
print "</table>";
print "Last changes: ".date("d-m-Y H:i:s",filemtime("notebook_br31.txt"));
?>