<?php

function Encrypt($value){
    if(empty($value)){ //se o valor vem vazio
        return null;
    }

    try {
       $encryption = \Config\Services::encrypter();
       return bin2hex($encryption->encrypt($value));

    } catch (\Exception $e) {
        return null; //como se o valor se tivesse fornecido de forma vazia
    }
}

function Decrypt($value){
    if(empty($value)){ //se o valor vem vazio
        return null;
    }

    try {
       $encryption = \Config\Services::encrypter();
       return $encryption->decrypt(hex2bin($value));

    } catch (\Exception $e) {
        return null; //como se o valor se tivesse fornecido de forma vazia
    }
}
