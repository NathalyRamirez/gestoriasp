<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Trabajador;


class TrabajadorController extends AbstractController
{
    
     /**
     * @Route("/workers_page",name="app_workers_page",methods={"GET", "POST" })
     */
    public function index(Request $request): Response
    {
        if ($request->isMethod("GET")) {
            return $this->render('workers/index.html.twig', [
                'controller_name' => 'WorkersController',
            ]);
           
        }
        return $this->render('react.html.twig', [
            'controller_name' => 'WorkersController',
        ]);
    }

 /**
     * @Route("/workers",name="app_workers",methods={"GET", "POST" })
     */
    public function GetOrPostWorker(Request $request,ManagerRegistry $doctrine): Response
    {
        if ($request->isMethod("POST")) {
       $entityManager=$doctrine->getManager();
       $trabajador=new Trabajador();
           
        }
        return $this->render('workers/index.html.twig', [
            'controller_name' => 'WorkersController',
        ]);
    }


}

