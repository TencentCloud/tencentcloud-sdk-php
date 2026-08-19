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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 定时任务信息
 *
 * @method string getScheduleId() 获取<p>AI 定时任务 ID。</p>
 * @method void setScheduleId(string $ScheduleId) 设置<p>AI 定时任务 ID。</p>
 * @method string getName() 获取<p>任务名称。最大 128 字符。</p>
 * @method void setName(string $Name) 设置<p>任务名称。最大 128 字符。</p>
 * @method string getPrompts() 获取<p>执行提示词。最大 2048 字符。</p>
 * @method void setPrompts(string $Prompts) 设置<p>执行提示词。最大 2048 字符。</p>
 * @method integer getStatus() 获取<p>状态。取值：1（已启用）、2（已停用）。</p>
 * @method void setStatus(integer $Status) 设置<p>状态。取值：1（已启用）、2（已停用）。</p>
 * @method array getTriggers() 获取<p>触发器</p>
 * @method void setTriggers(array $Triggers) 设置<p>触发器</p>
 * @method integer getMaxFireCount() 获取<p>最大触发次数，0 表示无限制。</p>
 * @method void setMaxFireCount(integer $MaxFireCount) 设置<p>最大触发次数，0 表示无限制。</p>
 * @method integer getCurrentFireCount() 获取<p>已触发次数。</p>
 * @method void setCurrentFireCount(integer $CurrentFireCount) 设置<p>已触发次数。</p>
 * @method integer getStartTime() 获取<p>生效开始时间，Unix 毫秒时间戳，0 表示立即生效。</p>
 * @method void setStartTime(integer $StartTime) 设置<p>生效开始时间，Unix 毫秒时间戳，0 表示立即生效。</p>
 * @method integer getEndTime() 获取<p>生效结束时间，Unix 毫秒时间戳，0 表示永不过期。</p>
 * @method void setEndTime(integer $EndTime) 设置<p>生效结束时间，Unix 毫秒时间戳，0 表示永不过期。</p>
 * @method integer getCreateTime() 获取<p>创建时间，Unix 毫秒时间戳。</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间，Unix 毫秒时间戳。</p>
 * @method integer getUpdateTime() 获取<p>更新时间，Unix 毫秒时间戳。</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间，Unix 毫秒时间戳。</p>
 * @method AIScheduleUserIdentity getIdentity() 获取<p>身份信息</p>
 * @method void setIdentity(AIScheduleUserIdentity $Identity) 设置<p>身份信息</p>
 */
class AiScheduleInfo extends AbstractModel
{
    /**
     * @var string <p>AI 定时任务 ID。</p>
     */
    public $ScheduleId;

    /**
     * @var string <p>任务名称。最大 128 字符。</p>
     */
    public $Name;

    /**
     * @var string <p>执行提示词。最大 2048 字符。</p>
     */
    public $Prompts;

    /**
     * @var integer <p>状态。取值：1（已启用）、2（已停用）。</p>
     */
    public $Status;

    /**
     * @var array <p>触发器</p>
     */
    public $Triggers;

    /**
     * @var integer <p>最大触发次数，0 表示无限制。</p>
     */
    public $MaxFireCount;

    /**
     * @var integer <p>已触发次数。</p>
     */
    public $CurrentFireCount;

    /**
     * @var integer <p>生效开始时间，Unix 毫秒时间戳，0 表示立即生效。</p>
     */
    public $StartTime;

    /**
     * @var integer <p>生效结束时间，Unix 毫秒时间戳，0 表示永不过期。</p>
     */
    public $EndTime;

    /**
     * @var integer <p>创建时间，Unix 毫秒时间戳。</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间，Unix 毫秒时间戳。</p>
     */
    public $UpdateTime;

    /**
     * @var AIScheduleUserIdentity <p>身份信息</p>
     */
    public $Identity;

    /**
     * @param string $ScheduleId <p>AI 定时任务 ID。</p>
     * @param string $Name <p>任务名称。最大 128 字符。</p>
     * @param string $Prompts <p>执行提示词。最大 2048 字符。</p>
     * @param integer $Status <p>状态。取值：1（已启用）、2（已停用）。</p>
     * @param array $Triggers <p>触发器</p>
     * @param integer $MaxFireCount <p>最大触发次数，0 表示无限制。</p>
     * @param integer $CurrentFireCount <p>已触发次数。</p>
     * @param integer $StartTime <p>生效开始时间，Unix 毫秒时间戳，0 表示立即生效。</p>
     * @param integer $EndTime <p>生效结束时间，Unix 毫秒时间戳，0 表示永不过期。</p>
     * @param integer $CreateTime <p>创建时间，Unix 毫秒时间戳。</p>
     * @param integer $UpdateTime <p>更新时间，Unix 毫秒时间戳。</p>
     * @param AIScheduleUserIdentity $Identity <p>身份信息</p>
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
        if (array_key_exists("ScheduleId",$param) and $param["ScheduleId"] !== null) {
            $this->ScheduleId = $param["ScheduleId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Prompts",$param) and $param["Prompts"] !== null) {
            $this->Prompts = $param["Prompts"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Triggers",$param) and $param["Triggers"] !== null) {
            $this->Triggers = [];
            foreach ($param["Triggers"] as $key => $value){
                $obj = new AiScheduleTriggerInfo();
                $obj->deserialize($value);
                array_push($this->Triggers, $obj);
            }
        }

        if (array_key_exists("MaxFireCount",$param) and $param["MaxFireCount"] !== null) {
            $this->MaxFireCount = $param["MaxFireCount"];
        }

        if (array_key_exists("CurrentFireCount",$param) and $param["CurrentFireCount"] !== null) {
            $this->CurrentFireCount = $param["CurrentFireCount"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Identity",$param) and $param["Identity"] !== null) {
            $this->Identity = new AIScheduleUserIdentity();
            $this->Identity->deserialize($param["Identity"]);
        }
    }
}
