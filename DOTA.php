<?php

class Dota2Hero {
    private $name;
    private $role;
    private $difficulty;
  
    
    public function setName($name) {
      $this->name = $name;
    }
  
    public function setRole($role) {
      $this->role = $role;
    }
  
    public function setDifficulty($difficulty) {
      $this->difficulty = $difficulty;
    }
  
   
    public function getName() {
      return $this->name;
    }
  
    public function getRole() {
      return $this->role;
    }
  
    public function getDifficulty() {
      return $this->difficulty;
    }
  
    
    public function displayInfo() {
      echo "Name: " . $this->name . "<br>";
      echo "Role: " . $this->role . "<br>";
      echo "Difficulty: " . $this->difficulty . "<br>";
    }
  }
  
  
  class StrengthHero extends Dota2Hero {
    private $attribute = "Strength";
  
   
    public function getAttribute() {
      return $this->attribute;
    }
  
    
    public function displayInfo() {
      parent::displayInfo();
      echo "Attribute: " . $this->attribute . "<br>";
    }
  
    
    public function printInfo($build) {
      echo "Name: " . $this->getName() . "<br>";
      echo "Role: " . $this->getRole() . "<br>";
      echo "Difficulty: " . $this->getDifficulty() . "<br>";
      echo "Attribute: " . $this->getAttribute() . "<br>";
      echo "Build: " . $build . "<br>";
    }
  }
  
  
  class StrengthCarryHero extends StrengthHero {
    private $position = "Carry";
  
   
    public function getPosition() {
      return $this->position;
    }
  }
  
 
  class AgilityHero extends Dota2Hero {
    private $attribute = "Agility";
    
   
    public function getAttribute() {
      return $this->attribute;
    }
  
    
    public function displayInfo() {
      parent::displayInfo();
      echo "Attribute: " . $this->attribute . "<br>";
    }
  }
  
  
  $hero1 = new StrengthHero();
  $hero1->setName("Sven");
  $hero1->setRole("Carry");
  $hero1->setDifficulty(2);
  $hero1->displayInfo();
  echo "<br>";
  
  $hero2 = new StrengthCarryHero();
  $hero2->setName("Juggernaut");
  $hero2->setRole("Carry");
  $hero2->setDifficulty(1);
  $hero2->displayInfo();
  echo "<br>";
  
  $hero3 = new AgilityHero();
  $hero3->setName("Phantom Assassin");
  $hero3->setRole("Carry");
  $hero3->setDifficulty(1);
  $hero3->displayInfo();
  echo "<br>";
  
  $hero2->printInfo("Aghanim's Scepter, Black King Bar");