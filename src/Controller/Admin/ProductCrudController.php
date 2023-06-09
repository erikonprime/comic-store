<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title','Product Title'),
            SlugField::new('slug')->setTargetFieldName('title'),
            TextEditorField::new('description')->hideOnIndex(),
            MoneyField::new('price', 'Price')->setCurrency('EUR'),
            IntegerField::new('quantity', 'Quantity'),
            AssociationField::new('category'),
          //  ImageField::new('image')->setUploadDir('assets/img/upload')
       //   ImageField::new('image')
            //->setUploadDir('assets/img/upload')
            //->setUploadDir('assets/img/upload')
            //->setBasePath('uploads/images/')
            //->setUploadDir('assets/img/upload')

        ];


    }

}
