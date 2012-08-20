<?php

namespace cupp\liqdBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
*/

class liqd_proposalsComm
{
	/**
	* @ORM\GeneratedValue
	* @ORM\Id
	* @ORM\Column(type="integer")
	*/
	private $id;

	/**
	* @ORM\ManyToOne(targetEntity="cupp\liqdBundle\Entity\liqd_proposals", inversedBy="proposalsComm")
	* @ORM\JoinColumn(onDelete="CASCADE")
	*/
	private $proposals;
	
	
	/**
	* @ORM\Column(type="integer", length="255", nullable=true)
	* @ORM\OneToOne(targetEntity="cupp\Bundle\liqdBundle\Entity\liqd_proposalsComm", inversedBy="proposalsComm")
	* @ORM\JoinColumn(onDelete="CASCADE")
	*/
	private $proposalsSubComm;
	
		
	/**
	* @ORM\Column(type="integer", length="255", nullable=true)
	*/
	private $idUsers;
	
	
	/**
	* @ORM\Column(type="string", length="45")
	* @Assert\NotBlank()
	* @Assert\MinLength(3)
	*/
	private $code;
	
	
	/**
	* @ORM\Column(type="string", length="45", nullable=true)
	*/
	private $name;
	
	
	/**
	* @ORM\Column(type="string", length="1024")
	* @Assert\NotBlank()
	* @Assert\MinLength(3)
	*/
	private $descr;
	
	/**
	* @ORM\Column(type="date", nullable=true)
	*/
	private $moddate;
	
	
	/**
	* @ORM\Column(type="string", length="45", nullable=true)
	*/
	private $checksum;
	
	/**
	* Get proposals
	*
	* @return proposals
	*/
	public function getProposals()
	{
		return $this->proposals;
	}
	
	
	/**
	* Set proposals
	*/
	public function setProposals(\cupp\liqdBundle\Entity\liqd_proposals $proposals)
	{
		$this->proposals = $proposals;
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
     * Get proposalsSubComm
     *
     * @return integer 
     */
    public function getProposalsSubComm()
    {
        return $this->proposalsSubComm;
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
     * Set descr
     *
     * @param string $descr
     */
    public function setDescr($descr)
    {
        $this->descr = $descr;
    }

    /**
     * Get descr
     *
     * @return string 
     */
    public function getDescr()
    {
        return $this->descr;
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
     * Set proposalsSubComm
     *
     * @param integer $proposalsSubComm
     */
    public function setProposalsSubComm($proposalsSubComm)
    {
        $this->proposalsSubComm = $proposalsSubComm;
    }
}