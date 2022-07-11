<html>
<body>

<?php

$dbname = 'arduino';
$dbuser = 'root';  
$dbpass = ''; 
$dbhost = "127.0.0.1"; 

$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connect){
	echo "Error: " . mysqli_connect_error();
	exit();
}

echo "Connection Success!<br><br>";

$temperature = $_GET["temperature"];
$humidity = $_GET["humidity"]; 


$query = "INSERT INTO veri (sicaklik, nem) VALUES ('$temperature', '$humidity')";
$result = mysqli_query($connect,$query);

echo "Insertion Success!<br>";

?>
</body>
</html>
