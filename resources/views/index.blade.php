<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Medgistic</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
    <link href="{{'css/login_signup.css'}}" rel="stylesheet">



  </head>
  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
      <div class="container">
        
        <a class="navbar-brand" href="/">Medgistic</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#products">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#partners">Partners</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Solusi untuk keperluan logistik medis rumah sakit anda</h1>
          </div>
          <div class="col-md-6 mx-auto" >
            <!-- <button class="btn btn-block btn-lg btn-primary" href="product/product.html">Beli Sekarang!</button> -->
            <a class="btn btn-primary btn-block btn-lg" href="#products" role="button">Beli Sekarang!</a>
          </div>
        </div>
      </div>
    </header>

    <!-- Image Showcases -->
    <section class="showcase" id="about">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-1.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Harga Terjangkau</h2>
            <p class="lead mb-0">Lebih hemat dan terjangkau, tiada biaya tersembunyi dan jelas pembiayaannya daripada harus membuat sistem logistik sendiri</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>Efisien</h2>
            <p class="lead mb-0">Dibuat sesuai kebutuhan client kami, mulai dari klinik pribadi hingga Rumah Sakit Internasional</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-3.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Dukungan Teknisi 24/7</h2>
            <p class="lead mb-0">Teknisi dan layanan pelanggan kami siap melayani anda untuk segala problema yang akan terjadi!</p>
          </div>
        </div>
      </div>
    </section>

  <section class="features-icons bg-light text-center">
    <div class="container">
      <h2 class="mb-5" id="products">Tawaran produk dari kami</h2>
      <div class="row">
        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/puskesmas.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="{{url('/product/1')}}" role="button">Paket Fasilitas Kesehatan 1</a>
                </h4>
                <h5>$3,499.00</h5>
                <p class="card-text">Sangat menguntungkan bagi penggunaan pada fasilitas kesehatan tingkat 1: Puskesmas, Poliklinik</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#ProductModal2"><img class="card-img-top" src="img/pexels-photo-263399.jpeg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="{{url('/product/2')}}" role="button">Paket Fasilitas Kesehatan 2</a>
                </h4>
                <h5>$5,499.00</h5>
                <p class="card-text">Sangat menguntungkan bagi penggunaan pada fasilitas kesehatan tingkat 2: Rumah Sakit tipe B dan C</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/pexels-photo-668300.jpeg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="{{url('/product/3')}}" role="button">Paket Fasilitas Kesehatan 3</a>
                </h4>
                <h5>$8,499.00</h5>
                <p class="card-text">Sangat menguntungkan bagi penggunaan pada fasilitas kesehatan tingkat 3: Rumah Sakit tipe A</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
          <div class="col-md-6 mx-auto" >
            <!-- <button class="btn btn-block btn-lg btn-primary" href="product/product.html">Beli Sekarang!</button> -->
            <a class="btn btn-primary btn-block btn-lg" href="http://40.83.103.79/apotik-final/" role="button"><h2 class="mb-2" id="products">DEMONSTRASI WEBSITE</h2></a>
          </div>
          
      </div> <!-- row.// -->
      
    </div>
  </section> 

    <!-- Testimonials -->
    <section class="testimonials text-center">
      <div class="container">
        <h2 class="mb-5">Apa yang pelanggan kami katakan...</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/inidedy.jpg" alt="">
              <h5>Dedy Kurniawan</h5>
              <h6>Kepala Rumah Sakit Bumi Etam</h6>
              <p class="font-weight-light mb-0">"Makasih medgistic! Akhirnya warga Bumi Etam makin gampang beli obat!"</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/inijordan.jpg" alt="">
              <h5>Alexander Jordan</h5>
              <h6>Kepala Puskesmas Silicon Valley, California, AS</h6>
              <p class="font-weight-light mb-0">"Akhirnya Puskesmas kami tidak pernah kehabisan obat! Makasih Medgistic!"</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/inibless1.jpg" alt="">
              <h5>Bless R.</h5>
              <h6>Head of IT Department Singapore General Hospital </h6>
              <p class="font-weight-light mb-0">"Akhirnya apps Rumah Sakit kami tidak buggy lagi"</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <h2 class="mb-5" id="partners">Partner Kami</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="fas fa-hospital-alt m-auto text-primary"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="fas fa-hospital-symbol m-auto text-primary"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="far fa-hospital m-auto text-primary"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="call-to-action text-white text-center">
      <div class="overlay"></div>
      <div class="container">
      @include('flash::message')

        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h2 class="mb-4">Tertarik? Langganan info terbaru!</h2>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form method="POST" action="{{url('/langganan')}}">
              <div class="form-row">
                @csrf
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="email" class="form-control form-control-lg" placeholder="Masukkan e-mail anda...">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Daftar!</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; Dedy Kurniawan 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fab fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Sign In Modal -->
    <div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ProductModal3">Masuk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body col-lg-12 login-form-1">
                <h3>Selamat datang kembali!</h3>
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Alamat Email *" value="" />
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password Anda *" value="" />
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Login" />
                  </div>
                  <div class="form-group">
                    <a data-dismiss="modal" data-toggle="modal" href="#signUpModal" class="ForgetPwd">Belum punya akun? Daftar dulu!</a>
                  </div>
                </form>
          </div> 
        </div>
      </div>
    </div>
  </div>
<script>
function validateForm() {
  var x = document.forms["myForm"]["first_name"].value;
  var y = document.forms["myForm"]["last_name"].value;
  var z = document.forms["myForm"]["email"].value;
  var pass = document.forms["myForm"]["password"].value;



  if (x == "") {
    alert("First name must be filled out");
    return false;
  }
  if (y == "") {
    alert("Last name must be filled out");
    return false;
  }
  if (z == "") {
    alert("Email must be filled out");
    return false;
  }
  if (pass == "") {
    alert("password must be filled out");
    return false;
  }

}
</script>
      <!-- Sign Up Modal -->
      <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ProductModal3">Daftar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body col-lg-12 login-form-1">
                    <h3>Halo Pendatang! Silahkan Daftar Dulu Yaaaa!</h3>
                    <form name="myForm" method="POST" action="/daftar" onsubmit="return validateForm()">
                    
                    @csrf
                      <div class="form-group">
                        <input name="first_name" type="text" class="form-control" placeholder="Nama Depan *" value="" />
                      </div>
                      <div class="form-group">
                          <input name="last_name" type="text" class="form-control" placeholder="Nama Belakang *" value="" />
                        </div>
                      <div class="form-group">
                        <input name="email" type="text" class="form-control" placeholder="Alamat Email *" value="" />
                      </div>
                      <div class="form-group">
                        <input name="password" type="password" class="form-control" placeholder="Password Anda *" value="" />
                      </div>
                      <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Daftar" />
           


                      </div>
                      </div>
                    </form>
              </div> 
            </div>
          </div>
        </div>
      </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
