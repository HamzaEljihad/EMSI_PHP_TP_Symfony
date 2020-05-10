<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        $articles =["dell","tochiba","hp"];
        return $this -> render('blog/index.html.twig', [ 'art'=>$articles] );
    }
    /**
     * @Route("/articles", name="articles")
     */
    public function lister(){
        $articles =["dell","tochiba","hp"];
        return $this -> render('blog/articles.html.twig', [ 'art'=>$articles] );
    }
}
