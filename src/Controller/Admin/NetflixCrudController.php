<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Entity\Netflix;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

final class NetflixCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Netflix::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield IdField::new('id')
            ->setRequired(false);
    }
}
