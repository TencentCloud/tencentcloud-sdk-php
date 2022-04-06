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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserOIDCConfig返回参数结构体
 *
 * @method integer getProviderType() 获取身份提供商类型。 12：用户OIDC身份提供商
 * @method void setProviderType(integer $ProviderType) 设置身份提供商类型。 12：用户OIDC身份提供商
 * @method string getIdentityUrl() 获取身份提供商URL
 * @method void setIdentityUrl(string $IdentityUrl) 设置身份提供商URL
 * @method string getIdentityKey() 获取签名公钥
 * @method void setIdentityKey(string $IdentityKey) 设置签名公钥
 * @method string getClientId() 获取客户端id
 * @method void setClientId(string $ClientId) 设置客户端id
 * @method integer getStatus() 获取状态：0:未设置，11:已开启，2:已禁用
 * @method void setStatus(integer $Status) 设置状态：0:未设置，11:已开启，2:已禁用
 * @method string getAuthorizationEndpoint() 获取授权请求Endpoint
 * @method void setAuthorizationEndpoint(string $AuthorizationEndpoint) 设置授权请求Endpoint
 * @method array getScope() 获取授权请求Scope
 * @method void setScope(array $Scope) 设置授权请求Scope
 * @method string getResponseType() 获取授权请求Response type
 * @method void setResponseType(string $ResponseType) 设置授权请求Response type
 * @method string getResponseMode() 获取授权请求Response mode
 * @method void setResponseMode(string $ResponseMode) 设置授权请求Response mode
 * @method string getMappingFiled() 获取映射字段名称
 * @method void setMappingFiled(string $MappingFiled) 设置映射字段名称
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUserOIDCConfigResponse extends AbstractModel
{
    /**
     * @var integer 身份提供商类型。 12：用户OIDC身份提供商
     */
    public $ProviderType;

    /**
     * @var string 身份提供商URL
     */
    public $IdentityUrl;

    /**
     * @var string 签名公钥
     */
    public $IdentityKey;

    /**
     * @var string 客户端id
     */
    public $ClientId;

    /**
     * @var integer 状态：0:未设置，11:已开启，2:已禁用
     */
    public $Status;

    /**
     * @var string 授权请求Endpoint
     */
    public $AuthorizationEndpoint;

    /**
     * @var array 授权请求Scope
     */
    public $Scope;

    /**
     * @var string 授权请求Response type
     */
    public $ResponseType;

    /**
     * @var string 授权请求Response mode
     */
    public $ResponseMode;

    /**
     * @var string 映射字段名称
     */
    public $MappingFiled;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ProviderType 身份提供商类型。 12：用户OIDC身份提供商
     * @param string $IdentityUrl 身份提供商URL
     * @param string $IdentityKey 签名公钥
     * @param string $ClientId 客户端id
     * @param integer $Status 状态：0:未设置，11:已开启，2:已禁用
     * @param string $AuthorizationEndpoint 授权请求Endpoint
     * @param array $Scope 授权请求Scope
     * @param string $ResponseType 授权请求Response type
     * @param string $ResponseMode 授权请求Response mode
     * @param string $MappingFiled 映射字段名称
     * @param string $Description 描述
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("AuthorizationEndpoint",$param) and $param["AuthorizationEndpoint"] !== null) {
            $this->AuthorizationEndpoint = $param["AuthorizationEndpoint"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("ResponseType",$param) and $param["ResponseType"] !== null) {
            $this->ResponseType = $param["ResponseType"];
        }

        if (array_key_exists("ResponseMode",$param) and $param["ResponseMode"] !== null) {
            $this->ResponseMode = $param["ResponseMode"];
        }

        if (array_key_exists("MappingFiled",$param) and $param["MappingFiled"] !== null) {
            $this->MappingFiled = $param["MappingFiled"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
