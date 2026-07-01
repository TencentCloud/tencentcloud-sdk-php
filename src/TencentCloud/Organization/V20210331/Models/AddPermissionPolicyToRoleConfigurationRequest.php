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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddPermissionPolicyToRoleConfiguration请求参数结构体
 *
 * @method string getZoneId() 获取<p>空间 ID</p>
 * @method void setZoneId(string $ZoneId) 设置<p>空间 ID</p>
 * @method string getRoleConfigurationId() 获取<p>权限配置 ID</p>
 * @method void setRoleConfigurationId(string $RoleConfigurationId) 设置<p>权限配置 ID</p>
 * @method string getRolePolicyType() 获取<p>权限策略类型。取值：  System：系统策略。复用 CAM 的系统策略。 Custom: 自定义策略。按照 CAM 权限策略语法和结构编写的自定义策略。</p>
 * @method void setRolePolicyType(string $RolePolicyType) 设置<p>权限策略类型。取值：  System：系统策略。复用 CAM 的系统策略。 Custom: 自定义策略。按照 CAM 权限策略语法和结构编写的自定义策略。</p>
 * @method array getRolePolicyNames() 获取<p>权限策略名称，长度最大为 20策略，每个策略长度最大32个字符。如果要添加系统策略，建议使用RolePolicies参数。自定义策略时，数组长度最大为1。</p>
 * @method void setRolePolicyNames(array $RolePolicyNames) 设置<p>权限策略名称，长度最大为 20策略，每个策略长度最大32个字符。如果要添加系统策略，建议使用RolePolicies参数。自定义策略时，数组长度最大为1。</p>
 * @method array getRolePolicies() 获取<p>添加的系统策略详情。</p>
 * @method void setRolePolicies(array $RolePolicies) 设置<p>添加的系统策略详情。</p>
 * @method string getCustomPolicyDocument() 获取<p>自定义策略内容。长度：最大 4096 个字符。当RolePolicyType为Inline时，该参数必须配置。关于权限策略的语法和结构，请参见权限策略语法和结构。</p>
 * @method void setCustomPolicyDocument(string $CustomPolicyDocument) 设置<p>自定义策略内容。长度：最大 4096 个字符。当RolePolicyType为Inline时，该参数必须配置。关于权限策略的语法和结构，请参见权限策略语法和结构。</p>
 * @method array getCustomPolicyDocuments() 获取<p>自定义策略内容列表（跟RolePolicyNames一一对应）</p>
 * @method void setCustomPolicyDocuments(array $CustomPolicyDocuments) 设置<p>自定义策略内容列表（跟RolePolicyNames一一对应）</p>
 * @method integer getPolicyType() 获取<p>是否公共策略</p><p>枚举值：</p><ul><li>1： 是</li><li>0： 不是</li></ul><p>默认值：1</p>
 * @method void setPolicyType(integer $PolicyType) 设置<p>是否公共策略</p><p>枚举值：</p><ul><li>1： 是</li><li>0： 不是</li></ul><p>默认值：1</p>
 */
class AddPermissionPolicyToRoleConfigurationRequest extends AbstractModel
{
    /**
     * @var string <p>空间 ID</p>
     */
    public $ZoneId;

    /**
     * @var string <p>权限配置 ID</p>
     */
    public $RoleConfigurationId;

    /**
     * @var string <p>权限策略类型。取值：  System：系统策略。复用 CAM 的系统策略。 Custom: 自定义策略。按照 CAM 权限策略语法和结构编写的自定义策略。</p>
     */
    public $RolePolicyType;

    /**
     * @var array <p>权限策略名称，长度最大为 20策略，每个策略长度最大32个字符。如果要添加系统策略，建议使用RolePolicies参数。自定义策略时，数组长度最大为1。</p>
     */
    public $RolePolicyNames;

    /**
     * @var array <p>添加的系统策略详情。</p>
     */
    public $RolePolicies;

    /**
     * @var string <p>自定义策略内容。长度：最大 4096 个字符。当RolePolicyType为Inline时，该参数必须配置。关于权限策略的语法和结构，请参见权限策略语法和结构。</p>
     */
    public $CustomPolicyDocument;

    /**
     * @var array <p>自定义策略内容列表（跟RolePolicyNames一一对应）</p>
     */
    public $CustomPolicyDocuments;

    /**
     * @var integer <p>是否公共策略</p><p>枚举值：</p><ul><li>1： 是</li><li>0： 不是</li></ul><p>默认值：1</p>
     */
    public $PolicyType;

    /**
     * @param string $ZoneId <p>空间 ID</p>
     * @param string $RoleConfigurationId <p>权限配置 ID</p>
     * @param string $RolePolicyType <p>权限策略类型。取值：  System：系统策略。复用 CAM 的系统策略。 Custom: 自定义策略。按照 CAM 权限策略语法和结构编写的自定义策略。</p>
     * @param array $RolePolicyNames <p>权限策略名称，长度最大为 20策略，每个策略长度最大32个字符。如果要添加系统策略，建议使用RolePolicies参数。自定义策略时，数组长度最大为1。</p>
     * @param array $RolePolicies <p>添加的系统策略详情。</p>
     * @param string $CustomPolicyDocument <p>自定义策略内容。长度：最大 4096 个字符。当RolePolicyType为Inline时，该参数必须配置。关于权限策略的语法和结构，请参见权限策略语法和结构。</p>
     * @param array $CustomPolicyDocuments <p>自定义策略内容列表（跟RolePolicyNames一一对应）</p>
     * @param integer $PolicyType <p>是否公共策略</p><p>枚举值：</p><ul><li>1： 是</li><li>0： 不是</li></ul><p>默认值：1</p>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("RoleConfigurationId",$param) and $param["RoleConfigurationId"] !== null) {
            $this->RoleConfigurationId = $param["RoleConfigurationId"];
        }

        if (array_key_exists("RolePolicyType",$param) and $param["RolePolicyType"] !== null) {
            $this->RolePolicyType = $param["RolePolicyType"];
        }

        if (array_key_exists("RolePolicyNames",$param) and $param["RolePolicyNames"] !== null) {
            $this->RolePolicyNames = $param["RolePolicyNames"];
        }

        if (array_key_exists("RolePolicies",$param) and $param["RolePolicies"] !== null) {
            $this->RolePolicies = [];
            foreach ($param["RolePolicies"] as $key => $value){
                $obj = new PolicyDetail();
                $obj->deserialize($value);
                array_push($this->RolePolicies, $obj);
            }
        }

        if (array_key_exists("CustomPolicyDocument",$param) and $param["CustomPolicyDocument"] !== null) {
            $this->CustomPolicyDocument = $param["CustomPolicyDocument"];
        }

        if (array_key_exists("CustomPolicyDocuments",$param) and $param["CustomPolicyDocuments"] !== null) {
            $this->CustomPolicyDocuments = $param["CustomPolicyDocuments"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }
    }
}
