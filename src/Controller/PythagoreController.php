<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PythagoreController extends AbstractController
{
    #[Route('/pythagore', name: 'app_pythagore')]
    public function index(): Response
    {
        $tableau = [];
        
        for ($i = 1; $i <= 10; $i++) {
            $ligne = [];
            for ($j = 1; $j <= 10; $j++) {
                if ($i == $j) {
                    $ligne[] = 'X';
                } else {
                    $ligne[] = $i * $j;
                }
            }
            $tableau[$i] = $ligne;
        }

        return $this->render('pythagore/index.html.twig', [
            'tableau' => $tableau,
        ]);
    }
}
