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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIntegrationDepartments请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得组织架构管理权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得组织架构管理权限，并具备接口传入的相应资源的数据权限。`
 * @method integer getQueryType() 获取查询类型 0-查询单个部门节点 1-单个部门节点及一级子节点部门列表
 * @method void setQueryType(integer $QueryType) 设置查询类型 0-查询单个部门节点 1-单个部门节点及一级子节点部门列表
 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method string getDeptId() 获取部门ID,与DeptOpenId二选一,优先DeptId,都为空时获取根节点数据
 * @method void setDeptId(string $DeptId) 设置部门ID,与DeptOpenId二选一,优先DeptId,都为空时获取根节点数据
 * @method string getDeptOpenId() 获取客户系统部门ID,与DeptId二选一,优先DeptId,都为空时获取根节点数据
 * @method void setDeptOpenId(string $DeptOpenId) 设置客户系统部门ID,与DeptId二选一,优先DeptId,都为空时获取根节点数据
 */
class DescribeIntegrationDepartmentsRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得组织架构管理权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var integer 查询类型 0-查询单个部门节点 1-单个部门节点及一级子节点部门列表
     */
    public $QueryType;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var string 部门ID,与DeptOpenId二选一,优先DeptId,都为空时获取根节点数据
     */
    public $DeptId;

    /**
     * @var string 客户系统部门ID,与DeptId二选一,优先DeptId,都为空时获取根节点数据
     */
    public $DeptOpenId;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得组织架构管理权限，并具备接口传入的相应资源的数据权限。`
     * @param integer $QueryType 查询类型 0-查询单个部门节点 1-单个部门节点及一级子节点部门列表
     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param string $DeptId 部门ID,与DeptOpenId二选一,优先DeptId,都为空时获取根节点数据
     * @param string $DeptOpenId 客户系统部门ID,与DeptId二选一,优先DeptId,都为空时获取根节点数据
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("QueryType",$param) and $param["QueryType"] !== null) {
            $this->QueryType = $param["QueryType"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("DeptId",$param) and $param["DeptId"] !== null) {
            $this->DeptId = $param["DeptId"];
        }

        if (array_key_exists("DeptOpenId",$param) and $param["DeptOpenId"] !== null) {
            $this->DeptOpenId = $param["DeptOpenId"];
        }
    }
}
