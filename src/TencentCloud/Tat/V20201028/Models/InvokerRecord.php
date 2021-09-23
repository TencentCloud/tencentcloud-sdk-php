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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 执行器执行记录。
 *
 * @method string getInvokerId() 获取执行器ID。
 * @method void setInvokerId(string $InvokerId) 设置执行器ID。
 * @method string getInvokeTime() 获取执行时间。
 * @method void setInvokeTime(string $InvokeTime) 设置执行时间。
 * @method string getReason() 获取执行原因。
 * @method void setReason(string $Reason) 设置执行原因。
 * @method string getInvocationId() 获取命令执行ID。
 * @method void setInvocationId(string $InvocationId) 设置命令执行ID。
 * @method string getResult() 获取触发结果。
 * @method void setResult(string $Result) 设置触发结果。
 */
class InvokerRecord extends AbstractModel
{
    /**
     * @var string 执行器ID。
     */
    public $InvokerId;

    /**
     * @var string 执行时间。
     */
    public $InvokeTime;

    /**
     * @var string 执行原因。
     */
    public $Reason;

    /**
     * @var string 命令执行ID。
     */
    public $InvocationId;

    /**
     * @var string 触发结果。
     */
    public $Result;

    /**
     * @param string $InvokerId 执行器ID。
     * @param string $InvokeTime 执行时间。
     * @param string $Reason 执行原因。
     * @param string $InvocationId 命令执行ID。
     * @param string $Result 触发结果。
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
        if (array_key_exists("InvokerId",$param) and $param["InvokerId"] !== null) {
            $this->InvokerId = $param["InvokerId"];
        }

        if (array_key_exists("InvokeTime",$param) and $param["InvokeTime"] !== null) {
            $this->InvokeTime = $param["InvokeTime"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("InvocationId",$param) and $param["InvocationId"] !== null) {
            $this->InvocationId = $param["InvocationId"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}
