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
          <a class="nav-link" href="/benimbasvurularim">Başvurularım</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/ogrencibilgileri">Bilgilerim</a>
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
    
        <div class="d-flex h-100 flex-column text-light justify-content-center" >
        @if(Session::get('fail'))
            <div class="alert alert-danger">
                  {{ Session::get('fail') }}
               </div>
            @endif
            
                      <table class="table table-dark table-sm" >
                        <tr><th>Öğrenci Numarası</th><th>Projesi</th><th></th><th></th><th>Projenin durumu</th><th>Tez Durum</th>
                      <th>Rapor Yükle</th></tr>
          @foreach($ogrencisi as $ogr)
                <tr>
                        <td name="ogrencisi[]" >{{$ogr->ogrno}}</td>
                        <td name="ogrencisi[]" >{{$ogr->baslik}}</td>
                        <td name="ogrencisi[]" >{{$ogr->amac}}</td>
                        <td name="ogrencisi[]" >{{$ogr->meteryal}}</td>
                        <td name="ogrencisi[]" >{{$ogr->durum}}</td>
                        <td name="ogrencisi[]" >{{$ogr->durum2}}</td>
                        <td><button><a class="btn btn-succsess"href="{{url('rpr',$ogr->id)}}">RApor Ekle</a></button>   </td>
                        <td>  <form action="{{route('raporagec')}}" method="post">  
                             @csrf
                            <button >rapor</button></form>
                                                     </td>       

                        
                     
                        
                </tr>
            @endforeach
           
          </table>
         <a href="/resimler/indirme.docx" download>indir</a>
        </div> 
     
    </div>
   
        </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>