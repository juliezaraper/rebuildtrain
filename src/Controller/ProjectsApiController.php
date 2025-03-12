<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ProjectsApiController extends AbstractController
{
    #[Route('/api/projects', name: 'api_projects')]
    public function getProjects(LoggerInterface $logger): JsonResponse
    {
        // $logger->info('Projects API was called');
        dd($logger);
        // This is a hardcoded array of projects
        $projects = [
            [
                'projectName' => 'Platform Rebuild',
                'projectDescription' => 'Rebuilding the platform from scratch',
                'projectDeadline'=> '2022-12-31',
                'projectStatus'=> 'IN PROGRESS',
            ],
            [
                'projectName' => 'Platform Updates',
                'projectDescription' => 'Updating the platform',
                'projectDeadline'=> '2022-12-31',
                'projectStatus'=> 'TODO',
            ],
            [
                'projectName' => 'Platform Audit',
                'projectDescription' => 'Auditing the platform',
                'projectDeadline'=> '2022-12-31',
                'projectStatus'=> 'DONE',
            ],
           
        ];

        return $this->json($projects);
    }
}