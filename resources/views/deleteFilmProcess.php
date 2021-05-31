<?php
    include "connection.php";
    
    $id_film = $_GET['id_film'];
    
    $query = "DELETE FROM film WHERE id_film = $id_film";
    
    if (mysqli_query($connect, $query)) {                     
        echo "<script>alert('Berhasil Hapus '); window.location.href='homeAdmin.php'</script>";
    } else {                
        echo "<script>alert('Gagal Hapus <br>" .  mysqli_error($connect) . "'); window.location.href='homeAdmin.php'</script>";
    }
?>