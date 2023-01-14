<?php
	session_start();
include 'connectDb.php';
if(isset($_POST["login"])){
	$idUser = $_POST['idUser'];
	$email=$_POST['email'];
		$username = $_POST['username'];
		$passwd = $_POST['passwd'];
 
		$query = mysqli_query($conn, "SELECT * FROM userdosen WHERE username='$username' && passwd='$passwd'");
		$count=mysqli_num_rows($query);
 
		if($count > 0){
			$res= mysqli_fetch_assoc($query);
			$_SESSION['username']=$res['username'];
			$_SESSION['email']=$res['email'];
			$_SESSION["login"] = true;
			header("location: dashDosen.php");
		}else{
			echo "<script>alert ('Username atau Password anda Salah')</script>";
		}
}
?>