<?php 
require ("../koneksi.php");
// error_reporting(0);
session_start();
if(!isset($_SESSION['username'])){
    $_SESSION['msg'] = 'anda harus log in  untuk mengakses halaman ini';
    header('Location:../login.php');
}
if (isset($_POST["update"])) {

    $kodeBuku = $_POST['kode_buku'];
    $namaBuku = $_POST['nama_buku'];
    $namaPen = $_POST['nama_penulis'];
    $desK = $_POST['deskripsi_buku'];
    $jumHal = $_POST['jumlah_halaman'];
    $gaM = $_POST['gambar'];
    $linkPdf = $_POST['link_pdf'];
    
    // update data ke database
    mysqli_query($koneksi, "UPDATE buku SET kode_buku='$kodeBuku', nama_buku='$namaBuku' , nama_penulis='$namaPen' , deskripsi_buku='$desK' , 
    jumlah_halaman='$jumHal' , gambar='$gaM' , link_pdf='$linkPdf' WHERE kode_buku='$kodeBuku'");
    header("location:book_tables.php");
    } 
$sesName = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Skoolen | Data Buku</title>
    <link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Skoolen</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data User</span></a>
                    </li>
                    <li class="nav-item active">
                <a class="nav-link" href="book_tables.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Data Buku</span></a>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-video"></i>
                    <span>Video</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="video_binggris.php">Kategori</a>
                        <a class="collapse-item" href="video_matematika.php">Data Video</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$sesName;?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <div class="col-auto">
                        <a href="book_tables.php"><button type="submit" class="btn btn-danger mb-3">Kembali</button></a>
                </div>
                <!-- End of Topbar -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Input Buku</h6>
                        </div>
                        <div class="card-body">
                        <?php
                        include '../koneksi.php';
					    $buku = $_GET['kode_buku'];
	                    $data = mysqli_query($koneksi,"SELECT * FROM buku WHERE kode_buku='$buku'");
	                    while($row = mysqli_fetch_array($data)){
		                ?>
                            <form action="edit_buku.php" method="POST">
                        <div class="mb-3">
                        <label class="form-label">Kode Buku</label>
                        <input class="form-control" type="text" name="kode_buku" value="<?php echo $row['kode_buku']; ?>">
                        </div>
                        <div class="mb-3">
                        <label class="form-label">Nama Buku</label>
                        <input class="form-control" type="text" name="nama_buku" value="<?php echo $row['nama_buku']; ?>">
                        </div>
                        <div class="mb-3">
                        <label class="form-label">Nama Penulis</label>
                        <input class="form-control" type="text" name="nama_penulis" value="<?php echo $row['nama_penulis']; ?>">
                        </div>
                        <div class="mb-3">
                        <label class="form-label">Deskripsi Buku</label>
                        <input class="form-control" type="text" name="deskripsi_buku" value="<?php echo $row['deskripsi_buku']; ?>">
                        </div>
                        <div class="mb-3">
                        <label class="form-label">Jumlah Halaman</label>
                        <input class="form-control" type="text" name="jumlah_halaman" value="<?php echo $row['jumlah_halaman']; ?>">
                        </div>
                        <div class="mb-3">
                        <label class="form-label">Gambar</label>
                        <input class="form-control" type="text" name="gambar" value="<?php echo $row['gambar']; ?>">
                        </div>
                        <div class="mb-3">
                        <label class="form-label">Link PDF</label>
                        <input class="form-control" type="text" name="link_pdf" value="<?php echo $row['link_pdf']; ?>">
                        </div>
                        <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3" name="update">Update</button>
                        </div>
                        </form>
                        <?php
                        }
                        ?>
                        </div>
                    </div>
            </div>
            </div>	
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Skoolen 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
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
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
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