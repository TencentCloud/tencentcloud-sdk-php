<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例事件信息
 *
 * @method integer getID() 获取事件 ID。
 * @method void setID(integer $ID) 设置事件 ID。
 * @method string getInstanceId() 获取实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 * @method string getType() 获取事件类型，当前仅支持配置实例迁移、资源腾挪、机房裁撤相关的运维操作。该参数仅支持配置为 **InstanceMigration**。
 * @method void setType(string $Type) 设置事件类型，当前仅支持配置实例迁移、资源腾挪、机房裁撤相关的运维操作。该参数仅支持配置为 **InstanceMigration**。
 * @method string getGrade() 获取事件等级根据其影响严重程度和紧急程度进行分级，由重至轻依次为关键、重要、中等、一般。
- Critical：关键
- High：重要
- Middle：中等
- Low：一般
 * @method void setGrade(string $Grade) 设置事件等级根据其影响严重程度和紧急程度进行分级，由重至轻依次为关键、重要、中等、一般。
- Critical：关键
- High：重要
- Middle：中等
- Low：一般
 * @method string getExecutionDate() 获取事件计划执行日期。
 * @method void setExecutionDate(string $ExecutionDate) 设置事件计划执行日期。
 * @method string getStartTime() 获取事件计划执行开始时间。
 * @method void setStartTime(string $StartTime) 设置事件计划执行开始时间。
 * @method string getEndTime() 获取事件计划执行结束时间。
 * @method void setEndTime(string $EndTime) 设置事件计划执行结束时间。
 * @method string getLatestExecutionDate() 获取运维事件最迟执行的日期，即该事件必须在该日期之前完成，否则可能会对业务产生影响。
 * @method void setLatestExecutionDate(string $LatestExecutionDate) 设置运维事件最迟执行的日期，即该事件必须在该日期之前完成，否则可能会对业务产生影响。
 * @method string getStatus() 获取事件当前状态。
- Waiting：未到达执行日期或不在维护时间窗内的事件。
- Running：在维护时间窗内，正在执行维护的事件。
- Finished：已全部完成维护的事件。
- Canceled：已取消执行的事件。
 * @method void setStatus(string $Status) 设置事件当前状态。
- Waiting：未到达执行日期或不在维护时间窗内的事件。
- Running：在维护时间窗内，正在执行维护的事件。
- Finished：已全部完成维护的事件。
- Canceled：已取消执行的事件。
 * @method string getTaskEndTime() 获取事件执行任务完成时间。
 * @method void setTaskEndTime(string $TaskEndTime) 设置事件执行任务完成时间。
 * @method string getEffectInfo() 获取事件影响信息。
 * @method void setEffectInfo(string $EffectInfo) 设置事件影响信息。
 * @method string getInitialExecutionDate() 获取事件最初计划执行日期。
 * @method void setInitialExecutionDate(string $InitialExecutionDate) 设置事件最初计划执行日期。
 */
class RedisInstanceEvent extends AbstractModel
{
    /**
     * @var integer 事件 ID。
     */
    public $ID;

    /**
     * @var string 实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @var string 事件类型，当前仅支持配置实例迁移、资源腾挪、机房裁撤相关的运维操作。该参数仅支持配置为 **InstanceMigration**。
     */
    public $Type;

    /**
     * @var string 事件等级根据其影响严重程度和紧急程度进行分级，由重至轻依次为关键、重要、中等、一般。
- Critical：关键
- High：重要
- Middle：中等
- Low：一般
     */
    public $Grade;

    /**
     * @var string 事件计划执行日期。
     */
    public $ExecutionDate;

    /**
     * @var string 事件计划执行开始时间。
     */
    public $StartTime;

    /**
     * @var string 事件计划执行结束时间。
     */
    public $EndTime;

    /**
     * @var string 运维事件最迟执行的日期，即该事件必须在该日期之前完成，否则可能会对业务产生影响。
     */
    public $LatestExecutionDate;

    /**
     * @var string 事件当前状态。
- Waiting：未到达执行日期或不在维护时间窗内的事件。
- Running：在维护时间窗内，正在执行维护的事件。
- Finished：已全部完成维护的事件。
- Canceled：已取消执行的事件。
     */
    public $Status;

    /**
     * @var string 事件执行任务完成时间。
     */
    public $TaskEndTime;

    /**
     * @var string 事件影响信息。
     */
    public $EffectInfo;

    /**
     * @var string 事件最初计划执行日期。
     */
    public $InitialExecutionDate;

    /**
     * @param integer $ID 事件 ID。
     * @param string $InstanceId 实例 ID。
     * @param string $InstanceName 实例名称。
     * @param string $Type 事件类型，当前仅支持配置实例迁移、资源腾挪、机房裁撤相关的运维操作。该参数仅支持配置为 **InstanceMigration**。
     * @param string $Grade 事件等级根据其影响严重程度和紧急程度进行分级，由重至轻依次为关键、重要、中等、一般。
- Critical：关键
- High：重要
- Middle：中等
- Low：一般
     * @param string $ExecutionDate 事件计划执行日期。
     * @param string $StartTime 事件计划执行开始时间。
     * @param string $EndTime 事件计划执行结束时间。
     * @param string $LatestExecutionDate 运维事件最迟执行的日期，即该事件必须在该日期之前完成，否则可能会对业务产生影响。
     * @param string $Status 事件当前状态。
- Waiting：未到达执行日期或不在维护时间窗内的事件。
- Running：在维护时间窗内，正在执行维护的事件。
- Finished：已全部完成维护的事件。
- Canceled：已取消执行的事件。
     * @param string $TaskEndTime 事件执行任务完成时间。
     * @param string $EffectInfo 事件影响信息。
     * @param string $InitialExecutionDate 事件最初计划执行日期。
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Grade",$param) and $param["Grade"] !== null) {
            $this->Grade = $param["Grade"];
        }

        if (array_key_exists("ExecutionDate",$param) and $param["ExecutionDate"] !== null) {
            $this->ExecutionDate = $param["ExecutionDate"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("LatestExecutionDate",$param) and $param["LatestExecutionDate"] !== null) {
            $this->LatestExecutionDate = $param["LatestExecutionDate"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskEndTime",$param) and $param["TaskEndTime"] !== null) {
            $this->TaskEndTime = $param["TaskEndTime"];
        }

        if (array_key_exists("EffectInfo",$param) and $param["EffectInfo"] !== null) {
            $this->EffectInfo = $param["EffectInfo"];
        }

        if (array_key_exists("InitialExecutionDate",$param) and $param["InitialExecutionDate"] !== null) {
            $this->InitialExecutionDate = $param["InitialExecutionDate"];
        }
    }
}
