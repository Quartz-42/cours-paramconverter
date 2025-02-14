<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
    #[Route('/', name: 'post_index')]
    public function index(PostRepository $postRepository): Response
    {
        return $this->render('post/index.html.twig', [
            'posts' => $postRepository->findAll()
        ]);
    }

    #[Route('/post/{slug}', name: 'post_show')]
    public function show(Post $post): Response
    {
        return $this->render('post/show.html.twig', [
            'post' => $post
        ]);
    }
}
