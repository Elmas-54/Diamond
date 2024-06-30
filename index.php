<?php
include("baglanti.php");
$urunler = "select * from urunler ORDER BY id DESC LIMIT 4";
$tumurunler = mysqli_query($con,$urunler);
?>

<!DOCTYPE html>
<html lang="tr">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>romofyi</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="imgG/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="imgG/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
    <?php 
      include("code/header.php");
    ?>
    
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="text-bg">
                     <h1> <span class="blodark"> Diamond </span> <br>Trend Moda</h1>
                     <p>Kendinizi baştan yaratın </p>
                     <a class="read_more" href="#urunler">Goz At</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="ban_img">
                     <figure><img src="imgG/ban_img.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
            </div>
            </div>
         </div>
      </div>
      <!-- end project section -->
      <!-- news section -->
      <div class="news" id="urunler">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Yeni Urunler</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <?php 
                   while($row = mysqli_fetch_array($tumurunler)) {
                     $id = $row[0];
                     $ad = $row['ad'];
                     $img = $row['img'];
                     $fiyat = $row['fiyat'];
               echo"
               <div class='col-md-12 margin_top40'>
                  <div class='row d_flex'>
                     <div class='col-md-5'>
                        <div class='news_img'>
                           <figure><img src='$img'></figure>
                        </div>
                     </div>
                     <div class='col-md-7'>
                        <div class='news_text'>
                           <h3>
                           $ad
                           </h3>
                           <p>Fiyat: $fiyat</p>
                        </div>
                     </div>
                  </div>
               </div>
               ";
                   }
               ?>
            </div>
            <a class="btn btn-primary w-100 text-light" href="urunler.php">Tum Urunler</a>
         </div>
      </div>
      <!-- end news section -->
      <!-- three_box section -->
      <div class="three_box" style="margin-top: 40px;">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="gift_box">
                     <i><img src="imgG/icon_mony.png"></i>
                     <span>İade Garantisi</span>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="gift_box">
                     <i><img src="imgG/icon_gift.png"></i>
                     <span>Özel Hediyeler</span>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="gift_box">
                     <i><img src="imgG/icon_car.png"></i>
                     <span>Ücretsiz Kargo</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end three_box section -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>

