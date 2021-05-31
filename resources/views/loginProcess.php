<?php
    include "connection.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    $check = mysqli_num_rows($result);
    if($check > 0){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['id_user'] = $row['id_user'];
        $_SESSION['id_kat_user'] = $row['id_kat_user'];        
        $_SESSION['login'] = true;
        
        if($row['id_kat_user']  == 1){            
            header('Location:homeAdmin.php');
        } else if($row['id_kat_user'] == 2){            
            header('Location:homeUser.php');        
        }
    } else {
        echo "<script>alert('Username atau password yang anda masukkan salah! Silahkan coba lagi.'); window.location.href='login.html'</script>";    
    }
?>