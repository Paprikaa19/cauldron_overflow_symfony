<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{

    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Hello world');
    }

    /**
     * @Route("/login")
     */
    public function login(){
        return new Response("login");
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            'Hello: "%s"!', ucwords(str_replace('-', ' ',$slug))
        ));
    }
}