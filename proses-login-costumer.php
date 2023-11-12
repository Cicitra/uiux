<?php

$username = $_POST['username'];
$password = $_POST['password'];

include 'koneksi.php';
$sql = "SELECT * FROM customer WHERE username='$username' AND password='$password'";
$query = mysqli_query($koneksi, $sql);
if(mysqli_num_rows($query)>0){
    session_start();
    $data = mysqli_fetch_array($query);
    $_SESSION['id_costumer'] = $data['costumer'];

    header('Location:costumer.php');

}else{
    echo"<script>alert('Maaf Anda Gagal Login, Silahkan Ulangi Lagi'); 
    window.Location.assign('index.php');</script>";
}

?>