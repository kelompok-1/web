<?php
include '../book/connection.php';
$queryResult=$connect->query("SELECT * FROM buku");

$result=array();
while($rowData=$queryResult->fetch_assoc()){
    $result[]=$rowData;
}
echo json_encode($result);
?>