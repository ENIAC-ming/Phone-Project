<?php
if(!session_id())session_start();
header('Content-Type:application/json; charset=utf-8');
$pw = $_GET['password'];
$veri = 'password'; // Set Password Here
$veri = md5(veri + floor(time()/10000));
if ($pw == $veri)
{
    $_SESSION['sign'] = true;
    echo '{"success":true}';
}
else
{
    echo '{"success":false}';
}
?>
