<?php

namespace SON\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity(repositoryClass="SON\Entity\UserRepository")
 * @Table(name="users")
 */
class User{

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @Column(type="string", length=100)
     */
    private $name;

    /**
     * @Column(type="string", length=100, unique=true)
     */
    private $email;

    /**
     * @OneToMany(targetEntity="SON\Entity\Post",cascade={"persist"}, mappedBy="user")
     */
    private $posts;

    /**
     * @Embedded(class="SON\Entity\Address")
     */
    private $address;

    //OneToOne - ManyToOne exclusivo

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->posts = new ArrayCollection();
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function addPost(Post $post){
        //$this->posts[] = $post;
        $this->posts->add($post);
        $post->setUser($this);
        return $this;
    }

    public function getPosts(){
        return $this->posts;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     * @return User
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;
        return $this;
    }




}