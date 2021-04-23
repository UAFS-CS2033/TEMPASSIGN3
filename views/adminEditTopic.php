<?php 
   
   $topic = $_REQUEST['topic'];
  
?>
    <div class="container" >
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit User info</h5>
                        <p class="card-text"></p>
                        <form action="controller.php" method="POST">
                           <input type="hidden" name="page" value="adminEditTopic">
                           <input type="hidden" name="edit" value = "editPage">
                           <input type="hidden" name="id" value="<?php echo $topic['topID']?>">
                            <label for="role" class="form-label">Name</label>
                            <input type="text" class="form-control mb-3" name="name" value="<?php echo $topic['name']; ?>">
                            <label for="email" class="form-label">Description</label>
                            <input type="text" class="form-control mb-3" name="desc" value="<?php echo $topic['description'] ?>">
                            <button class="btn btn-primary" type="submit" name="submit" value="CONFIRM" >Confirm</button>
                            <button class="btn btn-primary" type="submit" name="submit" value="CANCEL" >Cancel</button>
                        </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

