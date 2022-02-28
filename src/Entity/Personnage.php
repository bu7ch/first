<?php

namespace App\Entity;
class Personnage {
  public $name;
  public $age;
  public $sexe;
  public $stats = [];

  public static  $personnes = [];

  public function __construct($name, $age, $sexe, $stats) {
    $this->name = $name;
    $this->age = $age;
    $this->sexe = $sexe;
    $this->stats = $stats;
    self::$personnes[] = $this;
  }
  public static function createPerson() {
    $p1 = new Personnage("marco", 24, true, ["force"=> 3, "agi"=> 1, "intel"=> 3]);
    $p2 = new Personnage("johnny", 24, true, ["force"=> 4, "agi"=> 4, "intel"=> 2]);
    $p3 = new Personnage("martine", 24, false, ["force"=> 2, "agi"=> 2, "intel"=> 5]);
  }

  
}
