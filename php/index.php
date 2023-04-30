<?php
$servername = "172.18.0.2";
$username = "root";
$password = "squidzz";
$dbname = "Redlock";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection error: " . mysqli_connect_error());
}

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["ID"] . ", Nama: " . $row["Nama"] . ", Alamat: " . $row["Alamat"] . ", Jabatan: " . $row["Jabatan"] . "<br>";
    }
} else {
    echo "Data is not found.";
}

mysqli_close($conn);
?>
