 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_f00l";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM oh_crap";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Nothing: " . $row["how"]. " - Nothing: " . $row["what"]."<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 