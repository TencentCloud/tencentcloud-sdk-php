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
 * @method string getRoleId() 获取<p>角色Id，可通过接口 DescribeIntegrationRoles 查询获取</p>
 * @method void setRoleId(string $RoleId) 设置<p>角色Id，可通过接口 DescribeIntegrationRoles 查询获取</p>
 * @method string getName() 获取<p>角色名称，最大长度为20个字符，仅限中文、字母、数字和下划线组成。</p>
 * @method void setName(string $Name) 设置<p>角色名称，最大长度为20个字符，仅限中文、字母、数字和下划线组成。</p>
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。使用此接口时，必须填写userId。<br>支持填入集团子公司经办人 userId 代发合同。</p><p>注: 在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。使用此接口时，必须填写userId。<br>支持填入集团子公司经办人 userId 代发合同。</p><p>注: 在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</p>
 * @method string getDescription() 获取<p>角色描述，最大长度为50个字符</p>
 * @method void setDescription(string $Description) 设置<p>角色描述，最大长度为50个字符</p>
 * @method array getPermissionGroups() 获取<p>权限树</p>
 * @method void setPermissionGroups(array $PermissionGroups) 设置<p>权限树</p>
 * @method array getSubOrganizationIds() 获取<p>集团角色的话，需要传递集团子企业列表，如果是全选，则传1</p>
 * @method void setSubOrganizationIds(array $SubOrganizationIds) 设置<p>集团角色的话，需要传递集团子企业列表，如果是全选，则传1</p>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 */
class ModifyIntegrationRoleRequest extends AbstractModel
{
    /**
     * @var string <p>角色Id，可通过接口 DescribeIntegrationRoles 查询获取</p>
     */
    public $RoleId;

    /**
     * @var string <p>角色名称，最大长度为20个字符，仅限中文、字母、数字和下划线组成。</p>
     */
    public $Name;

    /**
     * @var UserInfo <p>执行本接口操作的员工信息。使用此接口时，必须填写userId。<br>支持填入集团子公司经办人 userId 代发合同。</p><p>注: 在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</p>
     */
    public $Operator;

    /**
     * @var string <p>角色描述，最大长度为50个字符</p>
     */
    public $Description;

    /**
     * @var array <p>权限树</p>
     */
    public $PermissionGroups;

    /**
     * @var array <p>集团角色的话，需要传递集团子企业列表，如果是全选，则传1</p>
     */
    public $SubOrganizationIds;

    /**
     * @var Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @param string $RoleId <p>角色Id，可通过接口 DescribeIntegrationRoles 查询获取</p>
     * @param string $Name <p>角色名称，最大长度为20个字符，仅限中文、字母、数字和下划线组成。</p>
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。使用此接口时，必须填写userId。<br>支持填入集团子公司经办人 userId 代发合同。</p><p>注: 在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</p>
     * @param string $Description <p>角色描述，最大长度为50个字符</p>
     * @param array $PermissionGroups <p>权限树</p>
     * @param array $SubOrganizationIds <p>集团角色的话，需要传递集团子企业列表，如果是全选，则传1</p>
     * @param Agent $Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
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
