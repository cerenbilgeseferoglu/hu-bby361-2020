<?php
 require_once("baglanti.php");

$sorgu = mysqli_query($baglanti, "SELECT *, CONCAT(YazAdi, ' ', YazSoyad) AS AdSoyad FROM yazar");
    $sorgu2 = mysqli_query($baglanti, "SELECT *, YayineviAd FROM yayin");
?>

<html>
<head>
          <title>ESER EKLE</title>
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
    margin-right: 58px;
    }
    #iki{
        margin-right: 48px;
    }
    #uc{
        margin-right: 63px;
    }
        #dort{
           margin-right: 110px; 
        }
        #bes{
            margin-right: 90px;
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
    
<h1>Eser Ekle</h1>
    <br>
    <br>
    <br>
    <div class="container">
        
<form action="eser_eklendi.php" method="post">
    <div id="bir">
    Eser ISBN: <input type="text" name="EsISBN"><br><br>
    </div>
    <div id="iki">
    Eser Adı: <input type="text" name="EsAdi"><br><br>
    </div>
    <div id="uc">
    Eserin Dili: <input type="text" name="EsDil"><br><br>
    </div>
    <div id="dort">
    Yazar Adı Soyadı: <select name="YazNo">
    <?php while($satir = mysqli_fetch_assoc($sorgu)){ ?>
    <option value="<?php echo $satir['YazNo']; ?>"><?php echo $satir['AdSoyad']; ?></option>
    <?php } ?>
    </select> <br><br>
    </div>
    <div id="bes">
     Yayinevi Adı: <select name="YayineviNo" id="YayineviNo">
    <?php while($satir2 = mysqli_fetch_assoc($sorgu2)){ ?>
    <option value="<?php echo $satir2['YayineviNo']; ?>"><?php echo $satir2['YayineviAd']; ?></option>
    <?php } ?>
    </select> 
        <br>
        <br>
    </div>
    <p><input type="submit" class="btn" value="Eser Ekle"></p>
</form>
    </div>
    </body>
</html>