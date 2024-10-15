<?php

namespace App\Controller;


use App\Entity\Product;

use App\Repository\ProductRepository;
use App\Repository\TagRepository;
use App\Repository\CommentRepository;
use Doctrine\ORM\EntityManagerInterface;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function home(Request $request, TagRepository $tagRepository, ProductRepository $productRepository): Response
    {
        $tag = null;

        if ($request->get('tag')){
            $tag = $tagRepository->findOneBy(['name'=> $request->get('tag')]);
        }

        return $this->render('page/home.html.twig', [
            'products' => $productRepository->findLatest($tag)
//            'products' => $entityManagerInterface->getRepository(Product::class)->findAll()
        ]);
    }

    #[Route('/producto/{id}', name: 'app_product')]
    public function product(Product $product): Response
    {
        return $this->render('page/product.html.twig', [
            'product' => $product
        ]);
    }

    #[Route('/comentarios', name: 'app_comments')]
    public function comment(CommentRepository $commentRepository): Response
    {
        return $this->render('page/comments.html.twig', [
            'comments' => $commentRepository->findAllComments()
        ]);
    }
}
