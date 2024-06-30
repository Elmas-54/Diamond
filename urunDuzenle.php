<?php
  include("../baglanti.php");
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "select * from urunler where id='$id'";
    $sonuc = mysqli_query($con, $sql);
    $satir = mysqli_fetch_array($sonuc);
    $ad = $satir["ad"];
    $img = $satir["img"];
    $fiyat = $satir["fiyat"];
}
?>
<!DOCTYPE html>
<html lang="en">
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
    <title>Duzenle</title>
</head>
<body>
<div class="loader_bg">
         <div class="loader"><img src="../imgG/loading.gif" alt="#" /></div>
      </div>

      <div class="col-md-7 col-lg-8 mx-auto">
        <h4 class="mb-3"><b>ÜRÜN DÜZENLE</b></h4>
        <form>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="ad" class="form-label">Ürün Adı:</label>
              <input type="text" class="form-control" id="ad"  name="ad" value="<?php echo $ad ?>" required>
            </div>

            <div class="col-sm-6">
              <label for="fiyat" class="form-label">Fiyat:</label>
              <input type="text" class="form-control" id="fiyat"  name="fiyat" value="<?php echo $fiyat ?>" required>
            </div>

            <div class="col-12">
              <label for="img" class="form-label">Resim:</label>
                <input type="text" class="form-control" id="img"  name="img" value="<?php echo $img ?>" required>
            </div>

          <button class="w-100 btn btn-primary btn-lg" style="margin-top: 40px;" type="submit">Düzenle</button>
        </form>
      </div>

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