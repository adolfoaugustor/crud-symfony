<?php
/**
 * Created by PhpStorm.
 * User: massakito
 * Date: 12/03/19
 * Time: 23:07
 */

namespace App\Admin;

use App\Entity\Author;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AuthorAdmin extends AbstractAdmin
{
    protected function configureListFields(ListMapper $list)
    {
        $list->addIdentifier('name');
    }

    protected function configureFormFields(FormMapper $form)
    {
        $form->add('name', TextType::class, [
            'label' => "Nome",
            'attr' => [
                'placeholder' => "Informe o Autor"
            ]
        ]);
    }

    public function toString($object)
    {
        return $object instanceof Author ? $object->getName() : "Categoria";
    }
}