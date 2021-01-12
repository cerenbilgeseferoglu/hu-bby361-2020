<?php
    /* Bağlantı bilgilerinin alınması*/
    require_once("baglanti.php");
    
    /* Veritabanı sorgulama */
    $sorgu = mysqli_query($baglanti, "SELECT * FROM yayin");
?>
<html>
    <head>
        <title>YAYIN BİLGİSİ LİSTESİ</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <h1>YAYIN BİLGİSİ LİSTESİ</h1>
<div class="container">
    
        <p><a button type="button" class="btn btn-block" href="yayin_ekle.php">YENİ YAYIN BİLGİSİ EKLE</a></p>
    
        <?php
            echo("<table class=table-bordered border=1 width=100%>");
                echo("<tr>");
                    echo("<td text align=center><b>Yayınevi No</b></td>");
                    echo("<td text align=center><b>Yayınevi Kayıt Tarihi</b></td>");
                    echo("<td text align=center><b>Yayınevi Adı</b></td>");
                    echo("<td text align=center><b>Yayın Yeri</b></td>");
                    echo("<td text align=center><b>Yayın Tarihi</b></td>");
                    echo("<td text align=center><b>Yayını Güncelle</b></td>");
                    echo("<td text align=center><b>Yayını Sil</b></td>");
                echo("</tr>");
            /* Sorgu sonuçlarının yazdırılması */
            while($satir = mysqli_fetch_assoc($sorgu)){
                echo("<tr>");
                echo("<td>".$satir["YayineviNo"]."</td>"); 
                echo("<td>".$satir["YayTar"]."</td>"); 
                echo("<td>".$satir["YayineviAd"]."</td>");
                echo("<td>".$satir["YayinYer"]."</td>");
                echo("<td>".$satir["YayinTar"]."</td>");
                echo("<td><a href='yayin_guncelle.php?YayineviNo=".$satir["YayineviNo"]."'><b>GÜNCELLE</b></a></td>");
                echo("<td><a href='yayin_sil.php?YayineviNo=".$satir["YayineviNo"]."'><b>SİL </b></a></td>");
                echo("</tr>");
            }
            echo("</table>");
        ?>
</div>
    </body>
</html>