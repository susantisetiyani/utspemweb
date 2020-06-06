<?php

$servername = "localhost";
$username = "id13977717_santi";
$password = "g@lVtke^LlHr%q2h";
$dbname = "id13977717_mathgames";
$koneksi = mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_error());
function masukan($nama, $email, $skor){
    $sql = "INSERT INTO tb_mathgame (id, nama, email, skor) VALUES(NULL, '".$nama."','".$email."','".$skor."')";
    if (mysqli_query($GLOBALS['koneksi'], $sql)) {
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($GLOBALS['koneksi']);
      }
    mysqli_close($GLOBALS['koneksi']);
}


?> 