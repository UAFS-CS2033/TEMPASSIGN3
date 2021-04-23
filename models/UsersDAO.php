<?php
    include_once 'Users.php';

    class UsersDAO {


        public function getConnection(){
            $mysqli = new mysqli("127.0.0.1", "bloguser", "blogAssign3", "blogdb");
            if ($mysqli->connect_errno) {
                $mysqli=null;
                
            }
            return $mysqli;
        }

        public function addContact($contact){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("INSERT INTO users (username, lastname, firstname, password, email,role ) VALUES (?, ?, ?, ?, ?,?)");
            $stmt->bind_param("ssssss", $contact->getUsername(), $contact->getLName(), $contact->getFName(), $contact->getPasswd(), $contact->getEmail(), $contact->getRole());
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

        public function deleteContact($userID){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("DELETE FROM users WHERE userID = ?");
            $stmt->bind_param("i", $userID);
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

        public function getUsers(){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM users"); 
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                $contact = new Users();
                $contact->load($row);
                $contacts[]=$contact;
            }    
            $stmt->close();
            $connection->close();
            return $contacts;
        }

        public function findUser($id){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM users WHERE userID = ?"); 
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            $stmt->close();
            $connection->close();
            return $row;
        }

        public function authenticate($username, $passwd){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
            $stmt->bind_param("ss",$username,$passwd); 
            $stmt->execute();
            $result = $stmt->get_result();
            $found=$result->fetch_assoc();
            $stmt->close();
            $connection->close();
 //           var_dump($found);
            return $found;
        }
        public function updateUser($contact){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("UPDATE users SET firstname = ? , lastname = ? , email = ? , username = ? , password = ? , role = ? WHERE userID = ?");
            $stmt->bind_param("ssssssi", $contact->getFname(), $contact->getLName(), $contact->getEmail(), $contact->getUsername(), $contact->getPasswd(), $contact->getRole(), $contact->getUserID());
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

        public function getUserID($username){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT userID FROM users WHERE username=?"); 
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            $stmt->close();
            $connection->close();
            return $row;
        }


    }
?>
