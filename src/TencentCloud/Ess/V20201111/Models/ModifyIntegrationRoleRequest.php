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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyIntegrationRole请求参数结构体
 *
 * @method string getRoleId() 获取角色Id，可通过接口 DescribeIntegrationRoles 查询获取
 * @method void setRoleId(string $RoleId) 设置角色Id，可通过接口 DescribeIntegrationRoles 查询获取
 * @method string getName() 获取角色名称，最大长度为20个字符，仅限中文、字母、数字和下划线组成。
 * @method void setName(string $Name) 设置角色名称，最大长度为20个字符，仅限中文、字母、数字和下划线组成。
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。使用此接口时，必须填写userId。
支持填入集团子公司经办人 userId 代发合同。

注: 在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。使用此接口时，必须填写userId。
支持填入集团子公司经办人 userId 代发合同。

注: 在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。
 * @method string getDescription() 获取角色描述，最大长度为50个字符
 * @method void setDescription(string $Description) 设置角色描述，最大长度为50个字符
 * @method array getPermissionGroups() 获取权限树
 * @method void setPermissionGroups(array $PermissionGroups) 设置权限树
 * @method array getSubOrganizationIds() 获取集团角色的话，需要传递集团子企业列表，如果是全选，则传1
 * @method void setSubOrganizationIds(array $SubOrganizationIds) 设置集团角色的话，需要传递集团子企业列表，如果是全选，则传1
 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 */
class ModifyIntegrationRoleRequest extends AbstractModel
{
    /**
     * @var string 角色Id，可通过接口 DescribeIntegrationRoles 查询获取
     */
    public $RoleId;

    /**
     * @var string 角色名称，最大长度为20个字符，仅限中文、字母、数字和下划线组成。
     */
    public $Name;

    /**
     * @var UserInfo 执行本接口操作的员工信息。使用此接口时，必须填写userId。
支持填入集团子公司经办人 userId 代发合同。

注: 在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。
     */
    public $Operator;

    /**
     * @var string 角色描述，最大长度为50个字符
     */
    public $Description;

    /**
     * @var array 权限树
     */
    public $PermissionGroups;

    /**
     * @var array 集团角色的话，需要传递集团子企业列表，如果是全选，则传1
     */
    public $SubOrganizationIds;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @param string $RoleId 角色Id，可通过接口 DescribeIntegrationRoles 查询获取
     * @param string $Name 角色名称，最大长度为20个字符，仅限中文、字母、数字和下划线组成。
     * @param UserInfo $Operator 执行本接口操作的员工信息。使用此接口时，必须填写userId。
支持填入集团子公司经办人 userId 代发合同。

注: 在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。
     * @param string $Description 角色描述，最大长度为50个字符
     * @param array $PermissionGroups 权限树
     * @param array $SubOrganizationIds 集团角色的话，需要传递集团子企业列表，如果是全选，则传1
     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
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
        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PermissionGroups",$param) and $param["PermissionGroups"] !== null) {
            $this->PermissionGroups = [];
            foreach ($param["PermissionGroups"] as $key => $value){
                $obj = new PermissionGroup();
                $obj->deserialize($value);
                array_push($this->PermissionGroups, $obj);
            }
        }

        if (array_key_exists("SubOrganizationIds",$param) and $param["SubOrganizationIds"] !== null) {
            $this->SubOrganizationIds = $param["SubOrganizationIds"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }
    }
}
