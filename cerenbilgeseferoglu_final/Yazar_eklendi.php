<?php
    /* Bağlantı bilgilerinin alınması*/
    require_once("baglanti.php");

    /* Ekleme işlemi sorgusu */
    $YazAdi = mysqli_real_escape_string($baglanti, $_POST['YazAdi']);
    $YazSoyad = mysqli_real_escape_string($baglanti, $_POST['YazSoyad']);
    $YazUrl = mysqli_real_escape_string($baglanti, $_POST['YazUrl']);
    $sorgu = "INSERT INTO yazar (YazAdi, YazSoyad, YazUrl)
            VALUES ('$YazAdi', '$YazSoyad', '$YazUrl')";

    if (mysqli_query($baglanti, $sorgu)) {
        $islemSonuc = "YAZAR EKLENDİ";
        
    } else {
        $islemSonuc = "Hata: " . $sorgu . "<br>" . mysqli_error($baglanti);
    }


    mysqli_close($baglanti);

?>
<html>
    <head>
        <title>YAZAR EKLENDİ SONUÇ</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
    
<style>
     p{
            background-color: darkseagreen;
            padding: 35px;
        }
        p:hover{
            background-color: white;
            border: 1px solid white;
        }
     #menu{
            font-size: 25px;
            color: white;
    
        }
     #menu:hover{
            color: darkseagreen;
            background-color: white;
        }
</style>
    
    <body>
        <div class="alert alert-success" text align="center">
        <h2><?php echo $islemSonuc; ?></h2>
        </div>
        
        <div>
        <p><a id="menu" button type="button" class="btn btn-block"href="Yazar_ekle.php" ><b>Yeni Yazar Ekle</b></a></p>
        </div>
        
        <div>
        <p><a id="menu" button type="button" class="btn btn-block" href="yazar.php"><b>Yazar Listesine Dön</b></a></p>
        </div>
        
        <div>
        <p><a id="menu" button type="button" class="btn btn-block" href="index.html"><b>Anasayfaya Dön</b></a></p>
        </div>
    </body>
</html>
