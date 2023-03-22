<?php
include('array.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Biodata</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Gloock&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- my style -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Animation -->
    <style>
      @keyframes slideInFromLeft {
        0% {
          transform: translateX(-100%);
        }
        100% {
          transform: translateX(0);
        }
      }

      .hero-heading {
        animation: slideInFromLeft 1.5s ease-in-out;
      }
      
    </style>
  </head>
  <body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo"></a><span>Biodata</span></a>
      <div class="navbar-nav">
        <a href="#beranda">Beranda</a>
        <a href="#story">Story</a>
        <a href="#skill">Skills</a>
        <a href="#kontak">Contact</a>
      </div>
      <div class="navbar-extra">
        <a href="#" id="list"><i data-feather="list" ></i></a>
      </div>
    </nav>
    <!-- Navbar end -->

    <!-- Hero section start -->
    <section class="hero" id="beranda">
      <main class="content">
        <h1 class="hero-heading"> Hello, I'm Ahill! <span>Nice To Meet You!</span></h1>
        <p class="hero-heading">"Kebahagiaan hanya nyata jika dibagikan." <span>- Christopher McCandless</span> </p>
        <a href="#skill" class="cta fade-in">About Me</a>
      </main>
    </section>
    <!-- Hero section end -->
    
    <!-- about section start -->
    <section id="story" class="story">
      <h2>Story : <span><?php echo $profil[0]?></span>  </h2>
      <div class="row">
        <div class="story-img">
<img src="img/aku.jpg" alt="Story">
        </div>
        <div class="content">
<h3>I Wan't To Tell You!</h3>
<p>Name : <?php echo $profil[1] ?></p>
 <p>Address : Jombang, East Java</p> 
 <p> Age :<span> <?php echo $umur ?> </span> </p> 
 <?php

if ($umur < "20 tahun") {
    echo "Maaf, Anda belum cukup umur untuk menggunakan layanan ini.";
  } else {
    echo "(Soon) Anda bisa lebih sangar dari Elon Musk!";
  }
?>
</div>
      </div>
    </section>
        <!-- About section end-->
<!-- menu section start -->
<section id="skill" class="skill">
    <h2>Let Me Tell You! <span> About My Skills! </span></h2>
    <div class="row">
      <p>“Sak ampuh-ampuhe menungso. Durung mesti bisa nglawan
        pikiran nan nafsune dewe."</p>

       <!-- Skills -->
    <section class="sec-div" id="skills">
      <div class="container">
        <div class="d-block">
          <div class="title-sec">
          </div>
          </div>
          </div>
          <div class="bar-skill">
            <h3><b>Premiere Pro</b></h3>
             <div class="back-bar">
              <div class="front-bar bar1">
              </div>
            </div>
            <h3>90%</h3>
          </div>
            <div class="bar-skill">
  						<h3><b>After Effect</b></h3>
  	 					<div class="back-bar">
  							<div class="front-bar bar2">
  							</div>
              </div>
  						<h3>70%</h3>
  					</div>
            </div>
                <div class="bar-skill">
                  <h3><b>Davinci Resolve</b></h3>
                   <div class="back-bar">
                    <div class="front-bar bar3">
                    </div>
                  </div>
                  <h3>90%</h3>
                </div>
  						</div>
              <div class="bar-skill">
                <h3><b>Adobe Illustrator</b></h3>
                 <div class="back-bar">
                  <div class="front-bar bar4">
                  </div>
                </div>
  						<h3>75%</h3>
  					</div>
  					<div class="bar-skill">
  						<h3><b>HTML5</b></h3>
  						<div class="back-bar">
  							<div class="front-bar bar5">
  							</div>
  						</div>
  						<h3>60%</h3>
  					</div>
  					<div class="bar-skill">
  						<h3><b>CSS3</b></h3>
  						<div class="back-bar">
  							<div class="front-bar bar6">
  							</div>
  						</div>
  						<h3>40%</h3>
  					</div>
          </div>
        </div>
      </div>
    </section>
</section>
<!-- menu section end -->
<section id="kontak" class="kontak">
  <h2>Find</span> Me!</h2>
  <div class="row">
    <p>"Perjalanan itu menuntun ku menghadap keabadian dalam batin."</p>
  
    <!-- feather icons -->
    <script>
      feather.replace();
    </script>

    <!-- java script -->
    <script src="js/script.js"></script>


    <!-- Contact -->
    <div class="sec-div" id="contact">
      <div class="container">
        <div class="d-block">
          <div class="box-cont">
            <div class="icon">
              <a href="https://www.youtube.com/@madjoemapan2461"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
            </div>
            <h2><a class="link" href="https://www.youtube.com/@madjoemapan2461">YouTube</a></h2>
          </div>
          <div class="box-cont">
            <div class="icon">
              <a href="https://www.instagram.com/kammalaarchive/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            <h2><a class="link" href="https://www.instagram.com/kammalaarchive/">Instagram</a></h2>
          </div>
          <div class="box-cont">
            <div class="icon">
              <a href="mailto:21081010234@student.upnjatim.ac.id"><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
            </div>
            <h2><a class="link" href="mailto:21081010234@student.upnjatim.ac.id">Mail</a></h2>
          </div>
        </div>
      </div>
    </div>
    
    </div>
  </body>
</html>
