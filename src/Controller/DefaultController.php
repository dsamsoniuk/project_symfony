<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'homepage', defaults: ['_local' => 'pl'] )]
    public function index(ProductRepository $repo, EntityManagerInterface $entityManager): Response
    {
//         $prod = new Product();
//         $prod->setName('Kartofle');
//         $prod->setPrice(123);
// $aaa = $repo->findAll();
        // $entityManager->persist($prod);
        // $entityManager->flush();

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
