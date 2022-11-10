<?php
include("connect.php");
$champ_name = $_POST["champ_name"];
$passive = $_POST["p"];
$q = $_POST["q"];
$w = $_POST["w"];
$e = $_POST["e"];
$r = $_POST["r"];

$sql = "INSERT INTO abilities values(?, ?, ?, ?, ?, ?   )";
$stmt = mysqli_stmt_init($con);
    
if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($con));
}

mysqli_stmt_bind_param($stmt, "ssssss", $champ_name, $passive, $q, $w, $e, $r);
mysqli_stmt_execute($stmt);
print("Inserted values.");
?>