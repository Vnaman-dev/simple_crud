<?php require_once __DIR__.'/includes/header.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        Register Now
                    </div>
                    <div class="card-body">
                    <form action="code.php" method="POST">
                    <div class="mb-3">
                        <label >First Name</label>
                        <input type="text" name="first_name" class="form-control" >
                        
                    </div>
                    <div class="mb-3">
                        <label >Last Name</label>
                        <input type="text" name="last_name" class="form-control" >
                        
                    </div>
                    <div class="mb-3">
                        <label >Email address</label>
                        <input type="email" name="email" class="form-control" >
                        
                    </div>
                    <div class="mb-3">
                        <label >Password</label>
                        <input type="password" name="password" class="form-control" >
                        
                    </div>
                    <div class="mb-3">
                        <label >Mobile</label>
                        <input type="tel" name="mobile" class="form-control" >
                        
                    </div>
                    
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                    <button type="submit" name="register_btn" class="btn btn-primary">Submit</button>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once __DIR__.'/includes/footer.php'; ?>


