<?php
$dbhost='localhost';
$dbname='test';
$dbuser='root';
$dbpass='';


$mysqli=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname,);

if(!$mysqli)
{
    echo 'not connected';
}
else
{
    echo 'connected';
}

?>