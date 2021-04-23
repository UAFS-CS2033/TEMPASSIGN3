<?php

class Topics{

    private $topId;
    private $name;
    private $description;
    private $lastModified;

    public function load($row){

        $this->setTopId($row['topID']);
        $this->setName($row['name']);
        $this->setDescription($row['description']);
        $this->setLastModified($row['lastModfied']);
    }


    public function setTopId($topId){
        $this->topId = $topId;
    }

    public function getTopId(){
        return $this->topId;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setLastModified($lastModified){
        $this->lastModified = $lastModified;
    }

    public function getLastModified(){
        return $this->lastModified;
    }





}

?>