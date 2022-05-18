<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Entity\Director;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;

final class DirectorCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Director::class;
    }


    public function configureFields(string $pageName): iterable
    {
        yield Field::new('name');
        yield Field::new('slug');
        yield DateField::new('Birthday');
        yield Field::new('birthplace');
        yield TextAreaField::new('bio');
    }

}
