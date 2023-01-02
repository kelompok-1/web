<?php
include 'book/connection.php';
$queryResult=$connect->query("SELECT * FROM video order by urutan");

$result=array();
while($rowData=$queryResult->fetch_assoc()){
    $result[]=$rowData;
}
echo json_encode($result);
?>