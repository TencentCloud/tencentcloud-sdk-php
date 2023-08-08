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
 * DeleteIntegrationDepartment请求参数结构体
 *
 * @method UserInfo getOperator() 获取操作人信息，UserId必填且需拥有组织架构管理权限
 * @method void setOperator(UserInfo $Operator) 设置操作人信息，UserId必填且需拥有组织架构管理权限
 * @method string getDeptId() 获取电子签中的部门id,通过DescribeIntegrationDepartments接口可获得
 * @method void setDeptId(string $DeptId) 设置电子签中的部门id,通过DescribeIntegrationDepartments接口可获得
 * @method string getReceiveDeptId() 获取交接部门ID。待删除部门中的合同、印章和模板数据，交接至该部门ID下，未填写交接至公司根部门。
 * @method void setReceiveDeptId(string $ReceiveDeptId) 设置交接部门ID。待删除部门中的合同、印章和模板数据，交接至该部门ID下，未填写交接至公司根部门。
 */
class DeleteIntegrationDepartmentRequest extends AbstractModel
{
    /**
     * @var UserInfo 操作人信息，UserId必填且需拥有组织架构管理权限
     */
    public $Operator;

    /**
     * @var string 电子签中的部门id,通过DescribeIntegrationDepartments接口可获得
     */
    public $DeptId;

    /**
     * @var string 交接部门ID。待删除部门中的合同、印章和模板数据，交接至该部门ID下，未填写交接至公司根部门。
     */
    public $ReceiveDeptId;

    /**
     * @param UserInfo $Operator 操作人信息，UserId必填且需拥有组织架构管理权限
     * @param string $DeptId 电子签中的部门id,通过DescribeIntegrationDepartments接口可获得
     * @param string $ReceiveDeptId 交接部门ID。待删除部门中的合同、印章和模板数据，交接至该部门ID下，未填写交接至公司根部门。
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

        if (array_key_exists("DeptId",$param) and $param["DeptId"] !== null) {
            $this->DeptId = $param["DeptId"];
        }

        if (array_key_exists("ReceiveDeptId",$param) and $param["ReceiveDeptId"] !== null) {
            $this->ReceiveDeptId = $param["ReceiveDeptId"];
        }
    }
}
