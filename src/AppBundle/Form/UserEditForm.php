<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserEditForm extends AbstractType {
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder 
			->add('login', TextType::class, array('label' => false))
			->add('creds', ChoiceType::class, array('choices' => array('administrator' => 1, 'użytkownik' => 0)))
			->add('ok', SubmitType::class);
	}
}