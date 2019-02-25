<?php

//echo 'Mi Heroku PHP APP';

$challenge = $_REQUEST['hub_challenge'];
$verify_token = $_REQUEST['hub_verify_token'];

echo $verify_token;
if ($verify_token === 'abc123'){
  echo $challenge;
}