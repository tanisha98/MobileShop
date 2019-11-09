<?php
$db['db_host']="us-cdbr-iron-east-05.cleardb.net";
$db['db_user']="b5c3d9c88997cb";
$db['db_pass']="c8f0f81e";
$db['db_name']="heroku_a64a07dd21f9271";

foreach($db as $key => $value){
    define(strtoupper($key),$value);
    
}
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

?>
<!-- mysql://b5c3d9c88997cb:c8f0f81e@us-cdbr-iron-east-05.cleardb.net/heroku_a64a07dd21f9271?reconnect=true -->