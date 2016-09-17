<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class LoginChangeForm extends AbstractType {
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder 
			->add('login', TextType::class, array('label' => false, 'mapped' => false))
			->add('ok', SubmitType::class);
	}
}