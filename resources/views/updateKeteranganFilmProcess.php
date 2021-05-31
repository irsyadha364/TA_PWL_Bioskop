<?php
    include "connection.php";
    session_start();    

    $id_kat_film = $_GET['id_kat_film'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
   

    $query = "UPDATE keterangan_film 
    SET tanggal='$tanggal', jam = '$jam WHERE id_kat_film = '$id_kat_film'";
    $result = mysqli_query($connect, $query);
    if($result){
        echo "<script>alert('Berhasil Update!'); window.location.href='listFilm.php'</script>";
    } else {
        echo "<script>alert('Gagal Update!." .  mysqli_error($connect) . "'); window.location.href='listFilm.php'</script>";
    }
?>