<?php 
   
   $user = $_REQUEST['getUser'];
  
?>
    <div class="container" >
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit User info</h5>
                        <p class="card-text"></p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $user['userID'] ?>">
                            <input type="hidden" name="page" value="adminEditUser">
                            <div class="row">
                                <div class="col">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" class="form-control mb-3"name="fname" value= "<?php echo $user['firstname'] ?>" required>
                                </div>
                            <div class="col">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="lname" value="<?php echo $user['lastname'] ?>" >
                                </div>
                            </div>
                            <label for="role" class="form-label">Role</label>
                            <input type="text" class="form-control mb-3" name="role" value="<?php echo $user['role'] ?>">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control mb-3" name="email" value="<?php echo $user['email'] ?>">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control mb-3" name="username" value="<?php echo $user['username'] ?>">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" class="form-control mb-3" name="password" value="<?php echo $user['password'] ?>">
                            <button class="btn btn-primary" type="submit" name="submit" value="CONFIRM" >Confirm</button>
                            <button class="btn btn-primary" type="submit" name="submit" value="CANCEL" >Cancel</button>
                            
                        </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>