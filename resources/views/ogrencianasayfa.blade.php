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
          <a class="nav-link" href="#">Danışman</a>
        </li><li class="nav-item">
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
    
  
    <div class="container"><br><br>

      <form action='/ogrencianasayfa' method='post'>
      @if(Session::get('fail'))
            <div class="alert alert-danger">
                  {{ Session::get('fail') }}
               </div>
            @endif
        {{ csrf_field() }}
        <table style="background-color:#bbabd8; height:500px; width:900px;" >
          <tr><td colspan="2" style="text-align:center"> <input type="text" name="baslik" placeholder="Proje başlığını girin" style="width:400px; height:50px;"> </td></tr>
          <tr> <td><input class="form-control" placeholder="Amaç,önem,kapsam" name="amac" style="height: 250px"></td> 
          <td> <input class="form-control" placeholder="Meteryal,yontem,olanak" name="meteryal" style="height: 250px"></td> </tr>
          <tr>
            <td colspan="2">
            <input type="text" name="anahtar1" placeholder="1.Anahtar Kelime">
            <input type="text" name="anahtar2" placeholder="2.Anahtar Kelime">
            <input type="text" name="anahtar3" placeholder="3.Anahtar Kelime">
            <input type="text" name="anahtar4" placeholder="4.Anahtar Kelime">
            <input type="text" name="anahtar5" placeholder="5.Anahtar Kelime">
            <input type="hidden"name="danisman" value="{{ $LoggedUserInfo['danisman'] }}">
            <input type="hidden"name="durum" value="beklemede">
            </td>
          </tr>
          <tr><td colspan="2" style="text-align:center"> <input type="text" name="num" placeholder="Numaranızı giriniz" style="width:400px; height:30px;"> </td></tr>
          <tr><td colspan="2" style="text-align:center"> </td></tr>
          <tr> <td colspan="2" style="text-align:center"> <button style=" height:50px; width: 200px;" class="btn btn-warning" onclick="location='/ogrencianasayfa'">Başvur</button> 
          <butto style=" height:50px; width:200px;" class="btn btn-warning" onclick="location='/ogrAnasayfa'">Benzerlik</button></td></tr>
        
        </table>
        </form>
        <form action="{{route('raporagec')}}" method="post">
          @csrf
          <button>rapor</button>
        </form>




    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
