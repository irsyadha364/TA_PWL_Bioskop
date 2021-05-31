<?php
    session_start();
    include "connection.php";

    $id_user = $_GET['id_user'];
    $query = "SELECT * FROM user WHERE id_user = '$id_user'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $id_kat_user = $_POST['id_kat_user'];
    
    
    $query = "UPDATE user 
    SET nama_lengkap='$nama_lengkap', username = '$username', email='$email', id_kat_user='$id_kat_user' WHERE id_user = '$id_user'";
    $result = mysqli_query($connect, $query);
    if($result){
        echo "<script>alert('Berhasil Update!'); window.location.href='listUser.php'</script>";
    } else {
        echo "<script>alert('Gagal Update!." .  mysqli_error($connect) . "'); window.location.href='listUser.php'</script>";
    }
?>