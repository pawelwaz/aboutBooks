<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class PasswordChangeForm extends AbstractType {
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder 
			->add('old', PasswordType::class, array('label' => false, 'mapped' => false))
			->add('new', PasswordType::class, array('label' => false, 'mapped' => false))
			->add('retype', PasswordType::class, array('label' => false, 'mapped' => false))
			->add('ok', SubmitType::class);
	}
}