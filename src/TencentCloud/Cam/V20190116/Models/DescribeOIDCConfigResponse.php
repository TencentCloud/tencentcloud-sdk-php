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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOIDCConfig返回参数结构体
 *
 * @method integer getProviderType() 获取<p>身份提供商类型 11角色身份提供商</p>
 * @method void setProviderType(integer $ProviderType) 设置<p>身份提供商类型 11角色身份提供商</p>
 * @method string getIdentityUrl() 获取<p>身份提供商URL</p>
 * @method void setIdentityUrl(string $IdentityUrl) 设置<p>身份提供商URL</p>
 * @method string getIdentityKey() 获取<p>签名公钥</p>
 * @method void setIdentityKey(string $IdentityKey) 设置<p>签名公钥</p>
 * @method array getClientId() 获取<p>客户端id</p>
 * @method void setClientId(array $ClientId) 设置<p>客户端id</p>
 * @method integer getStatus() 获取<p>状态：0:未设置，11:已开启，2:已禁用</p>
 * @method void setStatus(integer $Status) 设置<p>状态：0:未设置，11:已开启，2:已禁用</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getName() 获取<p>名称</p>
 * @method void setName(string $Name) 设置<p>名称</p>
 * @method integer getAutoRotateKey() 获取<p>OIDC公钥自动轮转开关</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul><p>默认值：0</p>
 * @method void setAutoRotateKey(integer $AutoRotateKey) 设置<p>OIDC公钥自动轮转开关</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul><p>默认值：0</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeOIDCConfigResponse extends AbstractModel
{
    /**
     * @var integer <p>身份提供商类型 11角色身份提供商</p>
     */
    public $ProviderType;

    /**
     * @var string <p>身份提供商URL</p>
     */
    public $IdentityUrl;

    /**
     * @var string <p>签名公钥</p>
     */
    public $IdentityKey;

    /**
     * @var array <p>客户端id</p>
     */
    public $ClientId;

    /**
     * @var integer <p>状态：0:未设置，11:已开启，2:已禁用</p>
     */
    public $Status;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>名称</p>
     */
    public $Name;

    /**
     * @var integer <p>OIDC公钥自动轮转开关</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul><p>默认值：0</p>
     */
    public $AutoRotateKey;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ProviderType <p>身份提供商类型 11角色身份提供商</p>
     * @param string $IdentityUrl <p>身份提供商URL</p>
     * @param string $IdentityKey <p>签名公钥</p>
     * @param array $ClientId <p>客户端id</p>
     * @param integer $Status <p>状态：0:未设置，11:已开启，2:已禁用</p>
     * @param string $Description <p>描述</p>
     * @param string $Name <p>名称</p>
     * @param integer $AutoRotateKey <p>OIDC公钥自动轮转开关</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul><p>默认值：0</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ProviderType",$param) and $param["ProviderType"] !== null) {
            $this->ProviderType = $param["ProviderType"];
        }

        if (array_key_exists("IdentityUrl",$param) and $param["IdentityUrl"] !== null) {
            $this->IdentityUrl = $param["IdentityUrl"];
        }

        if (array_key_exists("IdentityKey",$param) and $param["IdentityKey"] !== null) {
            $this->IdentityKey = $param["IdentityKey"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AutoRotateKey",$param) and $param["AutoRotateKey"] !== null) {
            $this->AutoRotateKey = $param["AutoRotateKey"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
