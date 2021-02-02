<?php

const KEY = '111111-2222-3333-4444-5555555555';
const URL = 'https://rest.farmaconnect.es/';

$ch = curl_init(URL);

$headers = array(
    'Content-Type:application/json',
    'TOKEN_KEY:'.KEY
);

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

curl_close($ch);

?>