<?php

namespace cupp\liqdBundle\Twig\Extension;

use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Bundle\TwigBundle\Loader\FilesystemLoader;
 
class AppExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'twigext';
    }
	/*
	 public function getFilters()
    {
        return array(
            'fluo' => new \Twig_Filter_Function($this, 'fluo'),
        );
    }
 
    
    public function fluo($text, $what)
    {
        return preg_replace('/(' . $what . ')/', '<span style="background-color: #FFFF00; color: #0000FF;">\1</span>', $text);
    }
	*/
}


?>