<?php
require_once __DIR__.'/../../../vendor/autoload.php';

class Aes
{
    public $key = '';
    public $iv = '';

    public function __construct($config)
    {
        foreach($config as $k => $v){
            $this->$k = $v;
        }
    }

    //Decrypt
    public function aesDe($data){
        return openssl_decrypt(base64_decode($data),  $this->method, $this->key, OPENSSL_RAW_DATA, $this->key);
    }
}

$config = [
    'key'	=>	'********************', // Fill in CallbackUrlKey here
    'method'	=> 'AES-256-CBC' //Encryption method
];

$obj = new Aes($config);

// Fill in received ciphertext here
$data = '*****************************';

echo $obj->aesDe($data);//Decrypt