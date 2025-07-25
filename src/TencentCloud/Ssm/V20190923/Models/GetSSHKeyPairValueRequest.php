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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetSSHKeyPairValue请求参数结构体
 *
 * @method string getSecretName() 获取凭据名称，此凭据只能为SSH密钥对凭据类型。
 * @method void setSecretName(string $SecretName) 设置凭据名称，此凭据只能为SSH密钥对凭据类型。
 * @method string getSSHKeyId() 获取密钥对ID，是云服务器中密钥对的唯一标识。
 * @method void setSSHKeyId(string $SSHKeyId) 设置密钥对ID，是云服务器中密钥对的唯一标识。
 */
class GetSSHKeyPairValueRequest extends AbstractModel
{
    /**
     * @var string 凭据名称，此凭据只能为SSH密钥对凭据类型。
     */
    public $SecretName;

    /**
     * @var string 密钥对ID，是云服务器中密钥对的唯一标识。
     */
    public $SSHKeyId;

    /**
     * @param string $SecretName 凭据名称，此凭据只能为SSH密钥对凭据类型。
     * @param string $SSHKeyId 密钥对ID，是云服务器中密钥对的唯一标识。
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
        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("SSHKeyId",$param) and $param["SSHKeyId"] !== null) {
            $this->SSHKeyId = $param["SSHKeyId"];
        }
    }
}
