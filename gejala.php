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
  <?php 
    include_once("webvars.inc");
    $koneksi=mysqli_connect($hostname, $db_user, $db_password, $select_db) or die("Connection failed".mysqli_connect_error());
    if (!$koneksi) {
      die ('Gagal terhubung MySQL: ' . mysqli_connect_error()); 
    }
    $sql = "SELECT * FROM `tb_gejala` WHERE gejala NOT LIKE 'Tidak%'
            UNION SELECT * FROM `tb_gejala` WHERE gejala LIKE 'Tidak%'";
        
    $query = mysqli_query($koneksi, $sql);

    if (!$query){
      die ('SQL Error: ' . mysqli_error($koneksi));
    }

  ?>
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
            <a class="nav-item nav-link active" href="gejala.php">Gejala</a>
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
            <h2>Daftar Gejala</h2>
        </div>
      </div>
      <div class="row justify-content-center mb-4">
        <div class="container">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Kode</th>
                <th scope="col">Gejala</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $i=1;
                while ($data=mysqli_fetch_array($query)) {
                  
              ?>
                  <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $data["kode"]; ?></td>
                    <td><?php echo $data["gejala"]; ?></td>
                  </tr>
              <?php 
                $i++;
                }
              ?>
            </tbody>
          </table>
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