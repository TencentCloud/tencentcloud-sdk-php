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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MsgRecordResult
 *
 * @method integer getCallResult() 获取表示该条消息的调用结果：0=CALL_RESULT_UNKNOWN（全部/未知）, 1=CALL_RESULT_SUCCESS（成功）, 2=CALL_RESULT_FAILED（失败）；fail_reason（string）为调用失败时的失败原因描述。
 * @method void setCallResult(integer $CallResult) 设置表示该条消息的调用结果：0=CALL_RESULT_UNKNOWN（全部/未知）, 1=CALL_RESULT_SUCCESS（成功）, 2=CALL_RESULT_FAILED（失败）；fail_reason（string）为调用失败时的失败原因描述。
 * @method string getCustomerVariable() 获取自定义变量，json字符串
 * @method void setCustomerVariable(string $CustomerVariable) 设置自定义变量，json字符串
 * @method string getFailReason() 获取失败原因
 * @method void setFailReason(string $FailReason) 设置失败原因
 * @method integer getFirstTokenLatency() 获取首token耗时
 * @method void setFirstTokenLatency(integer $FirstTokenLatency) 设置首token耗时
 * @method integer getInputToken() 获取输入token数
 * @method void setInputToken(integer $InputToken) 设置输入token数
 * @method integer getOutputToken() 获取输出token数
 * @method void setOutputToken(integer $OutputToken) 设置输出token数
 * @method integer getTotalToken() 获取总token数
 * @method void setTotalToken(integer $TotalToken) 设置总token数
 * @method integer getTotalTokenLatency() 获取总token耗时
 * @method void setTotalTokenLatency(integer $TotalTokenLatency) 设置总token耗时
 */
class MsgRecordResult extends AbstractModel
{
    /**
     * @var integer 表示该条消息的调用结果：0=CALL_RESULT_UNKNOWN（全部/未知）, 1=CALL_RESULT_SUCCESS（成功）, 2=CALL_RESULT_FAILED（失败）；fail_reason（string）为调用失败时的失败原因描述。
     */
    public $CallResult;

    /**
     * @var string 自定义变量，json字符串
     */
    public $CustomerVariable;

    /**
     * @var string 失败原因
     */
    public $FailReason;

    /**
     * @var integer 首token耗时
     */
    public $FirstTokenLatency;

    /**
     * @var integer 输入token数
     */
    public $InputToken;

    /**
     * @var integer 输出token数
     */
    public $OutputToken;

    /**
     * @var integer 总token数
     */
    public $TotalToken;

    /**
     * @var integer 总token耗时
     */
    public $TotalTokenLatency;

    /**
     * @param integer $CallResult 表示该条消息的调用结果：0=CALL_RESULT_UNKNOWN（全部/未知）, 1=CALL_RESULT_SUCCESS（成功）, 2=CALL_RESULT_FAILED（失败）；fail_reason（string）为调用失败时的失败原因描述。
     * @param string $CustomerVariable 自定义变量，json字符串
     * @param string $FailReason 失败原因
     * @param integer $FirstTokenLatency 首token耗时
     * @param integer $InputToken 输入token数
     * @param integer $OutputToken 输出token数
     * @param integer $TotalToken 总token数
     * @param integer $TotalTokenLatency 总token耗时
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
        if (array_key_exists("CallResult",$param) and $param["CallResult"] !== null) {
            $this->CallResult = $param["CallResult"];
        }

        if (array_key_exists("CustomerVariable",$param) and $param["CustomerVariable"] !== null) {
            $this->CustomerVariable = $param["CustomerVariable"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("FirstTokenLatency",$param) and $param["FirstTokenLatency"] !== null) {
            $this->FirstTokenLatency = $param["FirstTokenLatency"];
        }

        if (array_key_exists("InputToken",$param) and $param["InputToken"] !== null) {
            $this->InputToken = $param["InputToken"];
        }

        if (array_key_exists("OutputToken",$param) and $param["OutputToken"] !== null) {
            $this->OutputToken = $param["OutputToken"];
        }

        if (array_key_exists("TotalToken",$param) and $param["TotalToken"] !== null) {
            $this->TotalToken = $param["TotalToken"];
        }

        if (array_key_exists("TotalTokenLatency",$param) and $param["TotalTokenLatency"] !== null) {
            $this->TotalTokenLatency = $param["TotalTokenLatency"];
        }
    }
}
