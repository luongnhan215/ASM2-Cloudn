<?php

# Heroku credential 
$host_heroku = "ec2-67-202-63-147.compute-1.amazonaws.com";
$db_heroku = "d3vburufppb93m";
$user_heroku = "ryhqxryperssei";
$pw_heroku = "ecafdd47aeb9b569952c2094ea11e7a8714eb24de1dbac9a8a088d77d0065f9f";
# Create connection to Heroku Postgres
$conn_uri = "postgres://ryhqxryperssei:ecafdd47aeb9b569952c2094ea11e7a8714eb24de1dbac9a8a088d77d0065f9f@ec2-67-202-63-147.compute-1.amazonaws.com:5432/d3vburufppb93m";
$conn = pg_connect($conn_uri);

if (!$conn)
{
  die('Error: Could not connect: ' . pg_last_error());
}
?>