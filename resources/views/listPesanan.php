<html>
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
        <div class="container">
        
        <?php
            include "components/navbarAdmin.php";
            session_start();
            include "connection.php";   
            $sql = "SELECT * FROM booking";
            $query = mysqli_query($connect, $sql);
            echo "<br><br><br>";
            echo "<br>";
            echo "<h5>List Booking</h5><br>";
            echo "<table class='table table-striped' >";
            echo "<tr>
                    <th> Booking ID</th>
                    <th> Username Pemesan</th>
                    <th> Judul Film</th>
                    <th> Jumlah Kursi</th>
                    <th> Action </th>
                </tr>";
            
            while($row = mysqli_fetch_array($query)){
            $id_kat_film = $row['id_kat_film'];
            $sql1 = "SELECT * FROM keterangan_film INNER JOIN film ON film.id_film = keterangan_film.id_film WHERE keterangan_film.id_kat_film = $id_kat_film";
            $query1 = mysqli_query($connect, $sql1);
            $row1 = mysqli_fetch_array($query1);

            $id_booking = $row['id_booking'];
            $sql2 = "SELECT * FROM user INNER JOIN booking ON user.id_user = booking.id_user WHERE booking.id_booking = $id_booking";
            $query2 = mysqli_query($connect, $sql2);
            $row2 = mysqli_fetch_array($query2);
		?>
			<tr>
				<td><?php echo $row["id_booking"] ?></td>
                <td><?php echo $row2["username"] ?></td>
                <td><?php echo $row1["nama_film"] ?></td>
                <td><?php echo $row["jml_kursi"] ?></td>
				<td>
					<a href="deleteTiketProcess.php?id_booking=<?php echo $row['id_booking']; ?>" class="text-danger" onclick="return confirm('Apakah anda yakin akan menghapus pesanan ini?')">Hapus</a>
				</td>
            </tr>
           
		<?php
            }
            ?>
        </div>
        <div class="container">
            <?php
                include "components/footer.php";
            ?>
        </div>
    </body>
</html>