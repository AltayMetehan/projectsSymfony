<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Tasklists;
use Doctrine\ORM\EntityManagerInterface;


class TasklistController extends AbstractController
{
    #[Route('/tasklist', name: 'task_list')]
    public function list(EntityManagerInterface $entityManager): Response
    {
        $repository = $entityManager->getRepository(Tasklists::class);
        $tasklists = $repository->findAll();

        return $this->render('tasklist/list.html.twig', [
            'tasklists' => $tasklists,
        ]);
    }

    #[Route('/tasklist/create', name: 'task_create')]
    public function create(): Response
    {
        
    }

    #[Route('/tasklist/delete', name: 'task_delete')]
    public function delete(): Response
    {
        
    }

    #[Route('/tasklist/edit', name: 'task_edit')]
    public function edit(): Response
    {
        
    }
}
