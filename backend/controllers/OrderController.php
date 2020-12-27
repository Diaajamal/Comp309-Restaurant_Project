<?php

require_once "backend/services/OrderService.php";

class OrderController
{
    public function getByEmail(){
       $service=new OrderService();
        return $service->getConfirmedOrder();
    }
}