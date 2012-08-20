<?php

namespace cupp\liqdBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class proposalsForm extends AbstractType
{
	public function buildForm(FormBuilder $builder, array $options)
	{
		$builder
		->add('code', 'text', array('label' => 'sql.code', 'attr' => array('size' => 45)))
		->add('name', 'text', array('label' => 'sql.name', 'attr' => array('name' => 45)))
		->add('descr', 'textarea', array('label' => 'sql.descr', 'attr' => array('cols' => 50, 'rows' => 10)))
		;
	}
	
	public function getName()
	{
		return 'proposals';
	}
}
?>