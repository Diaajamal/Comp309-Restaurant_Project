<?php

require_once "backend/services/LineItemService.php";

class LineItemController
{

    public function create($lineItem){
        $lineItemService = new LineItemService();
        $lineItemService->create($lineItem);
    }
    public function getByEmail($email){
        $lineItemService = new LineItemService();
       return $lineItemService->getByEmail($email);


    }
    public function confirmOrder($email){
        $lineItemService = new LineItemService();
        return $lineItemService->confirmOrder($email);


    }

    public function getById($orderId){
        $lineItemService = new LineItemService();
        return $lineItemService->getOrderId($orderId);


    }



}