<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost","root","","cij_tshirtstore");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Halaman Daftar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    

  </head>
  <body>
		
	<section>
      <div class="container">
        <div class="row">
          <div class="col-ls-4 col-offset-6">
                    <h3 class="text-center">Create Account</h3>
                </div>
                <p></p>
                <p></p>
                    <form method="post" class="form-horizontal">
                        <div class="form-group">
                            <label>Id Admin</label>
                            <input type="text" class="form-control" name="id" required>
                        </div>
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="Text" class="form-control" name="user" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="Nlengkap" required>
                        </div>
                        <button class="btn btn-primary btn-block" name="daftar">Sign Up</button>
                    </form>

                    <?php
                    //jika tombol sign up ditekan
                    if(isset($_POST["daftar"]))
                    {
                        //mengambil isian nama,email,password, dan nomor telepon
                        $id=$_POST["id"];
                        $user=$_POST["user"];
                        $password=$_POST["password"];
                        $Nlengkap=$_POST["Nlengkap"];

                        //cek apakah email sudah digunakan
                        $ambil=$koneksi->query("SELECT * FROM admin WHERE id_admin='$id'");
                        $yangcocok=$ambil->num_rows;
                        if($yangcocok==1){
                            echo "<script>alert('id has been used');</script>";
                            echo "<script>location='daftaradmin.php';</script>";
                        }else{
                            //query di insert ke tabel pelanggan
                            $koneksi->query("INSERT INTO admin(id_admin, username, password, nama_lengkap)
                            VALUES('$id','$user','$password','$Nlengkap') ");

                            echo "<script>alert('account successfully created');</script>";
                            echo "<script>location='login.php';</script>";
                        }
                    }
                    ?>

                </div>
          </div> <!-- .col-md-8 -->

      </div>
    </section> <!-- .section -->

    <?php
    //jika tombol login ditekan
    if (isset($_POST["login"]))
    {
        $email = $_POST["email"];
        $password= $_POST["password"];
        //lakukan query pengecekan akun pada tabel pelanggan di database
        $ambil=$koneksi->query("SELECT * FROM admin
        WHERE id_admin='$id','$user','$password','$Nlengkap");

        //menghitung akun yang diambil
        $akunyangcocok=$ambil->num_rows;

        //jika ada 1 akun yang cocok maka akan login
        if($akunyangcocok==1){
            //login berhasil
            //mendapatkan akun dalam bentuk array
            $akun=$ambil->fetch_assoc();
            //simpan di session pelanggan
            $_SESSION["pelanggan"]=$akun;
            echo "<script>alert('Login Success!');</script>";
            echo "<script>location='checkout.php';</script>";
        }else{
            //login gagal
            echo "<script>alert('Login Failed! Please double check your email and password.');</script>";
            echo "<script>location='login.php';</script>";
        }
    }

    ?>

  </body>
</html>