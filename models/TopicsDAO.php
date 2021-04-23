<?php
    include_once 'Topics.php';
    

    class TopicsDAO {


        public function getConnection(){
            $mysqli = new mysqli("127.0.0.1", "bloguser", "blogAssign3", "blogdb");
            if ($mysqli->connect_errno) {
                $mysqli=null;
                
            }
            return $mysqli;
        }


        public function getTopics(){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM topics ORDER BY name ASC"); 
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                $contact = new Topics();
                $contact->load($row);
                $contacts[]=$contact;
            }    
            $stmt->close();
            $connection->close();
            return $contacts;
        }

        public function deleteTopics($topID){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("DELETE FROM topics WHERE topID = ?");
            $stmt->bind_param("i", $topID);
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

        public function updateTopic($topic){
            $connection = $this->getConnection();
            $stmt = $connection->prepare("UPDATE topics set name = ?, description = ? where topID = ?");
            $stmt->bind_param("ssi", $topic->getName(),$topic->getDescription(),$topic->getTopId());
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

        public function findTopic($id){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM topics WHERE topID = ?"); 
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            $stmt->close();
            $connection->close();
            return $row;
        }

        public function getTopicID($topicName){
            $connection = $this->getConnection();
            $stmt = $connection->prepare("SELECT topID FROM topics WHERE name = ?");
            $stmt->bind_param("s", $topicName);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();
            $connection->close();
            return $result;
        }

        public function addTopic($topicName){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("INSERT INTO topics(name,description) VALUES (?,'Added by Author')");
            $stmt->bind_param("s", $topicName);
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

    }





?>
