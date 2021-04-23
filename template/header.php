<?php
   include_once "models/TopicsDAO.php";
      if(isset($_SESSION['loggedin'])){
        $status="Logged In";
        $class="disabled";
      }else{
        $status="Login";
        $class="";
      }
    $topicsDAO = new TopicsDAO();
    $topics = $topicsDAO->getTopics();


?>
<header>


<div >
    <h1 class="bg-dark text-center text-white"  style="align-items:center; font-size: 1500%; text-align:start;"> SIP & BLOG
      <img src="images/LOGO.PNG"  alt="" height = "350" width = "350" class="center" style="align-items: center; text-align:end;" >
    </div>
    <div>
    </div>

 <!-- <h3 class="text-center">SIP & BLOG</h3> -->

  <nav class="navbar navbar-expand-lg navbar-light"  style="background-color:white ">
  <div class="container-fluid">
    <a class="nav-link active" aria-current="page" style="font-size: 1.5rem;" href="controller.php?page=home">Home</a>
    <a class="nav-link active" aria-current="page" style="font-size: 1.5rem;" href="controller.php?page=about">About</a>
    <a class="nav-link active" aria-current="page" style="font-size: 1.5rem;" href="controller.php?page=admin">Admin</a>
    <a class="nav-link active" aria-current="page" style="font-size: 1.5rem;" href="controller.php?page=author">Author</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-primary dropdown-toggle" style="font-size: 1.5rem;" href="controller.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Topics
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <form action="controller.php" method="GET">
          <input type="hidden" name="page" value="blogTopic">
          <?php
          for($index=0;$index<count($topics);$index++){
            echo "<li><button class= \"dropdown-item\"  type=\"submit\" id=\"name\" name=\"name\" value=\"".$topics[$index]->getTopId().  "\">" .$topics[$index]->getName()."</button></li>";

        }
          ?>
            </form>
          </ul>
        </li>
      </ul>
      
      <a class="btn btn-primary <?php echo $class; ?>" href="controller.php?page=login"><?php echo $status; ?></a> 
      
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
  </div>  
  </div>
</nav>
  
