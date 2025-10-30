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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 执行器执行记录。
 *
 * @method string getInvokerId() 获取执行器ID。
 * @method void setInvokerId(string $InvokerId) 设置执行器ID。
 * @method string getInvokeTime() 获取执行时间。格式为：YYYY-MM-DDThh:mm:ssZ
 * @method void setInvokeTime(string $InvokeTime) 设置执行时间。格式为：YYYY-MM-DDThh:mm:ssZ
 * @method string getReason() 获取执行原因。
 * @method void setReason(string $Reason) 设置执行原因。
 * @method string getInvocationId() 获取命令执行ID。
 * @method void setInvocationId(string $InvocationId) 设置命令执行ID。
 * @method string getResult() 获取触发结果。

- PENDING：等待下发
- RUNNING：命令运行中
- CANCELLING：取消中
- SUCCESS：命令成功
- TIMEOUT：命令超时
- FAILED：命令失败
- CANCELLED：命令全部取消
- PARTIAL_FAILED：命令部分失败
- PARTIAL_CANCELLED：命令部分取消
 * @method void setResult(string $Result) 设置触发结果。

- PENDING：等待下发
- RUNNING：命令运行中
- CANCELLING：取消中
- SUCCESS：命令成功
- TIMEOUT：命令超时
- FAILED：命令失败
- CANCELLED：命令全部取消
- PARTIAL_FAILED：命令部分失败
- PARTIAL_CANCELLED：命令部分取消
 */
class InvokerRecord extends AbstractModel
{
    /**
     * @var string 执行器ID。
     */
    public $InvokerId;

    /**
     * @var string 执行时间。格式为：YYYY-MM-DDThh:mm:ssZ
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

- PENDING：等待下发
- RUNNING：命令运行中
- CANCELLING：取消中
- SUCCESS：命令成功
- TIMEOUT：命令超时
- FAILED：命令失败
- CANCELLED：命令全部取消
- PARTIAL_FAILED：命令部分失败
- PARTIAL_CANCELLED：命令部分取消
     */
    public $Result;

    /**
     * @param string $InvokerId 执行器ID。
     * @param string $InvokeTime 执行时间。格式为：YYYY-MM-DDThh:mm:ssZ
     * @param string $Reason 执行原因。
     * @param string $InvocationId 命令执行ID。
     * @param string $Result 触发结果。

- PENDING：等待下发
- RUNNING：命令运行中
- CANCELLING：取消中
- SUCCESS：命令成功
- TIMEOUT：命令超时
- FAILED：命令失败
- CANCELLED：命令全部取消
- PARTIAL_FAILED：命令部分失败
- PARTIAL_CANCELLED：命令部分取消
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
