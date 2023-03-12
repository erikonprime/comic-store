<?php

namespace App\Controller\Api;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/api/product', name: 'app_product')]
    public function index(ProductRepository $productRepository): JsonResponse
    {
        return $this->json([
            'data' => array_map(static function (Product $product) {
                return [
                    'title' => $product->getTitle(),
                    'description' => $product->getDescription(),
                    'price' => $product->getPrice(),
                    'quantity' => $product->getQuantity(),
                    'slug' => $product->getSlug(),
                ];
            }, $productRepository->findAll()),
        ]);
    }
}
