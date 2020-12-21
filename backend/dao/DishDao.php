<?php


class DishDao
{
    public function create($dish)
    {
        include 'server.php';

        $dishName=$dish->getName();
        $dishPrice = $dish->getPrice();
        $dishId=$dish->getId();



        $query = "INSERT INTO dish (id,name , price) VALUES ( '$dishId' ,'$dishName', '$dishPrice')";
        $result = $connection->query($query);

        if (!$result) die($connection->error);

        $connection->close();
    }

}