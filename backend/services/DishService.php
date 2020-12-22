<?php
require_once  'backend/dao/DishDao.php';
class DishService
{
    public function create($dish){
        $dishDao = new DishDao();
        $dishDao->create($dish);
    }



    public function getAll(){
        $dish_dao = new DishDao();
        return $dish_dao->getAll();
    }

    public function getByName($name){
        $dish_dao = new DishDao();
        return $dish_dao->getByName($name);
    }

}