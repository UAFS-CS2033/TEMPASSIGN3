<?php 
   $authorArticles = $_REQUEST['authorArticles'];
?>
<div class="container">
        <div class="col">
            <form action="controller.php" method="GET">
            <button class="btn btn-primary" type="submit" name="AuthEdit" value="AuthEdit">Edit Article</button>
            <table class="table table-bordered table-striped">
                <thead><tr><th>Article ID</th><th>Title</th><th></th></tr></thead>
                <tbody>
                    <?php
                        for($index=0;$index<count($authorArticles);$index++){
                            echo "<tr><td><input type=\"radio\" name=\"artId\" value=\"".$authorArticles[$index]->getArtId()."\"></td>";
                            echo "<td>".$authorArticles[$index]->getTitle()."</td>";
                        }
                    ?>
                </tbody>        
            </table>  
            </form>
        </div>
    </div>