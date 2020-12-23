<?php

require_once "backend/services/BookingService.php";

class BookingController
{
    public function getAll()
    {
        $booking_ser = new BookingService();
        return $booking_ser->getAll();
    }

    public function create($booking)
    {
        $booking_ser = new BookingService();
        return $booking_ser->create($booking);
    }

    public function update($booking)
    {
        $booking_ser = new BookingService();
        return $booking_ser->update($booking);
    }

    public function delete($booking)
    {
        $booking_ser = new BookingService();
        return $booking_ser->delete($booking);
    }
}
