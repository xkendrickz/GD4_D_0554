<?php 
    session_start(); 
    if(isset($_POST['edit'])){ 
        include ('../db.php'); 
        $id = $_SESSION['user']['id'];
        $name = $_POST['name']; 
        $phonenum = $_POST['phonenum']; 
        $membership = $_POST['membership']; 
        $email = $_POST['email']; 

        $queryUpdate = mysqli_query($con, "UPDATE `users` SET `name`='$name',`email`='$email',`phonenum`='$phonenum',`membership`='$membership' WHERE id='$id'") 
        or die(mysqli_error($con)); 
        
            if($queryUpdate){ 
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