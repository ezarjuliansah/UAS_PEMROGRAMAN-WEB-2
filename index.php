<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost","root","","databantuan");

//jika belum login
if(!isset($_SESSION["admin"])){
    echo "<script>alert('Silahkan login terlebih dahulu');</script>";
    echo "<script>location='login.php';</script>";
    exit();
}
?>

<!DOCTYPE html>

<head>
      <meta charset="utf-8" />
      <link rel="shortcut icon" href="favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bantuan Covid-19</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/CUSTOM CSS/Style.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h3 class="navbar-brand" href="" width="100%">Admin</h3> 
            </div>   
        </nav>  
       

           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/face-0.jpg" class="user-image img-responsive"/>
					</li>
                    <li><a href="index.php?halaman=data"><i class="fa fa-paper-plane fa-2x"></i> DATA</a></li>
                    <li><a href="index.php?halaman=logout"><i class="fa fa-sign-out fa-2x"></i> Logout</a></li>
                </ul>
               
            </div>
            
        </nav>  
       
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman']))
                {
                    if($_GET['halaman']=="data"){
                        include 'Data.php';
                    }elseif($_GET['halaman']=="tambahData"){
                        include 'tambahData.php';
                    }elseif($_GET['halaman']=="hapusData"){
                        include 'hapusData.php';
                    }elseif($_GET['halaman']=="ubahData"){
                        include 'ubahData.php';
                    }elseif ($_GET['halaman']=="logout"){
                        include 'logout.php';
                    }
                }else{
                    include 'Data.php' ;
                }

                ?>
        </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
