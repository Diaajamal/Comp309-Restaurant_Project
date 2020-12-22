<?php


class LineItemDao
{
    public function create($lineItem)
    {
        include 'server.php';

        $item_quantity=$lineItem->getQuantity();
        $item_price = $lineItem->getPrice();
        $dish_id=$lineItem->getDishId();


        $query = "INSERT INTO lineItem (id,quantity, price,dish_id) VALUES ('uniqid()', 
                                                          ' $item_quantity', '$item_price','$dish_id')";
        $result = $connection->query($query);

        if (!$result) die($connection->error);

        $connection->close();
    }

}