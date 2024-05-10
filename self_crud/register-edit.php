<?php require_once __DIR__.'/includes/header.php'; ?>
<?php require_once __DIR__ .'/connect.php';?>

<?php
    $id=$_GET['id'];
    $reg_query="select * from crud_self where id='$id'";
    $reg_query_run=mysqli_query($conn,$reg_query);

    if(mysqli_num_rows($reg_query_run)>0)
    {
        while($row=mysqli_fetch_assoc($reg_query_run)){
            //echo $row['fname'];
       
            ?>

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit</h4>
                    </div>
                    <div class="card-body">
                    <form action="code.php" method="POST">
                        <input type="hidden" name="edit_id" class="form-control" value="<?php echo $row['id']; ?>">
                    <div class="mb-3">
                        <label >First Name</label>
                        <input type="text" name="first_name" class="form-control" value="<?php echo $row['fname']; ?>">
                        
                    </div>
                    <div class="mb-3">
                        <label >Last Name</label>
                        <input type="text" name="last_name" class="form-control" value="<?php echo $row['lname']; ?>">
                        
                    </div>
                    <div class="mb-3">
                        <label >Email address</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>" >
                        
                    </div>
                    
                    <div class="mb-3">
                        <label >Mobile</label>
                        <input type="tel" name="mobile" class="form-control" value="<?php echo $row['mobile']; ?>" >
                        
                    </div>
                    
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                    <button type="submit" name="update_btn" class="btn btn-primary">Update</button>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

}

}else{

}


?>

<?php require_once __DIR__.'/includes/footer.php'; ?>



