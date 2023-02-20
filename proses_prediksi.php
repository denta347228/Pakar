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
            <h2>Silahkan Menjawab Pertanyaan Berikut :</h2>
        </div>
      </div>
      <div class="row justify-content-center mb-4">
        <div class="col-md-10 text-justify">
          <form role="form" action="hasil_prediksi.php" method="post" enctype="multipart/form-data">
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputnama"><b>Nama : </b></label>
                <input type="text" class="form-control" name="nama" id="inputnama" placeholder="Masukan Nama Anda" required autocomplete="off">
              </div>
              <div class="form-group col-md-8">
                <label for="inputalamat"><b>Alamat : </b></label>
                <input type="text" class="form-control" name="alamat" id="inputalamat" placeholder="Masukan Alamat Anda" required autocomplete="off">
              </div>
            </div>
            <div class="form-group" style="font-size: 16pt;">
              <label><b>1. Apakah anda mengalami demam ? </b></label>
            </div>  
            <div class="form-group pl-5" style="font-size: 14pt;"> 
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="demam" id="inlineRadio1" value="1" required>
                <label class="form-check-label" for="inlineRadio1">Iya</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="demam" id="inlineRadio2" value="0" required>
                <label class="form-check-label" for="inlineRadio2">Tidak</label>
              </div>
            </div>

            <div class="form-group" style="font-size: 16pt;">
              <label><b>2. Apakah anda mengalami pusing ? </b></label>
            </div>  
            <div class="form-group pl-5" style="font-size: 14pt;"> 
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pusing" id="inlineRadio1" value="1" required>
                <label class="form-check-label" for="inlineRadio1">Iya</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pusing" id="inlineRadio2" value="0" required>
                <label class="form-check-label" for="inlineRadio2">Tidak</label>
              </div>
            </div>

            <div class="form-group" style="font-size: 16pt;">
              <label><b>3. Apakah anda mengalami bersin-bersin ? </b></label>
            </div>  
            <div class="form-group pl-5" style="font-size: 14pt;"> 
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bersin" id="inlineRadio1" value="1" required>
                <label class="form-check-label" for="inlineRadio1">Iya</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bersin" id="inlineRadio2" value="0" required>
                <label class="form-check-label" for="inlineRadio2">Tidak</label>
              </div>
            </div>

            <div class="form-group" style="font-size: 16pt;">
              <label><b>4. Apakah anda mengalami batuk ? </b></label>
            </div>  
            <div class="form-group pl-5" style="font-size: 14pt;"> 
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="batuk" id="inlineRadio1" value="1" required>
                <label class="form-check-label" for="inlineRadio1">Iya</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="batuk" id="inlineRadio2" value="0" required>
                <label class="form-check-label" for="inlineRadio2">Tidak</label>
              </div>
            </div>

            <div class="form-group" style="font-size: 16pt;">
              <label><b>5. Apakah anda mengalami sakit tenggorokan ? </b></label>
            </div>  
            <div class="form-group pl-5" style="font-size: 14pt;"> 
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tenggorokan" id="inlineRadio1" value="1" required>
                <label class="form-check-label" for="inlineRadio1">Iya</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tenggorokan" id="inlineRadio2" value="0" required>
                <label class="form-check-label" for="inlineRadio2">Tidak</label>
              </div>
            </div>

            <div class="form-group" style="font-size: 16pt;">
              <label><b>6. Apakah anda mengalami kelelahan ? </b></label>
            </div>  
            <div class="form-group pl-5" style="font-size: 14pt;"> 
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kelelahan" id="inlineRadio1" value="1" required>
                <label class="form-check-label" for="inlineRadio1">Iya</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kelelahan" id="inlineRadio2" value="0" required>
                <label class="form-check-label" for="inlineRadio2">Tidak</label>
              </div>
            </div>

            <div class="form-group" style="font-size: 16pt;">
              <label><b>7. Apakah anda mengalami nyeri dada ? </b></label>
            </div>  
            <div class="form-group pl-5" style="font-size: 14pt;"> 
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="nyeri" id="inlineRadio1" value="1" required>
                <label class="form-check-label" for="inlineRadio1">Iya</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="nyeri" id="inlineRadio2" value="0" required>
                <label class="form-check-label" for="inlineRadio2">Tidak</label>
              </div>
            </div>
                <button type="submit" name="tambah" class="btn btn-danger">Simpan</button>
                <button type="reset" class="btn btn-success">Reset</button>
          </form>
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