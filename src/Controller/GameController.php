<?php

namespace App\Controller;

use App\Entity\Personnage;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GameController extends AbstractController
{
  #[Route('/', name: 'app_game')]
  public function index(): Response
  {
    return $this->render('game/index.html.twig', [
      'controller_name' => 'GameController',
    ]);
  }
  #[Route('/game', name: "persos")]
  public function persos(): Response
  {
    Personnage::createPerson();
    return $this->render(
      'game/persos.html.twig',
      ['personnages' => Personnage::$personnes]
    );
  }
}
