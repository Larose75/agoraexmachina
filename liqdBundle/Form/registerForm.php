<?php

namespace cupp\liqdBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class registerForm extends AbstractType
{
	public function buildForm(FormBuilder $builder, array $options)
	{
		$builder
		->add('name', 'text', array('label' => 'users.name'))
		->add('surname', 'text', array('label' => 'users.surname'))
		->add('alias', 'text', array('label' => 'users.alias'))
		->add('img', 'file', array('label' => 'users.img', 'required' => false))
		->add('password', 'password', array('label' => 'users.password'))
		->add('email', 'email', array('label' => 'users.email'))
		->add('lang', 'choice', array('choices' => array('FRA' => 'FR'), 'label' => 'users.lang', 'required' => true));
		;
	}
	
	public function getName()
	{
		return 'register';
	}
}

?>