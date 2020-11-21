<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projektdb";

$tekst=$_POST['wiadomosc'];
$myfile = fopen("online.txt", "r") or die("Unable to open file!");
$login=fgets($myfile);
 fclose($myfile);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO live (Nick,Tekst)
VALUES ('$login', '$tekst' )";

if ($conn->query($sql) === TRUE) {
    header('Location: Livechat.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>