<?php
$ArticleData = $_REQUEST['ArticleData'];
$ArticleData2 = $_REQUEST['ArticleData2'];

$ArticleDaotest = new ArticlesDAO();


$rowCount = 0;
$found = $_REQUEST['found'];


?>


<body style="background-color:lightslategray ;">
    
<form action="controller.php" method="POST">
<!-- START OF HTML CODE -->

    <div class="container">
    <div class="row-fluid ">
    </div><div class="row">
    <!-- my php code which uses x-path to get results from SQL query. -->
    <?php for($index = 0; $index < count($found); $index++){?>

        <div class="col-md-3 ">
            <div class="card-columns-fluid">
                <div class="card  bg-light" style = "width: 20rem; " >
                    <img class="card-img-top"  src=" <?php echo $found[$index]->getImage(); ?>" >
                    <div class="card-body" >
                        <h5 class="card-title"><b><?php echo $found[$index]->getTitle(); ?></b></h5>
                        <input type="hidden" name="page" value="home">
                        <button type="submit" class="btn btn-primary btn-lg" name="id" value="<?php echo $found[$index]->getArtId()?>"> Read Articles</button>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>

    </div>
</div> <!--container div  -->

</form>

</body>
