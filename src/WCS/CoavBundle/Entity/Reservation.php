<?php

namespace WCS\CoavBundle\Entity;

/**
 * Reservation
 */
class Reservation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $nbSeats;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Reservation
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * Set nbSeats
     *
     * @param integer $nbSeats
     *
     * @return Reservation
     */
    public function setNbSeats($nbSeats)
    {
        $this->nbSeats = $nbSeats;

        return $this;
    }

    /**
     * Get nbSeats
     *
     * @return int
     */
    public function getNbSeats()
    {
        return $this->nbSeats;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $passenger;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->passenger = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add passenger
     *
     * @param \WCS\CoavBundle\Entity\User $passenger
     *
     * @return Reservation
     */
    public function addPassenger(\WCS\CoavBundle\Entity\User $passenger)
    {
        $this->passenger[] = $passenger;

        return $this;
    }

    /**
     * Remove passenger
     *
     * @param \WCS\CoavBundle\Entity\User $passenger
     */
    public function removePassenger(\WCS\CoavBundle\Entity\User $passenger)
    {
        $this->passenger->removeElement($passenger);
    }

    /**
     * Get passenger
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPassenger()
    {
        return $this->passenger;
    }
}
