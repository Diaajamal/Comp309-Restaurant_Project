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
        $status='PENDING';
        $query = "INSERT INTO lineItem (id,quantity, price,dish_id,Email,dish_name,Status) VALUES ('uniqid()', 
                                                          ' $item_quantity', '$item_price','$dish_id','$email','$dish_name',
                                                                                 '$status')";
        $result = $connection->query($query);

        if (!$result) die($connection->error);

        $connection->close();
    }

    public function getByEmail($email){
        include 'server.php';

        $query = "select l.price,l.quantity,l.dish_name  from lineItem l where email='$email' and Status='PENDING'";

        $result = mysqli_query($connection,$query);
        return  $result;


    }

    public function confirmOrder($email){
        include 'server.php';
        $id=uniqid();
        $query = "UPDATE lineitem set Status='CONFIRMED',order_id='$id' where status='PENDING' and email='$email'  ";
        $result = mysqli_query($connection,$query);
        return  $result;



    }
}