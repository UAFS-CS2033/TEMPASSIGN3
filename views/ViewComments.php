<?php

//var_dump($_REQUEST);

$article = $_REQUEST['article'];  
$author = $_REQUEST['author'];
$topic = $_REQUEST['topic'];
$comment = $_REQUEST['comment'];


?>





<div class="row d-flex justify-content-center mt-100 mb-100">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <h4 class="card-title">Latest Comments</h4>
            </div>
            <div class="comment-widgets">
                <?php for($index = 0; $index < count($comment); $index++){?>
                </div> <!-- Comment Row -->
                <div class="d-flex flex-row comment-row">
                    <div class="p-2"><img src="https://static.thenounproject.com/png/630740-200.png" alt="user" width="60" class="rounded-circle"></div>
                    <div class="comment-text active w-100">
                        <h6 class="font-medium">Unknown User <?php echo $comment[$index]->getLastModified() ?> </h6> <span class="m-b-15 d-block"> <?php echo $comment[$index]->getContent() ?> </span>
                        
                    </div>
                <?php } ?>
            </div> <!-- Card -->
        </div>
    </div>
</div>


