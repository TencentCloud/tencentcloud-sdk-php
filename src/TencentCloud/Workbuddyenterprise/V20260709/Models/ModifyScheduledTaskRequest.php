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
 * ModifyScheduledTask请求参数结构体
 *
 * @method string getTaskId() 获取<p>任务 ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务 ID</p>
 * @method string getTaskName() 获取<p>任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
 * @method string getDescription() 获取<p>任务描述</p>
 * @method void setDescription(string $Description) 设置<p>任务描述</p>
 * @method AgentConfig getAgentConfig() 获取<p>任务关联的 Agent 配置</p>
 * @method void setAgentConfig(AgentConfig $AgentConfig) 设置<p>任务关联的 Agent 配置</p>
 * @method string getCronExpr() 获取<p>Cron 表达式</p>
 * @method void setCronExpr(string $CronExpr) 设置<p>Cron 表达式</p>
 * @method string getStatus() 获取<p>任务状态：ACTIVE（启用）/ PAUSED（暂停）/ DISABLED（停用）</p>
 * @method void setStatus(string $Status) 设置<p>任务状态：ACTIVE（启用）/ PAUSED（暂停）/ DISABLED（停用）</p>
 * @method string getEffectiveStart() 获取<p>生效日期开始时间（YYYY-MM-DD 格式），传空串清除，不传保持原值</p>
 * @method void setEffectiveStart(string $EffectiveStart) 设置<p>生效日期开始时间（YYYY-MM-DD 格式），传空串清除，不传保持原值</p>
 * @method string getEffectiveEnd() 获取<p>生效日期结束时间（YYYY-MM-DD 格式），传空串清除，不传保持原值</p>
 * @method void setEffectiveEnd(string $EffectiveEnd) 设置<p>生效日期结束时间（YYYY-MM-DD 格式），传空串清除，不传保持原值</p>
 * @method array getDeliveryTargetSet() 获取<p>投递目标集合（部分更新时整体替换）</p>
 * @method void setDeliveryTargetSet(array $DeliveryTargetSet) 设置<p>投递目标集合（部分更新时整体替换）</p>
 */
class ModifyScheduledTaskRequest extends AbstractModel
{
    /**
     * @var string <p>任务 ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务名称</p>
     */
    public $TaskName;

    /**
     * @var string <p>任务描述</p>
     */
    public $Description;

    /**
     * @var AgentConfig <p>任务关联的 Agent 配置</p>
     */
    public $AgentConfig;

    /**
     * @var string <p>Cron 表达式</p>
     */
    public $CronExpr;

    /**
     * @var string <p>任务状态：ACTIVE（启用）/ PAUSED（暂停）/ DISABLED（停用）</p>
     */
    public $Status;

    /**
     * @var string <p>生效日期开始时间（YYYY-MM-DD 格式），传空串清除，不传保持原值</p>
     */
    public $EffectiveStart;

    /**
     * @var string <p>生效日期结束时间（YYYY-MM-DD 格式），传空串清除，不传保持原值</p>
     */
    public $EffectiveEnd;

    /**
     * @var array <p>投递目标集合（部分更新时整体替换）</p>
     */
    public $DeliveryTargetSet;

    /**
     * @param string $TaskId <p>任务 ID</p>
     * @param string $TaskName <p>任务名称</p>
     * @param string $Description <p>任务描述</p>
     * @param AgentConfig $AgentConfig <p>任务关联的 Agent 配置</p>
     * @param string $CronExpr <p>Cron 表达式</p>
     * @param string $Status <p>任务状态：ACTIVE（启用）/ PAUSED（暂停）/ DISABLED（停用）</p>
     * @param string $EffectiveStart <p>生效日期开始时间（YYYY-MM-DD 格式），传空串清除，不传保持原值</p>
     * @param string $EffectiveEnd <p>生效日期结束时间（YYYY-MM-DD 格式），传空串清除，不传保持原值</p>
     * @param array $DeliveryTargetSet <p>投递目标集合（部分更新时整体替换）</p>
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AgentConfig",$param) and $param["AgentConfig"] !== null) {
            $this->AgentConfig = new AgentConfig();
            $this->AgentConfig->deserialize($param["AgentConfig"]);
        }

        if (array_key_exists("CronExpr",$param) and $param["CronExpr"] !== null) {
            $this->CronExpr = $param["CronExpr"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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
    }
}
