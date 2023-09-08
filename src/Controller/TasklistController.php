<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class TasklistController extends AbstractController
{
    #[Route('/tasklist', name: 'task_list')]
    public function list(): Response
    {
        /**$tasks = $this->getDoctrine()->getRepository(Task::class)->findAll();

        return $this->render('task/list.html.twig', [
            'tasks' => $tasks,
        ]);*/
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
