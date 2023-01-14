<?php
include 'connectDb.php';
if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $passwd=$_POST['passwd'];
    if(empty($nama) || empty($username) || empty($passwd)) {	
			
		if(empty($nama)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($username)) {
			echo "<font color='red'>Username field is empty.</font><br/>";
		}
		
		if(empty($passwd)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}		
	} else {	
        $sql="insert into `userdosen` (nama,username,passwd) values ('$nama','$username','$passwd')";
        $result=mysqli_query($conn,$sql);
		header("Location: logindosen.php");
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Registrasi Dosen</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">Horizon Journal Systems</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">

                    <div class="dropdown">
                        <div class="btn-group">
                            <button style="border-radius:1rem; padding:1rem;"
                                class="btn btn-outline-warning btn-sm dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                LOGIN
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="logindosen.php">Login Dosen</a></li>
                                <li><a class="dropdown-item" href="loginLp.php">Login Lembaga Peneliti</a></li>
                                <li><a class="dropdown-item" href="loginketua.php">Login Ketua</a></li>
                            </ul>
                        </div>
                        </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <section class="page-section" id="contact">
                    <div class="container px-4 px-lg-5">
                        <h3>REGISTRASI DOSEN</h3>
                        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">

                            <div class="col-lg-6">

                                <form method="post">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="name" type="text" name="nama"
                                            data-sb-validations="required" />
                                        <label for="name">Nama Lengkap</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="name" type="text" name="username"
                                            data-sb-validations="required" />
                                        <label for="name">Username</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" type="password" name="passwd"
                                            data-sb-validations="required,email" />
                                        <label for="email">Password</label>
                                    </div>
                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-xl" id="submit" name="submit" value="submit"
                                            type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </header>
    <!-- Contact-->

    <!-- Footer-->
    <footer class="bg-light py-5">
                        <div class="container px-4 px-lg-5">
                            <div class="small text-center text-muted">Copyright &copy; 2022 - <b>SIPPkM</b> STMIK
                                Horizon Karawang</div>
                        </div>
                    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>