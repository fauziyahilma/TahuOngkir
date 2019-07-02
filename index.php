
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- custom css -->
    <link rel="stylesheet" href="style2.css">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway|Viga&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Jaldi&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <!-- <link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet"/> -->

    <script src="https://kit.fontawesome.com/e47a78d25a.js"></script>

  </head>

    <title>TahuOngkir.com</title>
  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#features">features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tip">tips</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact" >contact</a>
            </li>
            </ul>
        </div>
      </div>
    </nav>
    
    <!-- akhir navbar -->

    <!-- jumbotron -->
    <div id="home" class="jumbotron jumbotron-fluid">

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" >
                <div class="row justify-content-center">
                    <div class="col-xs-5 carousel-div "><img src="img/delivery-envelopes-mail-1919343.jpg" alt=""></div>
                    <div class="col-sm-5 carousel-div">
                        <div class="p">
                            <h3><B>Welcome!</B></h3>
                            <p>Selamat datang di TahuOngkir.com. Situs ini menyediakan fitur kalkulator berat dan ongkos kirim untuk pengiriman barang menggunakan jasa kurir JNE, TIKI, dan POS Indonesia. Scroll untuk langsung coba hitung ongkir paketmu!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" >
                <div class="row justify-content-center">
                    <div class="col-xs-5 carousel-div "><img src="img/calculator-desk-finance-1253591.jpg" alt=""></div>
                    <div class="col-sm-5 carousel-div">
                        <div class="p">
                            <h3><B>Perhitungan Dijamin Akurat</B></h3>
                            <p>Data biaya pengiriman dan service yang tersedia diambil dari API RajaOngkir.com. Jadi dijamin akurasinya. Perhitungan berat dan volume paket juga sesuai standar yang digunakan di ekspedisi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" >
                <div class="row justify-content-center">
                    <div class="col-xs-5 carousel-div "><img src="img/beautiful-beauty-blond-761999.jpg" alt=""></div>
                    <div class="col-sm-5 carousel-div">
                        <div class="p">
                            <h3><B>Gratis pulak!</B></h3>
                            <p>Ga pake bayar. Ga pake jalan. Ga pake pulsa. Tinggal klik aja kamu bisa tahu ongkir kiriman kamu. Jadi ga ada acara shock liat ongkir di counter JNE, apalagi acara duit kurang. Tinggal cus bawa paket sama uang pas! </p>
                        </div>  
                    </div>
                </div>
            </div>
        
  
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span><i class="fa fa-angle-left lefticon" aria-hidden="true"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span><i class="fa fa-angle-right righticon" aria-hidden="true"></i></span>
                <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
    </div>

   
    <!-- akhir jumbotron -->

    <!-- container -->
    <div class="isi">
      <div class="container">
      
        <div id="features" class="row justify-content-center">
          <!-- Kalkulator Ongkir -->
            <div class="col-lg-5 calculator">
                <h3 class="text-center"><img src="img/farming-and-gardening.png">Kalkulator Ongkir</h3>
                <form id='form_ongkir' method='POST'>
                    <div class="form-group row">
                        <label  class="col-sm-4 col-form-label">Kota Asal</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="orcity" name='orcity'>
                                <?php 
                                    getcity();
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-4 col-form-label">Kota Tujuan</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="destcity" name='destcity'>
                                <?php 
                                    getcity();
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-4 col-form-label">Berat Kiriman</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="berat" placeholder="gram" name='berat'>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-4 col-form-label">Kurir</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="kurir" name='kurir'> 
                                <option value='' disabled selected hidden>Pilih Kurir</option>
                                <option value="jne">Jalur Nugraha Ekakurir (JNE)</option >
                                <option value="pos">Pos Indonesia</option >
                                <option value="tiki">TIKI</option >
                            </select>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-primary btn-lg btn-block" id="submitFormData" onclick="SubmitFormData();" name="ongkir" >Hitung Ongkir</button>
                        </div>
                    </div>
                </form>
            </div> 

          <!-- KALKULATOR BERAT -->

            <div class="col-lg-5 calculator ind">
                <h3 class="text-center"><img src="img/scale.png">Kalkulator Berat</h3>
                <div class="form-group row">
                    <label  class="col-sm-4 col-form-label">Berat Kiriman</label>
                    <div class="col-sm-8">
                        <input type="number" onchange="hideTotal();" class="form-control" id="weight" placeholder="gram">
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-4 col-form-label">Panjang</label>
                    <div class="col-sm-8">
                        <input type="number" onchange="hideTotal();" class="form-control" id="panjang" placeholder="Cm">
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-4 col-form-label">Tinggi</label>
                    <div class="col-sm-8">
                        <input type="number" onchange="hideTotal();" class="form-control" id="tinggi" placeholder="Cm">
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-4 col-form-label">Lebar</label>
                    <div class="col-sm-8">
                        <input type="number" onchange="hideTotal();" class="form-control" id="lebar" placeholder="Cm">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-12 ">
                        <button type="button" id="btnberat" onclick="HitungBerat();" class="btn btn-primary btn-lg btn-block">Hitung Berat</button> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <input type="text" onchange="hideTotal();" class="form-control" id="total" placeholder="Total Berat (Kg)" disabled style="display:none" >
                    </div>
                </div>
            </div>
      </div>
    </div>

<!-- modal box -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  </div>

  <!-- TIPS&TRICK -->
    <div id ="tip" class="row  tips">
            
        <div class="row justify-content-center title">
            <H2>Tips & Trik</H2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 tipdiv">
                <img src="img/coin.png" alt="">
                <div class="tipbox">
                    <h4>Hemat Ongkir</h4>
                    <p>Bandingkan harga tiap-tiap jasa ekspedisi dan pilih layanan sesuai kebutuhan. Kalau tidak buru-buru atau kalau jarak pengiriman hanya antar kota, kita bisa ambil paket ekonomis.</p>
                </div>
            </div>
            <div class="col-md-4 tipdiv">
                <img src="img/order.png" alt="">
                <div class="tipbox">
                    <h4>Kemasan Aman</h4>
                    <p>Kemas paket dengan mempertimbangkan jenis/isi paket serta jarak pengiriman. Untuk jarak pengiriman yang jauh dan memakan waktu lama, sebaiknya dikemas berlapis untuk mencegah kerusakan.</p>
                </div>
            </div>
            <div class="col-md-4 tipdiv">
                <img src="img/time-call.png" alt="">
                <div class="tipbox">
                    <h4>Hubungi Call Center</h4>
                    <p>Jika paket belum sampai setelah lewat tanggal estimasi, ada baiknya hubungi langsung call center-nya. jangan lupa untuk selalu simpan resi pengiriman sebelum pengiriman selesai dan paket diterima.</p>
                </div>
            </div>
        </div>      
    </div>

    <!-- akhir container -->

    <div id="contact" class="myfooter">
      <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h4>CONTACT US</h4>
                <!-- <h6><img src="img/placeholder.png">Jl. Bhayangkara Gang Rawasalak No.28 Kota Sukabumi</h6> -->
                <h6><img src="img/mail.png">fauziyahilma@gmail.com</h6>
                <h6><img src="img/telephone.png">08156228450</h6>
                <h6><img src="img/whatsapp.png">081546568587</h6>
            </div>
            <div class="col-sm-4">
                <h4>CREDITS</h4>
                <H6>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/"                 title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"                 title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></H6>
                <h6>Data Ongkir from <a href="https://rajaongkir.com/" title="RAJAONGKIR">RajaOngkir.com</a> </h6>
                <h6>Photos by rawpixel.com and bruce mars from Pexels</h6>
            </div>
            <div class="col-sm-2 ml-auto wb">
                <h4>Copyright</h4>
                <h6> <a href="https://fauziyahilma.000webhostapp.com/">Ilma Fauziyah</a> </h6>
                <h6>&copy; 2019</h6>
            </div>
        </div>
      </div>
    </div>



        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="script.js"></script>


  </body>
</html>

<?php


function getcity(){
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.rajaongkir.com/starter/city",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "key: dd45f9cbbe42455a792a1554449d3446"
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  $data = json_decode($response, true);
  curl_close($curl);
   if ($err) {
     echo "<option>error</option >" ;
   } 
   else {
      echo "<option value='' disabled selected hidden>Pilih Kabupaten/Kota</option>";
     for ($i=0; $i < count($data['rajaongkir']['results']); $i++) {
     echo "<option value='".$data['rajaongkir']['results'][$i]['city_id']."'>".$data['rajaongkir']['results'][$i]['city_name']."</option> ";
     }
   }
}

?>
