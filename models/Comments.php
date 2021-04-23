<?php
    class Comments{

        private $comId;
        private $authorId;
        private $artId;
        private $content;
        private $lastModified;

        public function load($row){
            $this->setComId($row['comID']);
            $this->setauthorId($row['authorID']);
            $this->setartId($row["artID"]);
            $this->setContent($row["content"]);
            $this->setLastModified($row['lastModified']);
        }

        public function setComId($comId){
            $this->comId=$comId;
        }

        public function getComId(){
            return $this->comId;
        }

        public function setAuthorId($authorId){
            $this->authorId=$authorId;
        }

        public function getAuthorId(){
            return $this->authorId;
        }

        public function setArtId($artId){
            $this->artId = $artId;
        }

        public function getArtId(){
            return $this->artId;
        }

        public function setContent($content){
            $this->content = $content;
        }

        public function getContent(){
            return $this->content;
        }

        public function setLastModified($lastModified){
            $this->lastModified = $lastModified;
        }

        public function getLastModified(){
            return $this->lastModified;
        }


        
    }
?>