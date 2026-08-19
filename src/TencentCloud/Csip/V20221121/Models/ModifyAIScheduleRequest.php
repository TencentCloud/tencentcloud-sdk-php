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
 * ModifyAISchedule请求参数结构体
 *
 * @method string getScheduleId() 获取<p>AI 定时任务 ID。可通过 CreateAISchedule 接口获取。</p>
 * @method void setScheduleId(string $ScheduleId) 设置<p>AI 定时任务 ID。可通过 CreateAISchedule 接口获取。</p>
 * @method string getName() 获取<p>任务名称。最大 128 字符。</p>
 * @method void setName(string $Name) 设置<p>任务名称。最大 128 字符。</p>
 * @method string getPrompts() 获取<p>执行提示词。最大 2048 字符。</p>
 * @method void setPrompts(string $Prompts) 设置<p>执行提示词。最大 2048 字符。</p>
 * @method integer getMaxFireCount() 获取<p>最大触发次数，0 表示无限制。</p>
 * @method void setMaxFireCount(integer $MaxFireCount) 设置<p>最大触发次数，0 表示无限制。</p>
 * @method integer getStartTime() 获取<p>生效开始时间，Unix 毫秒时间戳，0 表示立即生效。</p>
 * @method void setStartTime(integer $StartTime) 设置<p>生效开始时间，Unix 毫秒时间戳，0 表示立即生效。</p>
 * @method integer getEndTime() 获取<p>生效结束时间，Unix 毫秒时间戳，0 表示永不过期。</p>
 * @method void setEndTime(integer $EndTime) 设置<p>生效结束时间，Unix 毫秒时间戳，0 表示永不过期。</p>
 * @method array getTriggers() 获取<p>触发器列表，当 UpdateTriggers 为 true 时全量替换。</p>
 * @method void setTriggers(array $Triggers) 设置<p>触发器列表，当 UpdateTriggers 为 true 时全量替换。</p>
 * @method boolean getUpdateTriggers() 获取<p>是否更新触发器列表。取值：true（使用 Triggers 字段全量替换）、false（不更新）。</p>
 * @method void setUpdateTriggers(boolean $UpdateTriggers) 设置<p>是否更新触发器列表。取值：true（使用 Triggers 字段全量替换）、false（不更新）。</p>
 */
class ModifyAIScheduleRequest extends AbstractModel
{
    /**
     * @var string <p>AI 定时任务 ID。可通过 CreateAISchedule 接口获取。</p>
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
     * @var integer <p>最大触发次数，0 表示无限制。</p>
     */
    public $MaxFireCount;

    /**
     * @var integer <p>生效开始时间，Unix 毫秒时间戳，0 表示立即生效。</p>
     */
    public $StartTime;

    /**
     * @var integer <p>生效结束时间，Unix 毫秒时间戳，0 表示永不过期。</p>
     */
    public $EndTime;

    /**
     * @var array <p>触发器列表，当 UpdateTriggers 为 true 时全量替换。</p>
     */
    public $Triggers;

    /**
     * @var boolean <p>是否更新触发器列表。取值：true（使用 Triggers 字段全量替换）、false（不更新）。</p>
     */
    public $UpdateTriggers;

    /**
     * @param string $ScheduleId <p>AI 定时任务 ID。可通过 CreateAISchedule 接口获取。</p>
     * @param string $Name <p>任务名称。最大 128 字符。</p>
     * @param string $Prompts <p>执行提示词。最大 2048 字符。</p>
     * @param integer $MaxFireCount <p>最大触发次数，0 表示无限制。</p>
     * @param integer $StartTime <p>生效开始时间，Unix 毫秒时间戳，0 表示立即生效。</p>
     * @param integer $EndTime <p>生效结束时间，Unix 毫秒时间戳，0 表示永不过期。</p>
     * @param array $Triggers <p>触发器列表，当 UpdateTriggers 为 true 时全量替换。</p>
     * @param boolean $UpdateTriggers <p>是否更新触发器列表。取值：true（使用 Triggers 字段全量替换）、false（不更新）。</p>
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

        if (array_key_exists("MaxFireCount",$param) and $param["MaxFireCount"] !== null) {
            $this->MaxFireCount = $param["MaxFireCount"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Triggers",$param) and $param["Triggers"] !== null) {
            $this->Triggers = [];
            foreach ($param["Triggers"] as $key => $value){
                $obj = new AiScheduleTriggerInfo();
                $obj->deserialize($value);
                array_push($this->Triggers, $obj);
            }
        }

        if (array_key_exists("UpdateTriggers",$param) and $param["UpdateTriggers"] !== null) {
            $this->UpdateTriggers = $param["UpdateTriggers"];
        }
    }
}
