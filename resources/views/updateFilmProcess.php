<?php
    include "connection.php";
    session_start();    

    $id_film = $_GET['id_film'];
    $nama_film = $_POST['nama_film'];
    $desk_film = $_POST['desk_film'];
    $cover_film = $_FILES['cover_film']['name'];
   
    $target_path="uploads/";
    $target_path = $target_path . basename($cover_film);

    move_uploaded_file($_FILES['cover_film']['tmp_name'], $target_path);    

    $query = "UPDATE film 
    SET nama_film='$nama_film', desk_film = '$desk_film', cover_film='$cover_film' WHERE id_film = '$id_film'";
    $result = mysqli_query($connect, $query);
    if($result){
        echo "<script>alert('Berhasil Update!'); window.location.href='homeAdmin.php'</script>";
    } else {
        echo "<script>alert('Gagal Update!." .  mysqli_error($connect) . "'); window.location.href='homeAdmin.php'</script>";
    }
?>