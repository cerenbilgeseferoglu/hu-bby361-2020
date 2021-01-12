<?php
    /* Bağlantı bilgilerinin alınması*/
    require_once("baglanti.php");

    // Güncelleme işlemi sorgusu
    $YayineviNo = mysqli_real_escape_string($baglanti, $_POST['YayineviNo']);
    $YayineviAd = mysqli_real_escape_string($baglanti, $_POST['YayineviAd']);
    $YayinYer = mysqli_real_escape_string($baglanti, $_POST['YayinYer']);
    $YayinTar = mysqli_real_escape_string($baglanti, $_POST['YayinTar']);
    $sorgu = "UPDATE yayin SET YayineviAd = '$YayineviAd', YayinYer = '$YayinYer', YayinTar = '$YayinTar' WHERE YayineviNo = $YayineviNo";

    if (mysqli_query($baglanti, $sorgu)) {
        $islemSonuc = "YAYIN BİLGİSİ GÜNCELLENDİ";
    } else {
        $islemSonuc = "Yayın bilgisi güncellenirken bir hata oluştu: " . mysqli_error($baglanti);
    }

    mysqli_close($baglanti);

?>
<html>
    <head>
        <title>YAYIN BİLGİSİ GÜNCELLE SONUÇ</title>
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
        <p><a id="menu" button type="button" class="btn btn-block" href="yayin.php"><b>Yayın Bilgisi Listesine Dön</b></a></p>
        </div>
        
        <div>
        <p><a  id="menu" b button type="button" class="btn btn-block" href="index.html"><b>Anasayfaya Dön</b></a></p>
        </div>
    </body>
</html>