<?php
    session_start();
    include "connection.php";

    $id_booking = $_GET['id_booking'];
    $query = "SELECT * FROM booking WHERE id_booking = '$id_booking'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    $id_user = $row['id_user']; 
    
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $query = "SELECT * FROM keterangan_film WHERE tanggal = '$tanggal' AND jam = '$jam'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    $id_kat_film = $row['id_kat_film'];
    $jml_kursi = $_POST['jml_kursi'];
    
    $query = "UPDATE booking 
    SET id_user='$id_user', id_kat_film = '$id_kat_film', jml_kursi='$jml_kursi' WHERE id_booking = '$id_booking'";
    $result = mysqli_query($connect, $query);
    if($result){
        echo "<script>alert('Berhasil Update!'); window.location.href='tiketSaya.php'</script>";
    } else {
        echo "<script>alert('Gagal Update!." .  mysqli_error($connect) . "'); window.location.href='tiketSaya.php'</script>";
    }
?>