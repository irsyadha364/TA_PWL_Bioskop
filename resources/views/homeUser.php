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
            include "components/navbarUser.php";
            ?>
        </div>
    
        <!-- carousel -->
                <br><br><br><br>
                <div class = "row">
                    <div class="col-lg-3">
                    <h5>Recommended</h5>
                    
                    <?php 
                        session_start();
                        include "connection.php";
                        $query = "SELECT * FROM film";
                        $result = mysqli_query($connect, $query);
                        $i = 0;
                        
                        if(mysqli_num_rows($result) > 0 && $i<3){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <table class="table table-striped">
                        <tr>
                            <td><?php echo $row['nama_film']; ?></td>
                        </tr>
                    </table>
                    <?php
                    $i+=1;
                            }
                        }
                    ?> 
                    </div>
                    <div class="col-lg-9">
                        <div class="container">
                            <div id="myCarousel" class="carousel slide my-4" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                <img class="d-block img-fluid" src="assets/slider-jumbotron-1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block img-fluid" src="assets/slider-jumbotron-2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block img-fluid" src="assets/slider-jumbotron-3.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            </div>
                            <!-- /.carousel -->
                        </div>

                        <div class="container">
                            <h1>Selamat Datang, <?php echo $_SESSION['username'];?> !</h1>
                            <?php
                            $query = "SELECT * FROM film";
                            $result = mysqli_query($connect, $query);
                            
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <table class="table table-striped">
                            <tr>
                                <td><?php echo "<img src='uploads/".$row['cover_film']."' width='150px' height='250px'>";?></td>
                            
                                <td><?php echo $row['nama_film']; ?></td>
                            
                                <td><?php echo $row['desk_film']; ?></td>
          
                                <td>
                                    <a href="pesanTiket.php?id_film=<?php echo $row['id_film']?>&nama_film=<?php echo $row['nama_film']?>">Pesan</a> 
                                </td>
                            </tr>
                        </table>
                        <?php
                                }
                            }
                        ?> 
                        </div>
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