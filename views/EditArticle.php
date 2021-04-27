<?php
var_dump($_REQUEST);
$article = $_REQUEST['article'];
$user = $_REQUEST['author'];
$topic = $_REQUEST['topic'];
var_dump($_SESSION);
?>



<div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Posted</h3>
                        <h6>Date Posted: <?php echo $article->getLastModified(); ?></h6>

                        <form action="controller.php" method="POST" >
                        
                            
                            <div class="mb-3">
                            
                            <label for="tiltle" class="form-label">Title</label>
                            <input type="text" name="title" value="<?php echo $article->getTitle(); ?>">

                            </div>
                            <div>
                            <img src="<?php echo $article->getImage()?>" class="card-img-top" alt="..." style="width: 50pc;">                            
                            
                            </div>


                            <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="5"><?php echo $article->getContent(); ?></textarea>



                            </div>
                            <input type="hidden" name="role" value="<?php echo $_SESSION['role'];?>">
                            <input type="hidden" name="id" value="<?php echo $article->getArtId();?>">
                            <input type="hidden" name="page" value="adminEditArticle">
                            <button class="btn btn-success" type="submit" name="submit" value="EDIT" style="width:200px; height: 100px;">Finish Edit</button>
                            <button class="btn btn-danger" type="submit" name="submit" value="DELETE" style="width:200px; height: 100px;">Delete</button>
                            <button class="btn btn-primary" type="submit" name="submit" value="COMMENT" style="width:200px; height: 100px;">Comment</button>
                            <button class="btn btn-secondary" type="submit" name="submit" value="CANCEL" style="width:200px; height: 100px;">Cancel</button>
                        </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>