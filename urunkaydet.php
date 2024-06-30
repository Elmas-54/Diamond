<?php
include("code/baglanti.php");
include("index.php");

?>

<?php
$ad=$_GET["adi"];
$fiyat=$_GET["fiyat"];
$img=$_GET["img"];
$sql="INSERT INTO urunler VALUES(NULL,'$ad','$fiyat','$img')";

$sonuc=mysqli_query($con,$sql);

if ($sonuc)
    if ($sonuc)
        echo '<script>alert("İşlem Başarıyla tamamlandı.")</script>';
    else
        echo '<script>alert("İşlem Başarısız.")</script>';

?>