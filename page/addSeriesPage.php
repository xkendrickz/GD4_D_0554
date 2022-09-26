<?php 
    include '../component/sidebar.php' 
?> 

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" > 
    <div class="body d-flex justify-content-between"> 
        <h4>ADD NEW DATA SERIES</h4>
    </div> 
    <hr>
    <div class="card-body"> 
        <form action="../process/registerProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="formlabel">Name</label>
                <input class="form-control" id="name" name="name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="formlabel">Email</label>
                <input class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="formlabel">Phone Number</label>
                <input class="form-control" id="phonenum" name="phonenum" aria-describedby="emailHelp">
            </div>
            <div>
                <label for="exampleInputEmail1" class="formlabel">Membership</label>
                <select class="form-select" aria-label="Default select example" name="membership" id="membership">
                    <option value="" disabled selected style="display: none;"></option>
                    <option value="Reguler">Reguler</option>
                    <option value="Platinum">Platinum</option>
                    <option value="Gold">Gold</option>
                </select>
            </div>
            <div class="d-grid gap-2"> 
                <a class="btn btn-dark" href="../page/listSeries.php" role="button">SAVE</a>
            </div>
        </form>
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