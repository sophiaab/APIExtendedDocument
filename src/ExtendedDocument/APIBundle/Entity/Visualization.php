<?php

namespace ExtendedDocument\APIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;

/**
 * Visualization
 *
 * @ORM\Table(name="visualization")
 * @ORM\Entity(repositoryClass="ExtendedDocument\APIBundle\Repository\VisualizationRepository")
 */
class Visualization implements JsonSerializable
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
     * @var float
     *
     * @ORM\Column(name="quaternionX", type="float", nullable=true)
     */
    private $quaternionX;

    /**
     * @var float
     *
     * @ORM\Column(name="quaternionY", type="float", nullable=true)
     */
    private $quaternionY;

    /**
     * @var float
     *
     * @ORM\Column(name="quaternionZ", type="float", nullable=true)
     */
    private $quaternionZ;

    /**
     * @var float
     *
     * @ORM\Column(name="quaternionW", type="float", nullable=true)
     */
    private $quaternionW;

    /**
     * @var float
     *
     * @ORM\Column(name="positionX", type="float", nullable=true)
     */
    private $positionX;

    /**
     * @var float
     *
     * @ORM\Column(name="positionY", type="float", nullable=true)
     */
    private $positionY;

    /**
     * @var float
     *
     * @ORM\Column(name="positionZ", type="float", nullable=true)
     */
    private $positionZ;

    /**
     * @ORM\OneToOne(targetEntity="Document", mappedBy="id")
     */
    private $document;


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
     * Set quaternionX
     *
     * @param float $quaternionX
     *
     * @return Visualization
     */
    public function setQuaternionX($quaternionX)
    {
        $this->quaternionX = $quaternionX;

        return $this;
    }

    /**
     * Get quaternionX
     *
     * @return float
     */
    public function getQuaternionX()
    {
        return $this->quaternionX;
    }

    /**
     * Set quaternionY
     *
     * @param float quaternionY
     *
     * @return Visualization
     */
    public function setQuaternionY($quaternionY)
    {
        $this->quaternionY = $quaternionY;

        return $this;
    }

    /**
     * Get quaternionY
     *
     * @return float
     */
    public function getQuaternionY()
    {
        return $this->quaternionY;
    }

    /**
     * Set quaternionZ
     *
     * @param float quaternionZ
     *
     * @return Visualization
     */
    public function setQuaternionZ($quaternionZ)
    {
        $this->quaternionZ = $quaternionZ;

        return $this;
    }

    /**
     * Get quaternionZ
     *
     * @return float
     */
    public function getQuaternionZ()
    {
        return $this->quaternionZ;
    }

    /**
     * Set quaternionW
     *
     * @param float $quaternionW
     *
     * @return Visualization
     */
    public function setQuaternionW($quaternionW)
    {
        $this->quaternionW = $quaternionW;

        return $this;
    }

    /**
     * Get quaternionW
     *
     * @return float
     */
    public function getQuaternionW()
    {
        return $this->quaternionW;
    }

    /**
     * Set positionX
     *
     * @param float $positionX
     *
     * @return Visualization
     */
    public function setPositionX($positionX)
    {
        $this->positionX = $positionX;

        return $this;
    }

    /**
     * Get positionX
     *
     * @return float
     */
    public function getPositionX()
    {
        return $this->positionX;
    }

    /**
     * Set positionY
     *
     * @param float $positionY
     *
     * @return Visualization
     */
    public function setPositionY($positionY)
    {
        $this->positionY = $positionY;

        return $this;
    }

    /**
     * Get positionY
     *
     * @return float
     */
    public function getPositionY()
    {
        return $this->positionY;
    }

    /**
     * Set positionZ
     *
     * @param float $positionZ
     *
     * @return Visualization
     */
    public function setPositionZ($positionZ)
    {
        $this->positionZ = $positionZ;

        return $this;
    }

    /**
     * Get positionZ
     *
     * @return float
     */
    public function getPositionZ()
    {
        return $this->positionZ;
    }

    /**
     * Set document
     *
     * @param \ExtendedDocument\APIBundle\Entity\Document $document
     *
     * @return Visualization
     */
    public function setDocument(\ExtendedDocument\APIBundle\Entity\Document $document = null)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return \ExtendedDocument\APIBundle\Entity\Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        $arrayJson = array();
        foreach ($this as $key =>$value){
            $arrayJson[$key] = $value;
        }
        return $arrayJson;
    }
}
