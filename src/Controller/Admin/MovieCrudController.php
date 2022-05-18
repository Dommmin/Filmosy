<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Entity\Movie;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

final class MovieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Movie::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield IdField::new('id')
            ->hideOnForm();
        yield TextField::new('name');
        yield TextField::new('slug');
        yield TextareaField::new('description');
        yield AssociationField::new('actor')
            ->setRequired(true)
            ->setCrudController(ActorCrudController::class);
        yield AssociationField::new('genre')
            ->setRequired(true)
            ->setCrudController(GenreCrudController::class);
        yield DateField::new('releasedAt')
            ->setLabel('Released Date');
        yield Field::new('country');
        yield ImageField::new('filename')
            ->setBasePath('images')
            ->setUploadDir('public/images')
            ->setUploadedFileNamePattern('[slug]-[timestamp].[extension]')
            ->onlyOnForms()
            ->setRequired(false);
        yield TextField::new('trailer')
            ->setRequired(false);
        yield AssociationField::new('cinema')
            ->autocomplete()
            ->setRequired(false)
            ->setCrudController(CinemaCrudController::class)
            ->setHelp('Type "#" to see whole list');
        yield AssociationField::new('netflix')
            ->autocomplete()
            ->setRequired(false)
            ->setCrudController(NetflixCrudController::class)
            ->setHelp('Type "#" to see whole list');
    }
}
