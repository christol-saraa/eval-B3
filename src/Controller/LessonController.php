<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Lesson;

class LessonController extends AbstractController
{
    #[Route('/lesson', name: 'lesson')]
    public function index(): Response
    {
        $less= $this->getDoctrine()->getRepository(lesson::class);
        $lesson= $less->findAll();

        return $this->render('lesson/index.html.twig', [
            'controller_name' => 'LessonController',
            'lessons'=>$lesson,
        ]);
    }
}
