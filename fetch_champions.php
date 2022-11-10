<?php
include("connect.php");

$champ_name = $_POST["champ_name"];
$class = $_POST["class"];
$lane = $_POST["lane"];
$range = $_POST["range"];
$dmgType = $_POST["dmg"];

$sql = "INSERT INTO champions values(?, ?, ?, ?, ?)";
$stmt = mysqli_stmt_init($con);
    
if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($con));
}

mysqli_stmt_bind_param($stmt, "ssssss", $champ_name, $class, $lane, $range, $dmgType);
mysqli_stmt_execute($stmt);
print("Inserted values.");
?>