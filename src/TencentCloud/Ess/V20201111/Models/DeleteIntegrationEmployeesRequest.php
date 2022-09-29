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
 * DeleteIntegrationEmployees请求参数结构体
 *
 * @method UserInfo getOperator() 获取操作人信息，userId必填
 * @method void setOperator(UserInfo $Operator) 设置操作人信息，userId必填
 * @method array getEmployees() 获取待移除员工的信息，userId和openId二选一，必填一个
 * @method void setEmployees(array $Employees) 设置待移除员工的信息，userId和openId二选一，必填一个
 */
class DeleteIntegrationEmployeesRequest extends AbstractModel
{
    /**
     * @var UserInfo 操作人信息，userId必填
     */
    public $Operator;

    /**
     * @var array 待移除员工的信息，userId和openId二选一，必填一个
     */
    public $Employees;

    /**
     * @param UserInfo $Operator 操作人信息，userId必填
     * @param array $Employees 待移除员工的信息，userId和openId二选一，必填一个
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

        if (array_key_exists("Employees",$param) and $param["Employees"] !== null) {
            $this->Employees = [];
            foreach ($param["Employees"] as $key => $value){
                $obj = new Staff();
                $obj->deserialize($value);
                array_push($this->Employees, $obj);
            }
        }
    }
}
