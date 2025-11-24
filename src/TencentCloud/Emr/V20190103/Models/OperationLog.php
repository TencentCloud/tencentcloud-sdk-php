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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 操作日志描述
 *
 * @method integer getInstanceId() 获取EMR实例ID
 * @method void setInstanceId(integer $InstanceId) 设置EMR实例ID
 * @method string getOperation() 获取操作名称
 * @method void setOperation(string $Operation) 设置操作名称
 * @method integer getOperationType() 获取操作类型
 * @method void setOperationType(integer $OperationType) 设置操作类型
 * @method integer getUserType() 获取用户类型
 * @method void setUserType(integer $UserType) 设置用户类型
 * @method string getOperator() 获取操作者
 * @method void setOperator(string $Operator) 设置操作者
 * @method string getCreateTime() 获取操作时间
 * @method void setCreateTime(string $CreateTime) 设置操作时间
 * @method string getOperand() 获取操作对象
 * @method void setOperand(string $Operand) 设置操作对象
 * @method string getOperationDesc() 获取操作详情
 * @method void setOperationDesc(string $OperationDesc) 设置操作详情
 * @method string getSecurityLevel() 获取安全级别
 * @method void setSecurityLevel(string $SecurityLevel) 设置安全级别
 */
class OperationLog extends AbstractModel
{
    /**
     * @var integer EMR实例ID
     */
    public $InstanceId;

    /**
     * @var string 操作名称
     */
    public $Operation;

    /**
     * @var integer 操作类型
     */
    public $OperationType;

    /**
     * @var integer 用户类型
     */
    public $UserType;

    /**
     * @var string 操作者
     */
    public $Operator;

    /**
     * @var string 操作时间
     */
    public $CreateTime;

    /**
     * @var string 操作对象
     */
    public $Operand;

    /**
     * @var string 操作详情
     */
    public $OperationDesc;

    /**
     * @var string 安全级别
     */
    public $SecurityLevel;

    /**
     * @param integer $InstanceId EMR实例ID
     * @param string $Operation 操作名称
     * @param integer $OperationType 操作类型
     * @param integer $UserType 用户类型
     * @param string $Operator 操作者
     * @param string $CreateTime 操作时间
     * @param string $Operand 操作对象
     * @param string $OperationDesc 操作详情
     * @param string $SecurityLevel 安全级别
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Operand",$param) and $param["Operand"] !== null) {
            $this->Operand = $param["Operand"];
        }

        if (array_key_exists("OperationDesc",$param) and $param["OperationDesc"] !== null) {
            $this->OperationDesc = $param["OperationDesc"];
        }

        if (array_key_exists("SecurityLevel",$param) and $param["SecurityLevel"] !== null) {
            $this->SecurityLevel = $param["SecurityLevel"];
        }
    }
}
