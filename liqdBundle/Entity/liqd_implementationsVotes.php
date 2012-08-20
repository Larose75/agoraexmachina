<?php

namespace cupp\liqdBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
*/

class liqd_implementationsVotes
{
	/**
	* @ORM\GeneratedValue
	* @ORM\Id
	* @ORM\Column(type="integer")
	*/
	private $id;

	/**
	* @ORM\ManyToOne(targetEntity="cupp\liqdBundle\Entity\liqd_implementations", inversedBy="implementationsVotes")
	* @ORM\JoinColumn(onDelete="CASCADE")
	*/
	private $implementations;
	
	
	/**
	* @ORM\Column(type="integer", length="255", nullable=true)
	*/
	private $idUsers;
	
	/**
	* @ORM\Column(type="integer")
	*/
	private $value;
	
		
	/**
	* @ORM\Column(type="date", nullable=true)
	*/
	private $moddate;
	
	
	/**
	* @ORM\Column(type="string", length="45", nullable=true)
	*/
	private $checksum;
	
	/**
	* Get implementations
	*
	* @return implementations
	*/
	public function getImplementations()
	{
		return $this->implementations;
	}
	
	
	/**
	* Set implementations
	*/
	public function setImplementations(\cupp\liqdBundle\Entity\liqd_implementations $implementations)
	{
		$this->implementations = $implementations;
	}
	

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
     * Set idUsers
     *
     * @param integer $idUsers
     */
    public function setIdUsers($idUsers)
    {
        $this->idUsers = $idUsers;
    }

    /**
     * Get idUsers
     *
     * @return integer 
     */
    public function getIdUsers()
    {
        return $this->idUsers;
    }

    /**
     * Get value
     *
     * @return integer 
     */
    public function getValue()
    {
        return $this->value;
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

    /**
     * Set value
     *
     * @param integer $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}