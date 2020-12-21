<?php
require_once  'backend/dao/DishDao.php';
class DishService
{
    public function create($dish){
        $dishDao = new dishDao();
        $dishDao->create($dish);
    }



}