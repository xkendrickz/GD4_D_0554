<?php 
    session_start(); 
    if(isset($_POST['edit'])){ 
        include ('../db.php'); 
        $id = $_SESSION['user']['id'];
        $name = $_POST['name']; 
        $genre = $_POST['genre']; 
        $release = $_POST['release']; 
        $episode = $_POST['episode'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];
        
        $query = mysqli_query($con, "UPDATE users SET name='$name', genre='$genre', release='$release', episode='$episode', season='$season', synopsis='$synopsis'  WHERE id='$id'") 
        or die(mysqli_error($con)); 
        
            if($query){ 
                $user = mysqli_fetch_assoc($query);
                session_start();
                $_SESSION['user'] = $user;
                echo 
                '<script> 
                    alert("Edit Success"); 
                    window.location = "../page/listSeries.php" 
                </script>'; 
            }else{ 
                echo 
                '<script> 
                    alert("Edit Failed"); 
                    window.location = "../page/listSeries.php" 
                </script>'; 
            } 
    }else {
         echo 
         '<script> 
         window.history.back() 
         </script>';
    }
?>