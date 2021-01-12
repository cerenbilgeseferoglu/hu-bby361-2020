<?php
    /* Bağlantı bilgilerinin alınması*/
    require_once("baglanti.php");
    
    /* Veritabanı sorgulama */
    
    $guncellenecek = mysqli_real_escape_string($baglanti, $_GET["EsKayNo"]);
    $sorgu = mysqli_query($baglanti, "SELECT * FROM eser WHERE EsKayNo = $guncellenecek");
    $satir = mysqli_fetch_assoc($sorgu);
    $sorgu2 = mysqli_query($baglanti, "SELECT *, CONCAT(YazAdi, ' ', YazSoyad) AS AdSoyad FROM yazar");
    $satir2 = mysqli_fetch_assoc($sorgu2);
    $sorgu3 = mysqli_query($baglanti, "SELECT * FROM yayin");
    $satir3 = mysqli_fetch_assoc($sorgu3);
?>

<html>
    <head>
        <title>ESER GÜNCELLE</title>
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
    margin-right: 78px;
        margin-left:29px;
    }
    #iki{
        margin-right: 47px;
    
    }
    #uc{
        margin-right: 87px;
        margin-left: 27px;
    }
        #dort{
            margin-right: 108px;
        }
        #bes{
            margin-right: 88px;
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
        <h1>Eseri Güncelle</h1>
        <br>
        <br>
        <br>
<div class="container">
        <form action="eser_guncellendi.php" method="post">
            <div id="bir">
            Eser ISBN: <input type="text" value="<?php echo $satir["EsISBN"] ;?>" name="EsISBN"><br><br>
                </div>
            <div id="iki">
            Eser Adı: <input type="text" value="<?php echo $satir["EsAdi"] ;?>" name="EsAdi"><br><br>
                </div>
            <div id="uc">
            Eserin Dili: <input type="text" value="<?php echo $satir["EsDil"] ;?>" name="EsDil"><br><br>
            </div>
            <div id="dort">
            Yazar Adı Soyadı: <select name="YazNo" id="YazNo">
            <?php while($satir2 = mysqli_fetch_assoc($sorgu2)){ ?>
            <option value="<?php echo $satir2['YazNo']; ?>"><?php echo $satir2['AdSoyad']; ?></option>
            <?php } ?>
            </select> <br><br></div>
            <div id="bes">
           Yayınevi Adı: <select name="YayineviNo" id="YayineviNo">
           <?php while($satir3 = mysqli_fetch_assoc($sorgu3)){ ?>
           <option value="<?php echo $satir3['YayineviNo']; ?>"><?php echo $satir3['YayineviAd']; ?></option>
           <?php } ?>
           </select> <br><br>
           </div>
            <input type="hidden" value="<?php echo $satir["EsKayNo"] ;?>" name="EsKayNo">
            <input type="submit" value=" Güncelle">
        </form>
</div>
    </body>
</html>