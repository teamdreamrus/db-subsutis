<html> <head>
<title> Листинг 11-1. Добавление записи в таблицу 
</title> </head> <body>
<?php
function OpenCon(){
    $user = "mysql"; 
    $pass = "mysql";
    $db = "sample";
    $conn = new mysqli("127.0.0.1:3305", $user, $pass,$db) or die("Connect failed: %s\n". $conn -> error);
    return $conn;
}
function CloseCon($conn)
{
    $conn -> close();
}
$conn=OpenCon();
if (!$conn) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}else print "<br>connection is work<br>";
$table = "notebook_br31";
$dropSql= "DROP TABLE IF EXISTS $table";
if (mysqli_query($conn, $dropSql)) {
    echo "Table drop successfully<br>";
 } else {
    echo "Error: " . $dropSql . "" . mysqli_error($conn);
 }
$createSql = "CREATE TABLE $table(
ID INT NOT NULL  AUTO_INCREMENT, 
NAME VARCHAR (50), 
CITY VARCHAR (50),
 ADDRESS VARCHAR (50), 
 BIRTHDAY  DATE,
 MAIL VARCHAR (50), 
 PRIMARY KEY (ID));";
 if (mysqli_query($conn, $createSql)) {
    echo "Table created successfully<br>";
 } else {
    echo "Error: " . $createSql . "" . mysqli_error($conn);
 }
CloseCon($conn);
// вставить создание таблицы 
/*$query = "INSERT INTO $table (domain, myname, mail)
   VALUES('123abc.com', 'abc', 'abc@mail.ru')"; 
mysql_query($query, $conn)
     or die ("Нельзя добавить данные в таблицу 
             $table: " .mysql_error()); 
print "<p>Данные в таблицу $table дбавлены";
mysql_close($conn); */
?> </body> </html> 
