<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, viewport-fit=cover">
    <title>Home | GenB Creative</title>
    <link rel="icon" href="{{ asset('frontend/img/logo.ico') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap/css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="index.html">
            <img src="{{ asset('frontend/img/logo.png') }}" width="150px" class="d-inline-block align-top" alt="logo">
        </a>
        <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <img src="img/hamburger.png" width="30px" alt="hamburger">
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item align-right">
                <a class="nav-link text-white float-right" href="/portofoliopage">Portofolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white float-right" href="/produkpage">Produk dan Jasa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white float-right" href="/tentangpage">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white d-inline-block px-4 float-right" id="btnHubungiKami" href="/">Hubungi Kami<img src="{{ asset('frontend/img/arrow.png') }}" class="arrow-right" width="20"/></a>
              </li>
            </ul>
        </div>
    </nav>
    <header>
      <div style="position: relative; background-image: url('frontend/img/temporary.jpg'); height: calc(100vh - 91.9px); background-size: cover;">
        <div class="position-absolute" style="bottom: 15%; left: 5%;">
          <div class="container">
            <h1 class="font-weight-bold text-white">GenB Creative</h1>
            <h5 class="text-white">Hadir di era digital untuk fokus membantu meningkatkan penjualan pasar bisnis UMKM di Indonesia.</h5><br/>
            <a href="tentang.html" class="btn btn-lg text-white" style="background-color: rgb(20,20,20);">Pelajari Lebih Lanjut<img src="{{ asset('frontend/img/arrow.png') }}" class="arrow-right" width="20"/></a>
          </div>
        </div>
      </div>
    </header>

    <section style="min-height: 588px;">
        <div class="container py-5 text-center">
          <h1 class="font-weight-bold">Produk dan Jasa Kami</h1>
          <h5 class="font-weight-light">Kami siap membantu mengoptimalkan bisnis Anda secara maksimal dengan menggunakan kemampuan profesional dan strategi digital yang tepat.</h5>
          <div class="row" style="margin-top: 80px;">
            <a href="produk.html" class="col-lg-3 col-md-6 text-center mb-5" style="text-decoration: none;">
              <img src="{{ asset('frontend/img/temporary.jpg') }}" width="200px" height="200px" class="mb-5" style="border-radius: 50%;" alt="">
              <h5 class="font-weight-bold text-dark">Social Media Handling</h5>
            </a>
            <a href="produk.html" class="col-lg-3 col-md-6 text-center mb-5" style="text-decoration: none;">
              <img src="{{ asset('frontend/img/temporary.jpg') }}" width="200px" height="200px" class="mb-5" style="border-radius: 50%;" alt="">
              <h5 class="font-weight-bold text-dark">Content Marketing</h5>
            </a>
            <a href="produk.html" class="col-lg-3 col-md-6 text-center mb-5" style="text-decoration: none;">
              <img src="{{ asset('frontend/img/temporary.jpg') }}" width="200px" height="200px" class="mb-5" style="border-radius: 50%;" alt="">
              <h5 class="font-weight-bold text-dark">Branding and Design</h5>
            </a>
            <a href="produk.html" class="col-lg-3 col-md-6 text-center mb-5" style="text-decoration: none;">
              <img src="{{ asset('frontend/img/temporary.jpg') }}" width="200px" height="200px" class="mb-5" style="border-radius: 50%;" alt="">
              <h5 class="font-weight-bold text-dark">Photography</h5>
            </a>
          </div>
        </div>
    </section>

    <section style="min-height: 567px; background-color: rgb(20,20,20);">
    <div class="container-fluid py-5 text-center text-white">
    <h1 class="font-weight-bold">Portofolio Kami</h1>
        <h5 class="font-weight-light">Ingin instagram bisnismu punya tampilan menarik seperti ini?</h5>
        <div class="owl-carousel owl-theme my-5">
            @foreach ($portofolio as $data)
            <div><img src="{{ asset('thumb/'.$data->foto) }}" alt=""></div>
                @endforeach
            </div>
            <a href="/portofolio" class="btn btn-lg text-center text-dark" style="background-color: #FFDE59">Portofolio Lainnya</a>
      </div>
        </div>
        
    </section>

    <section style="min-height: 1000px;">
      <div class="container-fluid text-center py-5">
      <h1 class="font-weight-bold">Portofolio Kami</h1>
        <h5 class="font-weight-light">Ingin instagram bisnismu punya tampilan menarik seperti ini?</h5>
            <div class="row">
            @foreach ($client as $data)
                <div class="col-xl-4 col-md-6 text-center my-5">
                    <img src="{{ asset('thumb/'.$data->foto) }}" width="250px" height="200px" class="rounded mb-5" alt="">
                    <h6>{{ $data->keterangan }} </h6>
                </div>
                @endforeach
            </div>
        </div>
        <div class="mt-5">
          <h1 class="font-weight-bold text-center">Bukti Kepuasan Klien</h1>
          <h5 class="font-weight-light text-center">Berikut adalah bukti kepuasan para UMKM tentang layanan kami</h5>
          <div class="container">
            <div class="row" style="margin-top: 80px;">
              <div class="col-lg-4 mb-5">
                <div class="p-4 text-left" style="border: 2px solid black; border-radius: 50px;">
                  <h4>Budi</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dignissim mauris, aliquam nunc vitae egestas habitasse.</p>
                </div>
              </div>
              <div class="col-lg-4 mb-5">
                <div class="p-4 text-left" style="border: 2px solid black; border-radius: 50px;">
                  <h4>Budi</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dignissim mauris, aliquam nunc vitae egestas habitasse.</p>
                </div>
              </div>
              <div class="col-lg-4 mb-5">
                <div class="p-4 text-left" style="border: 2px solid black; border-radius: 50px;">
                  <h4>Budi</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dignissim mauris, aliquam nunc vitae egestas habitasse.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section style="min-height: 800px; background-color: rgb(20,20,20);" id="hubungiKami">
      <div class="container text-center text-white py-5">
        <h1 class="font-weight-bold">Hubungi Kami</h1>
        <h5 class="font-weight-light">GenB adalah solusi bagi Anda, para pebisnis yang butuh social media agency untuk membuat tampilan bisnis Anda di media sosial lebih menarik. Free konsultasi, kami siap bantu rancang konsep atau strategi digital dari 0. </h5>
        <form method="post" action="{{ route('hubunginkami.store') }}" style="margin-top: 80px; margin-bottom: 80px;">
        @csrf
          <div class="form-group text-left">
            <label for="txtName">Name</label>
            <input id="txtName" type="text" name="nama" class="form-control">
          </div>
          <div class="form-group text-left">
            <label for="txtEmail">Email</label>
            <input id="txtEmail" type="text" name="email" class="form-control">
          </div>
          <div class="form-group text-left">
            <label for="txtEmail">Nomor Telepon</label>
            <input id="txtPhone" type="text" name="nomor_telp" class="form-control">
          </div>
          <div class="form-group text-left">
            <label for="txtEmail">Pesan Anda</label>
            <textarea id="txtMessage" type="text" class="form-control" name="pesan" style="resize: none; height: 10em;"></textarea>
          </div>
          <button class="btn btn-lg px-5 float-right" style="background-color: #FFDE59;">Kirim</button>
        </form>
      </div>
    </section>

    <footer style="background-color: #2C2C2C;">
      <div class="container-fluid pt-5">
        <div class="row">
          <div class="col-lg-3 text-center mb-5">
            <a href="index.html"><img src="img/logo.png" width="120px" alt=""></a>
          </div>
          <div class="col-lg-3 col-6 text-left text-white mb-5">
            <h5 class="font-weight-bold">Ikuti Kami:</h5>
            <a href="#"><img src="{{ asset('frontend/img/facebook.png') }}" width="50px" alt=""></a>
            <a href="#"><img src="{{ asset('frontend/img/instagram.png') }}" width="50px" alt=""></a>
            <a href="#"><img src="{{ asset('frontend/img/linkedin.png') }}" width="50px" alt=""></a>
          </div>
          <div class="col-lg-3 col-6 text-left text-white mb-5">
            <h5 class="font-weight-bold">Kontak:</h5>
            <p class="mb-0"><a class="text-white" href="tel:081234567890">081234567890</a></p>
            <p><a class="text-white" href="mailto:sample@mail.com">sample@mail.com</a></p>
          </div>
          <div class="col-lg-3 text-left text-white mb-5">
            <h5 class="font-weight-bold">Alamat Kami:</h5>
            <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl feugiat tortor, nisi fusce potenti.</p>
          </div>
        </div>
        <h6 class="text-center text-white py-3 mb-0" style="border-top: 1px solid rgb(255,255,255)">© 2021 GenB Creative. All Rights Reserved</h6>
      </div>
    </footer>

    <script src="{{ asset('frontend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
          $(".owl-carousel").owlCarousel({
            margin: 10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                600:{
                    items:2,
                    nav:false
                },
                1000:{
                    items:3,
                    nav:false
                },
                1200:{
                    items:4,
                    nav:true,
                }
            }
          });
        });
    </script>
</body>
</html>