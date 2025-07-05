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
 * 查询预测式外呼任务列表元素
 *
 * @method integer getCampaignId() 获取任务 ID
 * @method void setCampaignId(integer $CampaignId) 设置任务 ID
 * @method string getName() 获取任务名称
 * @method void setName(string $Name) 设置任务名称
 * @method integer getStatus() 获取任务状态 0 待开始 1 进行中 2 已暂停 3 已终止 4 已完成
 * @method void setStatus(integer $Status) 设置任务状态 0 待开始 1 进行中 2 已暂停 3 已终止 4 已完成
 * @method integer getStatusReason() 获取任务状态原因 0 正常 1 手动结束 2 超时结束
 * @method void setStatusReason(integer $StatusReason) 设置任务状态原因 0 正常 1 手动结束 2 超时结束
 * @method integer getCalleeCount() 获取被叫号码个数
 * @method void setCalleeCount(integer $CalleeCount) 设置被叫号码个数
 * @method integer getFinishedCalleeCount() 获取已完成的被叫个数
 * @method void setFinishedCalleeCount(integer $FinishedCalleeCount) 设置已完成的被叫个数
 * @method integer getPriority() 获取相同应用内多个任务运行优先级，从高到底 1 - 5
 * @method void setPriority(integer $Priority) 设置相同应用内多个任务运行优先级，从高到底 1 - 5
 * @method integer getSkillGroupId() 获取使用的座席技能组 ID
 * @method void setSkillGroupId(integer $SkillGroupId) 设置使用的座席技能组 ID
 */
class DescribePredictiveDialingCampaignsElement extends AbstractModel
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
     * @var integer 任务状态 0 待开始 1 进行中 2 已暂停 3 已终止 4 已完成
     */
    public $Status;

    /**
     * @var integer 任务状态原因 0 正常 1 手动结束 2 超时结束
     */
    public $StatusReason;

    /**
     * @var integer 被叫号码个数
     */
    public $CalleeCount;

    /**
     * @var integer 已完成的被叫个数
     */
    public $FinishedCalleeCount;

    /**
     * @var integer 相同应用内多个任务运行优先级，从高到底 1 - 5
     */
    public $Priority;

    /**
     * @var integer 使用的座席技能组 ID
     */
    public $SkillGroupId;

    /**
     * @param integer $CampaignId 任务 ID
     * @param string $Name 任务名称
     * @param integer $Status 任务状态 0 待开始 1 进行中 2 已暂停 3 已终止 4 已完成
     * @param integer $StatusReason 任务状态原因 0 正常 1 手动结束 2 超时结束
     * @param integer $CalleeCount 被叫号码个数
     * @param integer $FinishedCalleeCount 已完成的被叫个数
     * @param integer $Priority 相同应用内多个任务运行优先级，从高到底 1 - 5
     * @param integer $SkillGroupId 使用的座席技能组 ID
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusReason",$param) and $param["StatusReason"] !== null) {
            $this->StatusReason = $param["StatusReason"];
        }

        if (array_key_exists("CalleeCount",$param) and $param["CalleeCount"] !== null) {
            $this->CalleeCount = $param["CalleeCount"];
        }

        if (array_key_exists("FinishedCalleeCount",$param) and $param["FinishedCalleeCount"] !== null) {
            $this->FinishedCalleeCount = $param["FinishedCalleeCount"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }
    }
}
