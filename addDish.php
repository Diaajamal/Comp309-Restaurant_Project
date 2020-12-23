<?php
require_once 'backend/controllers/DishController.php';
require_once 'backend/models/Dish.php';

    $dishController = new DishController();
    $dishAdd = new Dish();
    $name = $_POST['dishName'];
    $price = $_POST['dishPrice'];


    $dishAdd = new Dish();
    $dishAdd->setPrice($price);
    $dishAdd->setName($name);
    $dishAdd-> setId(uniqid());

    $dishController->create($dishAdd);
    echo "Account have been created !";
print_r($_COOKIE)?>