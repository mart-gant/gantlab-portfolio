<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }
}
