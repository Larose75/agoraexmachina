<?phpnamespace cupp\liqdBundle\Entity;use Doctrine\ORM\Mapping as ORM;use Symfony\Component\Validator\Constraints as Assert;/*** @ORM\Entity*/class liqd_instances{	/**	* @ORM\GeneratedValue	* @ORM\Id	* @ORM\Column(type="integer")	*/	private $id;		/**	* @ORM\Column(type="string", length="45")	* @Assert\NotBlank()	* @Assert\MinLength(3)	*/	private $code;			/**	* @ORM\Column(type="string", length="45")	* @Assert\NotBlank()	* @Assert\MinLength(3)	*/	private $name;			/**	* @ORM\Column(type="string", length="1024")	* @Assert\NotBlank()	* @Assert\MinLength(3)	*/	private $descr;			/**	* @ORM\Column(type="string", length="145", nullable=true)	* @Assert\MinLength(3)	*/	private $img;			/**	* @ORM\Column(type="integer", length="255", nullable=true)	*/	private $enableAdoptionVote;		/**	* @ORM\Column(type="integer", length="255", nullable=true)	*/	private $enableDelegation;			/**	* @ORM\Column(type="date", nullable=true)	*/	private $deadline;				/**	* @ORM\Column(type="integer", length="255", nullable=true)	*/	private $hide;			/**	* @ORM\Column(type="integer", length="255", nullable=true)	*/	private $allowSearchEngine;			/**	* @ORM\Column(type="integer", length="255", nullable=true)	*/	private $idUsers;		/**	* @ORM\ManyToOne(targetEntity="cupp\liqdBundle\Entity\liqd_categories", inversedBy="instances")	* @ORM\JoinColumn(onDelete="CASCADE")		*/	private $categories;			/**	* @ORM\Column(type="date", nullable=true)	*/	private $moddate;			/**	* @ORM\Column(type="string", length="45", nullable=true)	*/	private $checksum;		/**	* Get categories	*	* @return categories	*/	public function getCategories()	{		return $this->categories;	}			/**	* Set categories	*/	public function setCategories(\cupp\liqdBundle\Entity\liqd_categories $categories)	{		$this->categories = $categories;	}		
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
     * Set enableAdoptionVote
     *
     * @param integer $enableAdoptionVote
     */
    public function setEnableAdoptionVote($enableAdoptionVote)
    {
        $this->enableAdoptionVote = $enableAdoptionVote;
    }

    /**
     * Get enableAdoptionVote
     *
     * @return integer 
     */
    public function getEnableAdoptionVote()
    {
        return $this->enableAdoptionVote;
    }

    /**
     * Set enableDelegation
     *
     * @param integer $enableDelegation
     */
    public function setEnableDelegation($enableDelegation)
    {
        $this->enableDelegation = $enableDelegation;
    }

    /**
     * Get enableDelegation
     *
     * @return integer 
     */
    public function getEnableDelegation()
    {
        return $this->enableDelegation;
    }

    /**
     * Set deadline
     *
     * @param date $deadline
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;
    }

    /**
     * Get deadline
     *
     * @return date 
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Set hide
     *
     * @param integer $hide
     */
    public function setHide($hide)
    {
        $this->hide = $hide;
    }

    /**
     * Get hide
     *
     * @return integer 
     */
    public function getHide()
    {
        return $this->hide;
    }

    /**
     * Set allowSearchEngine
     *
     * @param integer $allowSearchEngine
     */
    public function setAllowSearchEngine($allowSearchEngine)
    {
        $this->allowSearchEngine = $allowSearchEngine;
    }

    /**
     * Get allowSearchEngine
     *
     * @return integer 
     */
    public function getAllowSearchEngine()
    {
        return $this->allowSearchEngine;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
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
     * Set idCateories
     *
     * @param integer $idCateories
     */
    public function setIdCateories($idCateories)
    {
        $this->idCateories = $idCateories;
    }

    /**
     * Get idCateories
     *
     * @return integer 
     */
    public function getIdCateories()
    {
        return $this->idCateories;
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
     * Set cupp_categories
     *
     * @param integer $cuppCategories
     */
    public function setCuppCategories($cuppCategories)
    {
        $this->cupp_categories = $cuppCategories;
    }

    /**
     * Get cupp_categories
     *
     * @return integer 
     */
    public function getCuppCategories()
    {
        return $this->cupp_categories;
    }
}