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
 * DescribePredictiveDialingCampaign返回参数结构体
 *
 * @method integer getCampaignId() 获取任务 ID
 * @method void setCampaignId(integer $CampaignId) 设置任务 ID
 * @method string getName() 获取任务名称
 * @method void setName(string $Name) 设置任务名称
 * @method integer getCallOrder() 获取被叫呼叫顺序 0 随机 1 顺序
 * @method void setCallOrder(integer $CallOrder) 设置被叫呼叫顺序 0 随机 1 顺序
 * @method integer getSkillGroupId() 获取使用的座席技能组 ID
 * @method void setSkillGroupId(integer $SkillGroupId) 设置使用的座席技能组 ID
 * @method integer getIVRId() 获取指定的 IVR ID
 * @method void setIVRId(integer $IVRId) 设置指定的 IVR ID
 * @method integer getPriority() 获取相同应用内多个任务运行优先级，从高到底 1 - 5
 * @method void setPriority(integer $Priority) 设置相同应用内多个任务运行优先级，从高到底 1 - 5
 * @method integer getExpectedAbandonRate() 获取预期呼损率，百分比，5 - 50
 * @method void setExpectedAbandonRate(integer $ExpectedAbandonRate) 设置预期呼损率，百分比，5 - 50
 * @method integer getRetryTimes() 获取呼叫重试次数，0 - 2
 * @method void setRetryTimes(integer $RetryTimes) 设置呼叫重试次数，0 - 2
 * @method integer getRetryInterval() 获取呼叫重试间隔时间，单位秒，60 - 86400
 * @method void setRetryInterval(integer $RetryInterval) 设置呼叫重试间隔时间，单位秒，60 - 86400
 * @method integer getStartTime() 获取任务启动时间，Unix 时间戳，到此时间后会自动启动任务
 * @method void setStartTime(integer $StartTime) 设置任务启动时间，Unix 时间戳，到此时间后会自动启动任务
 * @method integer getEndTime() 获取任务结束时间，Unix 时间戳，到此时间后会自动终止任务
 * @method void setEndTime(integer $EndTime) 设置任务结束时间，Unix 时间戳，到此时间后会自动终止任务
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePredictiveDialingCampaignResponse extends AbstractModel
{
    /**
     * @var integer 任务 ID
     */
    public $CampaignId;

    /**
     * @var string 任务名称
     */
    public $Name;

    /**
     * @var integer 被叫呼叫顺序 0 随机 1 顺序
     */
    public $CallOrder;

    /**
     * @var integer 使用的座席技能组 ID
     */
    public $SkillGroupId;

    /**
     * @var integer 指定的 IVR ID
     */
    public $IVRId;

    /**
     * @var integer 相同应用内多个任务运行优先级，从高到底 1 - 5
     */
    public $Priority;

    /**
     * @var integer 预期呼损率，百分比，5 - 50
     */
    public $ExpectedAbandonRate;

    /**
     * @var integer 呼叫重试次数，0 - 2
     */
    public $RetryTimes;

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
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $CampaignId 任务 ID
     * @param string $Name 任务名称
     * @param integer $CallOrder 被叫呼叫顺序 0 随机 1 顺序
     * @param integer $SkillGroupId 使用的座席技能组 ID
     * @param integer $IVRId 指定的 IVR ID
     * @param integer $Priority 相同应用内多个任务运行优先级，从高到底 1 - 5
     * @param integer $ExpectedAbandonRate 预期呼损率，百分比，5 - 50
     * @param integer $RetryTimes 呼叫重试次数，0 - 2
     * @param integer $RetryInterval 呼叫重试间隔时间，单位秒，60 - 86400
     * @param integer $StartTime 任务启动时间，Unix 时间戳，到此时间后会自动启动任务
     * @param integer $EndTime 任务结束时间，Unix 时间戳，到此时间后会自动终止任务
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
        if (array_key_exists("CampaignId",$param) and $param["CampaignId"] !== null) {
            $this->CampaignId = $param["CampaignId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CallOrder",$param) and $param["CallOrder"] !== null) {
            $this->CallOrder = $param["CallOrder"];
        }

        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }

        if (array_key_exists("IVRId",$param) and $param["IVRId"] !== null) {
            $this->IVRId = $param["IVRId"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("ExpectedAbandonRate",$param) and $param["ExpectedAbandonRate"] !== null) {
            $this->ExpectedAbandonRate = $param["ExpectedAbandonRate"];
        }

        if (array_key_exists("RetryTimes",$param) and $param["RetryTimes"] !== null) {
            $this->RetryTimes = $param["RetryTimes"];
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
