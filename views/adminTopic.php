<?php
    $topic = $_REQUEST['topic'];
    
    
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Make Change</h1> 
                    <form action="controller.php" method="POST">
                    

                    <table class="table table-bordered table-striped">
                    <thead class="table table-hover bg-primary"><tr><th>Select</th><th>Topic Name</th><th>Topic Description</th></tr></thead>
                    <tbody>
                    <input type="hidden" name="edit" value="edit">
                   
                    <?php

                        for($index=0;$index<count($topic);$index++){
                            echo "<tr><td><input type=\"radio\" name=\"id\" value=\"".$topic[$index]->getTopId()."\"></td>";
                            echo "<td>".$topic[$index]->getName()."</td>";
                            echo "<td>".$topic[$index]->getDescription()."</td></tr>";


                        }
                    ?>
                    </tbody>        
                    </table>  
                    
                   
                    
                    <button class=" btn btn-danger btn-lg btn-block" type="submit" name="page" value="adminTopic" style="width: 120px; height: 100px">Delete</button>
                    <button class="btn btn-warning btn-lg btn-block" type="submit" name="page" value="adminEditTopic" style="width: 120px; height: 100px">Edit</button>

                    
                   
                    </form>
                        
                    </div>
                </div>      
            </div>
        </div>
    </div>