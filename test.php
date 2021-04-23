<?php 

    include_once 'Articles.php';
    include_once 'ArtclesDAO.php';

    ini_set('display_errors',1);
    $ArticlesDAO = new ArticlesDAO();
    $found=$ArticlesDAO->Search('d');
    echo $found[4]->getTitle();

?>