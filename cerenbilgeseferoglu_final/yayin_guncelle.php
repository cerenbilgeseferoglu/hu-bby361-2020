<?php
    /* Bağlantı bilgilerinin alınması*/
    require_once("baglanti.php");
    
    /* Veritabanı sorgulama */
    $guncellenecek = mysqli_real_escape_string($baglanti, $_GET["YayineviNo"]);
    $sorgu = mysqli_query($baglanti, "SELECT * FROM yayin WHERE YayineviNo = $guncellenecek");
    $satir = mysqli_fetch_assoc($sorgu)
?>

<html>
<head>
          <title>YAYIN BİLGİSİ GÜNCELLE</title>
          <meta charset="utf-8"/>
          <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
    
<style>
    body{
        background: darkseagreen;
        text-align: center; 
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
    }
    #bir{
    margin-right: 120px;
        margin-left:29px;
    }
    #iki{
        margin-right: 88px;
    }
    #uc{
        margin-right: 76px;
    }
    p{
        background-color: white;
        margin-right: 500px;
        margin-left: 500px;
    }
    p:hover{
        
        background-color: darkseagreen;
            border: 1px solid white;
    }
</style>
    
    <body>
        <h1>Yayın Bilgisini Güncelle</h1>
        <br>
        <br>
        <br>
<div class="container">
        <form action="yayin_guncellendi.php" method="post">
            <div id="bir">
            Yayınevi Adı: <input type="text" value="<?php echo $satir["YayineviAd"] ;?>" name="YayineviAd"><br>
            </div>
            <br>
            <div id="iki">
            Yayın Tarihi: <input type="text" value="<?php echo $satir["YayinTar"] ;?>" name="YayinTar"><br>
            </div>
            <br>
            <div id="uc">
            Yayın Yeri: <input type="text" value="<?php echo $satir["YayinYer"] ;?>" name="YayinYer"><br>
            </div>
            <br>
            
            <p><input type="hidden" value="<?php echo $satir["YayineviNo"] ;?>" name="YayineviNo"></p>
            <p> <input type="submit"class="btn" value="Güncelle"></p>
        </form>
</div>
    </body>
</html>