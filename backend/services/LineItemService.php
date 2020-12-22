<?php
require_once  'backend/dao/LineItemDao.php';
class LineItemService
{
    public function create($lineItem){
        $lineItemDao = new LineItemDao();
        $lineItemDao->create($lineItem);
    }
    public function getByEmail($email){
        $lineItemDao = new LineItemDao();
        return $lineItemDao->getByEmail($email);


    }


}