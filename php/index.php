<?php
$host = 'db'; //service name from docker-composer.yml
$user = 'dockeruser';
$password = 'dockerpass';
$db = 'docker_db';

$conn = new mysqli($host, $user, $password, $db);
if($conn->connect_error){
echo 'connection failed' . $conn->connect_error;
}

echo 'Successfully connected to MYSQL';



?>
