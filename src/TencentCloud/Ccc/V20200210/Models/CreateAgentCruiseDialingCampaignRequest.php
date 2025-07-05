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
 * CreateAgentCruiseDialingCampaign请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
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
 * @method array getCallees() 获取被叫列表，支持 E.164 或不带国家码形式的号码
 * @method void setCallees(array $Callees) 设置被叫列表，支持 E.164 或不带国家码形式的号码
 * @method array getCallers() 获取主叫列表，使用管理端展示的号码格式
 * @method void setCallers(array $Callers) 设置主叫列表，使用管理端展示的号码格式
 * @method integer getCallOrder() 获取被叫呼叫顺序 0 随机 1 顺序
 * @method void setCallOrder(integer $CallOrder) 设置被叫呼叫顺序 0 随机 1 顺序
 * @method string getUUI() 获取调用方自定义数据，最大长度 1024
 * @method void setUUI(string $UUI) 设置调用方自定义数据，最大长度 1024
 */
class CreateAgentCruiseDialingCampaignRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     */
    public $SdkAppId;

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
     * @var array 被叫列表，支持 E.164 或不带国家码形式的号码
     */
    public $Callees;

    /**
     * @var array 主叫列表，使用管理端展示的号码格式
     */
    public $Callers;

    /**
     * @var integer 被叫呼叫顺序 0 随机 1 顺序
     */
    public $CallOrder;

    /**
     * @var string 调用方自定义数据，最大长度 1024
     */
    public $UUI;

    /**
     * @param integer $SdkAppId 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     * @param string $Name 任务名称
     * @param string $Agent 座席账号
     * @param integer $ConcurrencyNumber 单轮并发呼叫量 1-20
     * @param integer $StartTime 任务启动时间，Unix 时间戳，到此时间后会自动启动任务
     * @param integer $EndTime 任务结束时间，Unix 时间戳，到此时间后会自动终止任务
     * @param array $Callees 被叫列表，支持 E.164 或不带国家码形式的号码
     * @param array $Callers 主叫列表，使用管理端展示的号码格式
     * @param integer $CallOrder 被叫呼叫顺序 0 随机 1 顺序
     * @param string $UUI 调用方自定义数据，最大长度 1024
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
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

        if (array_key_exists("Callees",$param) and $param["Callees"] !== null) {
            $this->Callees = $param["Callees"];
        }

        if (array_key_exists("Callers",$param) and $param["Callers"] !== null) {
            $this->Callers = $param["Callers"];
        }

        if (array_key_exists("CallOrder",$param) and $param["CallOrder"] !== null) {
            $this->CallOrder = $param["CallOrder"];
        }

        if (array_key_exists("UUI",$param) and $param["UUI"] !== null) {
            $this->UUI = $param["UUI"];
        }
    }
}
