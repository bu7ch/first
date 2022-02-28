<?php

namespace App\Entity;

class Weapon
{
  public $name;
  public $description;
  public $damages;

  public static $weapons = [];
  public function __construct($name, $description, $damages)
  {
    $this->name = $name;
    $this->description = $description;
    $this->damages = $damages;
    self::$weapons[] = $this;
  }
  public static function getWeaponByName($name){
    foreach(self::$weapons as $key => $weapon){
      if($weapon->name === $name){
        return $weapon;
      }
    }
  }

  public static function createWeapon()
  {
    new Weapon("sword", "sword of doom", 4);
    new Weapon("axe", "little axe ", 2);
    new Weapon("wood bow", "elfb bow", 6);
  }
}
