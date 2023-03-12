<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $category = new Category();
        $category->setTitle('New');
        $category->setSlug('new');
        $manager->persist($category);
        $this->addReference('category_new', $category);

        $category = new Category();
        $category->setTitle('Manga');
        $category->setSlug('manga');
        $manager->persist($category);
        $this->addReference('category_manga', $category);

        $category = new Category();
        $category->setTitle('Comics');
        $category->setSlug('comics');
        $manager->persist($category);
        $this->addReference('category_comics', $category);

        $manager->flush();

    }
}
