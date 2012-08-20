<?php
namespace cupp\liqdBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
*/

class liqd_users
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
	private $name;
	
	/**
	* @ORM\Column(type="string", length="45")
	* @Assert\NotBlank()
	* @Assert\MinLength(3)
	*/
	private $surname;
	
	
	/**
	* @ORM\Column(type="string", length="45")
	* @Assert\NotBlank()
	* @Assert\MinLength(3)
	*/
	private $alias;
	
	
	/**
	* @ORM\Column(type="string", length="45", nullable=true)
	* @Assert\MinLength(3)
	*/
	private $img;
	
	
	/**
	* @ORM\Column(type="string", length="45")
	* @Assert\NotBlank()
	* @Assert\MinLength(3)
	*/
	private $password;
	
	
	/**
	* @ORM\Column(type="string", length="255")
	* @Assert\NotBlank()
	* @Assert\MinLength(3)
	*/
	private $email;
	
	/**
	* @ORM\Column(type="integer", length="255", nullable=true)
	*/
	private $lvl;
	
	
	/**
	* @ORM\Column(type="string", length="2")
	* @Assert\NotBlank()
	* @Assert\MinLength(2)
	*/
	private $lang;
	
	
	/**
	* @ORM\Column(type="date", nullable=true)
	*/
	private $moddate;
	
	
	/**
	* @ORM\Column(type="integer", nullable=true)
	*/
	private $tstamp;
	
	
	/**
	* @ORM\Column(type="string", length="45", nullable=true)
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
     * Set surname
     *
     * @param string $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set alias
     *
     * @param string $alias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * Get alias
     *
     * @return string 
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set img
     *
     * @param string $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set lvl
     *
     * @param integer $lvl
     */
    public function setLvl($lvl)
    {
        $this->lvl = $lvl;
    }

    /**
     * Get lvl
     *
     * @return integer 
     */
    public function getLvl()
    {
        return $this->lvl;
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