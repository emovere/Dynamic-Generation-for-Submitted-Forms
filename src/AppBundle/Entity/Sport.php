<?php
/**
 * Created by PhpStorm.
 * User: slk500
 * Date: 18.07.16
 * Time: 20:58
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/*
 * Football will have attack, defense, goalkeeper
 * Baseball will have attack, defense, pitcher
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="sport")
 */
class Sport
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var Collection|Position[]
     *
     * @ORM\OneToMany(targetEntity="Position", mappedBy="sport")
     */
    protected $availablePositions;


    public function __constructor()
    {
        $this->availablePositions = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return Position[]|Collection
     */
    public function getAvailablePositions()
    {
        return $this->availablePositions;
    }

    /**
     * @param Position[]|Collection $availablePositions
     * @return $this
     */
    public function setAvailablePositions($availablePositions)
    {
        $this->availablePositions = $availablePositions;

        return $this;
    }





}