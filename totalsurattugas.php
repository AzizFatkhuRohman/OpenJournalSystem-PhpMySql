<?php
include 'connectDb.php';
session_start();
if (!isset($_SESSION['loginLp'])) {
    header("Location: loginLp.php");
}
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="js/dashDosen.js"></script>

    <title>Dashboard Lembaga Peneliti</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="css/dashAuthor.css">
    <link href="css/dashboard.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <div style='padding-left:2rem;'>
                        <div>
                            <button type="button" class="btn btn-outline-success"><a
                                    style="text-decoration:none; color:black;" href="dashLp.php">Dashboard</a></button>
                        </div>
                    </div>
                    <div style='padding-left:1rem;'>
                        <div>
                            <button type="button" class="btn btn-outline-primary"><a
                                    style="text-decoration:none; color:black;" href="surattugas.php">Input Surat
                                    Tugas</a></button>
                        </div>
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <button
                                    class='btn btn-outline-info'><?php echo "Hallo ".$_SESSION['username']?></button>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="logout.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div style="text-align:center; justify-content:center; margin:2rem">
                    <h5>Total Surat tugas</h5>
                    <div>
                        <form method="post">
                            <div style='margin-bottom:3px;'>
                                <input type="text" name='input' style="width:30rem;">
                            </div>
                            <div>
                                <input type="submit" class='btn btn-primary' name='cari' value='cari'>
                            </div>
                        </form>
                    </div>
                    <div class="text-center">
                        <div class="componenCard"
                            style="margin: 1rem; justify-content: center; display: flex; flex-wrap: wrap;">
                            <table class="table">
                                <thead>
                                    <tr>

                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">File</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                        $no=1;
                                        $cari=$_POST['cari'];
                                        $input=$_POST['input'];
                                        if($cari){
                                            if($input ==""){
                                                $result = mysqli_query($conn, "SELECT * FROM surattugas ORDER BY id DESC");
                                            }else if($input !=""){
                                                $result = mysqli_query($conn, "SELECT * FROM surattugas WHERE nama LIKE '%$input%' OR email LIKE '%$input%'
                                                OR judul LIKE '%$input%' OR surat LIKE '%$input%' OR kategori LIKE '%$input%'");
                                            }
                                        }else{
                                            $result = mysqli_query($conn, "SELECT * FROM surattugas ORDER BY id DESC");
                                        }
                                        
                                        while($res = mysqli_fetch_assoc($result))
                                        {
                                        ?>
                                        <td><?php echo $res['nama']?></td>
                                        <td><?php echo $res['email']?></td>
                                        <td><?php echo $res['judul']?></td>
                                        <td><?php echo $res['surat']?></td>
                                        <td><?php echo $res['kategori']?></td>
                                        <td>
                                            <?php
                                            echo "<a href=\"detailsurat.php?id=$res[id]\" class='btn btn-outline-info'><i class='fa fa-eye'></i></a>"; 
                                            echo "<a href=\"deletesurattugas.php?id=$res[id]\" class='btn btn-outline-danger'><i class='fa fa-trash'></i></a>"; 
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <!-- End of Main Content -->

                <section id='content-wrapper' style='margin-top:8.5rem'>
                <footer class="bg-light py-5">
                        <div class="container px-4 px-lg-5">
                            <div class="small text-center text-muted">Copyright &copy; 2022 - <b>SIPPkM</b> STMIK
                                Horizon Karawang</div>
                        </div>
                    </footer>
                </section>
                <!-- End of .container -->
                <!-- End of Page Wrapper -->

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="login.html">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap core JavaScript-->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin-2.min.js"></script>

                <!-- Page level plugins -->
                <script src="vendor/chart.js/Chart.min.js"></script>

                <!-- Page level custom scripts -->
                <script src="js/demo/chart-area-demo.js"></script>
                <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>