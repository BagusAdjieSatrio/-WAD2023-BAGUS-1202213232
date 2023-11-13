<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin

$host = "localhost";
$username = "root";
$pass = "";
$db = "modul3_wad";

$conn = mysqli_connect("host","username","pass","db");
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if ($conn->connect_error){
    die("Error" .$conn->connect_error);
}
// 
?>