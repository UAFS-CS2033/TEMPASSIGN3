<?php
    include_once 'Articles.php';
   

    class ArticlesDAO {


        public function getConnection(){
            $mysqli = new mysqli("127.0.0.1", "bloguser", "blogAssign3", "blogdb");
            if ($mysqli->connect_errno) {
                $mysqli=null;
                
            }
            return $mysqli;
        }


        public function getArtAuthor($userID){

            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT u.firstname, u.lastname FROM articles a JOIN users u ON a.authorID = u.userID WHERE u.userID = ?; ");
            $stmt->bind_param("i", $userID);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            $stmt->close();
            $connection->close();
            return $row;

        }


        public function getArticles(){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM articles"); 
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                $ArticleData = new Articles();
                $ArticleData->load($row);
                $Articles[]=$ArticleData;
            }    
            $stmt->close();
            $connection->close();
            return $Articles;
        }


        public function getTopicArticles($topID){

            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM articles a JOIN topics t on a.catID = t.topID WHERE t.topID = ? "); 
            $stmt->bind_param("i", $topID);
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                $ArticleData = new Articles();
                $ArticleData->load($row);
                $Articles[]=$ArticleData;
            }    
            $stmt->close();
            $connection->close();
            return $Articles;
        }


        public function getAuthorArticles($authID) {
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM articles WHERE authorID = ?"); 
            $stmt->bind_param("i", $authID);
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                $contact = new Articles();
                $contact->load($row);
                $contacts[]=$contact;
            }    
            $stmt->close();
            $connection->close();
            return $contacts;
        }

        public function deleteArticle($artID){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("DELETE FROM articles WHERE artID = ?");
            $stmt->bind_param("i", $artID);
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

        public function addArticle($authorID,$catID,$title,$image,$content){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("INSERT INTO articles (authorID,catID,title,image,content) VALUES(?,?,?,?,?)");
            $stmt->bind_param("iisss",$authorID,$catID,$title,$image,$content);
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

        public function Search($word){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM articles where lower(title) like '%{$word}%' or lower(content) like '%{$word}%'");
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                $contact = new Articles();
                $contact->load($row);
                $contacts[]=$contact;
            }    
            $stmt->close();
            $connection->close();
            return $contacts;
        }

        public function findArticle($id){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM articles where artID = $id");
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            $article = new Articles();
            $article->load($row);   
            $stmt->close();
            $connection->close();
            return $article;
        }

        public function updateArticle($article){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("UPDATE articles set title = ?, content = ? where artID = ?");
            $stmt->bind_param("ssi", $article->getTitle(), $article->getContent(), $article->getArtId());
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }
        
  
    }

?>