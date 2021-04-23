<?php

class Articles{

    
    private $authorId;
    private $catId;
    private $title;
    private $image;
    private $content;
    private $lastModified;
    private $artId;

    public function load($row){

        $this->setartId($row['artID']);
        $this->setauthorId($row['authorID']);
        $this->setCatId($row['catID']);
        $this->setTitle($row['title']);
        $this->setImage($row['image']);
        $this->setContent($row['content']);
        $this->setLastModified($row['lastModified']);
    }

    public function setArtId($artId){
        $this->artId = $artId;
    }

    public function getArtId(){
        return $this->artId;
    }

    public function setAuthorId($authorId){
        $this->authorId = $authorId;
    }

    public function getAuthorId(){
        return $this->authorId;
    }

    public function setCatId($catId){
        $this->catId = $catId;
    }

    public function getCatId(){
        return $this->catId;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setImage($image){
        $this->image = $image;
    }

    public function getImage(){
        return $this->image;
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