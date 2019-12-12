<?php
include("db.php");
include("functions.php");

$color = $_POST['color'];
$sex = $_POST['sex'];
$size = $_POST['size'];

$sql = "INSERT INTO reservation (color, sex, size) VALUES ('$color', '$sex', '$size')";

$result = $conn->query($sql);
var_dump($sql);

if($result){
    echo 'gereserveerd';
}else{
    echo "dumbass";
}