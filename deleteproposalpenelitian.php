<?php
//including the database connection file
include("connectDb.php");
session_start();
if (!isset($_SESSION['loginLp'])) {
    header("Location: loginLp.php");
}
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM proposalpenelitian WHERE id=$id");
header("Location:dataproposalpenelitian.php");
?>