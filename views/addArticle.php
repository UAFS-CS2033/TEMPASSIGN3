<div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Article Creation</h5>
                        <p class="card-text">Add an article to the blog</p>
                        <form action="controller.php" method="POST">

                            <input type="hidden" name="page" value="ArtAdd">

                            <label for="title" class="form-label">Title:</label>
                            <input type="text" class="form-control mb-3" id="title" name="title" placeholder="Enter your Title Name..." required>

                            <div class="mb-3">
                                <label for="articleContent" class="form-label">Article Content</label>
                                <textarea class="form-control" id="articleContent" rows="5" name="articleContent"></textarea>
                            </div>

                            <label for="topic" class="form-label">Topic:</label>
                            <div class="row">
                                <a class="nav-primary dropdown-toggle" href="controller.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Current Topics
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <input type="hidden" name="page" value="blogTopic">
                                <?php
                                for($index=0;$index<count($topics);$index++){
                                    echo "<li><button class= \"dropdown-item\"  type=\"submit\" id=\"name\" name=\"name\" value=\"".$topics[$index]->getName().  "\">" .$topics[$index]->getName()."</button></li>";
                                }
                                ?>
                            </div>
                            <input type="text" class="form-control mb-3" id="topic" name="topic" placeholder="Enter your Topic name..." required>
                            
                            <label for="image" class="form-label">Image:</label>
                            <input type="text" class="form-control mb-3" id="image" name="image" placeholder="Insert Image URL..." required>

                            <label for="image" class="form-label">Sign:</label>
                            <input type="text" class="form-control mb-3" id="username" name="username" placeholder="Sign with your username..." required>
                            
                            <button class="btn btn-primary" type="submit" name="page" value="ArtAdd">Submit</button>
                            
                            </form>
                            
                            <input type="image" src= "/home/student/projects/assign3-song-inc/images/lion.png" alt="">
                    </div>
                </div>      
            </div>
        </div>
    </div>
    

    