<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <style>
        #Nick
{
    border-radius: 10px;
    background-color: aqua;
    padding-left: 2px; 
    width:auto;
}

#kom
{
    border-radius: 10px;
    background-color:burlywood;
        width:auto;
    height:auto;
    padding-left:4px;
}
        body
        {
            background-color: #ffdb4d;
        }

         
        
        #box
        {
           background-color:burlywood; 
            width:1000px;
            height: auto;
            
            
            
    </style>
</head>
<body>
 <div id="xd">
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projektdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  Nick,Tekst,data FROM live";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " <div id='box'><div id='Nick'> " . $row["Nick"]."(".$row["data"]. ")</div><div id='kom'> " . $row["Tekst"]. "</div></div>";
    }
} else {
    echo "0 results";
}
$conn->close();

    

        ?>
    </div>
</body>
</html>