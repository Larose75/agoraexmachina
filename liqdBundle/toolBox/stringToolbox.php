<?php

namespace cupp\liqdBundle\Toolbox;

class stringToolbox
{
    public function toUpper($aString)
    {
		echo strtoupper($aString);
        return strtoupper($aString);
    }

    public function toLower($aString)
    {
		echo strtolower($aString);  
        return strtolower($aString);  
    }
}