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
 * secretKey的出参
 *
 * @method string getSecretID() 获取secret id
 * @method void setSecretID(string $SecretID) 设置secret id
 * @method string getSecretKey() 获取secret key
 * @method void setSecretKey(string $SecretKey) 设置secret key
 */
class AgentAppSecretKeyVO extends AbstractModel
{
    /**
     * @var string secret id
     */
    public $SecretID;

    /**
     * @var string secret key
     */
    public $SecretKey;

    /**
     * @param string $SecretID secret id
     * @param string $SecretKey secret key
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
        if (array_key_exists("SecretID",$param) and $param["SecretID"] !== null) {
            $this->SecretID = $param["SecretID"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }
    }
}
