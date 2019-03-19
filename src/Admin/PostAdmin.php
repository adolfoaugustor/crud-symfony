<?php
/**
 * Created by PhpStorm.
 * User: massakito
 * Date: 12/03/19
 * Time: 23:51
 */
namespace App\Admin;

use App\Entity\Author;
use App\Entity\Category;
use App\Entity\Post;
use phpDocumentor\Reflection\Types\Boolean;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PostAdmin extends AbstractAdmin
{
    protected function configureListFields(ListMapper $list)
    {
        $list->addIdentifier('title', TextType::class, [
            'label' => 'Título'
        ])
        ->add('category', null, [
            'label' => 'Categoria',
            'associated_property' => 'name'
        ])
        ->add('status', 'boolean', [
            'editable' => true
        ])
        ->add('author', null, [
            'label' => 'Autor',
            'associated_property' => 'name'
        ]);
    }

    protected function configureFormFields(FormMapper $form)
    {
        $form->add('category', ModelType::class,[
            'class' => Category::class,
            'property' => 'name',
            'multiple' => true
        ])
            ->add('author', ModelType::class,[
                'class' => Author::class,
                'property' => 'name'
            ])
            ->add('title', TextType::class)
            ->add('content', TextareaType::class)
            ->add('status', null, [
                'required' => false
            ]);
    }

    public function toString($object)
    {
        return $object instanceof Post ? $object->getTitle() : "Postagem";
    }
}