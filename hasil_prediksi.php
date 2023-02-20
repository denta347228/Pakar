<?php 
  if(isset($_POST["tambah"])){
    $nama=$_POST["nama"];
    $alamat=$_POST["alamat"];

  //menetukan nilai gejala berdasarkan inputan
    if ($_POST["demam"]==1) {
      $G1=1;
      $G01=0;
    }else{
      $G1=0;
      $G01=1;
    }
    if ($_POST["pusing"]==1) {
      $G2=1;
      $G02=0;
    }else{
      $G2="0";
      $G02=1;
    }
    if ($_POST["bersin"]==1) {
      $G3=1;
      $G03=0;
    }else{
      $G3=0;
      $G03=1;
    }
    if ($_POST["batuk"]==1) {
      $G4=1;
      $G04=0;
    }else{
      $G4=0;
      $G04=1;
    }
    if ($_POST["tenggorokan"]==1) {
      $G5=1;
      $G05=0;
    }else{
      $G5=0;
      $G05=1;
    }
    if ($_POST["kelelahan"]==1) {
      $G6=1;
      $G06=0;
    }else{
      $G6=0;
      $G06=1;
    }
    if ($_POST["nyeri"]==1) {
      $G7=1;
      $G07=0;
    }else{
      $G7=0;
      $G07=1;
    }
  }

  //mencocokan nilai dengan rule yang ada
  include_once("webvars.inc");
  $koneksi=mysqli_connect($hostname, $db_user, $db_password, $select_db) or die("Connection failed".mysqli_connect_error());
  if (!$koneksi) {
    die ('Gagal terhubung MySQL: ' . mysqli_connect_error()); 
  }
  $sql = "SELECT * FROM tb_rule WHERE G1='$G1' AND G2='$G2' AND G3='$G3' AND G4='$G4' AND G5='$G5' AND G6='$G6'
          AND G7='$G7' AND G01='$G01' AND G02='$G02' AND G03='$G03' AND G04='$G04' AND G05='$G05' AND G06='$G06'
          AND G07='$G07'";
      
  $query = mysqli_query($koneksi, $sql);

  if (!$query){
    die ('SQL Error: ' . mysqli_error($koneksi));
  }

  //mencari hasil dan solusi 
  $jumlah=mysqli_num_rows($query);
  if($jumlah==1){
    $data=mysqli_fetch_array($query);
    $kode=$data["prediksi"];

    $sql1 = "SELECT * FROM tb_prediksi WHERE kode='$kode'";
        
    $query1 = mysqli_query($koneksi, $sql1);

    if (!$query1){
      die ('SQL Error: ' . mysqli_error($koneksi));
    }
    $data1=mysqli_fetch_array($query1);
    $keterangan=$data1["keterangan"];
    $solusi=$data1["solusi"];
  }else{
    $kode="H4";
    $keterangan="Hasil Prediksi Belum Ditemukan.";
    $solusi="Segera periksakan diri anda ke dokter atau rumah sakit terdekat!";
  }

 ?>
<!doctype html>
<html lang="en" id="home">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Sistem Prediksi Gejala Corona</title>

  </head>
  <body class="mt-5">
    <!-- mt-5 untuk marginnya m=margin, t=top, 5=nilainya. untuk in kita bisa lihat di utilities -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <!-- Bisa diubah backroundnya seperti ini -->
    <!-- <nav class="navbar navbar-light" style="background-color: #e3f2fd;"> -->
      <div class="container">
        <!-- dimasukan container biar dia ada dalam container dan tidak kepinggir tulisannya -->
        <img src="img/covid.png" width="50" class="rounded-circle">
        <a class="navbar-brand" href="index.php"><b>Sistem Prediksi Gejala Corona</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="prediksi.php">Prediksi</a>
            <a class="nav-item nav-link" href="gejala.php">Gejala</a>
            <a class="nav-item nav-link" href="pengetahuan.php">Basis Pengetahuan</a>
          </div>
        </div>
       </div> 
    </nav>

<!-- LAYOUTING -->
<section class="about pt-5 pb-5" style="background-color: #e9ecef;">
    <div class="container" style="background-color: white;padding: 10px 10px; box-shadow: 1px 1px 3px grey;">
      <div class="row mb-4 pt-5">
        <!-- angka margin dari 0-5 -->
        <div class="col text-center">
            <h2>Hasil Prediksi : </h2>
        </div>
      </div>
      <div class="row justify-content-center mb-4">
        <div class="container">
          <table class="table table-info">
            <tbody style="font-weight: bold;">
              <tr>
                <td>Nama</td>
                <td>:</td>
                <td class="col md-7"><?php echo $nama; ?></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $alamat.$jumlah; ?></td>
              </tr>
            </tbody>
          </table>
          <br>
          <table class="table">
            <tbody>
              <tr>
                <td>Gejala</td>
                <td>:</td>
                <td>
                  <ul>
                    <?php 
                      if($G1==1){
                        echo "<li>Demam</li>";
                      }if($G2==1){
                        echo "<li>Pusing</li>";
                      }if($G3==1){
                        echo "<li>Bersin-Bersin</li>";
                      }if($G4==1){
                        echo"<li>Batuk</li>";
                      }if($G5==1){
                        echo "<li>Sakit Tenggorokan</li>";
                      }if($G6==1){
                        echo "<li>Kelelahan</li>";
                      }if($G7==1){
                        echo "<li>Nyeri Dada</li>";
                      }
                    ?>
                  </ul>
                </td>
              </tr>
              <?php if($kode=="H1" || $kode=="H2"){ ?>
              <tr class="table-danger" style="font-weight: bold;">
              <?php }else if($kode=="H3") { ?>
              <tr class="table-warning" style="font-weight: bold;">
               <?php }else { ?>
              <tr class="table-active" style="font-weight: bold;">
              <?php } ?>
                <td>Hasil</td>
                <td>:</td>
                <td><?php echo $keterangan; ?></td>
              </tr>
              <tr>
                <td>Saran dan Solusi</td>
                <td>:</td>
                <td><?php echo $solusi; ?></td>
              </tr>
            </tbody>
          </table>
          <a href="proses_prediksi.php"><button type="button" class="btn btn-danger">Lakukan Pemeriksaan Lagi</button></a>
          <a href="index.php"><button type="button" class="btn btn-primary">Kembali</button></a>
        </div>
      </div>
    </div>
</section>

<footer class="bg-dark text-white">
  <div class="container">
    <div class="row pt-3 pb-2">
      <div class="col text-center">
        <p>Copyright ©Kelompok 2 Sistem Pakar VI Bilingual 2021</p>
      </div>
    </div>
  </div>
</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>