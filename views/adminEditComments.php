<?php


$com = $_REQUEST['comment'];



?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Make Change</h1> 
                    <form action="controller.php" method="POST">
                    

                    <table class="table table-bordered table-striped">
                    <thead class="table table-hover bg-primary"> <tr><th>SELECT</th><th>COMMENT</th></tr></thead>
                    <tbody>
                    <input type="hidden" name="page" value="adminEditComments">
                   
                   

                    <?php for($index=0;$index<count($com);$index++){ ?>
                        <tr><td><input type="radio" name="id" value="<?php echo $com[$index]->getComId();?>"></td>

                        <td> <?php echo $com[$index]->getContent(); ?></td></tr>


                       <?php }?>
                    
                    </tbody>        
                    </table>  
                    
                   
                    <input type="hidden" name="role" value="<?php echo $_SESSION['role']; ?>"> 
                    <button class=" btn btn-danger btn-lg btn-block" type="submit" name="submit" value="DELETE" style="width: 120px; height: 100px">DELETE</button>
                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="CANCEL" style="width: 120px; height: 100px">CANCEL</button>

                   
                    </form>
                        
                    </div>
                </div>      
            </div>
        </div>
    </div>