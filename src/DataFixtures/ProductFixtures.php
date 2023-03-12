<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\ByteString;

class ProductFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        for ($x = 0; $x <= 1000; ++$x) {

            $min = random_int(10, 100);
            $max = random_int(100, 1000);
            $randomNumber = random_int($min, $max);
            $categoryTypes = [
                'category_new' => 1,
                'category_manga' => 1,
                'category_comics' => 1,
            ];
            $category = array_rand($categoryTypes);

            $product = new Product();
            $product->setTitle(ByteString::fromRandom(20, implode('', range('a', 'z')))->toString());
            $product->setSlug(ByteString::fromRandom(10)->toString());
            $product->setDescription(ByteString::fromRandom(100, implode('', range('a', 'z')))->toString());
            $product->setCategory($this->getReference($category));
            $product->setPrice($randomNumber);
            $product->setQuantity($randomNumber);
            $manager->persist($product);

            $manager->flush();
        }


    }
}
