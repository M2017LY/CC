<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Search added
 *
 * @ORM\Table(name="search")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SearchRepository")
 */
class Search
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
     * @ORM\Column(name="query", type="string", length=150, nullable=true)
     */
    private $query;

    /**
     * @var string
     *
     * @ORM\Column(name="query1", type="string", length=20, nullable=true)
     */
    private $query1;


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
     * Set query
     *
     * @param string $query
     *
     * @return Search
     */
    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get query
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Set query1
     *
     * @param string $query1
     *
     * @return Search
     */
    public function setQuery1($query1)
    {
        $this->query1 = $query1;

        return $this;
    }

    /**
     * Get query1
     *
     * @return string
     */
    public function getQuery1()
    {
        return $this->query1;
    }
}

