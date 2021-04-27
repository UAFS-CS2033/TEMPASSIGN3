
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Mailing List</h5>
                        <p class="card-text">Add a new contact to the list.</p>
                        <form action="controller.php" method="POST">
                        <input type="hidden" name="page" value="add">
                            <div class="row">
                                <div class="col">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="fname"> 
                                </div>
                            <div class="col">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="lname">
                                </div>
                            </div>
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control mb-3" id="email" name="email" placeholder="Enter your Email Address" required>
                            
                            <div class="dropdown">
                            <label for="role">Choose your role:</label>
                            <select class="btn btn-primary dropdown-toggle" type="button" id="role" name="role">
                            <option value="user">User</option>
                            <option value="author">Author</option>
                            </select>
                            </div>

                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control mb-3" id="username" name="username" placeholder="Enter your Username" required>
                            <label for="passwd" class="form-label">Password</label>
                            <input type="password" class="form-control mb-3" id="passwd" name="passwd" placeholder="Enter your Password" required>
                            <button class="btn btn-primary" type="submit" name="submit" >Submit</button>
                        </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>
