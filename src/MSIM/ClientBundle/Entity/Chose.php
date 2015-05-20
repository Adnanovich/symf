<?php

namespace MSIM\ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chose
 */
class Chose
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $chose;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $date;


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
     * Set chose
     *
     * @param string $chose
     * @return Chose
     */
    public function setChose($chose)
    {
        $this->chose = $chose;

        return $this;
    }

    /**
     * Get chose
     *
     * @return string 
     */
    public function getChose()
    {
        return $this->chose;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Chose
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Chose
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}
