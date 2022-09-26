<?php 
    include '../component/sidebar.php' 
?> 

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" > 
    <div class="body d-flex justify-content-between"> 
        <div class="row">
            <div class="col">
                <h4>LIST SERIES</h4>
            </div>
            <div class="col">
                <i class="fa-solid fa-pen-to-square" href="../page/editProfilePage.php"></i>
            </div>
        </div>
        
    </div> 
    <hr>

    <table class="table ">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Genre</th>
                <th scope="col">Release</th>
                <th scope="col">Episode</th>
                <th scope="col">Season</th>
                <th scope="col">Synopsis</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php   
                include ('../db.php'); 

                $query = mysqli_query($con, "SELECT * FROM series") or die(mysqli_error($con));
                if (mysqli_num_rows($query) == 0) {
                    echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                }else{
                    $no = 1;
                    while($data = mysqli_fetch_assoc($query)){
                    echo'
                    <tr>
                        <th scope="row">'.$no.'</th>
                        <td>'.$data['name'].'</td>
                        <td>'.$data['genre'].'</td>
                        <td>'.$data['realese'].'</td>
                        <td>'.$data['episode'].'</td>
                        <td>'.$data['season'].'</td>
                        <td>'.$data['synopsis'].'</td>
                        <td>
                            <a href="../process/editSeriesPage.php?id='.$data['id'].'"onClick="return confirm ( \'Are you sure want to edit this data?\')"> <i style="color: green" class="fa fa-pencil fa-2x"></i>
                            <a href="../process/deleteMovieProcess.php?id='.$data['id'].'"onClick="return confirm ( \'Are you sure want to delete this data?\')"> <i style="color: red" class="fa fa-trash fa-2x"></i></a>
                        </td>
                    </tr>';
                    $no++;
                    }
                }
            ?>
        </tbody>
    </table>
        <div class="d-grid gap-2"> 
                <a class="btn btn-primary" href="../page/editSeriesPage.php" role="button">ADD SERIES</a>
        </div>
    </div> 
</aside>

        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
            crossorigin="anonymous">
        </script> 
    </body> 
</html>