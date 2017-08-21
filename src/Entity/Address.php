<?php

namespace SON\Entity;

/**
 * @Embeddable
 */
class Address
{
    /**
     * @Column(type="string")
     */
    private $street;

    /**
     * @Column(type="string")
     */
    private $city;

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }


}