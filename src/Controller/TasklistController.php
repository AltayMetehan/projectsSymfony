<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/tasklist", name="task_list")
 */
class TasklistController extends AbstractController
{
    #[Route('/tasklist', name: 'task_list')]
    public function list(): Response
    {
        $tasks = $this->getDoctrine()->getRepository(Task::class)->findAll();

        return $this->render('task/list.html.twig', [
            'tasks' => $tasks,
        ]);
    }
}
