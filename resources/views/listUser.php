<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Gass Movie</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
    
        <!-- navigation -->
        <div class="container">
            <?php
            session_start();
            include "connection.php";
            include "components/navbarAdmin.php";
            ?>
        </div>
                <br><br><br><br>
                        <div class="container">
                            <br>

                            <h5>List User</h5>
                            
                        <table class="table table-striped">
                            <tr>
                                <td>User ID</td>
                                <td>Nama Lengkap</td>
                                <td>Username</td>
                                <td>Email</td>
                                <td>Kategori ID</td>
                                <td>Action</td>
                            </tr>
                        <?php
                            $query = "SELECT * FROM user";
                            $result = mysqli_query($connect, $query);
                            
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                        ?>

                            <tr>
                                <td><?php echo $row['id_user']; ?></td>
                            
                                <td><?php echo $row['nama_lengkap']; ?></td>
                            
                                <td><?php echo $row['username']; ?></td>
                            
                                <td><?php echo $row['email']; ?></td>

                                <td><?php echo $row['id_kat_user']; ?></td>

                                <td>
                                    <a href="updateUser.php?id_user=<?php echo $row['id_user']?>" class="text-info">Ubah</a> |
                                    <a href="deleteUserProcess.php?id_user=<?php echo $row['id_user']; ?>" class="text-danger" onclick="return confirm('Apakah anda yakin akan menghapus user ini?')">Hapus</a>
                                </td>
                            </tr>
                            <?php
                                }
                            }
                        ?> 
                        </table>
                        
                        </div>
                     </div>
                
        <br><br>
        <!-- footer -->
        <div class="container">
            <?php
                include "components/footer.php";
            ?>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>