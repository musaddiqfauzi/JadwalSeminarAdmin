<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jadwal Seminar | Generate Jadwal</title>
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
	<!-- select2 css -->
    <link rel="stylesheet" href="assets/css/plugins/select2.min.css">
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
					<li class="nav-item"><a href="/indexv2" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Beranda</span></a></li>
					<li class="active nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Seminar</span></a>
						<ul class="pcoded-submenu">
							<li><a href="/kkp">Seminar KP</a></li>
							<li><a href="/proposal">Seminar Proposal</a></li>
							<li><a href="/hasil">Seminar Hasil</a></li>
							<li><a href="/sidang">Sidang</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-layers"></i></span><span class="pcoded-mtext">Master Data</span></a>
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
                            <h5 class="m-b-10">Generate Jadwal</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/index"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Generate Jadwal</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="row">
            <div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<form>
							<div class="row">
								<h5>Generate Jadwal Seminar dan Sidang</h5>
								<hr>
								<div class="col-md-8">
									<div class="row mb-3">
										<label for="input1" class="col-sm-3 col-form-label">Nama Mahasiswa</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input1" value="Musaddiq Fauzi" disabled>
										</div>
									</div>
									<div class="row mb-3">
										<label for="input3" class="col-sm-3 col-form-label">NIM</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input3" value="1504105010087" disabled>
										</div>
									</div>
									<div class="row mb-3">
										<label for="input2" class="col-sm-3 col-form-label">Judul</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input2" value="PENJADWALAN SEMINAR DAN SIDANG MENGGUNAKAN ALUR ALGORITMA GENETIKA BERBASIS WEB" disabled>
										</div>
									</div>
									<div class="row mb-3">
										<label for="input2" class="col-sm-3 col-form-label">Bidang</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input2" value="Teknik Komputer & Informatika" disabled>
										</div>
									</div>
									<div class="row mb-3">
										<label for="input2" class="col-sm-3 col-form-label">Dosen Wali</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input2" value="Ardiansyah, BSEE., M.Sc" disabled>
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputPassword3" class="col-sm-3 col-form-label">Ketua Seminar</label>
										<div class="col-sm-9">
											<select class="js-dosen-array col-sm-12"></select>
											<div class="alert alert-warning alert-dismissible fade show" role="alert"><b>Peringatan : </b> Dosen wali dari mahasiswa yang mendaftar umumnya akan ditentukan sebagai ketua seminar dan tidak boleh diwaktu bersamaan menjadi sebagai dosen pembimbing. 
											Apabila dosen wali telah menjadi dosen pembimbing, maka posisi ketua seminar akan diisi oleh Ketua Program Studi.
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
											</div>
										</div>
									</div>
									<div class="row mb-3">
										<label for="input2" class="col-sm-3 col-form-label">Dosen Pembimbing 1</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input2" value="Dr. Ir. Rizal Munadi, MM., M.T." disabled>
										</div>
									</div>
									<div class="row mb-3">
										<label for="input2" class="col-sm-3 col-form-label">Dosen Pembimbing 2</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="input2" value="Ardiansyah, BSEE., M.Sc" disabled>
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputPassword3" class="col-sm-3 col-form-label">Dosen Penguji 1</label>
										<div class="col-sm-9">
											<select class="js-dosen-array col-sm-12"></select>
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputPassword3" class="col-sm-3 col-form-label">Dosen Penguji 2</label>
										<div class="col-sm-9">
											<select class="js-dosen-array col-sm-12"></select>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="row mb-3">
										<button type="button" class="btn btn-info" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="jadwal1"><i class="feather icon-command"></i> GENERATE JADWAL</button>
									</div>
									<div class="row mb-3">
										<!-- <h6>Jadwal yang tersedia</h6> -->
										<div class="col-sm-12 collapse multi-collapse" id="jadwal1">
										<label for="input2" class="col-sm-12 col-form-label">Sesi Jadwal Yang Tersedia</label>
											<div class="form-check">
												<input class="col-sm-3 form-check-input" type="radio" name="gridRadios"
													id="gridRadios1" value="option1" checked>
												<label class="col-sm-9 form-check-label" for="gridRadios1">
													Senin, 25 Juli 2022 / 16:00 - 18.15
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="gridRadios"
													id="gridRadios2" value="option2">
												<label class="form-check-label" for="gridRadios2">
													Selasa, 26 Juli 2022 / 08.00 - 10:30
												</label>
											</div>
											<div class="form-check disabled">
												<input class="form-check-input" type="radio" name="gridRadios"
													id="gridRadios3" value="option3">
												<label class="form-check-label" for="gridRadios3">
													Selasa, 26 Juli 2022 / 16.00 - 18.30
												</label>
											</div>
											<div class="form-check disabled">
												<input class="form-check-input" type="radio" name="gridRadios"
													id="gridRadios3" value="option3">
												<label class="form-check-label" for="gridRadios3">
													Rabu, 27 Juli 2022 / 14.00 - 16.30
												</label>
											</div>
											<label for="input2" class="col-sm-12 col-form-label">*Pilihan jadwal hanya tersedia dalam sepekan</label>
										</div>
									</div>
									<!-- <div class="row mb-3 collapse multi-collapse" id="jadwal1">
										<div class="form-check">
											<input class="col-sm-3 form-check-input" type="radio" name="gridRadios"
												id="gridRadios1" value="option1" checked>
											<label class="col-sm-9 form-check-label" for="gridRadios1">
												First radio
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="gridRadios"
												id="gridRadios2" value="option2">
											<label class="form-check-label" for="gridRadios2">
												Second radio
											</label>
										</div>
										<div class="form-check disabled">
											<input class="form-check-input" type="radio" name="gridRadios"
												id="gridRadios3" value="option3" disabled>
											<label class="form-check-label" for="gridRadios3">
												Third disabled radio
											</label>
										</div>
									</div> -->
								</div>
							</div>
							<hr>
							<a href="/hasil"><button type="button" class="btn btn-secondary has-ripple">Kembali</button></a>
							<a href="/hasilv2"><button type="button" class="btn btn-outline-primary has-ripple">Proses</button></a>
							<button type="button" class="btn btn-primary has-ripple sweet-success">Jadwalkan</button>
						</form>
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


<!-- sweet alert Js -->
<script src="assets/js/plugins/sweetalert.min.js"></script>
<!-- select2 Js -->
<script src="assets/js/plugins/select2.full.min.js"></script>
<!-- form-select-custom Js -->
<script src="assets/js/pages/form-select-custom.js"></script>

<script>
$(document).ready(function() {
// [ loading array ]
    var data1 = [{
        id: 0,
        text: '--- Pilih Dosen ---'
    }, {
        id: 1,
        text: 'Prof. Dr. Ir Yuwaldi Away, M.Sc'
    }, {
        id: 2,
        text: 'Prof. Dr. Ir. Nasaruddin, S.T.,M.Eng., IPU'
    }, {
        id: 3,
        text: 'Prof. Dr. Khairul Munadi, S.T., M.Eng'
    }, {
        id: 4,
        text: 'Prof. Dr. Fitri Arnia, S.T., M.Eng.Sc'
    }, {
        id: 5,
        text: 'Prof. Dr. Teuku Yuliar Arif, S.T., M.Kom'
    }, {
        id: 6,
        text: 'Dr. Tarmizi, S.T., M.Sc'
    }, {
        id: 7,
        text: 'Dr. Ir. Syahrial, M.Eng'
    }, {
        id: 8,
        text: 'Dr. Ir. Rizal Munadi, MM., M.T.'
    }, {
        id: 9,
        text: 'Dr. Rakhmad Syafutra Lubis, S.T., M.T.'
    }, {
        id: 10,
        text: 'Dr. Taufiq A. Gani, S.Kom, M.Eng.Sc'
    }, {
        id: 11,
        text: 'Dr. Ir. Suriadi, S.T., M.Sc., IPM., ASEAN.Eng'
    }, {
        id: 12,
        text: 'Dr. Ira Devi Sara, S.T., M.Eng.Sc'
    }, {
        id: 13,
        text: 'Dr. Rusdha Muharar, S.T., M.Sc'
    }, {
        id: 14,
        text: 'Dr. Ir. Melinda, S.T., M.Sc., IPU'
    }, {
        id: 15,
        text: 'Dr. Ir. Ramzi Adriman, S.T., M.Sc'
    }, {
        id: 16,
        text: 'Afnan, S.Kom, MM(T), M.Sc'
    }, {
        id: 17,
        text: 'Ir. Mansur Gapy, M.T.'
    }, {
        id: 18,
        text: 'Ir. Syahrizal, M.T.'
    }, {
        id: 19,
        text: 'Syukriyadin, S.T., M.T.'
    }, {
        id: 20,
        text: 'Ir. Agus Adria, M.Sc'
    }, {
        id: 21,
        text: 'Ir. Ramdhan Halid Siregar, S.T., M.T., IPM.,ASEAN.Eng'
    }, {
        id: 22,
        text: 'Ir. Hubbul Walidainy, S.T., M.T., IPM.,ASEAN.Eng'
    }, {
        id: 23,
        text: 'Ir. Mahdi Syukri, S.T., M.T., IPM'
    }, {
        id: 24,
        text: 'Ir. Fahri Heltha, M.Eng'
    }, {
        id: 25,
        text: 'Ir. Ernita Dewi Meutia, PG.Dipl., M.Sc'
    }, {
        id: 26,
        text: 'Mohd. Syaryadhi, S.T., M.Sc'
    }, {
        id: 27,
        text: 'Dr. Alfisyahrin, S.T., M.T.'
    }, {
        id: 28,
        text: 'Muhammad Irhamsyah, S.T., M.T.'
    }, {
        id: 29,
        text: 'Zulhelmi, S.T., M.Sc'
    }, {
        id: 30,
        text: 'Ir. Yunidar, S.Si., M.T.'
    }, {
        id: 31,
        text: 'Zulfikar, S.T., M.Sc'
    }, {
        id: 32,
        text: 'Dr. Ir. Roslidar, S.T., M.Sc., IPM'
    }, {
        id: 33,
        text: 'Ir. Rahmad Dawood, S.Kom, M.Sc., IPM., ASEAN.Eng'
    }, {
        id: 34,
        text: 'Ir. Ahmadiar, S.T., M.Sc'
    }, {
        id: 35,
        text: 'Ir. Hafidh, S.T., M.T., IPU'
    }, {
        id: 36,
        text: 'Ir. Elizar, S.T., M.Sc., IPM'
    }, {
        id: 37,
        text: 'Ir. Fardian, S.T., M.Sc'
    }, {
        id: 39,
        text: 'Ir. Afdhal, S.T., M.Sc'
    }, {
        id: 40,
        text: 'Ir. Alfatirta Mufti, S.T., M.Sc'
    }, {
        id: 41,
        text: 'Sayed Muchallil, S.T., M.Sc'
    }, {
        id: 41,
        text: 'Ardiansyah, BSEE., M.Sc'
    }, {
        id: 42,
        text: 'Yudha Nurdin, S.T.,M.T.'
    }, {
        id: 43,
        text: 'Aulia Rahman, S.T., M.Sc'
    }, {
        id: 44,
        text: 'Dr. Kahlil, S.T., M.Eng.'
    }, {
        id: 45,
        text: 'Maya Fitria, S.Kom., M.Sc'
    }, {
        id: 46,
        text: 'Dr. Rita Khathir, S.TP, M.Sc'
    }, {
        id: 47,
        text: 'Ir. Fathurrahman, S.T., M.Eng.Sc'
    }, {
        id: 48,
        text: 'Akhyar, S.T., M.Eng'
    }, {
        id: 49,
        text: 'Al Bahri, S.ST., M.T'
    }, {
        id: 50,
        text: 'Masduki Khamdan Muchamad, S.Kom., M.Sc.'
    }, {
        id: 51,
        text: 'Dr. Khairun Saddami, S.T'
    }, {
        id: 52,
        text: 'Dr. Yunida, S.T.'
    }, {
        id: 53,
        text: 'Dr. Maulisa Oktiana, S.T.'
    }, {
        id: 54,
        text: 'Rika Sri Utami, M.Sc.'
    }];
    $(".js-dosen-array").select2({
        data: data1
    });

	$('.sweet-success').on('click', function() {
	swal("Berhasil!", "Jadwal Berhasil Disimpan!", "success");
});
	
})
</script>
</body>

</html>
