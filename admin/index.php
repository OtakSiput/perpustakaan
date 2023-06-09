<?php

session_start();

if (isset($_SESSION["level"])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Perpus Putera Batam</title>

        
        <link href="./assets/css/all.min.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

        
        <link href="./assets/css/sb-admin-2.min.css" rel="stylesheet" />
        
        <link href="./assets/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    </head>

    <body id="page-top" class="sidebar-toggled">
        
        <div id="wrapper">
            
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">
                
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="javascript:void(0)" id="aHome">
                    <div class="sidebar-brand-text rotate-n-15">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="sidebar-brand-icon mx-3">Admin</div>
                </a>
                
                <hr class="sidebar-divider my-0" />

                
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)" id="aAnggota">
                        <i class="fas fa-fw fa-address-card"></i>
                        <span class="font-weight-bold">Anggota</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)" id="aBuku">
                        <i class="fas fa-fw fa-book-open"></i>
                        <span class="font-weight-bold">Buku</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)" id="aTransaksi">
                        <i class="fas fa-fw fa-people-carry"></i>
                        <span class="font-weight-bold">Transaksi</span>
                    </a>
                </li>
                
                <hr class="sidebar-divider my-0" />
                
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)" id="aTentang">
                        <i class="fas fa-fw fa-info"></i>
                        <span class="font-weight-bold">Tentang</span>
                    </a>
                </li>
                <hr class="sidebar-divider mt-0 mb-3" />

                
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
            
            <div id="content-wrapper" class="d-flex flex-column">
                
                <div id="content">
                    
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        
                        <div class="d-none d-xl-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100">
                            <h1>
                                <p class="text-primary">
                                    <b>
                                        Perpustakaan Universitas Putera Batam
                                    </b>
                                </p>
                            </h1>
                        </div>
                        
                        <ul class="navbar-nav ml-auto">
                            
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 ml-2 text-primary initialism font-weight-bold"><?php echo $_SESSION["nama"]; ?></span>
                                    <img class="ml-2 img-profile rounded-circle" src="./assets/img/undraw_profile.svg" />
                                    <button class="btn btn-link d-none d-xl-inline-block rounded-circle">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                </a>
                               
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item text-primary font-weight-bold" href="" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-primary"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    
                    <div class="container-fluid" id="divContent">
                        
                    </div>
                </div>
               

                
                <footer class="sticky-footer bg-white shadow-lg">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>@ Welly - 201510044</span>
                        </div>
                    </div>
                </footer>
               
            </div>
            
        </div>
        

        
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        
        <div class="modal fade" id="logoutModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sudah yakin untuk Logout?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Pilih tombol "Logout" berikut jika sudah yakin.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                        <a class="btn btn-primary" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="modal fade" id="modalLoading" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row row-cols-1 justify-content-center text-center">
                            <div class="col">
                                <img src="./assets/img/loading.gif" width="100px">
                            </div>
                            <div class="col">
                                <h1>Harap Tunggu</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        
        <script src="./assets/js/jquery.min.js"></script>
        <script src="./assets/js/jquery.easing.min.js"></script>
        <script src="./assets/js/bootstrap.bundle.min.js"></script>
        
        <script src="./assets/js/sb-admin-2.min.js"></script>
        
        <script src="./assets/js/jquery.dataTables.min.js"></script>
        <script src="./assets/js/dataTables.bootstrap4.min.js"></script>
       
        
        <script src="./assets/js/beranda.js"></script>
    </body>

    </html>
<?php
}

else {
    //ambil halaman login
    header("location:./login.php");
}
?>