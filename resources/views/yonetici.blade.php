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
       
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Öğrenciler
    </button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
      Danışanlar
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Öğreni Listesi</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <table class="width:700px">
            <thead>
            <tr>
                <th>Ad</th>
                <th>Soyad</th>
                <th>Öğrenci No</th>
                <th>Fakülte</th>
                <th>Bölüm</th>
                <th>Sınıf</th>
                <th>Telefon</th>
                <th>E Posta</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($ogrenci as $key => $ogr)
                        <td>{{$ogr->ad}}</td>
                        <td>{{$ogr->soyad}}</td>
                        <td>{{$ogr->ogrNo}}</td>
                        <td>{{$ogr->fakulte}}</td>
                        <td>{{$ogr->bolum}}</td>
                        <td>{{$ogr->sınıf}}</td>
                        <td>{{$ogr->telefon}}</td>
                        <td>{{$ogr->eposta}}</td>
                    @endforeach
                </tr>
            </tbody>
        </tale>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Öğreni Listesi</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <table class="width:700px">
            <thead>
            <tr>
                <th>Ad</th>
                <th>Soyad</th>
                <th>Unvan</th>
                <th>E Posta</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($danisan as $key => $dns)
                        <td>{{$dns->ad}}</td>
                        <td>{{$dns->soyad}}</td>
                        <td>{{$dns->unvan}}</td>
                        <td>{{$dns->ePosta}}</td>
                    @endforeach
                </tr>
            </tbody>
        </tale>
          </div>
        </div>
      </div>
    </div>

      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>





  </body>
</html>
