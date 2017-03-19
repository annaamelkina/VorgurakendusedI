<?php

// Vorm-i valideermine...
if (empty($_POST['username'])) {
    $error_username = "Kasutajanimi on määramata";
}

if (empty($_POST['vanus'])) {
    $error_vanus = "Vanus on määramata";
}

if (empty($_POST['telefon'])) {
    $error = "Telefoninumber on määramata";
}

if (empty($_POST['aadress'])) {
    $error = "Aadress on määramata";
}

if (isset($error_username) || isset($error_vanus)) {
    include("index.php");
    die();
}

    $host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $db = "test";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO 10162815_tabel (Nimi, Vanus, Telefon, Aadress)
VALUES ('" . $_POST["username"] . "', '" . $_POST["vanus"] . "', '" . $_POST["telefon"] . "', '" . $_POST["aadress"] . "')";

echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>