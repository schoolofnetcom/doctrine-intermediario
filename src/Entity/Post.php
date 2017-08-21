<?php

namespace SON\Entity;

//table pivot - post_category 1 com 1, 1 com 2, 1 com 3
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="posts")
 */
class Post
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @Column(type="string", length=100)
     */
    private $title;

    /**
     * @Column(type="text")
     */
    private $content;
    /*
     * * @JoinTable(name="post_categories",
     *      joinColumns={@JoinColumn(name="posts_id",referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="categories_id",referencedColumnName="id")}
     */
    /**
     * @ManyToMany(targetEntity="SON\Entity\Category",inversedBy="posts",cascade={"persist","remove"})
     * )
     */
    private $categories;

    /**
     * @ManyToOne(targetEntity="SON\Entity\User",cascade={"persist"},inversedBy="posts")
     */
    private $user;

    /**
     * Post constructor.
     */
    public function __construct()
    {
        $this->categories = new ArrayCollection();
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     * @return Post
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    public function addCategory(Category $category){
        $this->categories->add($category);
        $category->getPosts()->add($this);
        return $this;
    }

    public function getCategories(){
        return $this->categories;
    }

    public function setUser(User $user){
        $this->user = $user;
        return $this;
    }
}