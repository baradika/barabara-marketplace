<?php 
//koneksi ke database
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <?php include "header.php"; ?>
    <title>Daftar | BaraBara</title>
</head>
<!-- NAVBAR -->
<?php include "navbar.php"; ?>

<div class="container">
    <center id='login'><h2> DAFTAR PELANGGAN</h2></center>
    <br> <br>
    <div class="row">
        <form method="post">
            <div class="row">
                <div class="col s6">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="nama" type="text" required class="validate" name="nama" autocomplete="off">
                        <label for="nama">First Name</label>
                    </div>
                </div>
                <div class="col s6">
                    <div class="input-field">
                        <i class="material-icons prefix">date_range</i>
                        <input type="date" name="tgl_lahir" validate id="tgl_lahir" autocomplete="off">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                    </div>
                </div>
                <div class="col s6">
                    <div class="input-field">
                        <i class="material-icons prefix">email</i>
                        <input id="email" type="email" required class="validate" name="email" autocomplete="off">
                        <label for="email">E-mail</label>
                    </div>                 
                </div>
                <div class="col s6">
                    <div class="input-field">
                        <i class="material-icons prefix">lock</i>
                        <input id="password" type="password" required class="validate" name="password">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="col s12">
                    <h6><b>Jenis Kelamin</b></h6>
                </div>
                <div class="col s6">
                    <p>
                        <label id="pria">
                            <input name="jk_pelanggan" value="pria" type="radio" validate for="pria"/>
                            <span>Pria</span>
                        </label>
                    </p>
                </div>
                <div class="col s6">
                    <p>
                        <label id="wanita">
                            <input name="jk_pelanggan" value="wanita" type="radio" validate id="wanita"/>
                            <span>Wanita</span>
                        </label>
                    </p>
                </div>
                <div class="col s6">
                    <div class="input-field">
                        <i class="material-icons prefix">location_on</i>
                        <textarea id="alamat" class="materialize-textarea" name="alamat" validate></textarea>
                        <label for="alamat">Alamat</label>
                    </div>        
                </div>
                <div class="col s6">
                    <div class="input-field">
                        <i class="material-icons prefix">phone</i>
                        <input id="telepon" type="number" required class="validate" name="telepon">
                        <label for="telepon">Telephone</label>
                    </div>
                </div>

                <div class="col s2">
                    <br>
                    <button class="btn waves-effect waves-light green right" type="submit" name="daftar">Daftar
                        <i class="material-icons right">send</i>
                    </button>                     
                </div>
            </div>
        </form>
        <?php 
        // jika ada tombol daftar(ditekan tombol daftar)
        if (isset($_POST["daftar"])) 
        {
            $id_pelanggan = 'cOmpOn'.date("Y").$letter = chr(rand(65,90)).rand(1,10).date("m").$letter = chr(rand(97,122)).rand(10,100).date("d");
            $nama = $_POST["nama"];
            $email = $_POST["email"];
            $password = sha1($_POST["password"]);
            $alamat = $_POST["alamat"];
            $telepon = $_POST["telepon"];
            $jk_pelanggan = $_POST["jk_pelanggan"];
            $tgl_lahir = $_POST["tgl_lahir"];

            // cek apakah email sudah digunakan
            $ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email'");
            $yangcocok =$ambil->num_rows;
            if ($yangcocok == 1)
            {
                echo "<script>alert('Pendaftaran gagal, email sudah digunakan');</script>";
                echo "<script>location='daftar.php';</script>";
            }
            else 
            {
                // query insert ke tabel pelanggan 
                $koneksi->query("INSERT INTO pelanggan (id_pelanggan, email_pelanggan, password_pelanggan, nama_pelanggan, alamat_pelanggan, telepon_pelanggan, jk_pelanggan, tgl_lahir)
                    VALUES('$id_pelanggan', '$email', '$password', '$nama', '$alamat', '$telepon', '$jk_pelanggan', '$tgl_lahir');");

                echo "<script>alert('Pendaftaran sukses, silahkan login');</script>";
                echo "<script>location='login.php';</script>";
            }
        }
        ?>
    </div>
</div>
