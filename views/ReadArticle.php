<?php

//var_dump($_REQUEST);

$article = $_REQUEST['article'];  
$author = $_REQUEST['author'];
$topic = $_REQUEST['topic'];
$comment = $_REQUEST['comment'];

?>


<!-- ARTICLE PAGE -->
<form action="controller.php" method="POST">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


<h1 style="text-align: center;"> <?php echo $article->getTitle() ?> </h1>

<h2 style="text-align: center;">Author Name:  <?php echo $author['firstname']."  ".$author['lastname']  ?> </h2>
<h2 style="text-align: center;">Topic:  <?php echo $topic['name']  ?> </h2>

<div style="text-align: center;">
<img src="<?php echo $article->getImage(); ?> " alt="" class="center" >
</div>

<div class="container">
<p><?php echo $article->getContent() ?> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat reiciendis magni esse laboriosam, vero obcaecati officiis assumenda, repudiandae, temporibus dolorem inventore! Nisi aliquam error suscipit modi necessitatibus atque libero incidunt! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi assumenda quis quas necessitatibus fuga amet explicabo fugiat quae ratione aut, totam dignissimos omnis commodi eum ad, illum debitis eligendi nisi? Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto aperiam pariatur nemo quae sint illo perspiciatis. Neque modi maiores nostrum reiciendis adipisci, similique doloremque, natus et, perspiciatis ullam eos cumque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt alias aspernatur eum delectus earum itaque amet voluptatibus quasi, repellendus suscipit quibusdam in non nulla repellat ipsam quaerat eius blanditiis voluptatem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam asperiores fuga est quasi pariatur distinctio commodi omnis labore, consequuntur error iste officiis fugiat iure eligendi minima aliquid vero ab recusandae! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id cumque aperiam aspernatur error numquam sapiente ab totam perspiciatis nobis dolorum nihil, quas, debitis, nemo itaque tempore nam? Molestiae, eveniet earum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ex recusandae quaerat tempore velit, repellat deserunt quis, ullam unde accusantium enim provident, veniam molestiae repudiandae! Nostrum soluta architecto ad necessitatibus? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus officia alias, laudantium non dolor doloremque ipsa temporibus, voluptatum expedita labore quas similique blanditiis omnis totam aliquam? Ducimus temporibus nihil iure? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda accusamus, dignissimos quo aut quaerat tempore laudantium, delectus in perferendis rem expedita aspernatur nesciunt, laboriosam ratione porro reprehenderit? Nesciunt, dolore modi. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti nihil asperiores voluptatibus assumenda, adipisci illo perspiciatis numquam? Quod, nulla in dolorum sed quia explicabo impedit illo quaerat ipsam adipisci sequi. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium doloribus molestiae asperiores odio, rem, officia repudiandae commodi voluptate adipisci cumque iste. Dolor odio rerum voluptas praesentium eveniet iure libero repudiandae.</p>

<input type="hidden" name="page" value="ReadArticle">
<button type="submit" class="btn btn-primary btn-lg" name="id" value="<?php echo $article->getArtId() ?>"> View Comment</button>

</div> 
</body>
</html>

</form>


<!-- COMMENT SECTION -->

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
                        <h6 class="font-medium"> Last Modified: <?php echo $comment[$index]->getLastModified() ?> </h6> <span class="m-b-15 d-block"> <?php echo $comment[$index]->getContent() ?> </span> 
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary btn-lg" name="id" value="<?php echo $article->getArtId() ?>">Comment</button>
                
            </div> <!-- Card -->
        </div>
    </div>
</div>

