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

}