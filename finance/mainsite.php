<!DOCTYPE html>
<style>
body{
	background-color: black;
	font-family: monospace;
	color: white;
		}

</style>

<?php
	include_once 'headerfin.php'

$sql = "SELECT id, amount, receiver, date FROM finance";
$result = mysqli_query($conn, $sql);

?>

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "financesystem";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, amount, receiver FROM finance";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["amount"]. " " . $row["receiver"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 


<body>

</body>
</html>