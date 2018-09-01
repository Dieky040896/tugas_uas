<?php
include_once 'koneksi.php';
//include('login_session.php');

$id =  $_GET['id'];
$sql = "DELETE FROM kategori WHERE id_kategori-'($sid)'";
$result = mysqli_query($conn, $sql);
header('location: kategori.php');
?>