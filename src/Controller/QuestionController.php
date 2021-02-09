<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{

    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Hello world');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        $answers = [
            'Im first answer from the DB, dont hit me, im scared',
            'Hello, Im the second answer for this test',
            'Are you sure that this is the test that you want to do?'
        ];

        return $this->render('questions/show.html.twig', [
            'question' => ucwords( str_replace('-', ' ',$slug)),
            'answers' => $answers,
        ]);
    }
}