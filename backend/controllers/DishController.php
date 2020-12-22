<?php

require_once "backend/services/DishService.php";

class DishController
{

    public function create($dish){
        $dishService = new DishService();
        $dishService->create($dish);
    }

    public function getAll()
    {
        $dish_ser = new DishService();
        return $dish_ser->getAll();
    }

    public function getByName($name)
    {
        $dish_ser = new DishService();
        return $dish_ser->getByName($name);
    }


}