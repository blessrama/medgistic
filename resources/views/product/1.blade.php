<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Produk: Fasilitas Kesehatan 1</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/login_signup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">
    <script>
                    function validate() {
                    var x = document.forms["form"]["first_name"].value;
                    var y = document.forms["form"]["last_name"].value;
                    var z = document.forms["form"]["email"].value;
                    var pass = document.forms["form"]["password"].value;
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
  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Medgistic</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">PAKET FASILITAS KESEHATAN 1</h1>
            <p class="lead text-muted mb-0">Sangat menguntungkan bagi penggunaan pada fasilitas kesehatan tingkat 1: Puskesmas, Poliklinik</p>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Fasilitas Kesehatan 1</li>
                    </ol>
                </nav>
            </div>
           
        </div>
        <div class="row">
            @include('flash::message')

            </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- Image -->
            <div class="col-12 col-lg-6">
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <a href="" data-toggle="modal" data-target="#productModal">
                            <img class="img-fluid" src="img/puskesmas.jpg" />
                            <p class="text-center">Zoom</p>
                        </a>
                    </div>
                </div>
            </div>
    
            <!-- Add to cart -->
            <div class="col-12 col-lg-6 add_to_cart_block">
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <p class="price">$3499.00</p>
                        <form method="get" action="">
                            
                         
                            <a data-toggle="modal" data-target="#signUpModal" class="btn btn-success btn-lg btn-block text-uppercase">
                                <i class="fa fa-shopping-cart"></i> Buy
                            </a>
                        </form>
                        <div class="product_rassurance">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-truck fa-2x"></i><br/>Instalasi cepat</li>
                                <li class="list-inline-item"><i class="fa fa-credit-card fa-2x"></i><br/>Pembayaran aman</li>
                                <li class="list-inline-item"><i class="fa fa-phone fa-2x"></i><br/>+62 878 123 456 78</li>
                            </ul>
                        </div>
                        <div class="reviews_product p-3 mb-2 ">
                            3 reviews
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            (4/5)
                            <a class="pull-right" href="#reviews">View all reviews</a>
                        </div>
                        <div class="datasheet p-3 mb-2 bg-info text-white">
                            <a href="" class="text-white"><i class="fa fa-file-text"></i>Unduh Data Sheet</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
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
                    <h3>Masukkan informasi pembelian</h3>
                    <form name="form" method="POST" action="{{url('/buy')}}" onsubmit="return validate()">
                    
                    @csrf
                    <input name="paket" type="hidden" value="1" />

                    <div class="form-group">
                                <label for="colors">Tipe Fasilitas Kesehatan</label>
                                <select name="tipe" class="custom-select" id="colors">
                                    <option selected>Select</option>
                                    <option value="1">Puskesmas</option>
                                    <option value="2">Klinik Pribadi / Poliklinik</option>
                                    <option value="3">Posyandu</option>
                                </select>
                            </div>
                      <div class="form-group">
                        <input required name="first_name" type="text" class="form-control" placeholder="Nama Depan *" value="" />
                      </div>
                      <div class="form-group">
                          <input required name="last_name" type="text" class="form-control" placeholder="Nama Belakang *" value="" />
                        </div>
                      <div class="form-group">
                        <input required name="email" type="email" class="form-control" placeholder="Alamat Email *" value="" />
                      </div>
                      <div class="form-group">
                        <input required name="telp" type="text" class="form-control" placeholder="Nomor telepon yang dapat dihubungi *" value="" />
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

      
        <div class="row">
            <!-- Description -->
            <div class="col-12">
                <div class="card border-light mb-3">
                    <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-align-justify"></i> Description</div>
                    <div class="card-body">
                        <p class="card-text">
                            Anda memiliki klinik pribadi, klinik apotik atau jadi pengelola Puskesmas dan mendapat keluhan obat cepat habis dan lama waktu menunggu? Kali ini anda tidak perlu khawatir! Kami menyediakan solusi logistik skala kecil yang sangat cocok untuk fasilitas kesehatan tingkat 1 anda! Tunggu apa lagi? Mari tingkatkan kualitas pelayanan fasilitas kesehatan anda bersama kami! 
                        </p>
                        <p class="card-text">
                            Kami menerima skema pembayaran cicilan kartu kredit dengan bunga 0% atau dengan subsidi pemerintah! Hubungi layanan pelanggan di +62 878 123 456 78 untuk info lebih lanjut!
                        </p>
                    </div>
                </div>
            </div>
    
            <!-- Reviews -->
            <div class="col-12" id="reviews">
                <div class="card border-light mb-3">
                    <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-comment"></i> Reviews</div>
                    <div class="card-body">
                        <div class="review">
                            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                            <meta itemprop="datePublished" content="01-01-2019">January 04, 2019
    
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            by Paul Smith
                            <p class="blockquote">
                                <p class="mb-0">Bagus sekali gengs, thankyou so much yak!</p>
                            </p>
                            <hr>
                        </div>
                        <div class="review">
                            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                            <meta itemprop="datePublished" content="01-01-2019">January 01, 2019
    
                            <span class="fa fa-star" aria-hidden="true"></span>
                            <span class="fa fa-star" aria-hidden="true"></span>
                            <span class="fa fa-star" aria-hidden="true"></span>
                            <span class="fa fa-star" aria-hidden="true"></span>
                            <span class="fa fa-star" aria-hidden="true"></span>
                            by Bahar Smith
                            <p class="blockquote">
                                <p class="mb-0">B aja sih, tapi lumayan jadi cepet waiting time dari pasien-pasien saya</p>
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Dedy Kurniawan 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
