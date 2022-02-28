<?php

namespace App\Controller;

use App\Entity\Weapon;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WeaponsController extends AbstractController
{
  #[Route('/weapons', name: 'app_weapons')]
  public function index(): Response
  {
    Weapon::createWeapon();
    return $this->render('weapons/index.html.twig', [
      'weapons' => Weapon::$weapons,
    ]);
  }
  #[Route('/weapons/{name}', name: 'show_weapon')]
  public function weapon($name): Response
  {
    Weapon::createWeapon();
    $arme = Weapon::getWeaponByName($name);
    return $this->render('weapons/weapon.html.twig', ['arme' => $arme]);
  }
}
