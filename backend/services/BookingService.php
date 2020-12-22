<?php

require_once "backend/dao/BookingDao.php";

class BookingService
{

    public function getAll(){
        $booking_dao = new BookingDao();
        return $booking_dao->getAll();
    }

    public function create($booking){
        $booking_dao = new BookingDao();
        $booking_dao->create($booking);
    }

    public function update($booking){
        $booking_dao = new BookingDao();
        $booking_dao->update($booking);
    }

    public function delete($booking){
        $booking_dao = new BookingDao();
        $booking_dao->delete($booking);
    }
}
