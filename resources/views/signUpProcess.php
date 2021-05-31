<?php
    include "connection.php";

    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];      
    $email = $_POST['email'];
    $password = MD5($_POST['password']);    
    $id_kat_user = 2;

    $query = "SELECT * FROM user WHERE nama_lengkap = '$nama_lengkap' OR email = '$email'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Username atau email sudah digunakan!." .  mysqli_error($connect) . "'); window.location.href='signUp.html'</script>";
    }

    $query = "INSERT INTO user(nama_lengkap, username, email, password, id_kat_user) VALUES
              ('$nama_lengkap', '$username', '$email', '$password', $id_kat_user)";
    
    if (mysqli_query($connect, $query)) {        
        session_start();
        $query = "SELECT * FROM user WHERE username = '$username'";
        $row = mysqli_fetch_array(mysqli_query($connect, $query));
        $_SESSION['username'] = $username;
        $_SESSION['id_user'] = $row['id_user'];
        $_SESSION['id_kat_user'] = $role_id;        
        $_SESSION['login'] = true;        
        echo "<script>alert('Registrasi Sukses!'); window.location.href='homeUser.php'</script>";
        
    } else {                
        echo "<script>alert('Registrasi Gagal! " .  mysqli_error($connect) . "'); window.location.href='signUp.html'</script>";
    }
?>