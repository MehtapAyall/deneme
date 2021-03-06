<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/ilk.css" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
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
          <a class="nav-link active" aria-current="page" href="#">Anasayfa</a>
        </li>
            <li class="nav-item">
          <a class="nav-link" href="#">Atanan Öğrenciler</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">Çıkış Yap</a>
        </li>
      </ul>

    </div>
  </div>
</nav>
    </header>
    <section class="koyu_arkaplan" id="hero" style=" background: url({{url('/resimler/arka.jpg')}});">
    <div class="container">
    <form method="post" action="{{route('belge')}}" enctype="multipart/form-data">
        @csrf
        <table>
          <tr><td> <input type="hidden" name="num" value="{{ $LoggedUserInfo['ogrencino'] }}"> </td></tr>
          <tr><td style="background-color:white;">Word belgelerinizi ekleyiniz</td><td style="background-color:white;">PDF belgelerinizi ekleyiniz</td></tr>
          <tr><td> <input type="file" name="bel1" required class="course form-control" style="width: 300px;"> </td>
          <td><input type="file" name="pdf1" required class="course form-control" style="width: 300px;"> </td></tr>
          <tr><td> <input type="file" name="bel2" required class="course form-control" style="width: 300px;"> </td>
          <td><input type="file" name="pdf2" required class="course form-control" style="width: 300px;"> </td></tr>
          <tr><td> <input type="file" name="bel3" required class="course form-control" style="width: 300px;"> </td>
          <td><input type="file" name="pdf3" required class="course form-control" style="width: 300px;"> </td></tr>
          
          <td><input type="hidden"name="danisman" value="{{ $LoggedUserInfo['danisman'] }}"></td>
          <tr><td> <button class="btn btn-danger" onclick="location=''" style="height:50x; width:150px;">Yükle</button> </td></tr>
        </table>
    </form>
    </div>
   
        </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>