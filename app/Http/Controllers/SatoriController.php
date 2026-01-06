<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SatoriController extends AbstractController
{
    #[Route('/satori')]
    public function index(): Response
    {
        return $this->render('satori/index.html.twig');
    }
}
