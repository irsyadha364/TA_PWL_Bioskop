<?php
    include "connection.php";
    session_start();    
    $nama_film = $_POST['nama_film'];
    $desk_film = $_POST['desk_film'];
    $cover_film = $_FILES['cover_film']['name'];
   
    $target_path="uploads/";
    $target_path = $target_path . basename($cover_film);

    move_uploaded_file($_FILES['cover_film']['tmp_name'], $target_path);    

    $query = "INSERT INTO film(nama_film, desk_film, cover_film) VALUES
                ('$nama_film', '$desk_film', '$cover_film')";
    
    if (mysqli_query($connect, $query)) {                     
        echo "<script>alert('Berhasil Menambahkan! '); window.location.href='homeAdmin.php'</script>";
    } else {        
        echo "<script>alert('Gagal Menambahkan <br>" .  mysqli_error($connect) . "'); window.location.href='uploadFilm.php'</script>";
    }
?>