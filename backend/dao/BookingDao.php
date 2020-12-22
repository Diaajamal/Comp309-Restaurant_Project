<?php

require_once "backend/models/Booking.php";


class BookingDao
{
    public function getAll()
    {
        include 'server.php';

        $query = "SELECT * FROM booking";
        $result = $connection->query($query);
        if (!$result) die($connection->error);

        $arr_booking = array();
        $rows = $result->num_rows;

        for ($j = 0; $j < $rows; ++$j) {
            $booking = new Booking();
            $result->data_seek($j);
            $booking->setBookingId($result->fetch_assoc()['id']);
            $result->data_seek($j);
            $booking->setContactName($result->fetch_assoc()['c_name']);
            $result->data_seek($j);
            $booking->setdate($result->fetch_assoc()['date']);
            $result->data_seek($j);
            $booking->setGuest($result->fetch_assoc()['guest']);
            $result->data_seek($j);
            $booking->setEmail($result->fetch_assoc()['email']);
            $result->data_seek($j);
            $booking->setMsg($result->fetch_assoc()['msg']);
            $result->data_seek($j);
            $booking->setPhoneNumber($result->fetch_assoc()['phone']);
            $result->data_seek($j);
            $booking->setEventName($result->fetch_assoc()['e_name']);
            $result->data_seek($j);
            $booking->setTime($result->fetch_assoc()['time']);
            $arr_booking[] = $booking;
        }

        $result->close();
        $connection->close();
        return $arr_booking;
    }

    public function create($booking)
    {
        include 'server.php';

        $B_cn = $booking->getContactName();
        $B_d = $booking->getDate();
        $B_e = $booking->getEmail();
        $B_g = $booking->getGuest();
        $B_m = $booking->getMsg();
        $B_en = $booking->getEventName();
        $B_p = $booking->getPhoneNumber();
        $B_t = $booking->getTime();

        $query = "INSERT INTO booking (c_name, date, email, guest, msg, e_name, phone, time) VALUES ('$B_cn', '$B_d', '$B_e', '$B_g', '$B_m', '$B_en', '$B_p', '$B_t')";
        $result = $connection->query($query);

        if (!$result) die($connection->error);

        $connection->close();
    }

    public function update($booking)
    {
        include 'server.php';

        $B_i = $booking->getId();
        $B_cn = $booking->getContactName();
        $B_d = $booking->getDate();
        $B_e = $booking->getEmail();
        $B_g = $booking->getGuest();
        $B_m = $booking->getMsg();
        $B_en = $booking->getEventName();
        $B_p = $booking->getPhone();
        $B_t = $booking->getTime();
        $query = "UPDATE booking SET c_name = '$B_cn', date = '$B_d', email = '$B_e', guest = '$B_g', msg = '$B_m', e_name = '$B_en', phone = '$B_p', time = '$B_t', WHERE id = $B_i";
        $result = $connection->query($query);

        if (!$result) die($connection->error);

        $connection->close();
    }

    public function delete($e_n)
    {
        include 'server.php';

        $query = "DELETE FROM booking WHERE id = $B_i";
        $result = $connection->query($query);

        if (!$result) die($connection->error);

        $connection->close();
    }
}
