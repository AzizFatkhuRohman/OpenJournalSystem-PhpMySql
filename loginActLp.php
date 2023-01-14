<?php
	session_start();
include 'connectDb.php';
if(isset($_POST["loginLp"])){
		$username = $_POST['username'];
		$passwd = $_POST['passwd'];
 
		$query = mysqli_query($conn, "SELECT * FROM userlembagapeneliti WHERE username='$username' && passwd='$passwd'");
		$count=mysqli_num_rows($query);
 
		if($count > 0){
			$res= mysqli_fetch_assoc($query);
			$_SESSION['username']=$res['username'];
			$_SESSION["loginLp"] = true;
			header("location: dashLp.php");
		}else{
			echo "<script>alert ('Username atau Password anda Salah')</script>";
		}
}
?>