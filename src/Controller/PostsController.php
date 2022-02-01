<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostsController extends AbstractController
{
    /** @var PostRepository $postRepository */
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    #[Route('/posts', name: 'posts')]
    public function index(): Response
    {
        $posts = [
            'post_1' => [
                'title' => 'Заголовок первого поста',
                'body' => 'Тело первого поста'
            ],
            'post_2' => [
                'title' => 'Заголовок второго поста',
                'body' => 'Тело второго поста'
            ]
        ];

        return $this->render('posts/index.html.twig', [
            //'controller_name' => 'PostsController',
            'posts' => $posts
        ]);
    }
}
