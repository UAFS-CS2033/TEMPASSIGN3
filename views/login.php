<body style="background-color:lightslategray ;">
    

    
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Login</h5> 
                        <p>Need an account? <b><a class="link-primary" href="controller.php?page=add">Sign Up</a></b></p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="login">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control mb-3" id="username" name="username" placeholder="Enter your Username" required>
                            <label for="passwd" class="form-label">Password</label>
                            <input type="password" class="form-control mb-3" id="passwd" name="passwd" placeholder="Enter your Password" required>
                            <button class="btn btn-primary" type="submit" name="submit">Login</button>
                        </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

</body>