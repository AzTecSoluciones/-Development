<?php


require('/home3/regenera/config/stringcon.php');

$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
if ($conn->connect_error) {     // Check connection
    die("Connection failed: " . $conn->connect_error);
} 

$address = mysqli_real_escape_string($conn, $_POST['address']);



$sql = "INSERT INTO address (ADDRESS_NUMBER,DATE)
VALUES ('$address', CURDATE())";

if ($conn->query($sql) === TRUE) {
    echo "SAVED!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>