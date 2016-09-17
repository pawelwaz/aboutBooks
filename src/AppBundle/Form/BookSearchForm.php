<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class BookSearchForm extends AbstractType {
	
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder 
			->add('title', TextType::class, array('label' => false))
			->add('writername', TextType::class, array('label' => false))
			->add('writersurname', TextType::class, array('label' => false))
			->add('genre', TextType::class, array('label' => false))
			->add('ok', SubmitType::class);
	}
}