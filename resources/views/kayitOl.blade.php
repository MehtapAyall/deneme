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
          <a class="nav-link" href="/ogrGiris">Öğrenci Giriş</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dnmGiris">Danışman Giriş</a>
        </li>
      </ul>

    </div>
  </div>
</nav>
    </header>

    <section class="koyu_arkaplan" id="hero" style=" background: url({{url('/resimler/arka.jpg')}});" >
      <div class="container">
        <div class="d-flex h-100 flex-column text-light justify-content-center" >
        <form method="post" action="kayitol" enctype="multipart/form-data">
        @csrf
        <center>
            <table class="table table-dark table-striped" style="width:500px">
            <tr><td colspan="2" style="text-align:center;"><h1>Öğrenci Kayıt Sayfası</h1></td></tr>
            <tr><td colspan="2"><center> <input type="file" name="image" required class="course form-control" style="width: 300px;"> </center></td></tr>
            <tr><td style="text-align:right;"> <label for="">Öğrenci Numarası:</label></td> <th> <input type="text" > </th></tr>
            <tr><td style="text-align:right;"> <label for="">Ad:</label></td> <th> <input type="text" ></th></tr>
            <tr><td style="text-align:right;"> <label for="">Soyad:</label></td> <th> <input type="text" ></th></tr>
            <tr><td style="text-align:right;"> <label for="">Şifre:</label></td> <th> <input type="text" ></th></tr>
            <tr><td style="text-align:right;"> <label for="">Şifre Tekrarı:</label></td> <th> <input type="text" ></th></tr>
            <tr><td style="text-align:right;"> <label for="">E-posta:</label></td> <th> <input type="text" ></th></tr>
            <tr><td style="text-align:right;"> <label for="">Telefon:</label></td> <th> <input name="telefon"type="tel" ></th></tr>
            <tr><td style="text-align:right;"> <label for="">Fakülte:</label></td> <th> <input type="text" ></th></tr>
            <tr><td style="text-align:right;"> <label for="">Bölüm:</label></td> <th> <input type="text" ></th></tr>
            <tr><td style="text-align:right;"> <label for="">Sınıf:</label></td> <th> <input type="text" ></th></tr>
            <tr><td style="text-align:right;"> <label for="">Danışman Seç:</label></td> <th>
            <select name="danisman">
                <option> Danışman Seçiniz </option>
                <option> Mustafa Günbatımı </option>
                <option> Ayşe Solmaz </option>
                <option> Hüseyin Okyanusoğlu </option>
                <option> Günnur Salar </option>
                <option> Müzeyyen Korkmaz </option>
            </select>
            </th></tr>
            <tr><td style="text-align:right;"><button class="btn btn-danger">Şifremi Unutum</button> </td><th><button class="btn btn-warning">Kayıt Ol</button> </th></tr>
            </table></center>
        </form>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
