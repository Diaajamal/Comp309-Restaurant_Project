<?php

require_once "backend/services/DishService.php";

class DishController
{

    public function create($dish){
        $dishService = new DishService();
        $dishService->create($dish);
    }

}