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
 * CreateIntegrationDepartment请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得组织架构管理权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得组织架构管理权限，并具备接口传入的相应资源的数据权限。`
 * @method string getDeptName() 获取部门名称，不超过50个字符
 * @method void setDeptName(string $DeptName) 设置部门名称，不超过50个字符
 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method string getParentDeptId() 获取电子签父部门ID，与ParentDeptOpenId二选一,优先ParentDeptId,都为空时自动填充至根节点下
 * @method void setParentDeptId(string $ParentDeptId) 设置电子签父部门ID，与ParentDeptOpenId二选一,优先ParentDeptId,都为空时自动填充至根节点下
 * @method string getParentDeptOpenId() 获取第三方平台中父部门ID,与ParentDeptId二选一,优先ParentDeptId,都为空时自动填充至根节点下
 * @method void setParentDeptOpenId(string $ParentDeptOpenId) 设置第三方平台中父部门ID,与ParentDeptId二选一,优先ParentDeptId,都为空时自动填充至根节点下
 * @method string getDeptOpenId() 获取客户系统部门ID，不超过64个字符
 * @method void setDeptOpenId(string $DeptOpenId) 设置客户系统部门ID，不超过64个字符
 * @method integer getOrderNo() 获取排序号,1~30000范围内
 * @method void setOrderNo(integer $OrderNo) 设置排序号,1~30000范围内
 */
class CreateIntegrationDepartmentRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得组织架构管理权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var string 部门名称，不超过50个字符
     */
    public $DeptName;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var string 电子签父部门ID，与ParentDeptOpenId二选一,优先ParentDeptId,都为空时自动填充至根节点下
     */
    public $ParentDeptId;

    /**
     * @var string 第三方平台中父部门ID,与ParentDeptId二选一,优先ParentDeptId,都为空时自动填充至根节点下
     */
    public $ParentDeptOpenId;

    /**
     * @var string 客户系统部门ID，不超过64个字符
     */
    public $DeptOpenId;

    /**
     * @var integer 排序号,1~30000范围内
     */
    public $OrderNo;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得组织架构管理权限，并具备接口传入的相应资源的数据权限。`
     * @param string $DeptName 部门名称，不超过50个字符
     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param string $ParentDeptId 电子签父部门ID，与ParentDeptOpenId二选一,优先ParentDeptId,都为空时自动填充至根节点下
     * @param string $ParentDeptOpenId 第三方平台中父部门ID,与ParentDeptId二选一,优先ParentDeptId,都为空时自动填充至根节点下
     * @param string $DeptOpenId 客户系统部门ID，不超过64个字符
     * @param integer $OrderNo 排序号,1~30000范围内
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

        if (array_key_exists("DeptName",$param) and $param["DeptName"] !== null) {
            $this->DeptName = $param["DeptName"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("ParentDeptId",$param) and $param["ParentDeptId"] !== null) {
            $this->ParentDeptId = $param["ParentDeptId"];
        }

        if (array_key_exists("ParentDeptOpenId",$param) and $param["ParentDeptOpenId"] !== null) {
            $this->ParentDeptOpenId = $param["ParentDeptOpenId"];
        }

        if (array_key_exists("DeptOpenId",$param) and $param["DeptOpenId"] !== null) {
            $this->DeptOpenId = $param["DeptOpenId"];
        }

        if (array_key_exists("OrderNo",$param) and $param["OrderNo"] !== null) {
            $this->OrderNo = $param["OrderNo"];
        }
    }
}
