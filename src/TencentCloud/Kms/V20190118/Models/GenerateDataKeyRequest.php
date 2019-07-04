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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getKeyId() 获取CMK全局唯一标识符
 * @method void setKeyId(string $KeyId) 设置CMK全局唯一标识符
 * @method string getKeySpec() 获取指定生成Datakey的加密算法以及Datakey大小，AES_128或者AES_256。
 * @method void setKeySpec(string $KeySpec) 设置指定生成Datakey的加密算法以及Datakey大小，AES_128或者AES_256。
 * @method integer getNumberOfBytes() 获取生成的DataKey的长度，同时指定NumberOfBytes和KeySpec时，以NumberOfBytes为准。最小值为1， 最大值为1024
 * @method void setNumberOfBytes(integer $NumberOfBytes) 设置生成的DataKey的长度，同时指定NumberOfBytes和KeySpec时，以NumberOfBytes为准。最小值为1， 最大值为1024
 * @method string getEncryptionContext() 获取key/value对的json字符串，如果使用该字段，则返回的DataKey在解密时需要填入相同的字符串
 * @method void setEncryptionContext(string $EncryptionContext) 设置key/value对的json字符串，如果使用该字段，则返回的DataKey在解密时需要填入相同的字符串
 */

/**
 *GenerateDataKey请求参数结构体
 */
class GenerateDataKeyRequest extends AbstractModel
{
    /**
     * @var string CMK全局唯一标识符
     */
    public $KeyId;

    /**
     * @var string 指定生成Datakey的加密算法以及Datakey大小，AES_128或者AES_256。
     */
    public $KeySpec;

    /**
     * @var integer 生成的DataKey的长度，同时指定NumberOfBytes和KeySpec时，以NumberOfBytes为准。最小值为1， 最大值为1024
     */
    public $NumberOfBytes;

    /**
     * @var string key/value对的json字符串，如果使用该字段，则返回的DataKey在解密时需要填入相同的字符串
     */
    public $EncryptionContext;
    /**
     * @param string $KeyId CMK全局唯一标识符
     * @param string $KeySpec 指定生成Datakey的加密算法以及Datakey大小，AES_128或者AES_256。
     * @param integer $NumberOfBytes 生成的DataKey的长度，同时指定NumberOfBytes和KeySpec时，以NumberOfBytes为准。最小值为1， 最大值为1024
     * @param string $EncryptionContext key/value对的json字符串，如果使用该字段，则返回的DataKey在解密时需要填入相同的字符串
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeySpec",$param) and $param["KeySpec"] !== null) {
            $this->KeySpec = $param["KeySpec"];
        }

        if (array_key_exists("NumberOfBytes",$param) and $param["NumberOfBytes"] !== null) {
            $this->NumberOfBytes = $param["NumberOfBytes"];
        }

        if (array_key_exists("EncryptionContext",$param) and $param["EncryptionContext"] !== null) {
            $this->EncryptionContext = $param["EncryptionContext"];
        }
    }
}
