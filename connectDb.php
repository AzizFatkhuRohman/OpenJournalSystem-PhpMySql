<?php
$conn = new mysqli('localhost','root','','ojs');
if(!$conn){
    die(mysqli_error($conn));
}
?>