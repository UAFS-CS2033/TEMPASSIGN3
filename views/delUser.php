<?php 
   $user = $_REQUEST['getUser'];
  
?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Delete User</h5>
                        <p class="card-text">Are you sure?</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $user['userID'] ?>">
                            <input type="hidden" name="page" value="delete">
                            <div class="row">
                                <div class="col">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="fname" value="<?php echo $user['firstname'] ?>" readonly>
                                </div>
                            <div class="col">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="lname" value="<?php echo $user['lastname'] ?>" readonly>
                                </div>
                            </div>
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control mb-3" name="email" value="<?php echo $user['email'] ?>" readonly>
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control mb-3" name="username" value="<?php echo $user['username'] ?>" readonly>
                            <button class="btn btn-primary" type="submit" name="submit" value="CONFIRM" >Confirm</button>
                            <button class="btn btn-primary" type="submit" name="submit" value="CANCEL" >Cancel</button>
                            
                        </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

