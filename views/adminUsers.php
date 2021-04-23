<?php 
   $contacts = $_REQUEST['contacts'];
   $page = $_REQUEST['page'];
?>


<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Make Change</h1> 
                    <form action="controller.php" method="GET">

                    <table class="table table-bordered table-striped">
                    <thead class="table table-hover bg-primary"><tr><th>Contact ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>User Name</th><th>Role</th><th>Password</th></tr></thead>
                    <tbody>
                    <?php

                        for($index=0;$index<count($contacts);$index++){
                            echo "<tr><td><input type=\"radio\" name=\"id\" value=\"".$contacts[$index]->getUserID()."\"></td>";
                            echo "<td>".$contacts[$index]->getFname()."</td>";
                            echo "<td>".$contacts[$index]->getLname()."</td>";
                            echo "<td>".$contacts[$index]->getRole()."</td>";                           
                            echo "<td>".$contacts[$index]->getUsername()."</td>";
                            echo "<td>".$contacts[$index]->getEmail()."</td>";
                            echo "<td>".$contacts[$index]->getPasswd()."</td></tr>";
                        }
                    ?>
                    </tbody>        
                    </table>  
                    <button class="btn btn-danger btn-lg btn-block" type="submit" name="page" value="delete" style="width: 120px; height: 100px">Delete</button>
                    <button class="btn btn-warning btn-lg btn-block" type="submit" name="page" value="adminEditUser" style="width: 120px; height: 100px">Edit</button>
                   
                    </form>
                        
                    </div>
                </div>      
            </div>
        </div>
    </div>
