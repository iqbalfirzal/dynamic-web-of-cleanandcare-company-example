<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Braders Clean & Care</title>
  <!-- Bootstrap CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Addon CSS -->
  <link href="css/addon.css" rel="stylesheet">
  <link href="css/main.min.css" rel="stylesheet">
  <!-- Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
</head>
<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Braders</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapsepage">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#outlets">Lokasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#testimonials">Testimonial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#FAQ">Faq</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Hubungi</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Collapseable Articles -->
  <div class="panel-collapse collapse bg-secondary text-white" id="collapsepage">
  	<div class="panel-body" style="padding-top: 12%; padding-right: 6%; padding-left: 6%; padding-bottom: 6%">
    	<div class="container-fluid">
      <?php
      error_reporting(0);
      require __DIR__.'\pdo-rdata\pdo-read-function.php';
      $dbh = connect_to_db();
      $dataarticle = fetchNews($dbh);
      ?>
      <?php if ( $dataarticle && !empty($dataarticle) ) :?>
      <?php foreach ($dataarticle as $key => $article) :?>
        <div class="row">
                <div class="col-12 mt-3">
                    <div class="card bg-dark border-0 shadow" onclick="location.href='read.php?articleid=<?= $article->idarticle ?>';" style="cursor: pointer;">
                        <div class="card-horizontal">
                            <div class="img-square-wrapper">
                                <a href="read.php?articleid=<?= $article->idarticle ?>"><img class="rounded mx-auto d-block" style="width:200px ; height:200px; ;" src="img/articles/<?= stripslashes($article->tumbnail)?>" alt="Article tumbnail image"></a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title"><a href="read.php?articleid=<?= $article->idarticle ?>"><?= stripslashes($article->judul) ?></a></h4>
                                <p class="card-text"><?= stripslashes($article->isipendek) ?></p>
                                <p class="small">diterbitkan pada <?= date('d F Y',$article->tanggal) ?></p>
                        
                            </div>
                        </div>
                        
                    </div>
                </div>
        </div>
        <?php endforeach?>
        <?php endif?>  
      </div>
      </div>

  	<div class="panel-footer">
  		<div class="bg-dark h-25 text-center"> - - - </div>
  	</div>
  </div>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
      	<img style="width: 30%; margin-top: -20%; align-items: center;" src="img/logos/braders.svg">
        <div class="intro-lead-in">Selamat Datang Di Studio Kami!</div>
        <div class="intro-heading text-uppercase">Senang Bertemu Anda</div>
        <a class="btn btn-outline-light btn-circle btn-xl js-scroll-trigger" href="#services"><i class="fa fa-angle-down" style="font-size: 52px;"></i></a>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Layanan</h2>
          <hr class="section-title-hr">
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <img class="bg-warning rounded-circle" style="width: 40%;" src="img/services/shoe.svg">
          <h4 class="service-heading">Sepatu</h4>
          <p class="text-muted">Jasa cuci sepatu, unyellowing, repainting, jahit.</p>
        </div>
        <div class="col-md-4">
          <img class="bg-warning rounded-circle" style="width: 40%;" src="img/services/bag.svg">
          <h4 class="service-heading">Tas</h4>
          <p class="text-muted">Jasa cuci tas, repainting, jahit.</p>
        </div>
        <div class="col-md-4">
          <img class="bg-warning rounded-circle" style="width: 40%;" src="img/services/jacket.svg">
          <h4 class="service-heading">Jaket</h4>
          <p class="text-muted">Jasa cuci jaket, repainting, jahit.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="bg-light" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Portfolio</h2>
          <hr class="section-title-hr">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Gray Nike Sport</h4>
            <p class="text-muted">Cleaning</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Cyan Shoes</h4>
            <p class="text-muted">Repainting</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>New Luxury Bag</h4>
            <p class="text-muted">Repainting</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Vans Shoes</h4>
            <p class="text-muted">Cleaning & Repainting</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>White Exclusive Bag</h4>
            <p class="text-muted">Cleaning</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Nikeai RMax Sporty Shoes</h4>
            <p class="text-muted">Cleaning</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="about" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="section-heading text-center text-uppercase">Tentang</h2>
          <hr class="section-title-hr">
          <img src="img/about/logo.jpg" class="rounded-circle" alt="about.jpg">

        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <h4>
            <p class="kuning" te><b>Sejarah Berdirinya Braders</b></p>
          </h4> <br>
          <p style="text-align: justify"> Braders didirikan pada tanggal 3 Oktober 2016 yang dapat dibilang sebagai pionir laundry sepatu di Indonesia, berawal dari tugas mata kuliah kewirausahaan disalah satu universitas Negeri di Kota Yogyakarta. Pengambilan nama Braders merupakan gabungan dari kata serapan bahasa inggris yaitu Brothers dan Clean yang memiliki arti sepatu kets yang bersih kakak (Pelanggan), agar lebih mudah diingat maka penulisannya menggunakan bahasa indonesia dan jawa menjadi Braders.</p><br>
        </div>
        <div class="col-md-6">
          <h4>
            <p class="kuning"><b>Latar Belakang Braders</b> </p>
          </h4> <br>
          <p style="text-align:justify">
            Braders adalah salah satu usaha yang bergerak dibidang jasa tentang shoes cleaning dan mulai berkembang ke jaket kulit, dompet kulit, dan topi kulit dan masih akan berkembang ke yang lain artinya ini semua braders bergerak di cleaning service.</p>
          <br>
          <p style="text-align:Justify">
            berawal dari hanya ingin membantu teman untuk mebersihkan sepatunya, setelah diamati oleh braders ternyata
            banyak orang yang tidak tau cara membersihkan sepatu dengan cara yang baik dan benar, sehingga tidak merusak
            sepatu, dan dilingkungan sekitar banyak kalangan karyawan mahasiswa dan masyarakat lainya yang menginginkan
            dari sepatu yang kotor, kotor, bau, dan warna pudar menginnginkan sepatunya kemabli bagus dan terawat.
          </p>
        </div>
      </div>
      <br>
      <div class="haa">
        <div class="row">
          <div class="col-sm-12">
            <h4 class="text-center"> <b> SEPATU ? </b></h4>
            <p class="text-center">Bagi <b>braderscleanandcare</b> sepatu adalah sesuatu yang memiliki nilai tersendiri, khususnya bagi pemiliknya. Sudah menjadi kewajiban bagi kami untukmemberikan perawatan terbaik pada sepatu kesayangan customers kami.Selain karena fungsinya yang vital yaitu sebagai alas dan pelindung kaki, sepatu juga dapat mencerminkan kepribadian seseorang. Mengapa demikian? Bayangkan jika Anda datang ke sebuah acara penting dengan kondisi sepatu yang kotor, pasti akan merusak reputasi Anda. Namun kebersihan sepatu tak hanya penting untuk penampilan saja, sepatu yang kotor ternyata bisa mempengaruhi kesehatan tubuh Anda, terutama bagian kaki.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Outlets -->
  <section class="bg-light" id="outlets">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Lokasi Outlet kami</h2>
          <hr class="section-title-hr">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="team-member">
            <iframe class="rounded-circle border-dark" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.3016683459341!2d110.3974511776213!3d-7.7678953032467515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59892d60322b%3A0xdeccdd5ad6a4a4b0!2sBRADERS+CLEAN+AND+CARE+Shoes+Bag+Cleaning+And+Treatment+Cabang+Selokan+Mataram!5e0!3m2!1sen!2sid!4v1563210622433!5m2!1sen!2sid" width="200px" height="200px" frameborder="8" style="border:8" allowfullscreen></iframe>
            
            <h4>Outlet 1</h4>
            <p class="text-muted">Jl. Selokan Mataram No.422, RW.2, Pringwulung, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55283</p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="team-member">
            <iframe class="rounded-circle border-dark" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.298375295569!2d110.4105357147779!3d-7.758146094408482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59a3f3acd079%3A0x293f3ba459e7cf7!2sJl.+Prawiro+Kuat+No.109%2C+Ngringin%2C+Condongcatur%2C+Kec.+Depok%2C+Kabupaten+Sleman%2C+Daerah+Istimewa+Yogyakarta+55281!5e0!3m2!1sen!2sid!4v1563211389503!5m2!1sen!2sid" width="200px" height="200px" frameborder="8" style="border:8" allowfullscreen></iframe>
            <h4>Outlet 2</h4>
            <p class="text-muted">Jl. Prawiro Kuat No.109, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="team-member">
            <iframe class="rounded-circle border-dark" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.331309083163!2d110.37567361477797!3d-7.754641794410966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a585550b3de8b%3A0x2b0b739d9ad517b3!2sJl.+Pogung+Kidul+No.215%2C+Pogung+Lor%2C+Sinduadi%2C+Kec.+Mlati%2C+Kabupaten+Sleman%2C+Daerah+Istimewa+Yogyakarta+55284!5e0!3m2!1sen!2sid!4v1563211584495!5m2!1sen!2sid" width="200px" height="200px" frameborder="8" style="border:8" allowfullscreen></iframe>
            <h4>Outlet 3</h4>
            <p class="text-muted">Jl. Pogung Kidul No.215, Pogung Lor, Sinduadi, Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55284</p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="team-member">
            <iframe class="rounded-circle border-dark" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.2142572315015!2d110.41848101477802!3d-7.767089494402244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a598f6f89113b%3A0x9c5838e3b515cb8e!2sJl.+Utama%2C+Puyeran%2C+Maguwoharjo%2C+Kec.+Depok%2C+Kabupaten+Sleman%2C+Daerah+Istimewa+Yogyakarta+55281!5e0!3m2!1sen!2sid!4v1563211726245!5m2!1sen!2sid" width="200px" height="200px" frameborder="8" style="border:8" allowfullscreen></iframe>
            <h4>Outlet 4</h4>
            <p class="text-muted">Jl. Utama Pugeran, Puyeran, Maguwoharjo, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">Kami selalu berusaha untuk ada di dekat Anda dengan pelayanan maksimal terstandarisasi di setiap outlet.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section id="testimonials" class="page-section text-white py-3" style="background-color: rgb(53, 50, 50);">
  <div id="carouselTestimonialIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner container">
      <div class="carousel-item active">
        <div class="row">
        <div class="col-md-4 col">
        <img src="img/testimonial/rangga.jpg" class="d-block m w-100" alt="..."></div>
        <div class="col-md-8"><h2>TESTIMONIAL</h2><hr style="background-color: #fed136; height: 3px; border: 0;"><p><h4>Rangga</h4><br>Saya merasa puas mencuci sepatu saya di braders ini, hasil cuciannya sangat bersih dan sepatu seperti baru lagi.</p></div>
        </div>
      </div>
      <?php $datatestimoni = fetchTestimoni($dbh); ?>
      <?php if ( $datatestimoni && !empty($datatestimoni) ) :?>
      <?php foreach ($datatestimoni as $key => $testimonial) :?>
        <div class="carousel-item">
          <div class="row">
            <div class="col-md-4">
              <img src="img/testimonial/<?= stripslashes($testimonial->photo) ?>" class="d-block w-100" alt="Error, no image.">
            </div>
            <div class="col-md-8"><h2>TESTIMONIAL</h2><hr style="background-color: #fed136; height: 3px; border: 0;"><p><h4><?= stripslashes($testimonial->nama) ?></h4><br><?= stripslashes($testimonial->caption) ?></p>
            </div>
          </div>
        </div>
      <?php endforeach?>
      <?php endif?>
    </div>
    <a class="carousel-control-prev" href="#carouselTestimonialIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselTestimonialIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </section>

  <!-- FAQ -->
  <section class="bg-light" id="FAQ">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Frequently Asked Question (FAQ)</h2>
          <hr class="section-title-hr">
        </div>
      </div>
      <div class="row">
        <div class="panel-group" id="faqAccordion">
        <div class="panel panel-default ">
          <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
              <h4 class="panel-title">
                <a href="#FAQ" class="ing">Q. Dimana Saja letak Braders ?</a>
              </h4>
          </div>
          <div id="question0" class="panel-collapse collapse" style="height: 0px;">
            <div class="panel-body">
              <h5><span class="label label-primary">Answer</span></h5>
              <p>Untuk Mencari Location BRADERS Cleaning Shoes, dapat mencantumkan alamat yang berada di page [ <a class="js-scroll-trigger" href="#outlets">Lokasi</a> ]</p>
            </div>
          </div>
        </div>
        <div class="panel panel-default ">
          <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
            <h4 class="panel-title">
              <a href="#FAQ" class="ing">Q. Dapatkah saya melewatkan atau menjadwal ulang janji ?</a>
            </h4>
          </div>
          <div id="question1" class="panel-collapse collapse" style="height: 0px;">
            <div class="panel-body">
              <h5><span class="label label-primary">Answer</span></h5>
                <p>Jika Anda mengantisipasi perlu mengubah waktu janji temu, idealnya, kami ingin minimal 24 jam sebelumnya. Kami akan memindahkan kunjungan Anda ke waktu lain yang lebih nyaman atau jika Anda mau, batalkan semuanya bersamaan.</p>
            </div>
          </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
              <h4 class="panel-title">
                <a href="#FAQ" class="ing">Q. Bagaimana jika saya tidak puas dengan pembersihan saya ?</a>
              </h4>
            </div>
            <div id="question2" class="panel-collapse collapse" style="height: 0px;">
              <div class="panel-body">
                <h5><span class="label label-primary">Answer</span></h5>
                <p>Kepuasan lengkap Anda sangat penting bagi kami. Itu sebabnya kami menawarkan jaminan 24 jam. Jika karena alasan apa pun Anda tidak puas dengan pembersihan barang Anda, cukup hubungi kami dalam waktu 24 jam setelah pembersihan Anda dan kami akan membersihkannya kembali, tanpa biaya kepada Anda.</p>
              </div>
            </div>
        </div>
        <div class="panel panel-default ">
          <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
            <h4 class="panel-title">
              <a href="#FAQ" class="ing">Q. Bagaimana dan kapan saya membayar layanan kebersihan saya ?</a>
            </h4>
          </div>
          <div id="question3" class="panel-collapse collapse" style="height: 0px;">
            <div class="panel-body">
              <h5><span class="label label-primary">Answer</span></h5>
                <p>Kami memerlukan pembayaran pada saat layanan. Kami menerima sebagian besar kartu kredit utama, pembayaran kartu debit, dan pembayaran dengan cek atau tunai. Jika Anda ingin membayar layanan menggunakan kartu kredit Anda, silakan kunjungi pusat pembayaran kami di Outlet terdekat kami.</p>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>

 <!-- Contact -->
 <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Hubungi Kami</h2>
          <hr class="section-title-hr">
        </div>
      </div>
      <div class="row">
                <div class="col-sm-6">
                    <form class="contact-form" action="int/contactform.php" method="POST" onSubmit="validasi()">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Masukan Nama Anda" required="required">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email Anda" required="required">
                        </div>
                        <div class="form-group">
                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Subyek" required="required">
                        </div>
                        </div>
                        <div class="col-sm-6">
                        <div class="form-group">
                            <textarea name="message" class="form-control" rows="5" placeholder="Masukan Pesan" required="required"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">   Kirim   </button>    
                        <button type="reset" name="hapus" class="btn btn-primary" style="margin-left: 2%">   Batal   </button>
                        </div>                       
                      </form>
            </div>
    </div>
  </section>


  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Braders 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="https://www.instagram.com/braderscleanandcare" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <a class="copyright" style="color: gray;" href="tel:+6285842850028">+62 (858) 4285-0028</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Gray Nike Sport</h2>
                <p class="item-intro text-muted">-</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                <p>Kalau Braders and Sis Dateng ke Outlet, ingat untuk selalu tanyakan apakah ada discount hari ini? Kalau ada, ambil aja Braders. 😁</p>
                <ul class="list-inline">
                  <li>Date: DECEMBER 19, 2018</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Cyan Shoes</h2>
                <p class="item-intro text-muted">-</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                <p>Setiap proses kehidupan mempunyai kenangan yang terindah .</p>
                <ul class="list-inline">
                  <li>Date: FEBRUARY 12, 2019</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">New Luxury Bag</h2>
                <p class="item-intro text-muted">-</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                <p>eather Repaint. Mengecat ulang tas #fossil warna awal pink dengan bercak noda yang sulit dihilangkan pada leather. Repaint hitam menjadi pilihan tepat untuk mendapatkan kesan tas #fossil yang lebih matang. "For leather material must be treated periodically". Terimakasih, thank you 😍.</p>
                <ul class="list-inline">
                  <li>Date: MARCH 21, 2019</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Vans Shoes</h2>
                <p class="item-intro text-muted">-</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                <p>Original Vans has been deep Cleaning and repainting Braders your personal shoe tech. Checkerboard is special one of many #vans type. Super thank you our customer, our brother sister. 😊 - #vans #vansclub #hypebeast #cucisepatu #cucisepatujogja #braderscleanandcare #top #hot #episode #shoesandcare</p>
                <ul class="list-inline">
                  <li>Date: MARCH 19, 2019</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">White Exclusive Bag</h2>
                <p class="item-intro text-muted">-</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                <p>Happy Sunday morning 😊, bagi para jomblo harap bersabar hahaha, bagi yang udah punya pasangan kami official Braders mengucapkan selamat menikmati Jogja yang dingin, jangan lupa berdoa, tengkyuuu 😘😘😚 - #jogjasneakers #jogjashoescleaning #jogjahits #jogjadinginbrooo #adem #charleskeith #loveyourfaith #nike #adidas #leatherbag #leathercrafts #puma #fossil #luisvuiton #instadaily #instagram #bagporn #episode #sunday</p>
                <ul class="list-inline">
                  <li>Date: MARCH 17, 2019</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Nikeai RMax Sporty Shoes</h2>
                <p class="item-intro text-muted">-</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                <p>Hi, dengan SOP yang ada di Braders kami melayani dg sepenuh hati, tidak hanya bekerja tapi juga berdoa. Berdoa agar setiap langkah pelanggan kami selalu dalam kebaikan. Have nice day Bruh 😎😍😍 - #BradersCleanAndCare #puma #nikeairmax #nikeshoes #nike #jogjashoescleaning #repaintsepatu #repaintsepatujogja #yogyakarta #repaintsepatubali #jogjashoescleaning #jogjahits #regluesepatujogja #repainttasjogja #repainttas #jogjasneakers #catsepatujogja #vansjogja #cucisepatu #cucisepatujogja #shoescleaning #cucitasjogja #deepcleaning #repaint #reglue #unyellowing #jahitsepatu #dolanjogja #adidas #newbalance #rebookindonesia</p>
                <ul class="list-inline">
                  <li>Date: FEBRUARY 21, 2019</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Addon JavaScript -->
  <script src="js/addon.js"></script>
  <script src="js/main.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

</body>
</html>
