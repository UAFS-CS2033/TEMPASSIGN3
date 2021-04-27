<?php
    include_once "controllers/ControllerAction.php";
    include_once "controllers/ContactControllers.php";
    include_once "models/UsersDAO.php";
    include_once "models/ArticlesDAO.php";
    include_once "models/CommentsDAO.php";
    include_once "models/TopicsDAO.php";

    class FrontController { 
        private $controllers;
        

        public function __construct(){
            $this->showErrors(0);
            $this->controllers = $this->loadControllers();
        }

        public function run(){
            session_start();

            //***** 1. Get Request Method and Page Variable *****/
            $method = $_SERVER['REQUEST_METHOD'];
            $page = $_REQUEST['page'];
        
            //***** 2. Route the Request to the Controller Based on Method and Page *** */
            $controller = $this->controllers[$method.$page];
            
            //** 3. Check Security Access ***/
            $controller = $this->securityCheck($controller);

            //** 4. Execute the Controller */
            if($method=='GET'){
                $content=$controller->processGET();
            }
            if($method=='POST'){
                $controller->processPOST();
            }

            //**** 5. Render Page Template */
            include "template/template.php";
        }

        private function loadControllers(){
        /******************************************************
         * Register the Controllers with the Front Controller *
         ******************************************************/
            $controllers["GET"."add"] = new AddUsers();
            $controllers["POST"."add"] = new AddUsers();
            $controllers["GET"."delete"] = new DeleteUsers();
            $controllers["POST"."delete"] = new DeleteUsers();
            $controllers["GET"."login"] = new Login();
            $controllers["POST"."login"] = new Login();
            $controllers["GET"."home"] = new Home();
            $controllers["POST"."home"] = new Home();
            $controllers["GET"."about"] = new About();
            $controllers["GET"."blogTopic"] = new Topic();
            $controllers["GET"."admin"] = new Admin();
            $controllers["GET"."author"] = new Author();  
            $controllers["GET"."ArtAdd"] = new addArticle(); 
            $controllers["POST"."ArtAdd"] = new addArticle();
            $controllers["GET"."ArtManage"] = new manageArticle();
            $controllers["GET"."AuthEdit"] = new AuthorEditArticle();
            $controllers["POST"."AuthEdit"] = new AuthorEditArticle();
            $controllers["GET"."adminArticle"] = new adminArticle();
            $controllers["GET"."adminUsers"] = new adminUsers();
            $controllers["GET"."adminEditUser"] = new adminEditUser();
            $controllers["POST"."adminEditUser"] =  new adminEditUser(); 
            $controllers["GET"."adminTopic"] = new adminTopic();
            $controllers["POST"."adminTopic"] =  new adminTopic(); 
            $controllers["GET"."adminEditTopic"]= new adminEditTopic();
            $controllers["POST"."adminEditTopic"] =  new adminEditTopic();
            $controllers["GET"."searchArticle"]= new searchArticle();
            $controllers["GET"."adminEditArticle"]= new adminEditArticle();
            $controllers["POST"."adminEditArticle"] =  new adminEditArticle(); 
            $controllers["GET"."AuthEdit"] = new AuthorEditArticle();
            $controllers["POST"."AuthEdit"] = new AuthorEditArticle();
            $controllers["GET"."adminEditComments"]= new adminEditComments();
            $controllers["POST"."adminEditComments"] =  new adminEditComments(); 
            $controllers["GET"."ReadArticle"] = new ReadArticle();
            $controllers["POST"."ReadArticle"] = new ReadArticle();
            $controllers["GET"."ViewComments"] = new ViewComments();
            $controllers["POST"."ViewComments"] = new ViewComments();
            $controllers["GET"."search"] = new search();


            

            return $controllers;
        }

        private function securityCheck($controller){
        /******************************************************
         * Check Access restrictions for selected controller  *
         ******************************************************/
       
         $role = $_SESSION['role'];

         if($controller->getAccess() == "admin"){
            if(!isset($_SESSION['loggedin'])){
                //*** Not Logged In ****/

                $controller = $this->controllers["GET"."login"];
                
            }elseif ($role != "admin") {
                $controller = $this->controllers["GET"."login"];
                
            }
        }
        
        

        if($controller->getAccess() == "author"){
           if(!isset($_SESSION['loggedin'])){
               //*** Not Logged In ****/

               $controller = $this->controllers["GET"."login"];
               
           }elseif ((isset($role) != "author") || (isset($role) != "admin")) {
              $controller = $this->controllers["GET"."home"];
               
           }
       }
       

       if($controller->getAccess() == "user"){
          if(!isset($_SESSION['loggedin'])){
              //*** Not Logged In ****/

              $controller = $this->controllers["GET"."login"];
              
          }elseif ((isset($role)  != "admin") || (isset($role)   != "author") || (isset($role)    != "user")) {
              $controller = $this->controllers["GET"."login"];
              
          }
      }
                
            
            return $controller;
        }

        private function showErrors($debug){
            if($debug==1){
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);
            }
        }
    }

    $controller = new FrontController();
    $controller->run();
?>