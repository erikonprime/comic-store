<?php

namespace App\Controller\Api;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route('/api/category', name: 'app_category')]
    public function index(CategoryRepository $categoryRepository): Response
    {
        return $this->json([
            'data' => array_map(static function (Category $category) {
                return [
                    'title' => $category->getTitle(),
                    'slug' => $category->getSlug(),
                ];
            }, $categoryRepository->findAll()),
        ]);
    }
}
