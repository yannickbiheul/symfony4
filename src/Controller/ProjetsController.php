<?php

namespace App\Controller;

use App\Entity\Project;
use App\Repository\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetsController extends AbstractController
{
    /**
     * @Route("/projects", name="projects")
     */
    public function index(ProjectRepository $projectRepo): Response
    {
        $projects = $projectRepo->findAll();
        
        return $this->render('projets/index.html.twig', [
            'controller_name' => 'ProjetsController',
            'projects' => $projects,
        ]);
    }

    /**
     * @Route("/projects/{id}", name="projects_show")
     */
    public function show(Project $project) 
    {
        return $this->render('projets/show.html.twig', [
            'project' => $project,
        ]);
    }
}
