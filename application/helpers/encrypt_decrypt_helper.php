<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
define("ENCRYPTION_KEY", "dragbin123*");

function encrypt($pure_string) {
    $encrypted_string = openssl_encrypt($pure_string, "AES-128-ECB", ENCRYPTION_KEY);
    return $encrypted_string;
}

function decrypt($encrypted_string) {
    $decrypted_string = openssl_decrypt($encrypted_string,"AES-128-ECB",ENCRYPTION_KEY);
    return $decrypted_string;
}