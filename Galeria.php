<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>StronaGłowna</title>
</head>
<link rel="stylesheet" href="style.css" type=text/css>
<script src="java.js"></script>
<body>
  
   <div class="Blok">
     
       <div class="Naglowek">
        <img src="Screenshot_1.png" alt="">
       </div>
       
         
         <div class="Menu">
          <a href="Glowna.php">StronaGłówna</a>
           <a href="Galeria.php">Galeria</a>
                     <a href="Livechat.php">LiveChat</a>
                     <?php
       $myfile = fopen("online.txt", "r") or die("Unable to open file!");
           echo" Zalogowany[";
           echo fgets($myfile);
             fclose($myfile);
             echo "]";
           ?>
           <a href="index.php">Wyloguj</a>
       </div>
       <div class="Tekst">
          <H2>Screenshoty z gier które powinien znać każdy gracz</H2>
        
        
          
          <div class="pomoc">
           <div class="imgg1"><img onclick="podmiana(1)" id="1" src="foto/zdj1.png" alt="img1"></div>
         <div class="imgg1"><img onclick="podmiana(2)" id="2" src="foto/zdj2.png" alt="img2"></div>
         <div class="imgg1"><img onclick="podmiana(3)" id="3" src="foto/zdj3.png" alt="img3"></div>
          <div class="imgg1"><img onclick="podmiana(7)" id="7" src="foto/zdj7.png" alt="img4"></div>
           </div>
                   
            <div  class="pomoc1">
            <div><img onclick="podmiana(8)" id="8" src="foto/zdj8.png" alt="img5" ></div>
         <div><img onclick="podmiana(9)" id="9" src="foto/zdj9.png" alt="img6"></div>
        </div>
           
           <div class="imgg"><img id="glowny" src="foto/zdj12.png" alt="Główny"></div>
           <div  class="pomoc1">
            <div><img onclick="podmiana(10)" id="10" src="foto/zdj10.png" alt="img5" ></div>
         <div><img onclick="podmiana(11)" id="11" src="foto/zdj11.png" alt="img6"></div>
        </div>
        
        <div class="pomoc">
         <div class="imgg1"><img onclick="podmiana(4)" id="4" src="foto/zdj4.png" alt="img4"></div>
         <div class="imgg1"><img onclick="podmiana(5)" id="5" src="foto/zdj5.png" alt="img5"></div>
         <div class="imgg1"><img onclick="podmiana(6)" id="6" src="foto/zdj6.png" alt="img6"></div>
        <div class="imgg1"><img onclick="podmiana(12)" id="12" src="foto/zdj13.png" alt="img4"></div>
           </div>



          
           
       
       
       
       
       
       
       
       
       
   </div>
    
</body>
</html>