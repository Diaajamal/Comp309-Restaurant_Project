<?php
require_once 'backend/controllers/BookingController.php';
require_once 'backend/models/Booking.php';


$e_name = $_POST['e_name'];
$date=$_POST['date'];
$time=$_POST['time'];
$guest=$_POST['guest'];
$c_name=$_POST['c_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$msg=$_POST['msg'];


if (!empty($e_name) || !empty($date) || !empty($time) || !empty($guest) || !empty($c_name)|| !empty($email)|| !empty($phone)|| !empty($msg)) {
    $booking_controller = new BookingController();
    $booking_add = new Booking();
    $booking_add->setEventName($e_name);
    $booking_add->setDate($date);
    $booking_add->setTime($time);
    $booking_add->setGuest($guest);
    $booking_add->setContactName($c_name);
    $booking_add->setEmail($email);
    $booking_add->setPhoneNumber($phone);
    $booking_add->setMsg($msg);

    $booking_controller->create($booking_add);
    echo 'Thanks For Your Response.We will be in touch '.'<br>';
}

?>
