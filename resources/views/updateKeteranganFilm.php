<!DOCTYPE html>
<html>
<head>
	<title>Update Film Page</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>

        @import url('https://fonts.googleapis.com/css?family=Numans');

        html,body{
        background-image: url('assets/img/header-bg.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        font-family: 'Numans', sans-serif;
        }

        .container{
        height: 100%;
        align-content: center;
        }

        .card{
        height: 370px;
        margin-top: auto;
        margin-bottom: auto;
        width: 400px;
        background-color: rgba(0,0,0,0.5) !important;
        }

        .social_icon span{
        font-size: 60px;
        margin-left: 10px;
        color: #FFC312;
        }

        .social_icon span:hover{
        color: white;
        cursor: pointer;
        }

        .card-header h3{
        color: white;
        }

        .social_icon{
        position: absolute;
        right: 20px;
        top: -45px;
        }

        .input-group-prepend span{
        width: 50px;
        background-color: #FFC312;
        color: black;
        border:0 !important;
        }

        input:focus{
        outline: 0 0 0 0  !important;
        box-shadow: 0 0 0 0 !important;

        }

        .remember{
        color: white;
        }

        .remember input
        {
        width: 20px;
        height: 20px;
        margin-left: 15px;
        margin-right: 5px;
        }

        .login_btn{
        color: black;
        background-color: #FFC312;
        width: 100px;
        }

        .login_btn:hover{
        color: black;
        background-color: white;
        }

        .links{
        color: white;
        }

        .links a{
        margin-left: 4px;
        }

        label{
            color:white;     
        }
    </style>
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Update Film</h3>
				
            </div>
            
			<div class="card-body">
                    <?php 
                        session_start();
                        include "connection.php";
                        $id_kat_film = $_GET['id_kat_film'];
                        $query = "SELECT * FROM keterangan_film WHERE id_kat_film = $id_kat_film";
                        $result = mysqli_query($connect, $query);
                        $row = mysqli_fetch_assoc($result);
                        $id_film = $row['id_film'];
                        $query2 = "SELECT * FROM film WHERE id_film = $id_film";
                        $result2 = mysqli_query($connect, $query2);
                        $row2 = mysqli_fetch_assoc($result2);

                        ?>
				    <form action="updateKeteranganFilmProcess.php?id_kat_film=<?php echo $id_kat_film; ?>" method="POST" enctype="multipart/form-data">
                        <div class = "container">
                            
                            <label for="nama_film">Judul Film</label>
                            <input type="text" class="form-control" value="<?php echo $row2['nama_film'];?>" name="nama_film" disabled>
                            
                            <label for="desk_film">Tanggal</label>
                            <div class="input-group">
                                <input type="date" class="form-control" name="tanggal" value="<?php echo $row['tanggal'];?>" required>
                            </div>  

                            <label for="desk_film">Jam (HH:MM:SS)</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="jam" value="<?php echo $row['jam'];?>" required>
                            </div>  
                        
						    <input type="submit" value="Update" class="btn float-right login_btn">
                        
                        </div>
				</form>
			</div>
			
		</div>
	</div>
</div>
</body>
</html>