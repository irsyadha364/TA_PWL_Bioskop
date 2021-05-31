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
        <?php
            include "components/navbarAdmin.php";
            session_start();

        ?>
        <div class="container">
        <?php
            include "connection.php";   
            $sql = "SELECT * FROM keterangan_film";
            $query = mysqli_query($connect, $sql);
            
            echo "<br><br><br>";
            echo "<br>";
            echo "<h5>List Booking</h5><br>";
            echo "<table class='table table-striped' >";
            echo "<tr>
                    <th> Film ID</th>
                    <th> Judul Film</th>
                    <th> ID Keterangan</th>
                    <th> Tanggal</th>
                    <th> Jam</th>
                    <th> Action </th>
                </tr>";
            
            while($row = mysqli_fetch_array($query)){
            $id_kat_film = $row['id_kat_film'];
            $sql1 = "SELECT * FROM film INNER JOIN keterangan_film ON film.id_film = keterangan_film.id_film WHERE keterangan_film.id_kat_film = $id_kat_film";
            $query1 = mysqli_query($connect, $sql1);
            $row1 = mysqli_fetch_array($query1);
		?>
			<tr>
				<td><?php echo $row["id_film"] ?></td>
                <td><?php echo $row1["nama_film"] ?></td>
                <td><?php echo $id_kat_film ?></td>
                <td><?php echo $row["tanggal"] ?></td>
                <td><?php echo $row["jam"] ?></td>
				<td>
                    <a href="updateKeteranganFilm.php?id_kat_film=<?php echo $row['id_kat_film']?>" class="text-info">Ubah</a> |
                    <a href="deleteFilmProcess.php?id_kat_film=<?php echo $row['id_kat_film']; ?>" class="text-danger" onclick="return confirm('Apakah anda yakin akan menghapus tanggal dan jam pada film ini?')">Hapus</a>
				</td>
            </tr>
		<?php
            }
            ?>
        </table>
        <br><br><br>
        </div>
        
        <div class="container">
        
            <?php
                include "components/footer.php";
            ?>
        </div>
    </body>
</html>