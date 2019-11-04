<html> <head> 
<title> Листинг 11-2. Добавление в базу данных 
        информации, введенной пользователем
</title> </head> <body> 
<?php 
function CloseCon($conn)
{
    $conn -> close();
}
function Add_to_database($name, $city, $adress, $date, $mail)
   {  #1
      $user = "mysql"; 
      $pass = "mysql";
      $db = "sample";
      $conn = new mysqli("127.0.0.1:3305", $user, $pass,$db) or die("Connect failed: %s\n". $conn -> error);
      if (!$conn) {
         printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
         exit();
     }else print "<br>connection is work<br>";
     $table = "notebook_br31";
      $query = "INSERT INTO $table (NAME, CITY, ADDRESS, BIRTHDAY, MAIL)
          VALUES('$name', '$city', '$adress', '$date', '$mail')"; 
    if (mysqli_query($conn, $query)) {
      echo "Insert successfully<br>";
   } else {
      echo "Error: " . $query . "" . mysqli_error($conn);
   }
   }  #1
function Write_form()
   {  #2
    global $PHP_SELF;
    print "<form action='$PHP_SELF' 
            method='POST'>\n";
    print "<p>Введите фамилия и имя [*]: \n"; print "<input type='text' name='name'> ";
    print "<p>Введите город: \n"; print "<input type='text' name='city'> ";
    print "<p>Введите адрес: \n"; print "<input type='text' name='adress'> ";
    print "<p>Введите дату рождения формате ГГГГ-ММ-ДД: \n"; print "<input type='text' name='date'> ";
    print "<p>Введите e-mail [*]: \n"; print "<input type='text' name='mail'> ";
    print "<p><input type='submit' value='Записать! '>\n
           </form>\n";
   }  #2$day=$_POST["day"];
   $name = $_POST["name"];
   $city = $_POST["city"];
   $adress = $_POST["adress"];
   $date = $_POST["date"];
   $mail = $_POST["mail"];
    // Ввод данных в таблицу
if (!empty($_POST["name"]) and !empty($_POST["mail"]) )
   {  #3
    // Обязательно проверить, что вводит пользователь! 
     Add_to_database($name, $city, $adress, $date, $mail); 
   
   }  #3
else Write_form(); 
?> </body> </html>
