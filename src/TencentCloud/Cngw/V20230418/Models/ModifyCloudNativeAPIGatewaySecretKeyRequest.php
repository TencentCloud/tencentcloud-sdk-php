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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCloudNativeAPIGatewaySecretKey请求参数结构体
 *
 * @method string getGatewayId() 获取实例 ID
 * @method void setGatewayId(string $GatewayId) 设置实例 ID
 * @method string getName() 获取密钥名字
 * @method void setName(string $Name) 设置密钥名字
 * @method string getSecretKeyId() 获取密钥id
 * @method void setSecretKeyId(string $SecretKeyId) 设置密钥id
 * @method string getDescription() 获取描述,200字以内
 * @method void setDescription(string $Description) 设置描述,200字以内
 */
class ModifyCloudNativeAPIGatewaySecretKeyRequest extends AbstractModel
{
    /**
     * @var string 实例 ID
     */
    public $GatewayId;

    /**
     * @var string 密钥名字
     */
    public $Name;

    /**
     * @var string 密钥id
     */
    public $SecretKeyId;

    /**
     * @var string 描述,200字以内
     */
    public $Description;

    /**
     * @param string $GatewayId 实例 ID
     * @param string $Name 密钥名字
     * @param string $SecretKeyId 密钥id
     * @param string $Description 描述,200字以内
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SecretKeyId",$param) and $param["SecretKeyId"] !== null) {
            $this->SecretKeyId = $param["SecretKeyId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
