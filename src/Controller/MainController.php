<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route(path: '/')]
    public function homepage(): Response     // This is the controller method that will be called when the user visits the homepage
    {
        // fetching numeric data, example:
        $numberOfMyProjects = 1;

        // fetching key-value data, example:
        $projectName = 'Platform Rebuild';
        $projectDescription = 'Rebuilding the platform from scratch';
        $projectDeadline = '2022-12-31';
        $projectStatus = 'In Progress';

        // create assiciative array/table, example:
        $myActivitySnapshotTable = [
            'projectName'=> $projectName,
            'projectDescription'=> $projectDescription,
            'projectDeadline'=> $projectDeadline,
            'projectStatus'=> $projectStatus
        ];

        // rendering the template
        return $this->render('main/homepage.html.twig', [
            'numberOfMyProjects' => $numberOfMyProjects,
            'myActivitySnapshotTable'=> $myActivitySnapshotTable
        ]);
    }
}