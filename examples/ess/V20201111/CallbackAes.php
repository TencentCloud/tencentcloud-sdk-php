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

    //解密
    public function aesDe($data){
        return openssl_decrypt(base64_decode($data),  $this->method, $this->key, OPENSSL_RAW_DATA, $this->key);
    }
}

$config = [
    'key'	=>	'********************', // 此处填入CallbackUrlKey
    'method'	=> 'AES-256-CBC' //加密方式
];

$obj = new Aes($config);

// 此处填入收到的密文
$data = '*****************************';

echo $obj->aesDe($data);//解密