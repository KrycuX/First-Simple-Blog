<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projektdb";

$login=$_POST["login"];
$haslo=$_POST["haslo"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT Login, Haslo FROM logowanie WHERE Login='".$login."'AND Haslo='".$haslo."';";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    header('Location: Glowna.php');
    $myfile = fopen("online.txt", "w")or die("Nie mozna otworzyc pliku");
    fwrite($myfile,$login);
    fclose($myfile);
}

 else {
    echo "Wpisano złe dane <a href='index.php'>Powrót do Strony Logowania.</a>";
}
$conn->close();
?>