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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddPermissionPolicyToRoleConfiguration请求参数结构体
 *
 * @method string getZoneId() 获取空间 ID
 * @method void setZoneId(string $ZoneId) 设置空间 ID
 * @method string getRoleConfigurationId() 获取权限配置 ID
 * @method void setRoleConfigurationId(string $RoleConfigurationId) 设置权限配置 ID
 * @method string getRolePolicyType() 获取权限策略类型。取值：  System：系统策略。复用 CAM 的系统策略。 Custom: 自定义策略。按照 CAM 权限策略语法和结构编写的自定义策略。 
 * @method void setRolePolicyType(string $RolePolicyType) 设置权限策略类型。取值：  System：系统策略。复用 CAM 的系统策略。 Custom: 自定义策略。按照 CAM 权限策略语法和结构编写的自定义策略。 
 * @method array getRolePolicyNames() 获取权限策略名称，长度最大为 20策略，每个策略长度最大32个字符。如果要添加系统策略，建议使用RolePolicies参数。自定义策略时，数组长度最大为1。
 * @method void setRolePolicyNames(array $RolePolicyNames) 设置权限策略名称，长度最大为 20策略，每个策略长度最大32个字符。如果要添加系统策略，建议使用RolePolicies参数。自定义策略时，数组长度最大为1。
 * @method array getRolePolicies() 获取添加的系统策略详情。
 * @method void setRolePolicies(array $RolePolicies) 设置添加的系统策略详情。
 * @method string getCustomPolicyDocument() 获取自定义策略内容。长度：最大 4096 个字符。当RolePolicyType为Inline时，该参数必须配置。关于权限策略的语法和结构，请参见权限策略语法和结构。
 * @method void setCustomPolicyDocument(string $CustomPolicyDocument) 设置自定义策略内容。长度：最大 4096 个字符。当RolePolicyType为Inline时，该参数必须配置。关于权限策略的语法和结构，请参见权限策略语法和结构。
 */
class AddPermissionPolicyToRoleConfigurationRequest extends AbstractModel
{
    /**
     * @var string 空间 ID
     */
    public $ZoneId;

    /**
     * @var string 权限配置 ID
     */
    public $RoleConfigurationId;

    /**
     * @var string 权限策略类型。取值：  System：系统策略。复用 CAM 的系统策略。 Custom: 自定义策略。按照 CAM 权限策略语法和结构编写的自定义策略。 
     */
    public $RolePolicyType;

    /**
     * @var array 权限策略名称，长度最大为 20策略，每个策略长度最大32个字符。如果要添加系统策略，建议使用RolePolicies参数。自定义策略时，数组长度最大为1。
     */
    public $RolePolicyNames;

    /**
     * @var array 添加的系统策略详情。
     */
    public $RolePolicies;

    /**
     * @var string 自定义策略内容。长度：最大 4096 个字符。当RolePolicyType为Inline时，该参数必须配置。关于权限策略的语法和结构，请参见权限策略语法和结构。
     */
    public $CustomPolicyDocument;

    /**
     * @param string $ZoneId 空间 ID
     * @param string $RoleConfigurationId 权限配置 ID
     * @param string $RolePolicyType 权限策略类型。取值：  System：系统策略。复用 CAM 的系统策略。 Custom: 自定义策略。按照 CAM 权限策略语法和结构编写的自定义策略。 
     * @param array $RolePolicyNames 权限策略名称，长度最大为 20策略，每个策略长度最大32个字符。如果要添加系统策略，建议使用RolePolicies参数。自定义策略时，数组长度最大为1。
     * @param array $RolePolicies 添加的系统策略详情。
     * @param string $CustomPolicyDocument 自定义策略内容。长度：最大 4096 个字符。当RolePolicyType为Inline时，该参数必须配置。关于权限策略的语法和结构，请参见权限策略语法和结构。
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
    }
}
