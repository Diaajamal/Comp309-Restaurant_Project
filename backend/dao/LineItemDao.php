<?php


class LineItemDao
{
    public function create($lineItem)
    {
        include 'server.php';

        $item_quantity=$lineItem->getQuantity();
        $item_price = $lineItem->getPrice();
        $dish_id=$lineItem->getDishId();
        $email=$lineItem->getEmail();
        $dish_name=$lineItem->getDishName();

        $query = "INSERT INTO lineItem (id,quantity, price,dish_id,Email,dish_name) VALUES ('uniqid()', 
                                                          ' $item_quantity', '$item_price','$dish_id','$email','$dish_name')";
        $result = $connection->query($query);

        if (!$result) die($connection->error);

        $connection->close();
    }

    public function getByEmail($email){
        include 'server.php';

        $query = "select l.price,l.quantity,l.dish_name  from lineItem l where email='$email'";

        $result = mysqli_query($connection,$query);
        return  $result;


    }
}