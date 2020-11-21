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
          <H2>Gry komputerowe</H2>
        
     

<p class="paragraf1">Rodzaj oprogramowania komputerowego przeznaczonego do celów rozrywkowych bądź edukacyjnych (rozrywka interaktywna) i wymagającego od użytkownika (gracza) rozwiązywania zadań logicznych lub zręcznościowych. Gry komputerowe mogą być uruchamiane na komputerach osobistych, specjalnych automatach, konsolach do gry, telewizorach, telefonach komórkowych oraz innych mobilnych urządzeniach, nazywanych łącznie platformami sprzętowymi. Zadania stawiane przed graczem w grach komputerowych różnią się w zależności od gatunku i mogą polegać na przykład na rozwiązaniu zadania logicznego, eliminacji wirtualnych przeciwników czy też rywalizacji ze sztuczną inteligencją bądź innymi graczami (gra wieloosobowa); interaktywna rozrywka w celach zawodowych nosi nazwę sportu elektronicznego.</p>
<img src="foto/fotog%C5%82owna.png" alt="">
<p class="paragraf2"> Gry komputerowe wywodzą się z gier planszowych i fabularnych oraz różnych dyscyplin sportowych; początki elektronicznego oprogramowania przeznaczonego do celów rozrywkowych wiązać należy z prototypami konstruowanymi na amerykańskich uczelniach. Gry komputerowe stały się produktem masowym za sprawą popularności konsol telewizyjnych i automatów w latach 70. XX wieku; wraz z postępującą miniaturyzacją platform oraz powstaniem przenośnych urządzeń do grania, zyskiwały one coraz większą popularność. Specjalistyczne badania dotyczące gier (ludologia) wskazują na znaczący ich wpływ na psychikę gracza – zarówno pozytywny, jak i negatywny. Kontrowersje dotyczą także klasyfikowania interaktywnej rozrywki jako dziedziny sztuki.</p>



           <p style="text-align:right;"> informację zaczerpnięte z : <a href="https://pl.wikipedia.org/wiki/Gra_komputerowa">https://pl.wikipedia.org/wiki/Gra_komputerowa</a></p>
           
       </div>
       
       
       
       
       
       
       
   </div>
    
</body>
</html>