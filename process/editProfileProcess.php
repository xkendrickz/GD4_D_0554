<?php 
    session_start(); 
    if(isset($_POST['edit'])){ 
        include ('../db.php'); 
        $id = $_SESSION['user']['id'];
        $name = $_POST['name']; 
        $phonenum = $_POST['phonenum']; 
        $membership = $_POST['membership']; 
        $email = $_POST['email']; 

        $query = mysqli_query($con, "UPDATE users SET name='$name', phonenum='$phonenum', membership='$membership', email='$email'  WHERE id='$id'") 
        or die(mysqli_error($con)); 
        
            if($query){ 
                $user = mysqli_fetch_assoc($query);
                session_start();
                $_SESSION['user'] = $user;
                echo 
                '<script> 
                    alert("Edit Success"); 
                    window.location = "../page/profilePage.php" 
                </script>'; 
            }else{ 
                echo 
                '<script> 
                    alert("Edit Failed"); 
                    window.location = "../page/profilePage.php" 
                </script>'; 
            } 
    }else {
         echo 
         '<script> 
         window.history.back() 
         </script>';
    }
?>