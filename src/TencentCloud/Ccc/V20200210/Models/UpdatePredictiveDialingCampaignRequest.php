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
 * UpdatePredictiveDialingCampaign请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method integer getCampaignId() 获取生成的任务 ID
 * @method void setCampaignId(integer $CampaignId) 设置生成的任务 ID
 * @method string getName() 获取任务名称
 * @method void setName(string $Name) 设置任务名称
 * @method array getCallees() 获取被叫列表，支持 E.164 或不带国家码形式的号码
 * @method void setCallees(array $Callees) 设置被叫列表，支持 E.164 或不带国家码形式的号码
 * @method array getCallers() 获取主叫列表，使用管理端展示的号码格式
 * @method void setCallers(array $Callers) 设置主叫列表，使用管理端展示的号码格式
 * @method integer getCallOrder() 获取被叫呼叫顺序 0 随机 1 顺序
 * @method void setCallOrder(integer $CallOrder) 设置被叫呼叫顺序 0 随机 1 顺序
 * @method integer getSkillGroupId() 获取使用的座席技能组 ID
 * @method void setSkillGroupId(integer $SkillGroupId) 设置使用的座席技能组 ID
 * @method integer getPriority() 获取相同应用内多个任务运行优先级，从高到底 1 - 5
 * @method void setPriority(integer $Priority) 设置相同应用内多个任务运行优先级，从高到底 1 - 5
 * @method integer getExpectedAbandonRate() 获取预期呼损率，百分比，5 - 50	
 * @method void setExpectedAbandonRate(integer $ExpectedAbandonRate) 设置预期呼损率，百分比，5 - 50	
 * @method integer getRetryInterval() 获取呼叫重试间隔时间，单位秒，60 - 86400
 * @method void setRetryInterval(integer $RetryInterval) 设置呼叫重试间隔时间，单位秒，60 - 86400
 * @method integer getStartTime() 获取任务启动时间，Unix 时间戳，到此时间后会自动启动任务
 * @method void setStartTime(integer $StartTime) 设置任务启动时间，Unix 时间戳，到此时间后会自动启动任务
 * @method integer getEndTime() 获取任务结束时间，Unix 时间戳，到此时间后会自动终止任务
 * @method void setEndTime(integer $EndTime) 设置任务结束时间，Unix 时间戳，到此时间后会自动终止任务
 * @method integer getIVRId() 获取指定的 IVR ID
 * @method void setIVRId(integer $IVRId) 设置指定的 IVR ID
 * @method integer getRetryTimes() 获取呼叫重试次数，0 - 2
 * @method void setRetryTimes(integer $RetryTimes) 设置呼叫重试次数，0 - 2
 * @method array getVariables() 获取自定义变量
 * @method void setVariables(array $Variables) 设置自定义变量
 * @method string getUUI() 获取	UUI
 * @method void setUUI(string $UUI) 设置	UUI
 * @method array getCalleeAttributes() 获取被叫属性
 * @method void setCalleeAttributes(array $CalleeAttributes) 设置被叫属性
 */
class UpdatePredictiveDialingCampaignRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     */
    public $SdkAppId;

    /**
     * @var integer 生成的任务 ID
     */
    public $CampaignId;

    /**
     * @var string 任务名称
     */
    public $Name;

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
     * @var integer 使用的座席技能组 ID
     */
    public $SkillGroupId;

    /**
     * @var integer 相同应用内多个任务运行优先级，从高到底 1 - 5
     */
    public $Priority;

    /**
     * @var integer 预期呼损率，百分比，5 - 50	
     */
    public $ExpectedAbandonRate;

    /**
     * @var integer 呼叫重试间隔时间，单位秒，60 - 86400
     */
    public $RetryInterval;

    /**
     * @var integer 任务启动时间，Unix 时间戳，到此时间后会自动启动任务
     */
    public $StartTime;

    /**
     * @var integer 任务结束时间，Unix 时间戳，到此时间后会自动终止任务
     */
    public $EndTime;

    /**
     * @var integer 指定的 IVR ID
     */
    public $IVRId;

    /**
     * @var integer 呼叫重试次数，0 - 2
     */
    public $RetryTimes;

    /**
     * @var array 自定义变量
     */
    public $Variables;

    /**
     * @var string 	UUI
     */
    public $UUI;

    /**
     * @var array 被叫属性
     */
    public $CalleeAttributes;

    /**
     * @param integer $SdkAppId 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     * @param integer $CampaignId 生成的任务 ID
     * @param string $Name 任务名称
     * @param array $Callees 被叫列表，支持 E.164 或不带国家码形式的号码
     * @param array $Callers 主叫列表，使用管理端展示的号码格式
     * @param integer $CallOrder 被叫呼叫顺序 0 随机 1 顺序
     * @param integer $SkillGroupId 使用的座席技能组 ID
     * @param integer $Priority 相同应用内多个任务运行优先级，从高到底 1 - 5
     * @param integer $ExpectedAbandonRate 预期呼损率，百分比，5 - 50	
     * @param integer $RetryInterval 呼叫重试间隔时间，单位秒，60 - 86400
     * @param integer $StartTime 任务启动时间，Unix 时间戳，到此时间后会自动启动任务
     * @param integer $EndTime 任务结束时间，Unix 时间戳，到此时间后会自动终止任务
     * @param integer $IVRId 指定的 IVR ID
     * @param integer $RetryTimes 呼叫重试次数，0 - 2
     * @param array $Variables 自定义变量
     * @param string $UUI 	UUI
     * @param array $CalleeAttributes 被叫属性
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

        if (array_key_exists("CampaignId",$param) and $param["CampaignId"] !== null) {
            $this->CampaignId = $param["CampaignId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("ExpectedAbandonRate",$param) and $param["ExpectedAbandonRate"] !== null) {
            $this->ExpectedAbandonRate = $param["ExpectedAbandonRate"];
        }

        if (array_key_exists("RetryInterval",$param) and $param["RetryInterval"] !== null) {
            $this->RetryInterval = $param["RetryInterval"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("IVRId",$param) and $param["IVRId"] !== null) {
            $this->IVRId = $param["IVRId"];
        }

        if (array_key_exists("RetryTimes",$param) and $param["RetryTimes"] !== null) {
            $this->RetryTimes = $param["RetryTimes"];
        }

        if (array_key_exists("Variables",$param) and $param["Variables"] !== null) {
            $this->Variables = [];
            foreach ($param["Variables"] as $key => $value){
                $obj = new Variable();
                $obj->deserialize($value);
                array_push($this->Variables, $obj);
            }
        }

        if (array_key_exists("UUI",$param) and $param["UUI"] !== null) {
            $this->UUI = $param["UUI"];
        }

        if (array_key_exists("CalleeAttributes",$param) and $param["CalleeAttributes"] !== null) {
            $this->CalleeAttributes = [];
            foreach ($param["CalleeAttributes"] as $key => $value){
                $obj = new CalleeAttribute();
                $obj->deserialize($value);
                array_push($this->CalleeAttributes, $obj);
            }
        }
    }
}
