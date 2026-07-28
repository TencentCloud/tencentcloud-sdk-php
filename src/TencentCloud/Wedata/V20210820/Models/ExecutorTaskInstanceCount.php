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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExecutorTaskInstanceCount
 *
 * @method string getExecutorGroupId() 获取执行资源组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置执行资源组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSchedulingTaskCount() 获取数据开发中的任务类型绑定的资源组数量等待调度的任务实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulingTaskCount(integer $SchedulingTaskCount) 设置数据开发中的任务类型绑定的资源组数量等待调度的任务实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunningInstanceCount() 获取数据开发中的任务类型绑定的资源组数量运行中的人物实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningInstanceCount(integer $RunningInstanceCount) 设置数据开发中的任务类型绑定的资源组数量运行中的人物实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWaitingInstanceCount() 获取数据开发中的任务类型绑定的资源组数量等待运行的任务实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaitingInstanceCount(integer $WaitingInstanceCount) 设置数据开发中的任务类型绑定的资源组数量等待运行的任务实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOthersTaskTypeSchedulingTaskCount() 获取非离线开发调度中任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOthersTaskTypeSchedulingTaskCount(integer $OthersTaskTypeSchedulingTaskCount) 设置非离线开发调度中任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOthersTaskTypeRunningInstanceCount() 获取非离线开发运行中实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOthersTaskTypeRunningInstanceCount(integer $OthersTaskTypeRunningInstanceCount) 设置非离线开发运行中实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOthersTaskTypeWaitingInstanceCount() 获取非离线开发等待运行实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOthersTaskTypeWaitingInstanceCount(string $OthersTaskTypeWaitingInstanceCount) 设置非离线开发等待运行实例数
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExecutorTaskInstanceCount extends AbstractModel
{
    /**
     * @var string 执行资源组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupId;

    /**
     * @var integer 数据开发中的任务类型绑定的资源组数量等待调度的任务实例数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulingTaskCount;

    /**
     * @var integer 数据开发中的任务类型绑定的资源组数量运行中的人物实例数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningInstanceCount;

    /**
     * @var integer 数据开发中的任务类型绑定的资源组数量等待运行的任务实例数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WaitingInstanceCount;

    /**
     * @var integer 非离线开发调度中任务数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OthersTaskTypeSchedulingTaskCount;

    /**
     * @var integer 非离线开发运行中实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OthersTaskTypeRunningInstanceCount;

    /**
     * @var string 非离线开发等待运行实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OthersTaskTypeWaitingInstanceCount;

    /**
     * @param string $ExecutorGroupId 执行资源组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SchedulingTaskCount 数据开发中的任务类型绑定的资源组数量等待调度的任务实例数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunningInstanceCount 数据开发中的任务类型绑定的资源组数量运行中的人物实例数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WaitingInstanceCount 数据开发中的任务类型绑定的资源组数量等待运行的任务实例数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OthersTaskTypeSchedulingTaskCount 非离线开发调度中任务数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OthersTaskTypeRunningInstanceCount 非离线开发运行中实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OthersTaskTypeWaitingInstanceCount 非离线开发等待运行实例数
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("SchedulingTaskCount",$param) and $param["SchedulingTaskCount"] !== null) {
            $this->SchedulingTaskCount = $param["SchedulingTaskCount"];
        }

        if (array_key_exists("RunningInstanceCount",$param) and $param["RunningInstanceCount"] !== null) {
            $this->RunningInstanceCount = $param["RunningInstanceCount"];
        }

        if (array_key_exists("WaitingInstanceCount",$param) and $param["WaitingInstanceCount"] !== null) {
            $this->WaitingInstanceCount = $param["WaitingInstanceCount"];
        }

        if (array_key_exists("OthersTaskTypeSchedulingTaskCount",$param) and $param["OthersTaskTypeSchedulingTaskCount"] !== null) {
            $this->OthersTaskTypeSchedulingTaskCount = $param["OthersTaskTypeSchedulingTaskCount"];
        }

        if (array_key_exists("OthersTaskTypeRunningInstanceCount",$param) and $param["OthersTaskTypeRunningInstanceCount"] !== null) {
            $this->OthersTaskTypeRunningInstanceCount = $param["OthersTaskTypeRunningInstanceCount"];
        }

        if (array_key_exists("OthersTaskTypeWaitingInstanceCount",$param) and $param["OthersTaskTypeWaitingInstanceCount"] !== null) {
            $this->OthersTaskTypeWaitingInstanceCount = $param["OthersTaskTypeWaitingInstanceCount"];
        }
    }
}
