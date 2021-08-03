<!--For Development Purpose-->

<?php
$server = "127.0.0.1";
$username = "root";
$password = "";
$db = "bank";

$conn = mysqli_connect($server, $username, $password, $db);
if ($conn) {
} else
    die("connection to this database failed due to " . mysqli_connect_error());

?>