<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $list = [];
        $dir = '../../LaRocca/public/images';
        $files1 = scandir($dir);
        $length = count($files1);
        for ($i = 2; $i <= $length - 1; $i++) {
            array_push($list, $files1[$i]);
        }
        
     
        


        return $this->render('home/index.html.twig', [
            'list' => $list,
        ]);
    }
}
