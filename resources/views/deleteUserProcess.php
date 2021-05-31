<?php
    include "connection.php";
    
    $id_user = $_GET['id_user'];
    
    $query = "DELETE FROM user WHERE id_user = $id_user";
    
    if (mysqli_query($connect, $query)) {                     
        echo "<script>alert('Berhasil Hapus '); window.location.href='listUser.php'</script>";
    } else {                
        echo "<script>alert('Gagal Hapus <br>" .  mysqli_error($connect) . "'); window.location.href='listUser.php'</script>";
    }
?>