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


}