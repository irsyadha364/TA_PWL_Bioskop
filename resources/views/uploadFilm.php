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
            <?php
            session_start();
            include "connection.php";
            include "components/navbarAdmin.php";
            ?>
            
            <br><br><br><br><br><br>
            <form action="uploadProcess.php" method="POST" enctype="multipart/form-data">
            <input type="text" class="form-control" name="nama_film" placeholder="Judul Film">
                            <br>
                <textarea class="form-control" name="desk_film" placeholder="Deskripsi Film"></textarea>
                <br>    
                <input class="form-control" type="file" name="cover_film"><br>
                <input type="submit" value="Upload">
          </form>
        </body>
        </html>