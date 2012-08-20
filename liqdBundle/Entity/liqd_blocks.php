<?php
namespace cupp\liqdBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
*/

class liqd_blocks
{
	/**
	* @ORM\GeneratedValue
	* @ORM\Id
	* @ORM\Column(type="integer")
	*/
	private $id;
	
	
	/**
	* @ORM\Column(type="string", length="45")
	* @Assert\NotBlank()
	* @Assert\MinLength(3)
	*/
	private $code;
	
	
	/**
	* @ORM\Column(type="string", length="3")
	* @Assert\NotBlank()
	* @Assert\MinLength(2)
	*/
	private $lang;
	
	
	/**
	* @ORM\Column(type="string", length="45")
	* @Assert\NotBlank()
	* @Assert\MinLength(3)
	*/
	private $name;
	
	
	/**
	* @ORM\Column(type="text")
	* @Assert\NotBlank()
	* @Assert\MinLength(3)
	*/
	private $content;
	
		
	/**
	* @ORM\Column(type="date")
	* @Assert\NotBlank()
	*/
	private $moddate;
	
	
	/**
	* @ORM\Column(type="integer")
	* @Assert\NotBlank()
	*/
	private $tstamp;
	
	
	/**
	* @ORM\Column(type="string", length="45")
	* @Assert\NotBlank()
	*/
	private $checksum;
	
	

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set lang
     *
     * @param string $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }

    /**
     * Get lang
     *
     * @return string 
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set content
     *
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set moddate
     *
     * @param date $moddate
     */
    public function setModdate($moddate)
    {
        $this->moddate = $moddate;
    }

    /**
     * Get moddate
     *
     * @return date 
     */
    public function getModdate()
    {
        return $this->moddate;
    }

    /**
     * Set tstamp
     *
     * @param integer $tstamp
     */
    public function setTstamp($tstamp)
    {
        $this->tstamp = $tstamp;
    }

    /**
     * Get tstamp
     *
     * @return integer 
     */
    public function getTstamp()
    {
        return $this->tstamp;
    }

    /**
     * Set checksum
     *
     * @param string $checksum
     */
    public function setChecksum($checksum)
    {
        $this->checksum = $checksum;
    }

    /**
     * Get checksum
     *
     * @return string 
     */
    public function getChecksum()
    {
        return $this->checksum;
    }
}