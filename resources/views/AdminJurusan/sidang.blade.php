<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jadwal Seminar | Sidang</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/logo-unsyiah.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/plugins/dataTables.bootstrap4.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    

</head>
<body class="background-grd-green">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
						<div class="user-details">
							<div id="more-details">Admin JTE <i class="fa fa-caret-down"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-inline">
							<li class="list-inline-item"><a href="#" data-toggle="tooltip" title="View Profile"><i class="feather icon-user"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="feather icon-mail" data-toggle="tooltip" title="Messages"></i><small class="badge badge-pill badge-primary">5</small></a></li>
							<li class="list-inline-item"><a href="/login" data-toggle="tooltip" title="Logout" class="text-danger"><i class="feather icon-power"></i></a></li>
						</ul>
					</div>
				</div>
				<br>
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item"><a href="/index" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Beranda</span></a></li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Seminar</span></a>
						<ul class="pcoded-submenu">
							<li><a href="/kkp">Seminar KP</a></li>
							<li><a href="/proposal">Seminar Proposal</a></li>
							<li><a href="/hasil">Seminar Hasil</a></li>
							<li><a href="/sidang">Sidang</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layers"></i></span><span class="pcoded-mtext">Master Data</span></a>
						<ul class="pcoded-submenu">
							<li><a href="/mahasiswa">Mahasiswa</a></li>
							<li><a href="/dosen">Dosen</a></li>
							<li><a href="/jadwal-kuliah">Jadwal Kuliah</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
		
			
		<div class="m-header">
			<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
			<a href="#!" class="b-brand">
				<!-- ========   change your logo hear   ============ -->
				<img src="assets/images/Logo-TE-01.png" width="90%" class="logo">
				
			</a>
			<a href="#!" class="mob-toggler">
				<i class="feather icon-more-vertical"></i>
			</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav me-auto">
				<li class="nav-item">
					<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
					<div class="search-bar">
						<input type="text" class="form-control border-0 shadow-none" placeholder="Search here">
						<button type="button" class="close close btn-close position-absolute top-50 end-0 translate-middle" aria-label="Close">
						</button>
					</div>
				</li>
			</ul>
			<ul class="navbar-nav ms-auto">
				<li>
					<div class="dropdown">
						<a class="dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
						<div class="dropdown-menu dropdown-menu-end notification">
							<div class="noti-head">
								<h6 class="d-inline-block m-b-0">Notifikasi</h6>
								<div class="float-end">
									<a href="#!" class="m-r-10">Mark as read</a>
									<a href="#!">Clear all</a>
								</div>
							</div>
							<ul class="noti-body">
								<li class="n-title">
									<p class="m-b-0">TERBARU</p>
								</li>
								<li class="notification">
									<div class="d-flex">
										<div class="flex-grow-1">
											<p><strong>Musaddiq Fauzi</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 menit yang lalu</span></p>
											<p>Mengajukan Jadwal Seminar Hasil</p>
										</div>
									</div>
								</li>
								<li class="n-title">
									<p class="m-b-0">TERDAHULU</p>
								</li>
								<li class="notification">
									<div class="d-flex">
										<div class="flex-grow-1">
											<p><strong>Muhammad Muda Juli</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 menit yang lalu</span></p>
											<p>Mengajukan Jadwal Seminar Hasil</p>
										</div>
									</div>
								</li>
								</li>
								<li class="notification">
									<div class="d-flex">
										<div class="flex-grow-1">
											<p><strong>Rahmadani</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 menit yang lalu</span></p>
											<p>Mengajukan Jadwal Sidang</p>
										</div>
									</div>
								</li>
							</ul>
							<div class="noti-footer">
								<a href="#!">show all</a>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		
	
</header>
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Sidang</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/index"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Seminar</a></li>
                            <li class="breadcrumb-item"><a href="#!">Sidang</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
								<h5>Daftar Pengajuan Jadwal Sidang</h5>
                            </div>
                            <div class="col-sm-6 text-end">
                            </div>
                        </div>
						<hr>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Action</th>
										<th>Jadwal</th>
                                        <th>Mahasiswa</th>
                                        <th>Judul</th>
                                        <th>Komite</th>
                                        <th>Penguji</th>
                                        <th>Files</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
									<!-- 01 -->
									<tr>
										<td>
											<a href="/proses-jadwal">
												<button type="button" class="btn btn-sm btn-success"><i class="feather icon-check-circle"></i> Proses</button>
											</a>
										</td>
										<td><label class="badge badge-light-danger">Diajukan</label></td>
                                        <td>
											<div class="d-inline-block">
												<h6>Mohd. Fajral Rizky YD</h6>
												<p class="text-muted m-b-0">1504105010021</p>
											</div>
										</td>
                                        <td>DESAIN MAXIMUM POWER POINT TRACKING (MMPT) <br>
											MENGGUNAKAN SEPIC KONVERTER BERBASIS ARTIFICAL <br> 
											NEURAL NETWORK (ANN)</td>
                                        	<td>
												<h6>Ketua Seminar:</h6>
												<p>Prof. Dr. Fitri Arnia, S.T., M.Eng.Sc</p>
												<h6>Pembimbing:</h6>
												<p>1. Syukriyadin, S.T., M.T.</p>
												<p>2. Ir. Ramdhan Halid Siregar, S.T., M.T., IPM.,ASEA</p>
											</td>
										<td>
												<p>1. Ir. Mahdi Syukri, S.T., M.T., IPM</p>
												<p>2. Ir. Syahrizal, M.T</p>
										</td>
										<td>
											<div class="btn-group">
												<button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
													aria-expanded="false">
													Tampilkan Berkas
												</button>
												<ul class="dropdown-menu dropdown-menu-end">
													<li><button class="dropdown-item" type="button">Bor-TA2_1504105010021.pdf</button></li>
													<li><button class="dropdown-item" type="button">Transkrip_1504105010021.pdf</button></li>
													<li><button class="dropdown-item" type="button">Sidang_1504105010021.pdf</button></li>
													<li><button class="dropdown-item" type="button">Plagiasi_1504105010021.pdf</button></li>
													<li><button class="dropdown-item" type="button">Slide_1504105010021.ppt</button></li>
													<li><button class="dropdown-item" type="button">Bukti_Persetujuan.pdf</button></li>
												</ul>
											</div>
										</td>
                                    </tr>
                                    
									<!-- 02 -->
									<tr>
										<td><label class="badge badge-light-success">Selesai</label></td>
										<td><b><p class="text-success">Rabu, 20 Juli 2022 <br> 08.00 - 10.30</p></b></td>
                                        <td>
											<div class="d-inline-block">
												<h6>Rahmadani</h6>
												<p class="text-muted m-b-0">1504105010037</p>
											</div>
										</td>
                                        <td>RANCANG BANGUN PERANGKAT IOT MULTI-POINT BERBASIS ESP32<br>
												UNTUK PENGENDALIAN KONSUMSI LISTRIK</td>
                                        <td>
											<h6>Ketua Seminar:</h6>
											<p>Muhammad Irhamsyah, S.T., M.T.</p>
											<h6>Pembimbing:</h6>
											<p>1. Ir. Agus Adria, M.Sc</p>
											<p>2. Prof. Dr. Ir Yuwaldi Away, M.Sc</p>
										</td>
										<td>
											<p>1. Ir. Hafidh, S.T., M.T., IPU</p>
											<p>2. Ir. Fardian, S.T., M.Sc</p>
										</td>
										<td>
										<div class="btn-group">
												<button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
													aria-expanded="false">
													Tampilkan Berkas
												</button>
												<ul class="dropdown-menu dropdown-menu-end">
													<li><button class="dropdown-item" type="button">Bor-TA2_1504105010037.pdf</button></li>
													<li><button class="dropdown-item" type="button">Transkrip_1504105010037.pdf</button></li>
													<li><button class="dropdown-item" type="button">Sidang_1504105010037.pdf</button></li>
													<li><button class="dropdown-item" type="button">Plagiasi_1504105010037.pdf</button></li>
													<li><button class="dropdown-item" type="button">Slide_1504105010037.ppt</button></li>
													<li><button class="dropdown-item" type="button">Bukti_Persetujuan.pdf</button></li>
												</ul>
											</div>
										</td>
                                    </tr>
									
									<!-- 03 -->
									<tr>
										<td>
											<a href="/proses-jadwal">
												<button type="button" class="btn btn-sm btn-success"><i class="feather icon-check-circle"></i> Proses</button>
											</a>
										</td>
										<td><label class="badge badge-light-info">Diproses</label></td>
                                        <td>
											<div class="d-inline-block">
												<h6>Irfan</h6>
												<p class="text-muted m-b-0">1504105010081</p>
											</div>
										</td>
                                        <td>PERANCANGAN SISTEM OTOMASI TEH DAUN KELOR <br> 
											MENGGUNAKAN METODE FUZZY LOGIC</td>
                                        	<td>
												<h6>Ketua Seminar:</h6>
												<p>Ir. Afdhal, S.T., M.Sc</p>
												<h6>Pembimbing:</h6>
												<p>1. Ir. Fahri Heltha, M.Eng</p>
												<p>2. Ir. Alfatirta Mufti, S.T., M.Sc</p>
											</td>
										<td>
											<p>1. Dr. Ir. Roslidar, S.T., M.Sc., IPM</p>
											<p>2. Ir. Yunidar, S.Si., M.T.</p>
										</td>
										<td>
											<div class="btn-group">
												<button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
													aria-expanded="false">
													Tampilkan Berkas
												</button>
												<ul class="dropdown-menu dropdown-menu-end">
													<li><button class="dropdown-item" type="button">Bor-TA2_1504105010081.pdf</button></li>
													<li><button class="dropdown-item" type="button">Transkrip_1504105010081.pdf</button></li>
													<li><button class="dropdown-item" type="button">Sidang_1504105010081.pdf</button></li>
													<li><button class="dropdown-item" type="button">Plagiasi_1504105010081.pdf</button></li>
													<li><button class="dropdown-item" type="button">Slide_1504105010081.ppt</button></li>
													<li><button class="dropdown-item" type="button">Bukti_Persetujuan.pdf</button></li>
												</ul>
											</div>
										</td>
                                    </tr>

									<!-- 04 -->
									<tr>
										<td>
											<a href="/proses-jadwal">
												<button type="button" class="btn btn-sm btn-success"><i class="feather icon-check-circle"></i> Proses</button>
											</a>
										</td>
										<td><label class="badge badge-light-danger">Diajukan</label></td>
                                        <td>
											<div class="d-inline-block">
												<h6>Arif Rahim</h6>
												<p class="text-muted m-b-0">1504105010066</p>
											</div>
										</td>
                                        <td>PENGATURAN KECEPATAN MOTOR INDUKSI <br>
											MENGGUNAKAN VOLTAGE SOURCE INVERTER (VSI)</td>
                                        	<td>
												<h6>Ketua Seminar:</h6>
												<p>Ir. Hubbul Walidainy, S.T., M.T., IPM.,ASEAN.Eng	</p>
												<h6>Pembimbing:</h6>
												<p>1. Ir. Hafidh, S.T., M.T., IPU</p>
												<p>2. Ir. Mahdi Syukri, S.T., M.T., IPM</p>
											</td>
										<td>
												<p>1. Ir. Mansur Gapy, M.T.</p>
												<p>2. Ir. Syahrizal, M.T.</p>
										</td>
										<td>
											<div class="btn-group">
												<button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
													aria-expanded="false">
													Tampilkan Berkas
												</button>
												<ul class="dropdown-menu dropdown-menu-end">
													<li><button class="dropdown-item" type="button">Bor-TA2_1504105010066.pdf</button></li>
													<li><button class="dropdown-item" type="button">Transkrip_1504105010066.pdf</button></li>
													<li><button class="dropdown-item" type="button">Sidang_1504105010066.pdf</button></li>
													<li><button class="dropdown-item" type="button">Plagiasi_1504105010066.pdf</button></li>
													<li><button class="dropdown-item" type="button">Slide_1504105010066.ppt</button></li>
													<li><button class="dropdown-item" type="button">Bukti_Persetujuan.pdf</button></li>
												</ul>
											</div>
										</td>
                                    </tr>

									<!-- 05 -->
									<tr>
										<td>
											<a href="/proses-jadwal">
												<button type="button" class="btn btn-sm btn-success"><i class="feather icon-check-circle"></i> Proses</button>
											</a>
										</td>
										<td><label class="badge badge-light-danger">Diajukan</label></td>
                                        <td>
											<div class="d-inline-block">
												<h6>Faisal Riza</h6>
												<p class="text-muted m-b-0">1504105010085</p>
											</div>
										</td>
                                        <td>DESAIN BACK TO BACK CONVERTER SEBAGAI SISTEM SINKRONISASI <br>
											ANTARA SUMBER TENAGA LISTRIK</td>
                                        	<td>
												<h6>Ketua Seminar:</h6>
												<p>Ir. Ernita Dewi Meutia, PG.Dipl., M.Sc</p>
												<h6>Pembimbing:</h6>
												<p>1. Dr. Ir. Suriadi, S.T., M.Sc., IPM., ASEAN.Eng</p>
												<p>2. Ir. Fathurrahman, S.T., M.Eng.Sc</p>
											</td>
										<td>
												<p>1. Ir. Mansur Gapy, M.T.</p>
												<p>2. Dr. Rakhmad Syafutra Lubis, S.T., M.T.</p>
										</td>
										<td>
											<div class="btn-group">
												<button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
													aria-expanded="false">
													Tampilkan Berkas
												</button>
												<ul class="dropdown-menu dropdown-menu-end">
													<li><button class="dropdown-item" type="button">Bor-TA2_1504105010085.pdf</button></li>
													<li><button class="dropdown-item" type="button">Transkrip_1504105010085.pdf</button></li>
													<li><button class="dropdown-item" type="button">Sidang_1504105010085.pdf</button></li>
													<li><button class="dropdown-item" type="button">Plagiasi_1504105010085.pdf</button></li>
													<li><button class="dropdown-item" type="button">Slide_1504105010085.ppt</button></li>
													<li><button class="dropdown-item" type="button">Bukti_Persetujuan.pdf</button></li>
												</ul>
											</div>
										</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

</div>
</div>
<!-- [ Main Content ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>


<script src="assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins/dataTables.bootstrap4.min.js"></script>

<script>
    // DataTable start
    $('#report-table').DataTable();
    // DataTable end
</script>
</body>

</html>
