<?php
$serverName = "localhost";
$username = "id19803637_root";
$password = "8L|!1qnV=7/Ucc<z";
$dbName = "id19803637_leaguedata";

$con = mysqli_connect($serverName, $username, $password, $dbName);

if (mysqli_connect_errno()) {
    print("Failed to connect!");
    exit();
}
print("Connection success!");
?>