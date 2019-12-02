<?php
$query = $_SERVER['QUERY_STRING'];
$vars = array();
foreach (explode('&', $query) as $pair) {
    list($key, $value) = explode('=', $pair);
    $vars[] = array(urldecode($key), urldecode($value));
}
$structures = [];
$contents = [];
foreach($vars as $arr){
  foreach( $arr as $key=>$el){
   if($el == "structure"){
      array_push($structures,$arr[$key+1]);
      }
      if($el == "content"){
       array_push($contents,$arr[$key+1]);
      }
  }
}
/*
print_r($structures);
print "<hr>";
print_r($contents);
print "<hr>";
*/

foreach($structures as $struct){



$conn = OpenCon();
$mysql_data_type_hash = array(
    1=>'tinyint',
    2=>'smallint',
    3=>'int',
    4=>'float',
    5=>'double',
    7=>'timestamp',
    8=>'bigint',
    9=>'mediumint',
    10=>'date',
    11=>'time',
    12=>'datetime',
    13=>'year',
    16=>'bit',
    252=>'blob',
    253=>'varchar',
    254=>'char',
    246=>'decimal'
);
 $table = $struct;
 $db = "sample";
 $query = "SELECT * FROM $table";
     $tab_res=mysqli_query($conn, $query) or die(mysqli_error($conn));
//$tab_res = get_tables($conn);
    print "<dl><dd>\n";
   
       print "<h4>$table</h4>\n";
//$tab_rows[0] т.к. работаем только с одной БД
       $query_res = mysqli_query($conn,
                   "SELECT * from $table") or die(mysqli_error($conn));
       $num_fields = mysqli_num_fields($query_res);
       print "<dl><dd>\n";
       for ($x=0; $x<$num_fields; $x++)
        {  #2
         print "<i>";
         print $mysql_data_type_hash[mysqli_fetch_field_direct($query_res, $x)->type];
            // тип поля
         print "</i> <i>";
         print mysqli_fetch_field_direct($query_res, $x)->max_length;
            // max-ая длина поля
         print "</i> <b>";
         print mysqli_fetch_field_direct($query_res, $x)->name;
            // имя поля
         print "</b> <i>";
         $a = get_flag2(mysqli_fetch_field_direct($query_res, $x)->flags);
         if(count($a)>0)
         foreach($a as $r){
           print($r." ");
         }
         
            // флаги поля (not null и т.п.)
         print "</i><br>\n";
        }  #2
         print "</dl>\n";
     
    print "</dl>\n";
print "<hr>";
 
}

foreach($contents as $cont){
$conn = OpenCon();
 $table = $cont;
 $db = "sample";
      $query = "SELECT * FROM $table";
    $result=mysqli_query($conn, $query);
      if ($result) {

           // echo "Query is successfully"; // Вроде ковычки забыли
        }
    else {
      echo "Error: " . $query . "" . mysqli_error($conn);
   }

   $num_rows = mysqli_num_rows($result);
// количество записей в запросе
print "<h4>$table</h4>";
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
print "<hr>";
}

$mysql_data_type_hash = array(
    1=>'tinyint',
    2=>'smallint',
    3=>'int',
    4=>'float',
    5=>'double',
    7=>'timestamp',
    8=>'bigint',
    9=>'mediumint',
    10=>'date',
    11=>'time',
    12=>'datetime',
    13=>'year',
    16=>'bit',
    //252 is currently mapped to all text and blob types (MySQL 5.0.51a)
    253=>'varchar',
    254=>'char',
    246=>'decimal'
);
function get_flag2($flag_value){
    if(1&$flag_value)
        $result[]='NOT_NULL_FLAG';
    if(2&$flag_value)
        $result[]='PRI_KEY_FLAG';
    if(4&$flag_value)
        $result[]='UNIQUE_KEY_FLAG';
    if(16&$flag_value)
        $result[]='BLOB_FLAG';
    if(32&$flag_value)
        $result[]='UNSIGNED_FLAG';
    if(64&$flag_value)
        $result[]='ZEROFILL_FLAG';
    if(128&$flag_value)
        $result[]='BINARY_FLAG';
    if(256&$flag_value)
        $result[]='ENUM_FLAG';
    if(512&$flag_value)
        $result[]='AUTO_INCREMENT_FLAG';
    if(1024&$flag_value)
        $result[]='TIMESTAMP_FLAG';
    if(2048&$flag_value)
        $result[]='SET_FLAG';
    if(32768&$flag_value)
        $result[]='NUM_FLAG';
    if(16384&$flag_value)
        $result[]='PART_KEY_FLAG';
    if(32768&$flag_value)
        $result[]='GROUP_FLAG';
    if(65536&$flag_value)
        $result[]='UNIQUE_FLAG';
    return $result;
}

function get_tables($conn)
{
  $tableList = array();
  $res = mysqli_query($conn,"SHOW TABLES");
  while($cRow = mysqli_fetch_array($res))
  {
    $tableList[] = $cRow[0];
  }
  return $tableList;
}


?>

