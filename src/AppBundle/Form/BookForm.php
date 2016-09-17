<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class BookForm extends AbstractType {
	
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder 
			->add('title', TextType::class, array('label' => false))
			->add('writer', EntityType::class, array('class' => 'AppBundle:Writer', 'choice_label' => 'FullName'))
			->add('genre', EntityType::class, array('class' => 'AppBundle:Genre', 'choice_label' => 'name'))
			->add('description', TextareaType::class, array('label' => false))
			->add('ok', SubmitType::class);
	}
}