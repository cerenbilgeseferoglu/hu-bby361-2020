<?php
    /* Bağlantı bilgilerinin alınması*/
    require_once("baglanti.php");
    
    /* Veritabanı sorgulama */
    $sorgu = mysqli_query($baglanti, 
    "SELECT K.EsKayNo, K.EsKayTar, K.EsISBN, K.EsAdi, K.EsBasYil, K.EsDil, K.EsAciklama, CONCAT(R.YazAdi,' ', R.YazSoyad) AS EYazar, Y.YayineviAd FROM eser K, yazar R, yayin Y
    WHERE K.YayineviNo = Y.YayineviNo AND K.YazNo = R.YazNo ");
?>

<html>
<head>
        <title>ESER LİSTESİ</title>
        <meta charset="utf-8"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
    
<style>
        body{
            background-color: darkseagreen;
        }
        h1{
            text-align: center;
            background: white;
            color: darkseagreen;
            border: 2px solid white;
            padding-bottom: 4px;
            padding-top: 4px;
            margin-left: 120px;
            margin-right: 120px;
            margin-top: 20px;
            margin-bottom: 20px;
            font-family: serif;
        }
        table{
            background-color: white;
            table-layout: auto;
            text-align: center;
            font-size: 15px;
        }
        table-bordered{
         font-family:serif;   
        }
        p{
            background-color: white;
        }
        p:hover{
            background-color: darkseagreen;
            border: 1px solid white;
        } 
        a{
           color:darkgreen;
        }
        a:hover{
            color: black;
        }
        
</style>
    
<body>
        <h1>ESER LİSTESİ</h1>
    <div class="container">
        <p><a button type="button" class="btn btn-block" href="eser_ekle.php">YENİ ESER EKLE</a></p>
        <?php
            echo("<table class=table-bordered border=1 width=100%>");
                echo("<tr>");
                    echo("<td text align=center><b>Eser Kayıt No</b></td>");
                    echo("<td text align=center><b>Eser Kayıt Tarihi</b></td>");
                    echo("<td text align=center><b>Eser Adı</b></td>");
                    echo("<td text align=center><b>Eserin Basım Yılı</b></td>"); 
                    echo("<td text align=center><b>Eser ISBN</b></td>");
                    echo("<td text align=center><b>Eser Dili</b></td>"); 
                    echo("<td text align=center><b>Eser Açıklaması</b></td>");
                    echo("<td text align=center><b>Yazar Bilgisi</b></td>");
                    echo("<td text align=center><b>Yayınevi Bilgisi</b></td>");
                    echo("<td text align=center><b>Eseri Güncelle</b></td>");
                    echo("<td text align=center><b>Eseri Sil</b></td>");
                echo("</tr>");
        
            /* Sorgu sonuçlarının yazdırılması */
            while($satir = mysqli_fetch_assoc($sorgu)){
                echo("<tr>");
                echo("<td>".$satir["EsKayNo"]."</td>"); 
                echo("<td>".$satir["EsKayTar"]."</td>"); 
                echo("<td>".$satir["EsAdi"]."</td>");
                echo("<td>".$satir["EsBasYil"]."</td>");
                echo("<td>".$satir["EsISBN"]."</td>");
                echo("<td>".$satir["EsDil"]."</td>");
                echo("<td>".$satir["EsAciklama"]."</td>");
                echo("<td>".$satir["EYazar"]."</td>");
                echo("<td>".$satir["YayineviAd"]."</td>");
                echo("<td><a href='eser_guncelle.php?EsKayNo=".$satir["EsKayNo"]."'><b>GÜNCELLE </b></a></td>");
                echo("<td><a href='eser_sil.php?EsKayNo=".$satir["EsKayNo"]."'><b>SİL</b></a></td>");
                echo("</tr>");
            }
            echo("</table>");
        ?>
    </div>
</body>
</html>