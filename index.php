<?php
include("../baglanti.php");
$urunler = "select * from urunler";
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
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="../css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="../images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <!-- body -->
   <body class="main-layout footer_to90 project_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="../imgG/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
         <!-- header inner -->
         <?php
          include("code/header.php");
          ?>
      <!-- end header inner -->
      <!-- end header -->
      <!-- project section -->
      <div id="project" class="project">
       
      <a href="urunEkle.php" class="bn11" target="_blank" style=" margin-left: 15px;">Ürün Ekle</a>
      <div class="container">
         
          
            <div class="row">
            <div class="product_main">

            <?php 
                   while($row = mysqli_fetch_array($tumurunler)) {
                     $id = $row[0];
                     $ad = $row['ad'];
                     $img = $row['img'];
                     $fiyat = $row['fiyat'];
               echo"
                     <div class='project_box '>
                     <div class='dark_white_bg' ><img  src='$img' alt='$ad'/></div>
                     <h3>$ad</h3>
                     <h3>
                     Fiyat: $fiyat
                     </h3>
                    <a class='btn btn-primary w-100 text-light' href='urunSil.php?id=$id'>Ürünü Sil</a>
                  </div>
               ";
                   }
               ?>
            </div>
            </div>
         </div>
      </div>
      <!-- end project section -->
      <!-- Javascript files-->
      <script src="../js/jquery.min.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.bundle.min.js"></script>
      <script src="../js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../js/custom.js"></script>
   </body>
</html>

