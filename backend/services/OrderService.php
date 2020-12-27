<?php

require_once  'backend/dao/OrderDao.php';

class OrderService
{
    public function getConfirmedOrder(){
         $order =new OrderDao();
       return $order->adminGetConfirmed();

    }
}