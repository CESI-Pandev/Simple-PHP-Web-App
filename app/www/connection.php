 <?php
$servername = getenv("MARIADB_HOST"); // Server name where the app has the DB
$username = getenv("MARIADB_USER"); // user of the DB 
$password = getenv("MARIADB_PASSWORD"); // password of the DB
$dbname = getenv("MARIADB_DATABASE"); // DB name 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>