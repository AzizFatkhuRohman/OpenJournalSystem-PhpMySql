<?php
include 'connectDb.php';
session_start();
if (!isset($_SESSION['loginLp'])) {
    header("Location: loginLp.php");
}
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM proposalpengabdian WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$email = $res['email'];
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

    <title>Di Revisi</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="./css/dashLp.css"/>
    <link href="css/dashboard.min.css" rel="stylesheet">

</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <!-- <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <!-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashAuthor.php">
                <div class="sidebar-brand-text mx-3">DOSEN</div>
            </a> -->

            <!-- Divider -->
            <!-- <hr class="sidebar-divider my-0"> -->

            <!-- Nav Item - Dashboard -->
            <!-- <li class="nav-item active">
                <a class="nav-link" href="dashDosen.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li> -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Aktifitas</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Unggah Kegiatanmu</h6>
                        <a class="collapse-item" href="unggahproposal.php">Unggah Proposal</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Tables -->
            

            <!-- Divider -->
            <!-- <hr class="sidebar-divider d-none d-md-block"> -->

            <!-- Sidebar Toggler (Sidebar) -->
            <!-- <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div> -->

            <!-- Sidebar Message -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <div style='padding-left:2rem;'>
                        <div>
                        <button type="button" class="btn btn-outline-success"><a style="text-decoration:none; color:black;" href="dashLp.php">Dashboard</a></button>
                        </div>
                    </div>
                    <div style='padding-left:1rem;'>
                    <div>
                        <button type="button" class="btn btn-outline-primary"><a style="text-decoration:none; color:black;" href="surattugas.php">Input Surat Tugas</a></button>
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
                <form action="revisiproposalpengabdianAct.php" method="post" style="justify-content: center;
                    border-radius: 1rem;
                    text-align: center;
                    margin: 1rem;
                    background-color: rgb(231, 231, 231);
                    color: black;
                    padding: 5px;">
                    <div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">email</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="email"
                    value="<?php echo $email?>"
                    style="background-color: rgb(199, 199, 199);"
                    >
                    </div>
                    <div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Di Revisi</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value=" Di Revisi" name="hasil"
                    style="background-color: rgb(199, 199, 199);"
                    >
                    </div>
                    </div>
                    <div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alasan</label>
                    <textarea type="text" class="form-control" id="exampleFormControlInput1" name="alasan"></textarea>
                    </div>
                    </div>
                    
                    </div>
                <button type="submit" name="submit" class="btn btn-outline-primary" style="margin: 2px;"><i class='fa fa-paper-plane'></i></button>
                </div>
                </form>
                
                
            <!-- End of Main Content -->

            <section id='content-wrapper' style='margin-top:12.2rem;'>
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
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
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