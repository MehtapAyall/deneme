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
        <form method="post" action="danismankayitol" enctype="multipart/form-data">
        @csrf
        <center>
            <table class="table table-dark table-striped" style="width:500px">
            <tr><td colspan="2" style="text-align:center;"><h1>Danışman Kayıt Sayfası</h1></td></tr>
            <tr><td colspan="2"><center>  </center></td></tr>
            <tr><td style="text-align:right;"> <label for="">Ad:</label></td> <th> <input type="text" name="danismanadi"></th></tr>
            <tr><td style="text-align:right;"> <label for="">Soyad:</label></td> <th> <input type="text" name="danismansoyad" ></th></tr>
            <tr><td style="text-align:right;"> <label for="">Şifre:</label></td> <th> <input type="text" name="danisman sifre"></th></tr>
            <tr><td style="text-align:right;"> <label for="">Şifre Tekrarı:</label></td> <th> <input type="text" ></th></tr>
            <tr><td style="text-align:right;"> <label for="">E-posta:</label></td> <th> <input type="text" naem="danismansifre"></th></tr>
            <tr><td style="text-align:right;"> <label for="">Ünvan:</label></td> <th> <input name="danismanunvan"type="text" ></th></tr>
           
            <tr><td style="text-align:right;"> </td><th><button class="btn btn-warning" onclick="location='/danismananasayfa'">Kayıt Ol</button> </th></tr>
            </table></center>
        </form>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
