
<!doctype html>
<html lang="id">
  <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tebak Siapakah Aku?</title>
  <link rel="shortcut icon" href="../../img/game.png">
 <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="../../desain.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="../../bootstrap/js/bootstrap.min.js"></script>

</head>
<style>
body {
background-size:cover;
background-position:center;
background-repeat:no-repeat;

p{
	color:#ffffff;
	font-size:20px;
}
#header1{
	
}
#logo{
	
	margin-top:-5px;
	margin-bottom:14px;
	margin-left:0px;
}
</style>
<div style="position: relative; width: 100%">
  <div class="navbar navbar-default">
            <div class="container-fluid">
  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar-content">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   <a> <img src="../../img/log3.png" style="width:58%; margin-top:12px; margin-left:3px;" style="float:left" class="img-responsive"></a>
               
                </div><!-- /navbar-header -->
                    
                <div class="collapse navbar-collapse" id="mynavbar-content">
                    <ul class="nav navbar-nav">
                        <li class="menu1"><a href="../../home.php" style="color:orange;background-color:#03C7E9"><b>Beranda</b></a></li>
                        <li class="menu2"><a href="../../about.php" style="color:orange"><b>Tentang</b></a></li>
                        <li class="menu3"><a href="../../privacy.php" style="color:orange"><b>Privasi</b></a></li>
                        <li class="menu4"><a href="../../contact.php" style="color:orange"><b>Kontak</b></a></li>
                    </ul>
                </div><!-- /collapse navbar-collapse -->
				</div>
				</div>

<body style="background-image:url(../../img/background.png)"width="100%" height="90%">
<form align="center" method="POST">
<br/>
<div id="header1"><img src="../../img/logo.png" class="img-responsive"  style="float:center; margin-left:70px;" width="150px"></div>
</br></br>

<?php 
include "../jawaban.php";
include "../pilihan.php";

//pilihan gambar dan jawaban
pilihan6();

include '../../pengaturan/tengah.php';

if (isset($_POST['proses'])) {

$jawaban = $_POST['pilihan'];
session_start();
if ($jawaban == "$p6") {
	$nilai = 10;
	$_SESSION['nilai6'] = $nilai;
	header('location: gamebelajarbahasainggris7.php');
} elseif ($jawaban == false) {
	 echo "<p style='font-size:15px; color:red'class='bg-danger'>Anda Belum Memasukan Jawaban</p>";
}else{
	$nilai = 0;
	$_SESSION['nilai6'] = $nilai;
	header('location: gamebelajarbahasainggris7.php');

}
}
include 'backsound.html';
include '../../pengaturan/footer.html';
?>