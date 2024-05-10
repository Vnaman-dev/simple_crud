<?php
require_once __DIR__.'/connect.php';
?>


<?php require_once __DIR__.'/includes/header.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header ">
                        <h4>
                            PHP CRUD
                            <a href="register.php" class="btn btn-primary float-end">Register /Add</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                            $register="select * from crud_self";
                            $register_run=mysqli_query($conn,$register);
                            if(mysqli_num_rows($register_run)>0)
                            {
                                ?>
                               
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                while($row=mysqli_fetch_assoc($register_run)):?>
                            
                                <tr>
                                
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['fname']; ?></td>
                                <td><?php echo $row['lname']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['mobile']; ?></td>
                                
                                <td>
                                <a href="register-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info ">Edit</a>
                                </td>
                                <td>
                                    <form action="code.php" method="POST">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" name="reg_delete_btn" class="btn btn-danger">Delete</button>
                                    </form>
                                

                                </td>
                                </tr>
                                <?php endwhile; ?>
                                
                            </tbody>
                        </table>
                        <?php
                            }else{
                                echo 'No Record Found';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once __DIR__.'/includes/footer.php'; ?>