<?php

namespace App\Form;


use App\Entity\Genre;
use App\Repository\GenreRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchForm extends AbstractType
{
    private $genreRepository;
    public function __construct(GenreRepository $genreRepository){
        $this->genreRepository = $genreRepository;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('genres', ChoiceType::class,[
                'label' => false,
                'choices' => $this->genreRepository->findAllByType('movie'),
                'choice_value' => 'id',
                'choice_label' => 'name',
                'required' => false,
                'expanded' => true,
                'multiple' => true

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => null,
            'method' => 'POST'
        ]);
    }

}