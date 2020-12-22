<?php
require_once  'backend/dao/LineItemDao.php';
class LineItemService
{
    public function create($lineItem){
        $lineItemDao = new LineItemDao();
        $lineItemDao->create($lineItem);
    }



}