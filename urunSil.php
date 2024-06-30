<?php
include('code/baglanti.php');
include('index.php');

?>

?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RomofYi Yönetim Sayfası</title>
</head>

<body>
    <br><br>


    <?php

    $id = $_GET["id"];

    //$sql="DELETE FROM urunler WHERE id=$id";

    $sql = "DELETE FROM urunler WHERE id=$id";
    $sonuc = mysqli_query($con, $sql);
    if ($sonuc)
        if ($sonuc)
            echo '("İşlem Başarıyla tamamlandı.")';
        else
            echo '("İşlem Başarısız.")';

    ?>


</body>

</html>