<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jadwal Seminar | Mahasiswa</title>
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
								<a href="#!">Tampilkan Semua</a>
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
                            <h5 class="m-b-10">Dosen</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/index"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Master Data</a></li>
                            <li class="breadcrumb-item"><a href="#!">Dosen</a></li>
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
								<h5>Daftar Dosen</h5>
                            </div>
                            <div class="col-sm-6 text-end">
                                <a href="/dosen-form-tambah"><button class="btn btn-success btn-sm btn-round has-ripple"><i class="feather icon-plus"></i> Tambah Data</button></a>
                                <a href="/dosen-form-upload"><button class="btn btn-primary btn-sm btn-round has-ripple"><i class="feather icon-upload"></i> Upload Data</button></a>
                            </div>
                        </div>
						<hr>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>NIP</th>
                                        <th>Email</th>
                                        <th>Bidang</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Prof. Dr. Ir Yuwaldi Away,??M.Sc</td>
                                        <td>196412061990021001</td>
                                        <td>yuwaldi@unsyiah.ac.id</td>
										<td>Embedded & Microprocessor Design</td>
										<td>
											<a href="/dosen-form-edit">
												<button type="button" class="btn btn-sm btn-info"><i class="feather icon-edit-2"></i> Edit</button>
											</a>
										</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Prof. Dr. Ir. Nasaruddin, S.T.,M.Eng., IPU</td>
                                        <td>197404021999031003</td>
                                        <td>nasaruddin@unsyiah.ac.id</td>
										<td>Digital Communication System</td>
										<td>
											<a href="/dosen-form-edit">
												<button type="button" class="btn btn-sm btn-info"><i class="feather icon-edit-2"></i> Edit</button>
											</a>
										</td>
                                    </tr>
									<tr>
                                        <td>3</td>
                                        <td>Prof. Dr. Khairul Munadi, S.T., M.Eng</td>
                                        <td>197108271999031005</td>
                                        <td>khairul.munadi@unsyiah.ac.id</td>
										<td>Multimedia & Image Processing</td>
										<td>
											<a href="/dosen-form-edit">
												<button type="button" class="btn btn-sm btn-info"><i class="feather icon-edit-2"></i> Edit</button>
											</a>
										</td>
                                    </tr>
									<tr>
                                        <td>4</td>
                                        <td>Prof. Dr. Fitri Arnia, S.T., M.Eng.Sc</td>
                                        <td> 197311121999032001</td>
                                        <td>f.arnia@unsyiah.ac.id</td>
										<td>Computer Vision & Image Processing</td>
										<td>
											<a href="/dosen-form-edit">
												<button type="button" class="btn btn-sm btn-info"><i class="feather icon-edit-2"></i> Edit</button>
											</a>
										</td>
                                    </tr>
									<tr>
                                        <td>5</td>
                                        <td>Prof. Dr. Teuku Yuliar Arif, S.T., M.Kom</td>
                                        <td>197307031999031003</td>
                                        <td>yuliar@unsyiah.ac.id</td>
										<td>Data Comm. & Computer Networks</td>
										<td>
											<a href="/dosen-form-edit">
												<button type="button" class="btn btn-sm btn-info"><i class="feather icon-edit-2"></i> Edit</button>
											</a>
										</td>
                                    </tr>
									<tr>
                                        <td>6</td>
                                        <td>Dr. Ir. Rizal Munadi, MM., M.T.</td>
                                        <td>196708151993031005</td>
                                        <td>rizal.munadi@unsyiah.ac.id</td>
										<td>Wireless Comm. Systems</td>
										<td>
											<a href="/dosen-form-edit">
												<button type="button" class="btn btn-sm btn-info"><i class="feather icon-edit-2"></i> Edit</button>
											</a>
										</td>
                                    </tr>
									<tr>
                                        <td>7</td>
                                        <td>Dr. Ir. Melinda, S.T.,??M.Sc., IPU</td>
                                        <td>197906102002122001</td>
                                        <td>melinda@unsyiah.ac.id</td>
										<td>Telekomunikasi</td>
										<td>
											<a href="/dosen-form-edit">
												<button type="button" class="btn btn-sm btn-info"><i class="feather icon-edit-2"></i> Edit</button>
											</a>
										</td>
                                    </tr>
									<tr>
                                        <td>8</td>
                                        <td>Ardiansyah, BSEE., M.Sc</td>
                                        <td>197212261992011001</td>
                                        <td>ardiansyah@unsyiah.ac.id</td>
										<td>Geographical Information Science</td>
										<td>
											<a href="/dosen-form-edit">
												<button type="button" class="btn btn-sm btn-info"><i class="feather icon-edit-2"></i> Edit</button>
											</a>
										</td>
                                    </tr>
									<tr>
                                        <td>9</td>
                                        <td>Dr. Ir. Roslidar, S.T.,??M.Sc., IPM</td>
                                        <td>197807192002122002</td>
                                        <td>roslidar@unsyiah.ac.id</td>
										<td>Wireless Telecommunication</td>
										<td>
											<a href="/dosen-form-edit">
												<button type="button" class="btn btn-sm btn-info"><i class="feather icon-edit-2"></i> Edit</button>
											</a>
										</td>
                                    </tr>
									<tr>
                                        <td>10</td>
                                        <td>Muhammad Irhamsyah, S.T., M.T.</td>
                                        <td>197207182001121001</td>
                                        <td>irham.ee@unsyiah.ac.id</td>
										<td>Telekomunikasi</td>
										<td>
											<a href="/dosen-form-edit">
												<button type="button" class="btn btn-sm btn-info"><i class="feather icon-edit-2"></i> Edit</button>
											</a>
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
