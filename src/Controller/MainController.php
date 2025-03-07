<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController
{
    #[Route(path: '/')]
    public function homepage(): Response  
    {
        return new Response(content: "Hello World! Okay na to!");
    }
}