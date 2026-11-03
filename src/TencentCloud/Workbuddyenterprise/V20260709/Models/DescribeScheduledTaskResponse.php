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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScheduledTask返回参数结构体
 *
 * @method string getTaskId() 获取<p>任务 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置<p>任务 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskKey() 获取<p>任务唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskKey(string $TaskKey) 设置<p>任务唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取<p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>任务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>任务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentId() 获取<p>关联 Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentId(string $AgentId) 设置<p>关联 Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCronExpr() 获取<p>Cron 表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCronExpr(string $CronExpr) 设置<p>Cron 表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>任务状态：ACTIVE（启用）/ PAUSED（暂停）/ DISABLED（停用）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>任务状态：ACTIVE（启用）/ PAUSED（暂停）/ DISABLED（停用）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastRunTime() 获取<p>最近执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastRunTime(string $LastRunTime) 设置<p>最近执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNextRunTime() 获取<p>下次执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextRunTime(string $NextRunTime) 设置<p>下次执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedTime() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedTime(string $ModifiedTime) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AgentConfig getAgentConfig() 获取<p>任务 Agent 配置（Prompt/Model/AgentId）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentConfig(AgentConfig $AgentConfig) 设置<p>任务 Agent 配置（Prompt/Model/AgentId）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEffectiveStart() 获取<p>生效日期开始时间（YYYY-MM-DD 格式），不传时不限制开始时间</p>
 * @method void setEffectiveStart(string $EffectiveStart) 设置<p>生效日期开始时间（YYYY-MM-DD 格式），不传时不限制开始时间</p>
 * @method string getEffectiveEnd() 获取<p>生效日期结束时间（YYYY-MM-DD 格式），不传时不限制结束时间</p>
 * @method void setEffectiveEnd(string $EffectiveEnd) 设置<p>生效日期结束时间（YYYY-MM-DD 格式），不传时不限制结束时间</p>
 * @method array getDeliveryTargetSet() 获取<p>投递目标集合（BOT_CHANNEL / WEBHOOK 可并存）</p>
 * @method void setDeliveryTargetSet(array $DeliveryTargetSet) 设置<p>投递目标集合（BOT_CHANNEL / WEBHOOK 可并存）</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeScheduledTaskResponse extends AbstractModel
{
    /**
     * @var string <p>任务 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string <p>任务唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskKey;

    /**
     * @var string <p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string <p>任务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>关联 Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentId;

    /**
     * @var string <p>Cron 表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CronExpr;

    /**
     * @var string <p>任务状态：ACTIVE（启用）/ PAUSED（暂停）/ DISABLED（停用）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>最近执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastRunTime;

    /**
     * @var string <p>下次执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextRunTime;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifiedTime;

    /**
     * @var AgentConfig <p>任务 Agent 配置（Prompt/Model/AgentId）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentConfig;

    /**
     * @var string <p>生效日期开始时间（YYYY-MM-DD 格式），不传时不限制开始时间</p>
     */
    public $EffectiveStart;

    /**
     * @var string <p>生效日期结束时间（YYYY-MM-DD 格式），不传时不限制结束时间</p>
     */
    public $EffectiveEnd;

    /**
     * @var array <p>投递目标集合（BOT_CHANNEL / WEBHOOK 可并存）</p>
     */
    public $DeliveryTargetSet;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId <p>任务 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskKey <p>任务唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName <p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>任务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentId <p>关联 Agent ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CronExpr <p>Cron 表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>任务状态：ACTIVE（启用）/ PAUSED（暂停）/ DISABLED（停用）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastRunTime <p>最近执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NextRunTime <p>下次执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedTime <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AgentConfig $AgentConfig <p>任务 Agent 配置（Prompt/Model/AgentId）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EffectiveStart <p>生效日期开始时间（YYYY-MM-DD 格式），不传时不限制开始时间</p>
     * @param string $EffectiveEnd <p>生效日期结束时间（YYYY-MM-DD 格式），不传时不限制结束时间</p>
     * @param array $DeliveryTargetSet <p>投递目标集合（BOT_CHANNEL / WEBHOOK 可并存）</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskKey",$param) and $param["TaskKey"] !== null) {
            $this->TaskKey = $param["TaskKey"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("CronExpr",$param) and $param["CronExpr"] !== null) {
            $this->CronExpr = $param["CronExpr"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LastRunTime",$param) and $param["LastRunTime"] !== null) {
            $this->LastRunTime = $param["LastRunTime"];
        }

        if (array_key_exists("NextRunTime",$param) and $param["NextRunTime"] !== null) {
            $this->NextRunTime = $param["NextRunTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("AgentConfig",$param) and $param["AgentConfig"] !== null) {
            $this->AgentConfig = new AgentConfig();
            $this->AgentConfig->deserialize($param["AgentConfig"]);
        }

        if (array_key_exists("EffectiveStart",$param) and $param["EffectiveStart"] !== null) {
            $this->EffectiveStart = $param["EffectiveStart"];
        }

        if (array_key_exists("EffectiveEnd",$param) and $param["EffectiveEnd"] !== null) {
            $this->EffectiveEnd = $param["EffectiveEnd"];
        }

        if (array_key_exists("DeliveryTargetSet",$param) and $param["DeliveryTargetSet"] !== null) {
            $this->DeliveryTargetSet = [];
            foreach ($param["DeliveryTargetSet"] as $key => $value){
                $obj = new DeliveryTarget();
                $obj->deserialize($value);
                array_push($this->DeliveryTargetSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
