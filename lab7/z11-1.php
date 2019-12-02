<?php
    $filename = "notebook_br31.txt";
    print file_exists($filename)?"file is exist":"file is not exist";
    print "<br>";
    $fp = fopen($filename,"w") 
    or die("Нельзя открыть $filename");

    $user = "mysql"; 
    $pass = "mysql";
    $db = "sample";
    $conn = new mysqli("127.0.0.1:3305", $user, $pass,$db) or die("Connect failed: %s\n". $conn -> error);
    if (!$conn) {
       printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
       exit();
   }else print "<br>connection is work<br>";
   $table = "notebook_br31";
    $query = "SELECT * FROM $table"; 
  $result=mysqli_query($conn, $query);
    if ($result) {
      
          echo "Query is successfully"; 
      }
  else {
    echo "Error: " . $query . "" . mysqli_error($conn);
 }

 $num_rows = mysqli_num_rows($result);
 
$num_fields = mysqli_num_fields($result); 

function DateCheck($str){
    if (preg_match("/^((((19|[2-9]\d)\d{2})\-(0[13578]|1[02])\-(0[1-9]|[12]\d|3[01]))|(((19|[2-9]\d)\d{2})\-(0[13456789]|1[012])\-(0[1-9]|[12]\d|30))|(((19|[2-9]\d)\d{2})\-02\-(0[1-9]|1\d|2[0-8]))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))\-02\-29))$/",$str)) {
        return date("d-m-Y",strtotime($str));;
    } else {
        return $str;
    }
}

   $strToFile="";

  
 while ($a_row = mysqli_fetch_row($result))
  {     
   foreach ($a_row as $field){
    $strToFile = $strToFile. DateCheck($field) ." | ";
   }


    $strToFile = $strToFile . "\n";
  }
  fwrite($fp,$strToFile);

fclose($fp);
print "<br>";
$filename = "notebook_br31.txt";
$fp = fopen($filename,"r") or die("Нельзя открыть $filename");
while(!feof($fp)) {
    echo fgets($fp) . "<br>";
  }
  fclose($fp);

?>