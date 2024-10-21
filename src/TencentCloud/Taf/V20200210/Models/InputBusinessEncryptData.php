<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Taf\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务入参
 *
 * @method integer getEncryptMethod() 获取加密方式；0：AES;1:DES
 * @method void setEncryptMethod(integer $EncryptMethod) 设置加密方式；0：AES;1:DES
 * @method string getEncryptData() 获取业务数据加密字符串
 * @method void setEncryptData(string $EncryptData) 设置业务数据加密字符串
 * @method integer getEncryptMode() 获取加密模式；0：ECB,1:CBC;2:CTR;3:CFB;4:OFB
 * @method void setEncryptMode(integer $EncryptMode) 设置加密模式；0：ECB,1:CBC;2:CTR;3:CFB;4:OFB
 * @method integer getPaddingType() 获取填充模式;0:ZERO ;1:PKCS5;3:PKCS7
 * @method void setPaddingType(integer $PaddingType) 设置填充模式;0:ZERO ;1:PKCS5;3:PKCS7
 */
class InputBusinessEncryptData extends AbstractModel
{
    /**
     * @var integer 加密方式；0：AES;1:DES
     */
    public $EncryptMethod;

    /**
     * @var string 业务数据加密字符串
     */
    public $EncryptData;

    /**
     * @var integer 加密模式；0：ECB,1:CBC;2:CTR;3:CFB;4:OFB
     */
    public $EncryptMode;

    /**
     * @var integer 填充模式;0:ZERO ;1:PKCS5;3:PKCS7
     */
    public $PaddingType;

    /**
     * @param integer $EncryptMethod 加密方式；0：AES;1:DES
     * @param string $EncryptData 业务数据加密字符串
     * @param integer $EncryptMode 加密模式；0：ECB,1:CBC;2:CTR;3:CFB;4:OFB
     * @param integer $PaddingType 填充模式;0:ZERO ;1:PKCS5;3:PKCS7
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("EncryptMethod",$param) and $param["EncryptMethod"] !== null) {
            $this->EncryptMethod = $param["EncryptMethod"];
        }

        if (array_key_exists("EncryptData",$param) and $param["EncryptData"] !== null) {
            $this->EncryptData = $param["EncryptData"];
        }

        if (array_key_exists("EncryptMode",$param) and $param["EncryptMode"] !== null) {
            $this->EncryptMode = $param["EncryptMode"];
        }

        if (array_key_exists("PaddingType",$param) and $param["PaddingType"] !== null) {
            $this->PaddingType = $param["PaddingType"];
        }
    }
}
