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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建/编辑企业目录配置之后返回结果数据
 *
 * @method integer getId() 获取<p>企业目录 ID</p>
 * @method void setId(integer $Id) 设置<p>企业目录 ID</p>
 * @method string getName() 获取<p>企业目录名称</p>
 * @method void setName(string $Name) 设置<p>企业目录名称</p>
 * @method string getIdentifySourceId() 获取<p>身份源配置 ID</p>
 * @method void setIdentifySourceId(string $IdentifySourceId) 设置<p>身份源配置 ID</p>
 * @method boolean getCreateAuthConfig() 获取<p>是否同步创建了认证配置</p>
 * @method void setCreateAuthConfig(boolean $CreateAuthConfig) 设置<p>是否同步创建了认证配置</p>
 * @method string getAuthSourceId() 获取<p>认证源配置 ID</p>
 * @method void setAuthSourceId(string $AuthSourceId) 设置<p>认证源配置 ID</p>
 * @method integer getAuthConfigId() 获取<p>认证配置 ID</p>
 * @method void setAuthConfigId(integer $AuthConfigId) 设置<p>认证配置 ID</p>
 * @method integer getAuthPolicyId() 获取<p>认证策略 ID</p>
 * @method void setAuthPolicyId(integer $AuthPolicyId) 设置<p>认证策略 ID</p>
 * @method array getAuthSupportPlatforms() 获取<p>认证支持的平台, PC 或 Mobile</p>
 * @method void setAuthSupportPlatforms(array $AuthSupportPlatforms) 设置<p>认证支持的平台, PC 或 Mobile</p>
 * @method array getAuthMethods() 获取<p>认证方式，授权认证/扫码认证 等</p>
 * @method void setAuthMethods(array $AuthMethods) 设置<p>认证方式，授权认证/扫码认证 等</p>
 */
class DirectoryConfigResultData extends AbstractModel
{
    /**
     * @var integer <p>企业目录 ID</p>
     */
    public $Id;

    /**
     * @var string <p>企业目录名称</p>
     */
    public $Name;

    /**
     * @var string <p>身份源配置 ID</p>
     */
    public $IdentifySourceId;

    /**
     * @var boolean <p>是否同步创建了认证配置</p>
     */
    public $CreateAuthConfig;

    /**
     * @var string <p>认证源配置 ID</p>
     */
    public $AuthSourceId;

    /**
     * @var integer <p>认证配置 ID</p>
     */
    public $AuthConfigId;

    /**
     * @var integer <p>认证策略 ID</p>
     */
    public $AuthPolicyId;

    /**
     * @var array <p>认证支持的平台, PC 或 Mobile</p>
     */
    public $AuthSupportPlatforms;

    /**
     * @var array <p>认证方式，授权认证/扫码认证 等</p>
     */
    public $AuthMethods;

    /**
     * @param integer $Id <p>企业目录 ID</p>
     * @param string $Name <p>企业目录名称</p>
     * @param string $IdentifySourceId <p>身份源配置 ID</p>
     * @param boolean $CreateAuthConfig <p>是否同步创建了认证配置</p>
     * @param string $AuthSourceId <p>认证源配置 ID</p>
     * @param integer $AuthConfigId <p>认证配置 ID</p>
     * @param integer $AuthPolicyId <p>认证策略 ID</p>
     * @param array $AuthSupportPlatforms <p>认证支持的平台, PC 或 Mobile</p>
     * @param array $AuthMethods <p>认证方式，授权认证/扫码认证 等</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IdentifySourceId",$param) and $param["IdentifySourceId"] !== null) {
            $this->IdentifySourceId = $param["IdentifySourceId"];
        }

        if (array_key_exists("CreateAuthConfig",$param) and $param["CreateAuthConfig"] !== null) {
            $this->CreateAuthConfig = $param["CreateAuthConfig"];
        }

        if (array_key_exists("AuthSourceId",$param) and $param["AuthSourceId"] !== null) {
            $this->AuthSourceId = $param["AuthSourceId"];
        }

        if (array_key_exists("AuthConfigId",$param) and $param["AuthConfigId"] !== null) {
            $this->AuthConfigId = $param["AuthConfigId"];
        }

        if (array_key_exists("AuthPolicyId",$param) and $param["AuthPolicyId"] !== null) {
            $this->AuthPolicyId = $param["AuthPolicyId"];
        }

        if (array_key_exists("AuthSupportPlatforms",$param) and $param["AuthSupportPlatforms"] !== null) {
            $this->AuthSupportPlatforms = $param["AuthSupportPlatforms"];
        }

        if (array_key_exists("AuthMethods",$param) and $param["AuthMethods"] !== null) {
            $this->AuthMethods = $param["AuthMethods"];
        }
    }
}
