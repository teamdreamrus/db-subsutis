<html> <head>
<title> Листинг 11-4. Использование функции mysql_query()
        для изменения данных в таблице 
</title> </head> <body> 
<form action="<? print $PHP_SELF ?>" 
            method='POST'>
<?php
/*$user = "pGG";  // здесь GG – номер группы
$pass = "pGG"; $db = "sample"; $table = "domains_brNN";
$conn = mysql_connect("localhost", $user, $pass); 
if (! $conn ) die("Нет соединения с MySQL");
mysql_select_db($db, $conn) 
or die ("Нельзя открыть $db"); 
if (isset($domain) && isset($id)) 
   {$query = "UPDATE $table 
              SET domain='$domain'
              WHERE id='$id' "; 
    $result = mysql_query($query); 
    if (! $result) die 
       ("Нельзя обновить: ".mysql_error()); 
    print"<p>Таблица $table обновлена: "
   .mysql_affected_rows()." строк изменено";
   } */
   function ChangeFieldID($conn, $fieldName, $value ,$id){
    $table = "notebook_br31";
    $query = "UPDATE $table 
    SET $fieldName='$value'
    WHERE id='$id' "; 
  $result=mysqli_query($conn, $query);
    if ($result) {
      
        return true; // Вроде ковычки забыли
      }
  else {
    echo "Error: " . $query . "" . mysqli_error($conn);
}
}
   function selectID($conn, $id){
    $table = "notebook_br31";
    $query = "SELECT * FROM $table WHERE ID=$id"; 
  $result=mysqli_query($conn, $query);
    if ($result) {
      
        return $result; // Вроде ковычки забыли
      }
  else {
    echo "Error: " . $query . "" . mysqli_error($conn);
}

}
   function selectAll($conn){
          $table = "notebook_br31";
          $query = "SELECT * FROM $table"; 
        $result=mysqli_query($conn, $query);
          if ($result) {
            
              return $result; // Вроде ковычки забыли
            }
        else {
          echo "Error: " . $query . "" . mysqli_error($conn);
      }
      
   }
   function connect(){
      $user = "mysql"; 
      $pass = "mysql";
      $db = "sample";
      $conn = new mysqli("127.0.0.1:3305", $user, $pass,$db) or die("Connect failed: %s\n". $conn -> error);
      if (!$conn) {
        printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
        exit();
    }else return $conn;
   }
   
$conn=connect();
   $result=selectAll($conn);
   $num_rows = mysqli_num_rows($result);
// количество записей в запросе
print "<P>В таблице $table содержится $num_rows строк"; 
$num_fields = mysqli_num_fields($result); 
// количество столбцов в запросе
print "<p><table border=1>\n"; 
print "<tr>\n";
for ($x=0; $x < $num_fields; $x++)
	{
     $name = mysqli_fetch_field($result); 
	 print "\t<th>".$name->name."</th>\n";
     // печатаем имя $x-того столбца
  }
  print "\t<th>исправить</th>\n";
	 print "</tr>\n";
while ($a_row = mysqli_fetch_row($result))
    {      // печатаем содержимое столбцов
     print "<tr>\n";
     /*for($i=0; $i<count($a_row);$i++){
      print "\t<td>$field</td>\n"; 
      if()
     }*/

     foreach ($a_row as $field)  // $a_row – массив
     print "\t<td>$field</td>\n"; 
     print "\t<td><input type='radio' name='idChange' value=".$a_row[0]."></td>\n";
     print "</tr>\n";
    }
print "</table>\n"; 


?>
<p><input type="submit" value="Выбрать">
</form>
<form action="<? print $PHP_SELF ?>" 
            method='POST'> 
<?php

if(!empty($_POST["idChange"])){
  $idChange = $_POST["idChange"];
  print "<input type=hidden name=idtoChange value=$idChange> ";
  $conn = connect();
  $result = selectID($conn,$idChange);
  $num_col = mysqli_num_fields($result); 
  $col_name = mysqli_fetch_field($result); 
  $a_row = mysqli_fetch_row($result);
  print "<select name='selectRfield'>";
  for ($x=1; $x < count($a_row); $x++){
    $col_name = mysqli_fetch_field($result); 
    print "<option  value=".$col_name->name.">".$a_row[$x]."</option>"; 
  }
  print "</select>";
  print "введите новое значение <input type='text' name='newValue'>";
  
  print "<p><input type='submit' value='Заменить'>";
}

if(!empty($_POST["idtoChange"]) and !empty($_POST["selectRfield"]) and !empty($_POST["newValue"])){
  $conn = connect();
  $idToChange = $_POST["idtoChange"];
  $field=$_POST["selectRfield"];
  $newVal=$_POST["newValue"];
if(ChangeFieldID($conn,$field,$newVal,$idToChange)==true)
echo "<meta http-equiv='refresh' content='0'>";
}
    
?>
</form> 
</body> </html>