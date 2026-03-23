<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建Agent应用的返回值，根据创建的AuthType，返回ApiKey或者SecretKey
 *
 * @method string getID() 获取app id 
 * @method void setID(string $ID) 设置app id 
 * @method string getApiKey() 获取如果authType为apiKey时，返回该字段
 * @method void setApiKey(string $ApiKey) 设置如果authType为apiKey时，返回该字段
 * @method string getSecretKey() 获取如果authType为secretKey时，返回该字段
 * @method void setSecretKey(string $SecretKey) 设置如果authType为secretKey时，返回该字段
 * @method string getSecretID() 获取如果authType为secretKey时，返回该字段
 * @method void setSecretID(string $SecretID) 设置如果authType为secretKey时，返回该字段
 */
class CreateAgentAppResp extends AbstractModel
{
    /**
     * @var string app id 
     */
    public $ID;

    /**
     * @var string 如果authType为apiKey时，返回该字段
     */
    public $ApiKey;

    /**
     * @var string 如果authType为secretKey时，返回该字段
     */
    public $SecretKey;

    /**
     * @var string 如果authType为secretKey时，返回该字段
     */
    public $SecretID;

    /**
     * @param string $ID app id 
     * @param string $ApiKey 如果authType为apiKey时，返回该字段
     * @param string $SecretKey 如果authType为secretKey时，返回该字段
     * @param string $SecretID 如果authType为secretKey时，返回该字段
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("ApiKey",$param) and $param["ApiKey"] !== null) {
            $this->ApiKey = $param["ApiKey"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("SecretID",$param) and $param["SecretID"] !== null) {
            $this->SecretID = $param["SecretID"];
        }
    }
}
