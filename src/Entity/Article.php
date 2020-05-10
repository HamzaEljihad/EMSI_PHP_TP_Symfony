<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $Title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Content;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorie", inversedBy="articles")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Category;

    public function getId(): ?int
    {
        return $this->id;
    }



    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(?string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->Content;
    }

    public function setContent(?string $Content): self
    {
        $this->Content = $Content;

        return $this;
    }

    public function getCategory(): ?Categorie
    {
        return $this->Category;
    }

    public function setCategory(?Categorie $Category): self
    {
        $this->Category = $Category;

        return $this;
    }
}
