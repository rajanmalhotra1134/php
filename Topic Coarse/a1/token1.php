<?php

function genToken($salt) {
    $secret = openssl_random_pseudo_bytes(16);

    $apiKey = hash_hmac('sha256', $salt, $secret);
    $apiKey = base64_encode($apiKey);
    $apiKey = str_replace('=', '', $apiKey);

    return $apiKey;
}

$salt = 'UsernameEmail@gmail.com';
echo 'pk_' . genToken($salt);
echo "\n";
echo 'sk_' . genToken($salt);
echo "\n";
?>