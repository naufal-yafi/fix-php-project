<?php
// Include file koneksi
include 'koneksi.php';
$no=1; // Ganti dengan ID mobil yang sesuai
$ambildata = mysqli_query($koneksi,"select * from detail_kendaraan");

?>

<?php
//input data
if (isset($_POST['save'])) {
  $orderan=mysqli_real_escape_string($koneksi, $_POST['orderan']);
  $nama_depan=mysqli_real_escape_string($koneksi, $_POST['nama_depan']);
  $nama_belakang=mysqli_real_escape_string($koneksi, $_POST['nama_belakang']);
  $provinsi=mysqli_real_escape_string($koneksi, $_POST['provinsi']);
  $kota=mysqli_real_escape_string($koneksi, $_POST['kota']);
  $kecamatan=mysqli_real_escape_string($koneksi, $_POST['kecamatan']);
  $kode_pos=mysqli_real_escape_string($koneksi, $_POST['kode_pos']);
  $pembayaran=mysqli_real_escape_string($koneksi, $_POST['pembayaran']);
  $no_hp=mysqli_real_escape_string($koneksi, $_POST['no_hp']);
  $tanggal=mysqli_real_escape_string($koneksi, $_POST['tanggal']);
 
  $save=mysqli_query($koneksi,"INSERT INTO pemesanan VALUES(
      '$orderan','$nama_depan','$nama_belakang','$provinsi','$kota','$kecamatan','$kode_pos','$pembayaran','$no_hp','$tanggal')");
  if ($save){
      echo "<script> window.alert('data disimpan') window.location='tambahkendaraan.php' </script>";
  }else{
      echo "<script> window.alert('data gagal disimpan') window.location='tambahkendaraan.php' </script>";
  }

}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--CSS-->
    <style>
       
       
        .custom-gradient {
      background-image: linear-gradient(to right, #f1c81d, #f16610);
    }



.card{
    position: relative;
    top: 75px;
    left: 25%;
    height: 50%;
    width: 50%;
}



@keyframes transition { 

    from{
        opacity: 0;
        transform: translate(-100px);
    }
    to{
        opacity: 2;
        transform: translate(0);
    }
    
}


body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      animation: transition 0.5s;
    height: 200%;
    }

    form {
        position: absolute;
    top: 25px;
    left: 15%;
    width: 200%;
    height: 100%;
    
      max-width: 70%;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
      width: 100%;
    }

    table, th, td {
      border-collapse: collapse;
    }

    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #4CAF50;
      color: white;
    }

    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      border-radius: 4px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    input[type="date"] {
    width: 100%;
    padding: 8px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-radius: 4px;
}



  td.spacing{
  width: 200px;
}


        </style>


    <title>Showroam</title>
  </head>



  
  <body class="" style="background-image: url('images/bg.jpg'); background-size: cover; background-repeat: no-repeat;">





    <nav class="navbar fixed-top navbar-expand-lg navbar-light custom-gradient">
        <div class="container">
        <a class="navbar-brand" style="font-weight: bolder;" href="#">MENU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="index.php">Home</a>
            <a class="nav-item nav-link active" href="#">Showroam<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="biodata.html">Biodata</a>
          </div>
        </div>
      </div>
      </nav>


      <div class="container input " >
  
  <form action="" method="post" class="mb-5">
    <table>
    <tr>
        <th colspan="2" class="text-center">Isi Formulir Pemesanan Kendaraan<th>
    </tr>
    </table>
    <div class="row">
      <table>
      <tr>
            <td>Merek|Tipe|Harga</td>
            <td>
            
    <label for="exampleFormControlSelect1" class="text-muted">Kendaraan Yang Ingin Dibeli</label>
    <select class="form-control" id="exampleFormControlSelect1" name="orderan">
      <option class="text-muted" > Pilih Kendaraan Yang Ingin Dibeli </option>
    <?php while ($tampil = mysqli_fetch_array($ambildata)) : ?>
      <option ><?php echo $tampil['merek_mobil'] . '   ||   ' . $tampil['tipe_kendaraan'] . '   ||   ' . $tampil['harga']; ?></option>
    <?php endwhile; ?>
      
    
    </select>
  
            </td>
          </tr>
      </table>
    

      <div class="col-md-6">
        <table>
          
          <tr>
            <td>Nama Depan</td>
            <td><input type="text" placeholder="First Name" name="nama_depan" required></td>
          </tr>
          <tr>
            <td>Provinsi</td>
            <td><input type="text" placeholder="Provinsi" name="provinsi" required></td>
          </tr>
          <tr>
            <td>Kecamatan</td>
            <td><input type="text" placeholder="Kecamatan" name="kecamatan" required></td>
          </tr>
          <tr>
            <td>Metode Pembayaran</td>
            <td>
              <select class="form-control" id="exampleFormControlSelect1" name="pembayaran">
                <option class="text-muted" > Pilih Metode Pembayaran</option>
                <option>1. Cash</option>
                <option>2. Kredit</option>

            </td>
          </tr>


          
          
         
        </table>

 
      </div>

      <div class="col-md-6">
        <table>
          
          <tr>
            <td>Nama Belakang</td>
            <td><input type="text" placeholder="Last Name" name="nama_belakang" required></td>
          </tr>
          <tr>
            <td>Kota/Kabupate</td>
            <td><input type="text" placeholder="Kota/Kabupaten" name="kota" required></td>
          </tr>
          <tr>
            <td>Kode Pos</td>
            <td><input type="number" placeholder="Kode Pos" name="kode_pos" required></td>
          </tr>
          <tr>
            <td>No. HP</td>
            <td><input type="number" placeholder="Masukan No. HP Aktif" name="no_hp" required></td>
          </tr>
          <tr>
           
         
          
        </table>
      </div>
      
    </div>
    
      
      <table>
      <tr>
            <td class="spacing">Tanggal Pemesanan</td>
            <td><input type="date" placeholder="Tanggal Pemesanan" name="tanggal" ></td>
          </tr>
          <tr>
            <td><input type="submit" name="save" value="Save" ></td>
          </tr>
      </table>
  </form>
</div>


     
<div class="container mb-5 mt-5">
      <footer class="bg-dark text-white fixed-bottom mt-5">
        <div class="container">
          <div class="row pt-3">
            <div class="col text-center">
              <p>Made By Muhammad Afif Rindyansyah</p>
            </div>
    
          </div>
        </div>
    
      </footer>
      </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>