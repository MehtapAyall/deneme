<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="css/ilk.css" rel="stylesheet">

    <title>Öğrenci Anasayfası</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-warning py-4" >
  <div class="container">
    <a class="navbar-brand" href="#">Proje Takip Sistemi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Anasayfa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Danışman Ekle</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Öğrenci Ekle</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Dönem Seçimi/bilgiler</a>
        </li>
      </ul>

    </div>
  </div>
</nav>
    </header>

    <section class="koyu_arkaplan" id="hero" style=" background: url({{url('/resimler/arka.jpg')}});" >
      <div class="container">

          <form action='/danisanekle' method='post'>
            {{ csrf_field() }}
            <div class="mb-3">
              <input type="text" class="form-control" name="ad"  placeholder="Ad">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="soyad" placeholder="Soyad">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="unvan" placeholder="Unvan">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="sifre" placeholder="Şifre">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="posta" placeholder="E-posta">
            </div>
            <button type="submit" class="btn btn-primary">KAYDET</button>
          </form>
        
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
