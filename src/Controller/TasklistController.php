<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Tasklists;
use Doctrine\Persistence\ManagerRegistry;
use App\Form\TasklistsType;
use Symfony\Component\HttpFoundation\Request;


class TasklistController extends AbstractController
{
    private $doctrine;
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    #[Route('/tasklist', name: 'task_list')]
    public function list(): Response
    {
        $tasklists = $this->doctrine->getRepository(Tasklists::class)->findAll();

        return $this->render('tasklist/list.html.twig', [
            'tasklists' => $tasklists,
        ]);
    }

    #[Route('/tasklist/create', name: 'task_create')]
    public function create(Request $request): Response
    {
        $tasklists = new Tasklists();

        $form = $this->createForm(TasklistsType::class, $tasklists);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->doctrine->getManager();
            $entityManager->persist($tasklists);
            $entityManager->flush();

            return $this->redirectToRoute('task_list');
        }

        return $this->render('tasklist/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/tasklist/delete/{id}', name: 'task_delete')]
    public function delete(int $id): Response
    {
        
    }

    #[Route('/tasklist/edit/{id}', name: 'task_edit')]
    public function edit(int $id): Response
    {
        
    }
}
