
<!DOCTYPE html>
<html lang="en" id="home">
<head>
<meta charset="utf-8">
<title>Web Portofolio</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->

<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" />
 
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<style type="text/css">
<!--
.style2 {color: #CCCCCC}
-->
</style>
</head>

<?php
include("config/config.php");


$con = new classConnection();
$con->getOpenCon();

 
 
 date_default_timezone_set("Asia/Bangkok");
 $time = date("Y-m-d");
 


$date = date("Y-m-d");
$day = date('D', strtotime($date));
$dayList = array(
    'Sun' => 'Minggu',
    'Mon' => 'Senin',
    'Tue' => 'Selasa',
    'Wed' => 'Rabu',
    'Thu' => 'Kamis',
    'Fri' => 'Jumat',
    'Sat' => 'Sabtu'
);

$BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
$tahun = substr($date, 0, 4);
$bulan = substr($date, 5, 2);
$tgl   = substr($date, 8, 2);
$tanggal = $dayList[$day] . ", " . $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;

?>
<body>


<!-- Navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header ">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#home" class="navbar-brand page-scroll"><b style="font-family:broadway;">&nbsp;&nbsp;My Portofolio</b></a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right text-left">
			<li><a href="#home" class="page-scroll">&nbsp;&nbsp;<i class="fa fa-home icon-white"></i>&nbsp;&nbsp;<span class="style2">Home</span></a></li>
			<li><a href="#about" class="page-scroll">&nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp;&nbsp;<span class="style2">About</span></a></li>
			<li><a href="#portofolio" class="page-scroll">&nbsp;&nbsp;<i class="fa fa-archive"></i>&nbsp;&nbsp;<span class="style2">Porfolio</span></a></li>
			<li><a href="#link" class="page-scroll">&nbsp;&nbsp;<i class="fa fa-desktop"></i>&nbsp;&nbsp;<span class="style2">Link</span></a></li>
			<li><a href="#contact" class="page-scroll">&nbsp;&nbsp;<i class="glyphicon glyphicon-phone-alt  "></i>&nbsp;&nbsp;<span class="style2">Contact</span></a></li>
		</ul>
		</div>
	</div>
</nav>
<!-- end Navbar -->

<!-- Jumbotron -->
	<div class="jumbotron text-center">
		
		
		
		<img src="img/me.png" class="img-circle">
		
		<h1>Abdurrohim</h1>
		<p> Programmer | Web Designer | IT Development | Database Administrator</p>
		
	</div>

<!-- end Jumbotron -->
	
<!--	<div id="mycarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
				<li data-target="#mycarousel" data-slide-to="1"></li>
				<li data-target="#mycarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-iner slide" role="listbox">
				<div class="item active">
					<img src="img/slide03.jpg">
					<div class="carousel-caption">
						<h1>Get to Know Bootstrapp</h1>
						<br>	
						<button type="button" class="btn btn-default">Get Started</button>
					</div>
				</div>
				<div class="item">
					<img src="img/slide03.jpg">
				</div>
				
			</div>
			
		</div> -->

<!-- about -->
	
	
	<section class="about" id="about">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h3>About</h3>
					<hr>	
				</div>		
			
			</div>
			<div class="row">
				<div class="col-sm-4  text-justify pkiri">
					
					
					<h4 class="text-center"><strong>Data Diri</strong></h4>
					<img src="img/me_foto.png"  class="img-thumbnail float-img" />
					
					<p>Nama Lengkap			: 	Abdurrohim, S. Kom.
Alamat				:	Ds CangkoNo.18,Tukdana
					Indramayu – JABAR
Domisili				:	-
No. HP				:	0819 3113 6557		
Tempat Tanggal Lahir		:	Indramayu, 1Maret 1986			
Umur				:	30
Tinggi/Berat Badan		: 	169/60
Jenis Kelamin			: 	Laki-Laki
Status Pernikahan		:	Belum Menikah
Agama				:	Islam
Suku/Kebangsaan		:	Jawa/Indonesia
IPK				:	3.03
e-mail				: 	oim_ab@yahoo.co.id
 </p>	
 
 <h4 class="text-center" ><strong>Pendidikan</strong></h4>
					<p>*	Formal 

2005 – 2012		:	STMIK AMIKOM Yogyakarta
2002 – 2005		:	MAN Cadangpinggan Indramayu
1999 – 2002		:	MTs Cadangpinggan Indramayu
1993 – 1999		:	SD Cangko 1 Indramayu


*	Nonformal

Januari 2009	:	Seminar Pengembangan Otak Kiri dan Kanan,  
Jogja Businnes Center (JBN) Yogjakarta
Juli  2011	:	Kursus Perancangan Aplikasi berbasis Website 
		 Di Smile Group Yogyakarta
</p><br>
					
				</div>	
				<div class="col-sm-4  text-justify ptengah">
					
					
						
					<h4 class="text-center"><strong>Keahalian/Kompetensi</strong></h4>
					<p>*	IT  Technical Support (Maintenance & Repair PC)
*	Bahasa Pemrograman PHP,CI (CodeIgniter),foxpro,JavaScript
*	Database MySQL, Sql Server
*	Grapchic Design (program aplikasi grafis CorelDRAW & Adobe Photoshop CS)

</p><br>	

<h4 class="text-center"><strong>Pengalaman Kerja</strong></h4>
					<p>*	Maret 2010 – April 2011
Graphic Designer & IT Support (Administrator Web & Database) 
Di PT.Melia Pilar Utama Yogyakarta

*	Agustus 2013 – Agustus 2016
Programmer  di PT.Murfa Surya Mahardhika Jakarta
</p><br>	
<h4 class="text-center"><strong>Wilayah Implementasi</strong></h4>
					
					<p>•	Tahun 2013
a.	Nama Proyek         : Penyusunan Sistem Informasi Pendapatan Daerah  (SIMPATDA)
b.	Lokasi Proyek		: Pemkab Tapanuli Selatan
c.	Pengguna Jasa		: Dispenda Kab. Tapanuli Selatan
d.	Nama Perusahaan		: PT. Murfa Surya Mahardhika
e.	Posisi/Jabatan		: Programmer
f.	Uraian Tugas		: Implementasi, Pendampingan & Pengembangan
g.	Waktu Pelaksanaan	: Agustus 2013 s/d Desember 2013
					
				</div>		
					
				<div class="col-sm-4 text-justify pkanan" >
				


<p><br>

•	Tahun 2014	
a.	Nama 				: Penyusunan Sistem Informasi Pengelolaan Keuangan    Daerah & Sistem Informasi Manajemen Akuntansi Dinas  untuk 44 SKPD (SIMAKDA &  SIADINDA)
b.	Lokasi Proyek		: Pemkab Tapanuli Selatan
c.	Pengguna Jasa		: Dispenda Kab. Tapanuli Selatan
d.	Nama Perusahaan		: PT. Murfa Surya Mahardhika
e.	Posisi/Jabatan		: Programmer
f.	Uraian Tugas		: Implementasi, Pendampingan & Pengembangan
g.	Waktu Pelaksanaan	: Januari 2014 s/d Desember 2014

</p>

<p>
•	Tahun 2015	
a.	Nama 				: Pembangunan Sistem Informasi Barang & Aset Daerah berbasis web (SIMBAKDA )
b.	Lokasi Proyek		: Pemko Tanjungbalai
c.	Pengguna Jasa		: Dispenda Kota Tanjungbalai 
d.	Nama Perusahaan		: PT. Murfa Surya Mahardhika
e.	Posisi/Jabatan		: Programmer
f.	Uraian Tugas		: Implementasi, Pendampingan & Pengembangan
g.	Waktu Pelaksanaan	: Januari 2015 s/d Agustus 2015

<br>----------------------------------------------------------------------------------------------------<br>
a.	Nama Proyek         : Pengembangan Sistem Informasi Pajak Bumi & Bangunan berbasis web (SIMPBB )
b.	Lokasi Proyek		: Pemko Tanjungbalai
c.	Pengguna Jasa		: Dispenda Kota Tanjungbalai 
d.	Nama Perusahaan		: PT. Murfa Surya Mahardhika
e.	Posisi/Jabatan		: Programmer
f.	Uraian Tugas		: Implementasi, Pendampingan & Pengembangan
g.	Waktu Pelaksanaan	: Agustus 2015 s/d Desember 2015



</p>
						
				</div>		
			
			</div>
		
		</div>
	
	</section>
  
<!-- end about -->
	
<!-- portofolio -->
	
	

<section class="portofolio" id="portofolio">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h3>Portofolio </h3>
				<hr>	
			
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3">
				<a href="../simbada" class="thumbnail">
				<img src="img/portofolio/portofolio01.jpg">
				<h4>Sistem Informasi Barang Daerah (SIMBADA)</h4>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="../sitarida" class="thumbnail">
				<img src="img/portofolio/portofolio02.jpg">
				<h4>Sistem Informasi Penatausahaan Terintegrasi Daerah (SITARIDA)</h4>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="../simpatda" class="thumbnail">
				<img src="img/portofolio/portofolio03.jpg">
				<h4>Sistem Informasi Pendapatan Daerah (SIMPATDA)</h4>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="../simbakda" class="thumbnail">
				<img src="img/portofolio/portofolio04.jpg">
				<h4>Sistem Informasi Barang Milik Daerah (SIMBAKDA)</h4>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="../simpbb" class="thumbnail">
				<img src="img/portofolio/portofolio05.jpg">
				<h4>Sistem Informasi Pajak Bumi dan Bangunan (SIMPBB)</h4>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="../siadindatapsel2017" class="thumbnail">
				<img src="img/portofolio/portofolio06.jpg">
				<h4>Sistem Informasi Akuntansi Dinas Daerah (SIADINDA)</h4>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="../simakdatapsel2017" class="thumbnail">
				<img src="img/portofolio/portofolio07.jpg">
				<h4>Sistem Informasi Keuangan Daerah (SIMAKDA)</h4>
				</a>
			</div>
			<div class="col-sm-3">
				<a href="#" class="thumbnail">
				<img src="img/portofolio/portofolio08.jpg">
				<h4>Sistem Informasi Pendapatan Daerah (SIMPATDA) Versi Desktop</h4>
				</a>
			</div>
			
			
			
		</div>
		
	</div>


</section>


<!-- end portofolio -->


<!-- link -->
	
	
	<section class="link" id="link">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h3>Link </h3>
					<hr>	
				</div>		
			
			</div>
			<div class="row">
				<div class="col-sm-6  text-center ">
					
					
					<div class="panel panel-default">
					
					<div class="panel-heading">
						<h4 class="panel-title"><i class="fa fa-desktop"></i>&nbsp;&nbsp;Video</h4>
					</div>
					
					<div class="panel-body">
						<div class="col-md-12">
					<!--		<video width="500" height="350" controls>
					<source src="vid/How to Embed Video to HTML Document.mp4" type="video/mp4">
					</video>-->
					
					<iframe width="500" height="310" src="https://www.youtube.com/embed/w0WLGC5uHAA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						<a href="" ><p>How to Embed Video to HTML Document</p></a>
						</div>
					</div>	
					</div>
				</div>	
				<div class="col-sm-6  text-center ">
					<div class="panel panel-default">
					
					<div class="panel-heading">
						<h4 class="panel-title"><i class="fa fa-image"></i>&nbsp;&nbsp;Map</h4>
					</div>
					
					<div class="panel-body">
						<div class="col-md-12">
						<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d55010.61016337033!2d99.24130497110924!3d1.3657712449861295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x302c1ca04f00c7bf%3A0x5b862c3f74ab82b1!2sKantor+Bupati+Tapanuli+Selatan%2C+Jl.+Kenanga%2C+Ujung+Padang%2C+South+Padangsidimpuan%2C+Padang+Sidempuan+City%2C+North+Sumatra+22711!3m2!1d1.3657715!2d99.27632469999999!5e1!3m2!1sen!2sid!4v1518574158473" width="500" height="310" frameborder="0" style="border:0" allowfullscreen></iframe>	
						</div>
						<p><br>Lokasi Kantor Bupati Tapanuli Selatan</p>
					</div>	
					</div>
							
				</div>		
					
					
			
			</div>
		
		</div>
	
	</section>
  
<!-- end link -->


<!-- contact -->
		
	<section class="contact" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h3>Contact </h3>
					<hr>	
				</div>
			</div>
					
				<div class="col-sm-8 col-sm-offset-2">
					<form>
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" id="nama" class="form-control" placeholder="Masukan Nama">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" id="email" class="form-control" placeholder="Masukan Email">
						</div>
						<div class="form-group">
							<label for="telp">No. Telepon</label>
							<input type="tel" id="telp" class="form-control" placeholder="Masukan Nomor">
						</div><br>
						<select class="form-control">
							<option> -- Pilih Kategori --</option>
							<option> 1 | Web Design</option>
							<option> 2 | Web CSS Built in</option>
						</select><br>
						<div class="form-group">
							<label for="pesan">Pesan</label>
							<textarea type="text" id="pesan" class="form-control" rows="5" placeholder="Masukan Pesan"></textarea>
						</div>
						<div class="form-group text-right">
						<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-saved"></i>&nbsp;Kirim Pesan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
  
<!-- end contact -->

<!-- footer -->
<footer>
	<div class="container text-center">
		<div class="row">
			<div class="col-sm-12">
				<p>&copy; copyright 2018 | built by . <a href="https://www.facebook.com/">oim_ab</a></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<a href="https://www.youtube.com/channel/UCD1V1j9XzXj7EWWEfd3mZag*view_as=subscriber" class="btn btn-danger"><i class="glyphicon glyphicon-play  "></i>&nbsp;Check it out on youtube..!!</a>
			</div>
		</div>
	</div>
</footer>
	

<!-- end footer -->


<a href="#home" class="scrollup page-scroll"><i class="glyphicon glyphicon-open"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

    
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>


  
</body>
</html>