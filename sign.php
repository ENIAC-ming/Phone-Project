<?php
if(!session_id())session_start();
header('Content-Type:application/json; charset=utf-8');
$pw = $_GET['password'];
if ($pw == "password")
{
    $_SESSION['sign']=true;
    echo '{"success":true}';
}
else
{
    echo '{"success":false}';
}
?>
