<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;
use AppBundle\Utils\TextTrait;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 * @JMS\ExclusionPolicy("all")
 */
class Product
{
    use TextTrait;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @JMS\Expose
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @JMS\Expose
     *
     * @var string
     */
    protected $name;

    /**
     * @ORM\Column(type="text")
     * @JMS\Expose
     *
     * @var string
     */
    protected $description;

    /**
     * @ORM\Column(type="float")
     * @JMS\Expose
     *
     * @var float
     */
    protected $price;

    /**
     * @ORM\Column(type="integer")
     *
     * @var integer
     */
    protected $stock;

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
     * @return Product
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
     * Set description
     *
     * @param string $description
     * @return Product
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
     * Set price
     *
     * @param float $price
     * @return Product
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
     * Set stock
     *
     * @param integer $stock
     * @return Product
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Has stock available
     *
     * @JMS\VirtualProperty
     * @JMS\SerializedName("hasStockAvailable")
     *
     * @return boolean
     */
    public function hasStockAvailable()
    {
        return ($this->stock > 0);
    }

    /**
     * Get slug
     *
     * @JMS\VirtualProperty
     * @JMS\SerializedName("slug")
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slugify($this->name);
    }

    /**
     * Get string representation
     *
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }
}
