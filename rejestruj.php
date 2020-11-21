<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projektdb";

$login=$_POST["login"];
$haslo=$_POST["haslo"];
$haslo2=$_POST["haslo2"];
    
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sprawdz="SELECT Login FROM logowanie WHERE Login='$login'";

$sql = "INSERT INTO logowanie (Login, Haslo)
VALUES ('$login', '$haslo')";


$result1 = $conn->query($sprawdz);

if ($result1->num_rows==0)
{
    if($haslo!="" || $haslo2!="")
    {
    if($haslo==$haslo2)
    { $result = $conn->query($sql);
        if ($result === TRUE) {
            echo "Konto Utworzone";
        } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
}
    
    }else
     echo"Hasla nie sa takie same <a href='FormReje.html'>Powrót.</a>"  ;
    }else
    echo "Hasło nie moze zostac puste <a href='FormReje.html'>Powrót.</a>";

}else
    echo "Login istnieje <a href='FormReje.html'>Powrót.</a>";

$conn->close();
?>