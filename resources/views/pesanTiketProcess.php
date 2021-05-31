<?php
    session_start();     
    include "connection.php";
    $username = $_SESSION['username']; 
    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    $id_film = $_GET['id_film']; 
    
    $id_user = $row['id_user'];        
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $query = "SELECT * FROM keterangan_film WHERE tanggal = '$tanggal' AND jam = '$jam' AND id_film = $id_film";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    $id_kat_film = $row['id_kat_film'];
    $jml_kursi = $_POST['jml_kursi'];

    $query = "INSERT INTO booking (id_user, id_kat_film, jml_kursi) VALUES
                ($id_user, $id_kat_film, $jml_kursi);";      
    
    if (mysqli_query($connect, $query)) {           
            echo "<script>alert('Transaksi Berhasil '); window.location.href='tiketSaya.php'</script>";
        
    } else {            
        echo "<script>alert('Transaksi Gagal ." .  mysqli_error($connect) . "'); window.location.href='homeUser.php'</script>";
    }
       
?>
