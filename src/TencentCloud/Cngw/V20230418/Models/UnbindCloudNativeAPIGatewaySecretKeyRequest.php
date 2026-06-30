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
 * UnbindCloudNativeAPIGatewaySecretKey请求参数结构体
 *
 * @method string getGatewayId() 获取网关实例id
 * @method void setGatewayId(string $GatewayId) 设置网关实例id
 * @method string getResourceType() 获取资源类型
 * @method void setResourceType(string $ResourceType) 设置资源类型
 * @method array getResourceIds() 获取资源ID，当前最多支持一个
 * @method void setResourceIds(array $ResourceIds) 设置资源ID，当前最多支持一个
 * @method string getSecretKeyId() 获取密钥id
 * @method void setSecretKeyId(string $SecretKeyId) 设置密钥id
 */
class UnbindCloudNativeAPIGatewaySecretKeyRequest extends AbstractModel
{
    /**
     * @var string 网关实例id
     */
    public $GatewayId;

    /**
     * @var string 资源类型
     */
    public $ResourceType;

    /**
     * @var array 资源ID，当前最多支持一个
     */
    public $ResourceIds;

    /**
     * @var string 密钥id
     */
    public $SecretKeyId;

    /**
     * @param string $GatewayId 网关实例id
     * @param string $ResourceType 资源类型
     * @param array $ResourceIds 资源ID，当前最多支持一个
     * @param string $SecretKeyId 密钥id
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

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("SecretKeyId",$param) and $param["SecretKeyId"] !== null) {
            $this->SecretKeyId = $param["SecretKeyId"];
        }
    }
}
