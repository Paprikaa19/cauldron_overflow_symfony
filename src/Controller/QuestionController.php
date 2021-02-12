<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController
{

    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
//        Manually bringing the service to render a page

//        $html = $environment->render("questions/homepage.html.twig");
//
//        return new Response($html);

        return $this->render("questions/homepage.html.twig");
    }

    /**
     * @Route("/questions/{slug}", name="app_question_show")
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