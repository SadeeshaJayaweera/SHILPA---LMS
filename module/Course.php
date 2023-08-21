<?php

class Course {

    private $id;
    private $name;
    private $shortDescription;
    private $description;
    private $cardimage;
    private $doneby;
    private $originalUrl;
    private $adddate;
    private $duration;

    public function getId() {
        return $this->id;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function getShortDescription() {
        return $this->shortDescription; 
    }

    public function setShortDescription($shortDescription): void {
        $this->shortDescription = $shortDescription; 
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description): void {
        $this->description = $description;
    }

    public function getCardImage() {
        return $this->cardimage;
    }

    public function setCardImage($cardimage): void {
        $this->cardimage = $cardimage;
    }

    public function getDoneby() {
        return $this->doneby;
    }

    public function setDoneby($doneby): void {
        $this->doneby = $doneby;
    }

    public function getOriginalUrl() {
        return $this->originalUrl;
    }

    public function setOriginalUrl($originalUrl): void {
        $this->originalUrl = $originalUrl;
    }

    public function getAdddate() {
        return $this->adddate;
    }

    public function setAdddate($adddate): void {
        $this->adddate = $adddate;
    }

    public function getDuration() {
        return $this->duration;
    }

    public function setDuration($duration): void {
        $this->duration = $duration;
    }

}
