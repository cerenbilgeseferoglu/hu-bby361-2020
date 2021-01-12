<?php
    /* Bağlantı bilgilerinin alınması*/
    require_once("baglanti.php");
    
?>
<html>
<head>
            <title>YAYIN BİLGİSİ EKLE</title>
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
    margin-right: 162px;
    }
    #iki{
        margin-right: 158px;
    }
    #uc{
        margin-right:148px;
    }
    p{
        background-color: white;
        margin-right: 500px;
        margin-left: 430px;
    }
    p:hover{
        
        background-color: darkseagreen;
        border: 1px solid white;
    }  
</style>
    
<body>
    <h1>Yayın Bilgisi Ekle</h1>
    <br>
    <br>
    <br>
    
<div class="container">
    <form action="yayin_eklendi.php" method="post">
        
    <div id="bir">
    Yayınevi Adı: <input type="text" name="YayineviAd"><br><br>
    </div>
        
    <div id="iki">
    Yayın Tarihi: <input type="text" name="YayinTar"><br><br>
    </div>
        
    <div id="uc">
    Yayın Yeri: <input type="text" name="YayinYer"><br><br>
    </div>
        
    <p><input type="submit" class="btn" value="Yayın Bilgisi Ekle"></p>
    </form>
</div>
    </body>
</html>