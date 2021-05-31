<?php
    session_start();
    include "connection.php";
    
    $id_booking = $_GET['id_booking'];
    $id_user = $_SESSION['id_user'];
    $query = "DELETE FROM booking WHERE id_booking = $id_booking";
    
    if($id_user == 1){
        if (mysqli_query($connect, $query)) {                     
            echo "<script>alert('Berhasil Hapus '); window.location.href='listPesanan.php'</script>";
        } else {                
            echo "<script>alert('Gagal Hapus <br>" .  mysqli_error($connect) . "'); window.location.href='listPesanan.php'</script>";
        }
    } else if($id_user==2){
        if (mysqli_query($connect, $query)) {                     
            echo "<script>alert('Berhasil Hapus '); window.location.href='tiketSaya.php'</script>";
        } else {                
            echo "<script>alert('Gagal Hapus <br>" .  mysqli_error($connect) . "'); window.location.href='tiketSaya.php'</script>";
        }
    }
    
?>