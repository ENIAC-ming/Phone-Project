<?php
if(!session_id())session_start();
header('Content-Type:application/json; charset=utf-8');
if (isset($_SESSION['sign']))
{
    echo `termux-sms-list -l 9`;
}
else
{
    echo '[{"number":"未登录"}]';
}
?>

