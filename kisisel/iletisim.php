<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Tuğçe Hızır</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/iletisimph.css">
    <link rel="stylesheet" href="css/media.css">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    
</head> 
    <body>
        
 <div class="site">
    <div class="sol">
         <div class="sol-ust">
         <div class="img">
             <img src="img/profil.jpg" alt="profil">
         </div>
         
     </div>
     <div class="clear"></div>
     <div class="sol-alt">
        <ul>
            <li><a href="index.html">Merhaba!</a></li>
            <li><a href="sehir.html">Şehirler</a></li>
            <li><a href="miras.html">Mirasımız</a></li>
            <li><a href="ozgecmis.html">Özgeçmişim</a></li>
            <li><a href="iletisim.html">İletişim</a></li>
        </ul>
        
     </div>
    </div>
    <div class="sag">
    <h4>İLETİŞİM SAYFASINDAN GELEN VERİLER</h4>
    <?php
 
                         //iletisim.html adresinden verileri çekiyoruz..
            $ad=$_POST['ad'];
            $email=$_POST['email'];
            $sifre=$_POST['sifre'];
            $sehir=$_POST['sehir'];
            $cinsiyet=$_POST['cinsiyet'];
            $hobi=$_POST['hobi'];
            $oz_gecmis=$_POST['oz_gecmis'];
            
            echo '<h5>Adı: </h5>'.$ad.'<br><br>';
            echo '<h5>Email: </h5>'.$email.'<br><br>';
            echo '<h5>Şifre: </h5>'.$sifre.'<br><br>';
            echo '<h5>Şehir: </h5>'.$sehir.'<br><br>';
            echo '<h5>Cinsiyet: </h5>'.$cinsiyet.'<br><br>';

            if(isset($_POST['hobi'])) {
                $hobi = $_POST['hobi'];

                echo '<h5>Seçtiğiniz hobiler: </h5><br/>';

                foreach($hobi as $h){
                    echo ' * ' . $h . ' <br/><br>';
                }
            }

            echo '<h5>Özgeçmiş: </h5>'.$oz_gecmis.'<br><br>';

       

            ?>
    </div> 
                <div class="clear"></div>
                   <div class="footer">
                    TUĞÇE HIZIR 2019 &nbsp; KİŞİSEL BLOG
                   </div>
 </div>      
    </body>
</html>