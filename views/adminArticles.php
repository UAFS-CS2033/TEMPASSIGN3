
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Articles Search</h5> 
                    <form action="controller.php" method="GET" class="text-center">
                            <input type="hidden" name="key" value="search">
                             
                            <div class="row">
                                <div class="col">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="search">
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary" type="submit" name="page" value="searchArticle" style="width:200px">Search</button>  
                                </div>
                            </div>                                                
                    </form>
                <h5 class="card-title"></h5> 
                </div>
             </div>       
        </div>


        <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Create Articles</h5> 
                    <form action="controller.php" method="GET" class="text-center">
                            
                                <div class="col">
                                    <button class="btn btn-success" type="submit" name="page" value="ArtAdd" style="width:200px">Create new Post</button>  
                                </div>
                            </div>                                                
                    </form>
                <h5 class="card-title"></h5> 
                </div>
             </div>       
        </div>








