<?php
function OpenCon(){
    $user = "mysql";
    $pass = "mysql";
    $db = "sample";
    $conn = new mysqli("127.0.0.1:3305", $user, $pass,$db) or die("Connect failed: %s\n". $conn -> error);
    return $conn;
};
?>

