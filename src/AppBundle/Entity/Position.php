<?php
/**
 * Created by PhpStorm.
 * User: slk500
 * Date: 18.07.16
 * Time: 20:58
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/*
 * Football will have attack, defense, goalkeeper
 * Baseball will have attack, defense, pitcher
 */


/**
 * @ORM\Entity
 * @ORM\Table(name="position")
 */
class Position
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
     * @var Sport
     *
     * @ORM\ManyToOne(targetEntity="Sport")
     * @ORM\JoinColumn(name="sport_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $sport;

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
     * @return Sport
     */
    public function getSport()
    {
        return $this->sport;
    }

    /**
     * @param Sport $sport
     * @return $this
     */
    public function setSport($sport)
    {
        $this->sport = $sport;

        return $this;
    }


}