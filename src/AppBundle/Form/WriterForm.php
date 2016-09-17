<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class WriterForm extends AbstractType {
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
		->add('name', TextType::class, array('label' => false))
		->add('surname', TextType::class, array('label' => false))
		->add('bio', TextareaType::class, array('label' => false, 'required' => false))
		->add('ok', SubmitType::class);
	}
}