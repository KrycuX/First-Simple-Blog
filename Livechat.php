<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>StronaGłowna</title>
</head>
<link rel="stylesheet" href="style.css" type=text/css>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
           <H2>DYSKUSJA</H2>
        
     
<iframe src="komentarze.php" height="300px" width="900px"></iframe>

<form action="dodWiad.php" method="post">
    <input type="text" name="wiadomosc">
    <input type="submit" value="Wyślij">
</form>





          
           
       </div>
       
       
       
       
       
       
       
   </div>
    
</body>
</html>