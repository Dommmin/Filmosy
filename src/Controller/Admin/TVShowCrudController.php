<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Entity\TVShow;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

final class TVShowCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TVShow::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
