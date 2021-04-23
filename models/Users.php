<?php
    class Users{
        private $userID;
        private $FName;
        private $LName;
        private $username;
        private $email;
        private $passwd;
        private $role;

        public function load($row){
            $this->setUserID($row['userID']);
            $this->setFName($row['firstname']);
            $this->setLName($row['lastname']);
            $this->setUsername($row['username']);
            $this->setRole($row['email']);
            $this->setEmail($row['role']);
            $this->setPasswd($row['password']);
        }

        public function setUserID($userID){
            $this->userID=$userID;
        }

        public function getUserID(){
            return $this->userID;
        }


        public function setFName($FName){
            $this->FName=$FName;
        }

        public function getFName(){
            return $this->FName;
        }

        public function setLName($LName){
            $this->LName=$LName;
        }

        public function getLName(){
            return $this->LName;
        }
        public function setUsername($username){
            $this->username=$username;
        }

        public function getUsername(){
            return $this->username;
        }
        public function setRole($role){
            $this->role=$role;
        }

        public function getRole(){
            return $this->role;
        }

        public function setEmail($email){
            $this->email=$email;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setPasswd($passwd){
            $this->passwd=$passwd;
        }

        public function getPasswd(){
            return $this->passwd;
        }
    }
?>