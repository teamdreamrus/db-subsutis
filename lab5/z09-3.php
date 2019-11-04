<html> <head> 
<title> Листинг 11-2. Добавление в базу данных 
        информации, введенной пользователем
</title> </head> <body> 
<?php 
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
        
            echo "Query is successfully"; // Вроде ковычки забыли
        }
    else {
      echo "Error: " . $query . "" . mysqli_error($conn);
   }

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
	 print "</tr>\n";
while ($a_row = mysqli_fetch_row($result))
    {      // печатаем содержимое столбцов
     print "<tr>\n";
     foreach ($a_row as $field)  // $a_row – массив
     print "\t<td>$field</td>\n"; 
     print "</tr>\n";
    }
print "</table>\n"; 
?> </body> </html>
