<?php 

$host ="localhost"; 
$user ="root";
$pass =""; 
$db ="tugas_uas"; 
 
$conn =mysqli_connect($host,$user,$pass,$db); 
if ($conn==false) { 
    echo " Koneksi server gagal";   die (); 
 
 } ?>