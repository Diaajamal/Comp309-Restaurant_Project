<?php


class LineItemDao
{
    public function create($lineItem)
    {
        include 'server.php';
        $itemId=uniqid();
        $item_quantity=$lineItem->getQuantity();
        $item_price = $lineItem->getPrice();
        $dish_id=$lineItem->getDishId();
        $email=$lineItem->getEmail();
        $dish_name=$lineItem->getDishName();
        $status='PENDING';
        $query = "INSERT INTO lineitem (id,quantity, price,dish_id,Email,dish_name,Status) VALUES ('$itemId', 
 ' $item_quantity', '$item_price','$dish_id','$email','$dish_name',  '$status') ";
        $result = $connection->query($query);

        if (!$result) die($connection->error);
        $itemId=0;
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
        $date = date("m/d/Y h:i:s a", time());

        $query="insert into myorder(id) values('$id')";
        $result = $connection->query($query);

       $query1= "UPDATE lineitem set Status='CONFIRMED',order_id='$id' where status='PENDING' and email='$email'";

        $query= "Update myorder o set email= '$email'";
        $result = $connection->query($query);
        $result1 = mysqli_query($connection,$query1);

        $query=" Update myorder o set price= (select sum(price) from lineitem l where l.order_id='$id') where o.id='$id'";
        $result = $connection->query($query);

        $query=" Update myorder o set DateCreated='$date' where id='$id'";

        $result = $connection->query($query);


        return  $result1;



    }
    public function findByOrderId($orderId)
    {
        include 'server.php';

        $query="select id,quantity,Email,dish_name from lineitem where order_id='$orderId' and Status='CONFIRMED'";
        $result = mysqli_query($connection,$query);
        return  $result;

    }

    function random_string($length) {
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'));

        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }

        return $key;
    }


}