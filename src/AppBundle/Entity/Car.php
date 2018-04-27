<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Car
 *
 * @ORM\Table(name="car")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CarRepository")
 */
class Car
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=255)
     */
    private $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=255)
     */
    private $model;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var float
     *
     * @ORM\Column(name="engine", type="float")
     */
    private $engine;

    /**
     * @var float
     *
     * @ORM\Column(name="fuel", type="float")
     */
    private $fuel;

    /**
     * @var float
     *
     * @ORM\Column(name="torque", type="float")
     */
    private $torque;

    /**
     * @var float
     *
     * @ORM\Column(name="topSpeed", type="float")
     */
    private $topSpeed;

    /**
     * @var int
     *
     * @ORM\Column(name="doors", type="integer")
     */
    private $doors;
    /**
     * @var int
     *
     * @ORM\Column(name="wheels", type="integer")
     */
    private $wheels;

    /**
     * @var bool
     *
     * @ORM\Column(name="convertable", type="boolean")
     */
    private $convertable;

    /**
     * @var float
     *
     * @ORM\Column(name="active", type="boolean", options={"default" : true})
     */
    private $active;


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
     * Set brand
     *
     * @param string $brand
     * @return Car
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set model
     *
     * @param string $model
     * @return Car
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Car
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set topSpeed
     *
     * @param float $topSpeed
     * @return Car
     */
    public function setTopSpeed($topSpeed)
    {
        $this->topSpeed = $topSpeed;

        return $this;
    }

    /**
     * Get topSpeed
     *
     * @return float 
     */
    public function getTopSpeed()
    {
        return $this->topSpeed;
    }

    /**
     * Set doors
     *
     * @param integer $doors
     * @return Car
     */
    public function setDoors($doors)
    {
        $this->doors = $doors;

        return $this;
    }

    /**
     * Get doors
     *
     * @return integer 
     */
    public function getDoors()
    {
        return $this->doors;
    }

    /**
     * Set convertable
     *
     * @param boolean $convertable
     * @return Car
     */
    public function setConvertable($convertable)
    {
        $this->convertable = $convertable;

        return $this;
    }

    /**
     * Get convertable
     *
     * @return boolean 
     */
    public function getConvertable()
    {
        return $this->convertable;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Car
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set engine
     *
     * @param float $engine
     * @return Car
     */
    public function setEngine($engine)
    {
        $this->engine = $engine;

        return $this;
    }

    /**
     * Get engine
     *
     * @return float 
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * Set torque
     *
     * @param float $torque
     * @return Car
     */
    public function setTorque($torque)
    {
        $this->torque = $torque;

        return $this;
    }

    /**
     * Get torque
     *
     * @return float 
     */
    public function getTorque()
    {
        return $this->torque;
    }

    /**
     * Set fuel
     *
     * @param float $fuel
     * @return Car
     */
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;

        return $this;
    }

    /**
     * Get fuel
     *
     * @return float 
     */
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * Set wheels
     *
     * @param integer $wheels
     * @return Car
     */
    public function setWheels($wheels)
    {
        $this->wheels = $wheels;

        return $this;
    }

    /**
     * Get wheels
     *
     * @return integer 
     */
    public function getWheels()
    {
        return $this->wheels;
    }
}
