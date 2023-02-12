<?php
if(!session_id()) session_start();
header('Content-Type:application/json; charset=utf-8');
if(isset($_SESSION['sign']))
//if($_SESSION['sign'] == true)
{
    echo '{"verify":true}';
}
else
{
    echo '{"verify":false}';
}
?>
