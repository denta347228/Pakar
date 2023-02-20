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
            <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="prediksi.php">Prediksi</a>
            <a class="nav-item nav-link" href="gejala.php">Gejala</a>
            <a class="nav-item nav-link" href="pengetahuan.php">Basis Pengetahuan</a>
          </div>
        </div>
       </div> 
    </nav>

    <div class="jumbotron jumbotron-fluid">
      <div class="container text-center">
        <img src="img/covid.png" width="25%" class="rounded-circle img-thumbnail">
        <!-- class="rounded-circle" berasal dari bootstrap agar gambarnya jadi bulat -->
        <!-- img-thumbnail=gambar agar ada border -->
        <h2 class="display-5"><b>SISTEM PREDIKSI GEJALA CORONA</b></h2>
        <p class="lead">Selamat Datang</p>
      </div>
    </div>


<!-- LAYOUTING -->
<section id="about" class="about pt-4 pb-5">
    <div class="container">
      <div class="row mb-4 pt-5">
        <!-- angka margin dari 0-5 -->
        <div class="col text-center">
            <a href="proses_prediksi.php"><button type="button" class="btn btn-danger btn-lg">Lakukan Prediksi</button></a>
        </div>
      </div>
      <div class="row justify-content-center mb-4">
          <!-- agar yang ada kolomkososng, yang kolom berisi ada ditengah. jadi tidak perlu col tambahan -->
          <div class="col-md-10 text-justify ">
            <p>COVID-19 (penyakit Corona) merupakan sebuah penyakit yang dapat menular melalui sistem pernapasan, sehingga penyakit ini 
                mudah menyebar.Penyakit ini memberikan gejala yang bermacam-macam kepada seseorang yang terjangkit. Sistem ini akan 
                membantu kita dalam memprediksi apakah kita berpotensi positif corona berdasarkan gejala yang muncul pada tubuh kita.
            </p>
          </div>
        </div>
    </div>
</section><br>

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