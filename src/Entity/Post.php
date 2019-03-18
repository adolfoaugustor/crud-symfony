<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PostRepository")
 */
class Post
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $content;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $status = true;

    /**
     * @var Category
     * @ORM\ManyToMany(targetEntity="App\Entity\Category", inversedBy="posts")
     * @ORM\JoinTable(name="category_post")
     */
    private $category;

    /*
     * @var Author
     * @ORM\ManyToMany(targetEntity="App\Entity\Author", inversedBy="posts")
    */
    private $author;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Post
     */
    public function setTitle(string $title): ?Post
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Post
     */
    public function setContent(string $content): ?Post
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return bool
     */
    public function isStatus(): ?bool
    {
        return $this->status;
    }

    /**
     * @param bool $status
     * @return Post
     */
    public function setStatus(bool $status): ?Post
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return Category
     */
    public function getCategory(): ?Category
    {
        return $this->category;
    }

    /**
     * @param Category $category
     * @return Post
     */
    public function setCategory(Category $category): ?Post
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     * @return Post
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }


}
