<?php
if(!session_id())session_start();
header('Content-Type:application/json; charset=utf-8');
if(isset($_SESSION['sign']))
{
    $number = $_GET['number'];
    $text = $_GET['text'];
    system("termux-sms-send -n '".$number."' '".$text."'");
}
?>{}

