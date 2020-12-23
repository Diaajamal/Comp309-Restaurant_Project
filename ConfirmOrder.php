<?php


require_once 'backend/controllers/LineItemController.php';
require_once 'backend/models/Dish.php';

$itemController = new LineItemController();
$itemController ->confirmOrder(array_values($_COOKIE)[0]);

header("Location: addLineItem.php");
