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
 * @method integer getInstanceId() 获取<p>EMR实例ID</p>
 * @method void setInstanceId(integer $InstanceId) 设置<p>EMR实例ID</p>
 * @method string getOperation() 获取<p>操作名称</p>
 * @method void setOperation(string $Operation) 设置<p>操作名称</p>
 * @method integer getOperationType() 获取<p>操作类型</p>
 * @method void setOperationType(integer $OperationType) 设置<p>操作类型</p>
 * @method integer getUserType() 获取<p>用户类型</p>
 * @method void setUserType(integer $UserType) 设置<p>用户类型</p>
 * @method string getOperator() 获取<p>操作者</p>
 * @method void setOperator(string $Operator) 设置<p>操作者</p>
 * @method string getCreateTime() 获取<p>操作时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>操作时间</p>
 * @method string getOperand() 获取<p>操作对象</p>
 * @method void setOperand(string $Operand) 设置<p>操作对象</p>
 * @method string getOperationDesc() 获取<p>操作详情</p>
 * @method void setOperationDesc(string $OperationDesc) 设置<p>操作详情</p>
 * @method string getSecurityLevel() 获取<p>安全级别</p>
 * @method void setSecurityLevel(string $SecurityLevel) 设置<p>安全级别</p>
 * @method string getOperatorName() 获取<p>操作者名称</p>
 * @method void setOperatorName(string $OperatorName) 设置<p>操作者名称</p>
 */
class OperationLog extends AbstractModel
{
    /**
     * @var integer <p>EMR实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>操作名称</p>
     */
    public $Operation;

    /**
     * @var integer <p>操作类型</p>
     */
    public $OperationType;

    /**
     * @var integer <p>用户类型</p>
     */
    public $UserType;

    /**
     * @var string <p>操作者</p>
     */
    public $Operator;

    /**
     * @var string <p>操作时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>操作对象</p>
     */
    public $Operand;

    /**
     * @var string <p>操作详情</p>
     */
    public $OperationDesc;

    /**
     * @var string <p>安全级别</p>
     */
    public $SecurityLevel;

    /**
     * @var string <p>操作者名称</p>
     */
    public $OperatorName;

    /**
     * @param integer $InstanceId <p>EMR实例ID</p>
     * @param string $Operation <p>操作名称</p>
     * @param integer $OperationType <p>操作类型</p>
     * @param integer $UserType <p>用户类型</p>
     * @param string $Operator <p>操作者</p>
     * @param string $CreateTime <p>操作时间</p>
     * @param string $Operand <p>操作对象</p>
     * @param string $OperationDesc <p>操作详情</p>
     * @param string $SecurityLevel <p>安全级别</p>
     * @param string $OperatorName <p>操作者名称</p>
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

        if (array_key_exists("OperatorName",$param) and $param["OperatorName"] !== null) {
            $this->OperatorName = $param["OperatorName"];
        }
    }
}
