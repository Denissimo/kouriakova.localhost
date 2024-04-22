<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

//use Symfony\Component\Form\Extension\Core\Type\TextType;

class ArticleUnitAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form): void
    {
        $form->add('path');
        $form->add('title');
        $form->add('image');
        $form->add('annotation');
        $form->add('seo_title');
        $form->add('seo_h1');
        $form->add('content');

    }

    protected function configureDatagridFilters(DatagridMapper $datagrid): void
    {
        $datagrid->add('path');
        $datagrid->add('title');
    }

    protected function configureListFields(ListMapper $list): void
    {
        $list->addIdentifier('id')
            ->addIdentifier('path')
            ->addIdentifier('title')
            ->addIdentifier('image')
            ->addIdentifier('created_at')
            ->addIdentifier('updated_at')
            ->addIdentifier(ListMapper::NAME_ACTIONS, null, [
                'actions' => [
                    'edit' => [],
                ],
            ]);
    }

    protected function configureShowFields(ShowMapper $show): void
    {
        $show->add('id');
        $show->add('path');
        $show->add('title');
        $show->add('image');
        $show->add('annotation');
        $show->add('seo_title');
        $show->add('seo_h1');
        $show->add('content');
    }
}