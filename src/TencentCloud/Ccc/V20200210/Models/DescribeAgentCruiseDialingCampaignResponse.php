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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAgentCruiseDialingCampaign返回参数结构体
 *
 * @method string getName() 获取任务名称
 * @method void setName(string $Name) 设置任务名称
 * @method string getAgent() 获取座席账号
 * @method void setAgent(string $Agent) 设置座席账号
 * @method integer getConcurrencyNumber() 获取单轮并发呼叫量 1-20
 * @method void setConcurrencyNumber(integer $ConcurrencyNumber) 设置单轮并发呼叫量 1-20
 * @method integer getStartTime() 获取任务启动时间，Unix 时间戳，到此时间后会自动启动任务
 * @method void setStartTime(integer $StartTime) 设置任务启动时间，Unix 时间戳，到此时间后会自动启动任务
 * @method integer getEndTime() 获取任务结束时间，Unix 时间戳，到此时间后会自动终止任务
 * @method void setEndTime(integer $EndTime) 设置任务结束时间，Unix 时间戳，到此时间后会自动终止任务
 * @method integer getCallOrder() 获取被叫呼叫顺序 0 随机 1 顺序
 * @method void setCallOrder(integer $CallOrder) 设置被叫呼叫顺序 0 随机 1 顺序
 * @method string getUUI() 获取调用方自定义数据，最大长度 1024
 * @method void setUUI(string $UUI) 设置调用方自定义数据，最大长度 1024
 * @method integer getState() 获取任务状态 0 未启动 1 运行中 2 已完成 3 已终止
 * @method void setState(integer $State) 设置任务状态 0 未启动 1 运行中 2 已完成 3 已终止
 * @method integer getTotalCalleeCount() 获取被叫总数
 * @method void setTotalCalleeCount(integer $TotalCalleeCount) 设置被叫总数
 * @method integer getCalledCalleeCount() 获取已呼被叫数
 * @method void setCalledCalleeCount(integer $CalledCalleeCount) 设置已呼被叫数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAgentCruiseDialingCampaignResponse extends AbstractModel
{
    /**
     * @var string 任务名称
     */
    public $Name;

    /**
     * @var string 座席账号
     */
    public $Agent;

    /**
     * @var integer 单轮并发呼叫量 1-20
     */
    public $ConcurrencyNumber;

    /**
     * @var integer 任务启动时间，Unix 时间戳，到此时间后会自动启动任务
     */
    public $StartTime;

    /**
     * @var integer 任务结束时间，Unix 时间戳，到此时间后会自动终止任务
     */
    public $EndTime;

    /**
     * @var integer 被叫呼叫顺序 0 随机 1 顺序
     */
    public $CallOrder;

    /**
     * @var string 调用方自定义数据，最大长度 1024
     */
    public $UUI;

    /**
     * @var integer 任务状态 0 未启动 1 运行中 2 已完成 3 已终止
     */
    public $State;

    /**
     * @var integer 被叫总数
     */
    public $TotalCalleeCount;

    /**
     * @var integer 已呼被叫数
     */
    public $CalledCalleeCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name 任务名称
     * @param string $Agent 座席账号
     * @param integer $ConcurrencyNumber 单轮并发呼叫量 1-20
     * @param integer $StartTime 任务启动时间，Unix 时间戳，到此时间后会自动启动任务
     * @param integer $EndTime 任务结束时间，Unix 时间戳，到此时间后会自动终止任务
     * @param integer $CallOrder 被叫呼叫顺序 0 随机 1 顺序
     * @param string $UUI 调用方自定义数据，最大长度 1024
     * @param integer $State 任务状态 0 未启动 1 运行中 2 已完成 3 已终止
     * @param integer $TotalCalleeCount 被叫总数
     * @param integer $CalledCalleeCount 已呼被叫数
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = $param["Agent"];
        }

        if (array_key_exists("ConcurrencyNumber",$param) and $param["ConcurrencyNumber"] !== null) {
            $this->ConcurrencyNumber = $param["ConcurrencyNumber"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CallOrder",$param) and $param["CallOrder"] !== null) {
            $this->CallOrder = $param["CallOrder"];
        }

        if (array_key_exists("UUI",$param) and $param["UUI"] !== null) {
            $this->UUI = $param["UUI"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("TotalCalleeCount",$param) and $param["TotalCalleeCount"] !== null) {
            $this->TotalCalleeCount = $param["TotalCalleeCount"];
        }

        if (array_key_exists("CalledCalleeCount",$param) and $param["CalledCalleeCount"] !== null) {
            $this->CalledCalleeCount = $param["CalledCalleeCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
