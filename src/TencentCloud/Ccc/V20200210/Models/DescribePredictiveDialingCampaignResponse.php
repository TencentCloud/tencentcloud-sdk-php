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
 * @method integer getCampaignId() 获取<p>任务 ID</p>
 * @method void setCampaignId(integer $CampaignId) 设置<p>任务 ID</p>
 * @method string getName() 获取<p>任务名称</p>
 * @method void setName(string $Name) 设置<p>任务名称</p>
 * @method integer getCallOrder() 获取<p>被叫呼叫顺序 0 随机 1 顺序</p>
 * @method void setCallOrder(integer $CallOrder) 设置<p>被叫呼叫顺序 0 随机 1 顺序</p>
 * @method integer getSkillGroupId() 获取<p>使用的座席技能组 ID</p>
 * @method void setSkillGroupId(integer $SkillGroupId) 设置<p>使用的座席技能组 ID</p>
 * @method integer getIVRId() 获取<p>指定的 IVR ID</p>
 * @method void setIVRId(integer $IVRId) 设置<p>指定的 IVR ID</p>
 * @method integer getPriority() 获取<p>相同应用内多个任务运行优先级，从高到底 1 - 5</p>
 * @method void setPriority(integer $Priority) 设置<p>相同应用内多个任务运行优先级，从高到底 1 - 5</p>
 * @method integer getExpectedAbandonRate() 获取<p>预期呼损率，百分比，5 - 50</p>
 * @method void setExpectedAbandonRate(integer $ExpectedAbandonRate) 设置<p>预期呼损率，百分比，5 - 50</p>
 * @method integer getRetryTimes() 获取<p>呼叫重试次数，0 - 2</p>
 * @method void setRetryTimes(integer $RetryTimes) 设置<p>呼叫重试次数，0 - 2</p>
 * @method integer getRetryInterval() 获取<p>呼叫重试间隔时间，单位秒，60 - 86400</p>
 * @method void setRetryInterval(integer $RetryInterval) 设置<p>呼叫重试间隔时间，单位秒，60 - 86400</p>
 * @method integer getStartTime() 获取<p>任务启动时间，Unix 时间戳，到此时间后会自动启动任务</p>
 * @method void setStartTime(integer $StartTime) 设置<p>任务启动时间，Unix 时间戳，到此时间后会自动启动任务</p>
 * @method integer getEndTime() 获取<p>任务结束时间，Unix 时间戳，到此时间后会自动终止任务</p>
 * @method void setEndTime(integer $EndTime) 设置<p>任务结束时间，Unix 时间戳，到此时间后会自动终止任务</p>
 * @method array getVariables() 获取<p>自定义变量</p>
 * @method void setVariables(array $Variables) 设置<p>自定义变量</p>
 * @method string getUUI() 获取<p>UUI</p>
 * @method void setUUI(string $UUI) 设置<p>UUI</p>
 * @method integer getStatus() 获取<p>任务状态</p><p>枚举值：</p><ul><li>0： 待开始 </li><li>1： 进行中</li><li>2： 已暂停</li><li>3： 已终止</li><li>4： 已完成</li></ul>
 * @method void setStatus(integer $Status) 设置<p>任务状态</p><p>枚举值：</p><ul><li>0： 待开始 </li><li>1： 进行中</li><li>2： 已暂停</li><li>3： 已终止</li><li>4： 已完成</li></ul>
 * @method integer getStatusReason() 获取<p>任务状态原因 0 正常 1 手动结束 2 超时结束</p>
 * @method void setStatusReason(integer $StatusReason) 设置<p>任务状态原因 0 正常 1 手动结束 2 超时结束</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePredictiveDialingCampaignResponse extends AbstractModel
{
    /**
     * @var integer <p>任务 ID</p>
     */
    public $CampaignId;

    /**
     * @var string <p>任务名称</p>
     */
    public $Name;

    /**
     * @var integer <p>被叫呼叫顺序 0 随机 1 顺序</p>
     */
    public $CallOrder;

    /**
     * @var integer <p>使用的座席技能组 ID</p>
     */
    public $SkillGroupId;

    /**
     * @var integer <p>指定的 IVR ID</p>
     */
    public $IVRId;

    /**
     * @var integer <p>相同应用内多个任务运行优先级，从高到底 1 - 5</p>
     */
    public $Priority;

    /**
     * @var integer <p>预期呼损率，百分比，5 - 50</p>
     */
    public $ExpectedAbandonRate;

    /**
     * @var integer <p>呼叫重试次数，0 - 2</p>
     */
    public $RetryTimes;

    /**
     * @var integer <p>呼叫重试间隔时间，单位秒，60 - 86400</p>
     */
    public $RetryInterval;

    /**
     * @var integer <p>任务启动时间，Unix 时间戳，到此时间后会自动启动任务</p>
     */
    public $StartTime;

    /**
     * @var integer <p>任务结束时间，Unix 时间戳，到此时间后会自动终止任务</p>
     */
    public $EndTime;

    /**
     * @var array <p>自定义变量</p>
     */
    public $Variables;

    /**
     * @var string <p>UUI</p>
     */
    public $UUI;

    /**
     * @var integer <p>任务状态</p><p>枚举值：</p><ul><li>0： 待开始 </li><li>1： 进行中</li><li>2： 已暂停</li><li>3： 已终止</li><li>4： 已完成</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>任务状态原因 0 正常 1 手动结束 2 超时结束</p>
     */
    public $StatusReason;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $CampaignId <p>任务 ID</p>
     * @param string $Name <p>任务名称</p>
     * @param integer $CallOrder <p>被叫呼叫顺序 0 随机 1 顺序</p>
     * @param integer $SkillGroupId <p>使用的座席技能组 ID</p>
     * @param integer $IVRId <p>指定的 IVR ID</p>
     * @param integer $Priority <p>相同应用内多个任务运行优先级，从高到底 1 - 5</p>
     * @param integer $ExpectedAbandonRate <p>预期呼损率，百分比，5 - 50</p>
     * @param integer $RetryTimes <p>呼叫重试次数，0 - 2</p>
     * @param integer $RetryInterval <p>呼叫重试间隔时间，单位秒，60 - 86400</p>
     * @param integer $StartTime <p>任务启动时间，Unix 时间戳，到此时间后会自动启动任务</p>
     * @param integer $EndTime <p>任务结束时间，Unix 时间戳，到此时间后会自动终止任务</p>
     * @param array $Variables <p>自定义变量</p>
     * @param string $UUI <p>UUI</p>
     * @param integer $Status <p>任务状态</p><p>枚举值：</p><ul><li>0： 待开始 </li><li>1： 进行中</li><li>2： 已暂停</li><li>3： 已终止</li><li>4： 已完成</li></ul>
     * @param integer $StatusReason <p>任务状态原因 0 正常 1 手动结束 2 超时结束</p>
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusReason",$param) and $param["StatusReason"] !== null) {
            $this->StatusReason = $param["StatusReason"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
