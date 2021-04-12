<?php

namespace App\Controller;

use App\Repository\TopicRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/{page}", defaults={"page": 1}, name="home")
     */
    public function index($page, TopicRepository $topicRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $topics = $paginator->paginate(
            $topicRepository->findAllNotSoldQuery(),
            $page,
            12
        );

        return $this->render('home/index.html.twig', [
            'topics' => $topics,
        ]);
    }
}
