<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Melawak Airlines</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3">Melawak Airlines</a><i class="fa-thin fa-plane"></i></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo site_url('login/logout') ?>">Logout</a></li>
                        <li><a class="dropdown-item" href="<?php echo site_url('projek/tentang') ?>">Tentang</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="admin#">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $this->session->userdata("nama"); ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Melawak Travel</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Jenis penerbangan</li>
                        </ol>
                        <div class="row">

                            <!-- Garuda Indoenesia  -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <img src="img/garudaair.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">Garuda Indonesia</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop-gedunglondon" href="#">Lihat lebih banyak...</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop-gedunglondon" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Garuda Indonesia</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="img/garudaair.jpg" class="card-img-top" alt="...">
                                            <p><p>PT Garuda Indonesia (Persero), Tbk. atau dikenal sebagai Garuda Indonesia (IDX: GIAA) adalah Maskapai Penerbangan milik Negara di Indonesia, yang berkantor pusat di Bandar udara Internasional Soekarno–Hatta. Maskapai ini adalah suksesor dari KLM Interinsulair Bedrijf. Garuda Indonesia merupakan anggota SkyTeam satu satunya di Indonesia dan Maskapai Terbesar kedua di Indonesia setelah Lion Air. Garuda Indonesia mengoperasikan penerbangan berjadwal ke sejumlah destinasi meliputi Benua Asia, Eropa, dan Australia dari Jakarta, serta kota fokus, maupun kota lain untuk penerbangan Haji. Maskapai ini adalah satu-satunya maskapai dari Indonesia yang terbang ke wilayah Eropa, Oseania dan Amerika.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Garuda Indoenesia -->

                            <!-- Air Asia -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                <img src="img/airasia.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">Air Asia</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop-kampungladang" href="#">Lihat lebih banyak</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop-kampungladang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Air Asia</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="img/airasia.jpg" class="card-img-top" alt="...">
                                            <p><p>AirAsia (tulisan airasia) adalah sebuah maskapai penerbangan bertarif rendah (low-cost carrier) multinasional yang berpusat di Bandara Internasional Kuala Lumpur, Malaysia. AirAsia sendiri adalah maskapai swasta terbesar di Malaysia. Dengan jaringan rute di Indonesia, Arab Saudi, Jepang, Malaysia, Thailand, Singapura, dan Vietnam serta rute carter menuju Tiongkok dan Hong Kong, AirAsia menjadikan dirinya sebagai pemain Regional yang akan berkompetisi dengan Lion Air dari Indonesia.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Air Asia  -->

                            <!-- Batik Airlines -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <img src="img/batikair.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">Batik Airlines</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop-danaulinting" href="#">Lihat lebih banyak</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop-danaulinting" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Batik Airlines</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="img/batikair.jpg" class="card-img-top" alt="...">
                                            <p><p>Batik Air adalah maskapai purlayanan swasta Indonesia yang didirikan pada tahun 2013. Maskapai ini merupakan anak perusahaan Lion Air yang berlayanan penuh. Penerbangan perdana dilaksanakan pada hari Jumat tanggal 3 Mei 2013 dari Jakarta ke Manado dan Balikpapan.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Batik Airlines -->

                            <!-- Etihad Airways -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <img src="img/etihad.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">Etihad Airways</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop-airterjunsibolangit" href="#">Lihat lebih banyak</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop-airterjunsibolangit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Etihad Airways</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="img/etihad.jpg" class="card-img-top" alt="...">
                                            <p><p>Etihad Airways merupakan maskapai penerbangan nasional Uni Emirat Arab (UEA). Abu Dhabi yang dikenal sebagai salah satu "permata dari Teluk Persia", mengalami kemajuan yang signifikan sejak ditemukannya minyak pada tahun 1958 dan kini dianggap sebagai salah satu negara terkaya di dunia dalam sumber daya alam dan membuat pemerintah UEA bersama investor swasta asing membentuk suatu kesatuan perusahaan transportasi udara yang bernama Etihad (Persatuan) yang berdiri pada bulan Juli 2003 dan kini Etihad dikenal sebagai salah satu maskapai paling berpengaruh dan memiliki penghargaan yang banyak setelah 10 tahun berdiri.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Etihad Airways -->


                        </div>
        </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
