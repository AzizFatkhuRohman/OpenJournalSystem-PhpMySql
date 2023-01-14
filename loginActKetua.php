<?php
	session_start();
include 'connectDb.php';
if(isset($_POST["loginketua"])){
		$username = $_POST['username'];
		$passwd = $_POST['passwd'];
 
		$query = mysqli_query($conn, "SELECT * FROM userketua WHERE username='$username' && passwd='$passwd'");
		$count=mysqli_num_rows($query);
 
		if($count > 0){
			$res=mysqli_fetch_assoc($query);
			$_SESSION['username']=$res['username'];
			$_SESSION["loginketua"] = true;
			header("location: dashboardketua.php");
		}else{
			echo "<script>alert ('Username atau Password anda Salah')</script>";
		}
}
?>