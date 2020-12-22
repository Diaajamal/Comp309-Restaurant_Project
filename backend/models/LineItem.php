<?php


class LineItem
{
    private $id;

    private $dishId;
    private $price;
    private $quantity;
    private $email;
    private $dishName;

    /**
     * @return mixed
     */
    public function getDishName()
    {
        return $this->dishName;
    }

    /**
     * @param mixed $dishName
     */
    public function setDishName($dishName): void
    {
        $this->dishName = $dishName;
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
    public function setEmail($email): void
    {
        $this->email = $email;
    }
    /**
     * @return mixed
     */
    public function getDishId()
    {
        return $this->dishId;
    }

    /**
     * @param mixed $dishId
     */
    public function setDishId($dishId): void
    {
        $this->dishId = $dishId;
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
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */

}