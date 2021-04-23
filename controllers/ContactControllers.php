<?php

    include_once 'models/Articles.php';
    include_once 'models/ArticlesDAO.php';
    include_once 'models/Comments.php';
    include_once 'models/CommentsDAO.php';
    include_once 'models/Topics.php';
    include_once 'models/TopicsDAO.php';

    class AddUsers implements ControllerAction{

        function processGET(){
            return "views/addUsers.php";
        }

        function processPOST(){
 

            $username=$_POST['username'];
            $email=$_POST['email'];
            $passwd=$_POST['passwd'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $users = new Users();
            $users->setUsername($username);
            $users->setEmail($email);
            $users->setPasswd($passwd);
            $users->setFName($fname);
            $users->setLName($lname); 
            $users->setRole('author');                    
            $contactDAO = new UsersDAO();
            $contactDAO->addContact($users);
            header("Location: controller.php?page=login");
            exit;
       
       

    }

        function getAccess(){
            return "PUBLIC";
        }      

    }




    class Login implements ControllerAction{

        function processGET(){
            return "views/login.php";
        }

        function processPOST(){
            
 
            $username=$_POST['username'];
            $passwd=$_POST['passwd'];
            $UsersDAO = new UsersDAO();
            $found=$UsersDAO->authenticate($username,$passwd);
            $id = $found['userID'];
            $role = $found['role'];
            if($found==null){
                $nextView="Location: controller.php?page=login";
            }else{
                
                $_SESSION['id']=$found['userID'];
                $_SESSION['role']=$found['role'];
                $_SESSION['loggedin']='TRUE';
               
                $nextView="Location: controller.php?page=home";
            }
            header($nextView);
            exit; 
            
            
            
            
        }
        function getAccess(){
            return "PUBLIC";
        }

    }

    class Home implements ControllerAction{

        function processGET(){

            $ArticleDao= new ArticlesDAO();
            $ArticleData = $ArticleDao->getArticles();
    
            $ArticleData2 = $ArticleDao->getArtAuthor(9);
    
    
            $_REQUEST['ArticleData']=$ArticleData;
            $_REQUEST['ArticleData2']=$ArticleData2;
                
                return "views/home.php";
            }
    
            function processPOST(){

            $id = $_POST['id'];


            header("Location: controller.php?page=ReadArticle&id=$id");
            exit;
                return;
            }
    
            function getAccess(){
                return "PUBLIC";
            } 


    }


    class ReadArticle implements ControllerAction{

        function processGET(){

            $id = $_GET['id'];
            $ArticleDAO = new ArticlesDAO();
            $article = $ArticleDAO->findArticle($id);
            $_REQUEST['article']=$article;

            $commentsDAO = new CommentsDAO();
            $comment = $commentsDAO->getArticleComments($id);
            $_REQUEST['comment'] =$comment;
    
            $a = $article->getAuthorId();
            $userDAO = new UsersDAO();
            $author = $userDAO->findUser($a);
            $_REQUEST['author']=$author;
    
            $t = $article->getCatId();
            $topicDAO = new TopicsDAO();
            $topic = $topicDAO->findTopic($t);
            $_REQUEST['topic']=$topic;
            
            return "views/ReadArticle.php";
        }

        function processPOST(){

            $id = $_POST['id'];


            header("Location: controller.php?page=ViewComments&id=$id");
            exit;
            return;
        }

        function getAccess(){
            return "PUBLIC";
        }

    }

    class ViewComments implements ControllerAction{

        function processGET(){

            $id = $_GET['id'];

            $commentsDAO = new CommentsDAO();
            $comment = $commentsDAO->getArticleComments($id);
            $_REQUEST['comment'] =$comment;

            $ArticleDAO = new ArticlesDAO();
            $article = $ArticleDAO->findArticle($id);
            $_REQUEST['article']=$article;
    
            $a = $article->getAuthorId();
            $userDAO = new UsersDAO();
            $author = $userDAO->findUser($a);
            $_REQUEST['author']=$author;

            
            
            return "views/ViewComments.php";
        }

        function processPOST(){
            return;
        }

        function getAccess(){
            return "PUBLIC";
        }

    }

    class About implements ControllerAction{

        function processGET(){
            return "views/about.php";
        }

        function processPOST(){
            return;
        }

        function getAccess(){
            return "PUBLIC";
        }

    }


    class Topic implements ControllerAction{

        function processGET(){

            $id = $_GET['name'];

            $ArticleDAO = new ArticlesDAO();
            $article = $ArticleDAO->getTopicArticles($id);
            $_REQUEST['article']=$article;

            
            return "views/blog.php";
        }

        function processPOST(){

            return;
        }

        function getAccess(){
            return "PUBLIC";
        }

    }


    class Author implements ControllerAction{
        function processGET(){
            return "views/AuthorHome.php";

        }

        function processPOST(){
            return;

        }

        function getAccess(){
            return "author";

        }
    }    
    class Admin implements ControllerAction{

        function processGET(){

            
            return "views/admin.php";
        }

        function processPOST(){

            return;
        }

        function getAccess(){
            return "admin";
        }

    }

    class addArticle implements ControllerAction{
        function processGET(){
            return "views/addArticle.php";

        }

        function processPOST(){
            $topicName = $_POST['topic'];
            $content = $_POST['articleContent'];
            $title = $_POST['title'];
            $image = $_POST['image'];
            $username = $_POST['username'];
            $userDAO = new UsersDAO();
            $authID = $userDAO->getUserID($username);
            $topicDAO = new TopicsDAO();
            $topicID = $topicDAO->getTopicID($topicName);
            if($topicID==null){
                $topicDAO = new TopicsDAO();
                $topicDAO ->addTopic($topicName);
                $topicID=$topicDAO->getTopicID($topicName);
            }
            $articleDAO = new ArticlesDAO();
            $articleDAO->addArticle($authID,$topicID,$title,$image,$content);
            header("Location: controller.php?page=author");
            exit;

        }

        function getAccess(){
            return "PROTECTED";

        }
    }
    class manageArticle implements ControllerAction{
        function processGET(){
            $articleDAO = new ArticlesDAO();
            //Still trying to figure out how to get the userID
            $authorID = 1;
            $authorArticles = $articleDAO->getAuthorArticles($authorID);
            $_REQUEST['authorArticles']=$authorArticles;

            
            return "views/manageArticle.php";

        }

        function processPOST(){
            return;

        }

        function getAccess(){
            return "PUBLIC";

        }
    }

    class AuthorEditArticle implements ControllerAction {
        function processGET(){
            $artID = $_GET['artID'];
            $articleDAO = new ArticlesDAO();
            $authArticle = $articleDAO->findArticle($artID);
            $_REQUEST['authArticle']=$authArticle;

            $a = $authArticle->getAuthorId();
            $userDAO = new UsersDAO();
            $author = $userDAO->findUser($a);
            $_REQUEST['author']=$author;

            $topic = $authArticle->getCatId();
            $topicDAO = new TopicsDAO();
            $topicID = $topicDAO->findTopic($topic);
            $_REQUEST['topicID']=$topicID;
            return "views/AuthorEditArticle.php";

        }

        function processPOST(){
            $submit = $_POST['submit'];
            $articleDAO = new ArticlesDAO();

            if($submit == 'DELETE'){
            
                $articleDAO->deleteArticle($_POST['id']);

            }else if($submit == 'EDIT'){
                $article = new Articles();
                $article->setTitle($_POST['title']);
                $article->setContent($_POST['content']);
                $article->setArtId($_POST['id']);
                $articleDAO->updateArticle($article);
            }


            header("Location: controller.php?page=ArtManage");
            exit;

        }

        function getAccess(){
            return "PUBLIC";

        }
    }

/* ***************************************************
*****Admin
***************************************************** */


//New

    class adminArticle implements ControllerAction{

        function processGET(){
           
            return "views/adminArticles.php";
        }

        function processPOST(){
            return;

        }

        function getAccess(){
            return "PUBLIC";
        }

    }
//New
    class searchArticle implements ControllerAction{

        function processGET(){

            $search = $_GET['search'];
            $ArticlesDAO = new ArticlesDAO();
            $found=$ArticlesDAO->Search($search);
            $_REQUEST['found']=$found;
            return "views/searchArticle.php";
        }

        function processPOST(){
            return;
            

        }

        function getAccess(){
            return "PUBLIC";
        }
    }

//New

class AdminEditArticle implements ControllerAction{

    function processGET(){
        $id = $_GET['id'];
        $ArticleDAO = new ArticlesDAO();
        $article = $ArticleDAO->findArticle($id);
        $_REQUEST['article']=$article;

        $a = $article->getAuthorId();
        $userDAO = new UsersDAO();
        $author = $userDAO->findUser($a);
        $_REQUEST['author']=$author;

        $t = $article->getCatId();
        $topicDAO = new TopicsDAO();
        $topic = $topicDAO->findTopic($t);
        $_REQUEST['topic']=$topic;

        return "views/EditArticle.php";
    }

    function processPOST(){
        $submit = $_POST['submit'];
        $articleDAO = new ArticlesDAO();


        if($submit == 'DELETE'){
            
            $articleDAO->deleteArticle($_POST['id']);

        }else if($submit == 'EDIT'){
            $article = new Articles();
            $article->setTitle($_POST['title']);
            $article->setContent($_POST['content']);
            $article->setArtId($_POST['id']);
            $articleDAO->updateArticle($article);
        }else if($submit == 'COMMENT'){
            $id = $_POST['id'];
            
            header("Location: controller.php?page=adminEditComments&id=$id");
            exit;

        }


        header("Location: controller.php?page=searchArticle");
        exit;

        

    }

    function getAccess(){
        return "PUBLIC";
    }
}

    class adminEditComments implements ControllerAction{

        function processGET(){
            $id = $_GET['id'];
            $commentDAO = new CommentsDAO();
            $c = $commentDAO->getCommentsArticle($id);
            $_REQUEST['comment']=$c;
            return "views/adminEditComments.php";
        }

        function processPOST(){
           $submit = $_POST['submit'];
           
           if($submit =='DELETE'){
               $commentDAO = new CommentsDAO();
               $commentDAO->deleteComment($_POST['id']);
               header("Location: controller.php?page=adminEditComments");
               exit;
               

           }
           header("Location: controller.php?page=searchArticle");
           exit;
        }

        function getAccess(){
            return "PUBLIC";
        }

}

    class adminUsers implements ControllerAction{

        function processGET(){
            $contactDAO = new UsersDAO();
            $contacts = $contactDAO->getUsers();
            $_REQUEST['contacts']=$contacts;
            return "views/adminUsers.php";
        }

        function processPOST(){
            return;
        }

        function getAccess(){
            return "PUBLIC";
        }

    }
    class DeleteUsers implements ControllerAction{

        function processGET(){
            $userID = $_GET['id'];
            $user = new UsersDAO();
            $getUser = $user->findUser($userID);
            $_REQUEST['getUser']=$getUser;
            return 'views/delUser.php';

        }

        function processPOST(){
            $submit = $_POST['submit'];
            if($submit=='CONFIRM'){
                $contactDAO = new UsersDAO();
                $contactDAO->deleteContact($_POST['id']);
            }
            header("Location: controller.php?page=adminUsers");
            exit;
        }

        function getAccess(){
            return "PUBLIC";
        }

    }


    class adminEditUser implements ControllerAction{

        function processGET(){
          
            $userID = $_GET['id'];
            $user = new UsersDAO();
            $getUser = $user->findUser($userID);
            $_REQUEST['getUser']=$getUser;
            return 'views/adminEditUser.php';

        }

        function processPOST(){
            
            $submit=$_POST['submit'];
            if($submit=='CONFIRM'){
                $user = new Users();
                $user->setFName($_POST['fname']);
                $user->setLName($_POST['lname']);
                $user->setEmail($_POST['email']);
                $user->setPasswd($_POST['password']);
                $user->setUsername($_POST['username']);
                $user->setRole($_POST['role']);
                $user->setUserID($_POST['id']);
                $contactDAO = new UsersDAO();
                $contactDAO->updateUser($user);
            }
            header("Location: controller.php?page=adminUsers");
            exit;
        }

        function getAccess(){
            return "PUBLIC";
        }

    }

    class adminTopic implements ControllerAction{

        function processGET(){

            $topicDAO = new TopicsDAO();
            $topic = $topicDAO->getTopics();
            $_REQUEST['topic']=$topic;

            return 'views/adminTopic.php';

        }

        function processPOST(){
            $topicDAO = new TopicsDAO();
            $topicDAO->deleteTopics($_POST['id']);   

            header("Location: controller.php?page=adminTopic");
            exit;
        }

        function getAccess(){
            return "PUBLIC";
        }

    }

    class adminEditTopic implements ControllerAction{

        function processGET(){   

            $topicDao = new TopicsDAO();
            $topic = $topicDao->findTopic($_GET['id']);
            $_REQUEST['topic']=$topic;

            
            return 'views/adminEditTopic.php';

        }

        function processPOST(){

        
        $a =$_POST['id'];
        $key = $_POST['edit'];

        if($key == 'edit'){
            header("Location: controller.php?page=adminEditTopic&id=$a");
        }else if($key == 'editPage'){
            $edit = $_POST['submit'];

            if($edit == 'CONFIRM'){
                $topic = new Topics();
                $topic->setName($_POST['name']);
                $topic->setDescription($_POST['desc']);
                $topic->setTopId($_POST['id']);
                $topicDAO = new TopicsDAO();
                $topicDAO->updateTopic($topic);

            }
                header("Location: controller.php?page=adminTopic");
        }
        exit;
        }

        function getAccess(){
            return "PUBLIC";
        }

    }

?>