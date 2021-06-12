                    <?php 
                        include "connection.php";
                        $query = "SELECT * FROM film";
                        $result = mysqli_query($connect, $query);
                        
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <?php
                            }
                        }
                    ?> 