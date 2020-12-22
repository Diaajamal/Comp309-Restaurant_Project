<?php
require_once 'backend/controllers/LineItemController.php';
require_once 'backend/models/LineItem.php';
require_once 'backend/controllers/DishController.php';
require_once 'backend/models/Dish.php';


 $lineItem_controller=  new LineItemController();

    $quantity=$_POST['quantity'];
    $name=$_POST['dish'];

    $dishController =new DishController();

    $dishFind=new Dish();
    $result1=$dishController->getByName($name);
    $row1=mysqli_fetch_array($result1);
    $lineItem=new LineItem();
    $lineItem->setQuantity($quantity);
    echo $row1[2];
    $lineItem->setPrice($quantity * $row1[2]);
    $lineItem->setDishId($row1[0]);

    $lineItem_controller->create($lineItem);

    echo '<br>';
    echo 'created';

 ?>