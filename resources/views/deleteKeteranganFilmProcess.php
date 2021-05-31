<?php
    include "connection.php";
    
    $id_kat_film = $_GET['id_kat_film'];
    
    $query = "DELETE FROM keterangan_film WHERE id_kat_film = $id_kat_film";
    
    if (mysqli_query($connect, $query)) {                     
        echo "<script>alert('Berhasil Hapus '); window.location.href='listFilm.php'</script>";
    } else {                
        echo "<script>alert('Gagal Hapus <br>" .  mysqli_error($connect) . "'); window.location.href='listFilm.php'</script>";
    }
?>