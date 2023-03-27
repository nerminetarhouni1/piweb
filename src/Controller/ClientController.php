<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Client;
use App\Repository\ConducteurRepository;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ClientController extends AbstractController
{
    #[Route('/client', name: 'app_client')]
    public function ShowClient(ManagerRegistry $doctrine): Response
    { 
        $repo = $doctrine->getRepository(client::class);
     
        $client = $repo->findAll();

        return $this->render('client/client.html.twig', [
            'client' => $client,
       
        ]);
    }
}
