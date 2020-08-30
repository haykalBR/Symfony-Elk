<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Repository\CategoriesRepository;
use App\Repository\ProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(CategoriesRepository $categoriesRepository,ProductsRepository $productsRepository, PaginatorInterface $paginator,Request $request)
    {
        $categories = $paginator->paginate(
            $categoriesRepository->findAll(),
            $request->query->getInt('page', 1),
            6
        );
        return $this->render('default/index.html.twig', [
            'products' => $productsRepository->findBy([],['id'=>'DESC'],4,0),
            'categories' => $categories
        ]);
    }
    /**
     * @Route("/product/{id}", name="product-category")
     */
    public function product(Categories $categories,ProductsRepository $productsRepository,Request $request,PaginatorInterface $paginator){
        $products = $paginator->paginate(
            $productsRepository->findBy(['category'=>$categories]),
            $request->query->getInt('page', 1),
            6
        );
        return $this->render('default/product.html.twig', [
            'products' => $products,
        ]);
    }
}
