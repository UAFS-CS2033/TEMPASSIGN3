<?php

$found = $_REQUEST['found'];

?>
<div class="container" style="width: 100%">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Articles Search</h5> 
               
                    <form action="controller.php" method="GET" class="text-center">

                        <button class="btn btn-danger" type="submit" name="page" value="adminEditArticle" style="width:200px; height: 100px;">Make Change</button>
                    <table class="table table-bordered table-striped">
                    <thead class="table table-hover bg-primary"> <tr><th>SELECT</th><th>BLOG</th></tr></thead>
                        <tbody>

                        <?php  for($index=0;$index<count($found);$index++){ ?>
                    
                        <tr><td><input type="radio" name="id" value="<?php echo $found[$index]->getArtId();?>"></td>
                        <td>
                        <div class="card" style="width: 18rem;">
                        <img src="<?php echo $found[$index]->getImage()?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $found[$index]->getTitle();?></h5>

                       
                        </div>
                    </div></td></tr>
                
                 <?php   }?>
                    
                    


                    

                        </tbody>
                    
                    </table>

                    </form>
                <h5 class="card-title"></h5> 
                </div>
             </div>       
        </div>

        