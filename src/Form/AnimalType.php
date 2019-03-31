<?php

namespace App\Form;

use App\Entity\Animal;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnimalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name_animal', TextType::class, [
                'label'           => "Nome",
                'attr'            => [
                    'placeholder' => 'Informe o nome do animal',
                    'class'     => "form-control"
                ]
            ])
//            ->add('breed', EntityType::class,[
//                'class'         => 'App\Entity\Breed',
//                'choice_label'  => 'name_breed',
//                'group_by'      => 'naSpecie',
//                'placeholder'   => 'selecione',
//                'label'         => "Raça",
//                'attr'            => [
//                    'class'     => "form-control"
//                ]
//            ])
            ->add('date_birth_animal', DateType::class,[
                'widget' => 'choice',
                'format' => 'dd-MM-yyyy',
                'label'  => 'Data de Nascimento',
                'attr'   => [
                    'class' => 'form-control'
                ]
            ])
            ->add('send', SubmitType::class,[
                'label'  => 'Salvar',
                'attr'   => [
                    'class' => 'btn-success'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Animal::class,
        ]);
    }
}
