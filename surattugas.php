<?php
session_start();
if (!isset($_SESSION['loginLp'])) {
    header("Location: loginLp.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Input Surat Tugas</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="./css/dashLp.css" />
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
                <div class="text-center">
                    Ayo Kirim Surat Tugasmu
                </div>
                <form method="POST" action='surattugasAct.php' class="formProposal" enctype="multipart/form-data"
                    style='text-align:center; margin:1rem;'>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama dosen"
                            name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Email Penerima" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Judul Proposal</label>
                        <input class="form-control" id="exampleFormControlTextarea1" rows="3" name="judul">
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Unggah Surat Tugas</label>
                        <input class="form-control" type="file" id="formFile" name="surat">
                    </div>
                    <div class="mb-3">
                        <div class="inputProposal">
                            <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Pengabdian atau Penelitian" name="kategori">
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-outline-primary" name="submit"><i
                                class='fa fa-paper-plane'></i></button>
                    </div>
                </form>
            </div>

            <!-- End of Main Content -->
            <section id='content-wrapper' style='margin-top:6.2rem;'>
            <footer class="bg-light py-5">
                        <div class="container px-4 px-lg-5">
                            <div class="small text-center text-muted">Copyright &copy; 2022 - <b>SIPPkM</b> STMIK
                                Horizon Karawang</div>
                        </div>
                    </footer>
            </section>
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