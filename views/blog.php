<?php

//var_dump($_REQUEST);

$Article = $_REQUEST['article'];

$page = $_REQUEST['page'];

$rowCount = 0;

var_dump($_GET);
session_start();
$_SESSION['id']=$_GET['id'];
$_SESSION['role']=$_GET['role'];

?>

<form action="controller.php" method="POST">
<!-- START OF HTML CODE -->


    <div class="container">
    <div class="row-fluid ">
    </div><div class="row">
    <!-- my php code which uses x-path to get results from SQL query. -->
    <?php for($index = 0; $index < count($Article); $index++){?>

        <div class="col-md-3 ">
            <div class="card-columns-fluid">
                <div class="card  bg-light" style = "width: 20rem; " >
                    <img class="card-img-top"  src=" <?php echo $Article[$index]->getImage(); ?>" >
                    <div class="card-body" >
                        <h5 class="card-title"><b><?php echo $Article[$index]->getTitle(); ?></b></h5>
                        <input type="hidden" name="page" value="home">
                        <button type="submit" class="btn btn-primary btn-lg" name="id" value="<?php echo $Article[$index]->getArtId()?>"> Read Articles</button>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>

    </div>
</div> <!--container div  -->

</form>








