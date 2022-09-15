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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务分组动作实例
 *
 * @method integer getTaskGroupInstanceId() 获取实例ID
 * @method void setTaskGroupInstanceId(integer $TaskGroupInstanceId) 设置实例ID
 * @method string getTaskGroupInstanceObjectId() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskGroupInstanceObjectId(string $TaskGroupInstanceObjectId) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskGroupInstanceStatus() 获取实例动作执行状态
 * @method void setTaskGroupInstanceStatus(integer $TaskGroupInstanceStatus) 设置实例动作执行状态
 * @method string getTaskGroupInstanceExecuteLog() 获取实例动作执行日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskGroupInstanceExecuteLog(string $TaskGroupInstanceExecuteLog) 设置实例动作执行日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskGroupInstanceCreateTime() 获取实例创建时间
 * @method void setTaskGroupInstanceCreateTime(string $TaskGroupInstanceCreateTime) 设置实例创建时间
 * @method string getTaskGroupInstanceUpdateTime() 获取实例更新时间
 * @method void setTaskGroupInstanceUpdateTime(string $TaskGroupInstanceUpdateTime) 设置实例更新时间
 * @method integer getTaskGroupInstanceStatusType() 获取状态类型: 0 -- 无状态，1 -- 成功，2-- 失败，3--终止，4--跳过
 * @method void setTaskGroupInstanceStatusType(integer $TaskGroupInstanceStatusType) 设置状态类型: 0 -- 无状态，1 -- 成功，2-- 失败，3--终止，4--跳过
 * @method string getTaskGroupInstanceStartTime() 获取执行开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskGroupInstanceStartTime(string $TaskGroupInstanceStartTime) 设置执行开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskGroupInstanceEndTime() 获取执行结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskGroupInstanceEndTime(string $TaskGroupInstanceEndTime) 设置执行结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTaskGroupInstanceIsRedo() 获取实例是否可重试
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskGroupInstanceIsRedo(boolean $TaskGroupInstanceIsRedo) 设置实例是否可重试
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskGroupInstanceExecuteTime() 获取动作实例执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskGroupInstanceExecuteTime(integer $TaskGroupInstanceExecuteTime) 设置动作实例执行时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskGroupInstance extends AbstractModel
{
    /**
     * @var integer 实例ID
     */
    public $TaskGroupInstanceId;

    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskGroupInstanceObjectId;

    /**
     * @var integer 实例动作执行状态
     */
    public $TaskGroupInstanceStatus;

    /**
     * @var string 实例动作执行日志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskGroupInstanceExecuteLog;

    /**
     * @var string 实例创建时间
     */
    public $TaskGroupInstanceCreateTime;

    /**
     * @var string 实例更新时间
     */
    public $TaskGroupInstanceUpdateTime;

    /**
     * @var integer 状态类型: 0 -- 无状态，1 -- 成功，2-- 失败，3--终止，4--跳过
     */
    public $TaskGroupInstanceStatusType;

    /**
     * @var string 执行开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskGroupInstanceStartTime;

    /**
     * @var string 执行结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskGroupInstanceEndTime;

    /**
     * @var boolean 实例是否可重试
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskGroupInstanceIsRedo;

    /**
     * @var integer 动作实例执行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskGroupInstanceExecuteTime;

    /**
     * @param integer $TaskGroupInstanceId 实例ID
     * @param string $TaskGroupInstanceObjectId 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskGroupInstanceStatus 实例动作执行状态
     * @param string $TaskGroupInstanceExecuteLog 实例动作执行日志
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskGroupInstanceCreateTime 实例创建时间
     * @param string $TaskGroupInstanceUpdateTime 实例更新时间
     * @param integer $TaskGroupInstanceStatusType 状态类型: 0 -- 无状态，1 -- 成功，2-- 失败，3--终止，4--跳过
     * @param string $TaskGroupInstanceStartTime 执行开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskGroupInstanceEndTime 执行结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $TaskGroupInstanceIsRedo 实例是否可重试
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskGroupInstanceExecuteTime 动作实例执行时间
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
        if (array_key_exists("TaskGroupInstanceId",$param) and $param["TaskGroupInstanceId"] !== null) {
            $this->TaskGroupInstanceId = $param["TaskGroupInstanceId"];
        }

        if (array_key_exists("TaskGroupInstanceObjectId",$param) and $param["TaskGroupInstanceObjectId"] !== null) {
            $this->TaskGroupInstanceObjectId = $param["TaskGroupInstanceObjectId"];
        }

        if (array_key_exists("TaskGroupInstanceStatus",$param) and $param["TaskGroupInstanceStatus"] !== null) {
            $this->TaskGroupInstanceStatus = $param["TaskGroupInstanceStatus"];
        }

        if (array_key_exists("TaskGroupInstanceExecuteLog",$param) and $param["TaskGroupInstanceExecuteLog"] !== null) {
            $this->TaskGroupInstanceExecuteLog = $param["TaskGroupInstanceExecuteLog"];
        }

        if (array_key_exists("TaskGroupInstanceCreateTime",$param) and $param["TaskGroupInstanceCreateTime"] !== null) {
            $this->TaskGroupInstanceCreateTime = $param["TaskGroupInstanceCreateTime"];
        }

        if (array_key_exists("TaskGroupInstanceUpdateTime",$param) and $param["TaskGroupInstanceUpdateTime"] !== null) {
            $this->TaskGroupInstanceUpdateTime = $param["TaskGroupInstanceUpdateTime"];
        }

        if (array_key_exists("TaskGroupInstanceStatusType",$param) and $param["TaskGroupInstanceStatusType"] !== null) {
            $this->TaskGroupInstanceStatusType = $param["TaskGroupInstanceStatusType"];
        }

        if (array_key_exists("TaskGroupInstanceStartTime",$param) and $param["TaskGroupInstanceStartTime"] !== null) {
            $this->TaskGroupInstanceStartTime = $param["TaskGroupInstanceStartTime"];
        }

        if (array_key_exists("TaskGroupInstanceEndTime",$param) and $param["TaskGroupInstanceEndTime"] !== null) {
            $this->TaskGroupInstanceEndTime = $param["TaskGroupInstanceEndTime"];
        }

        if (array_key_exists("TaskGroupInstanceIsRedo",$param) and $param["TaskGroupInstanceIsRedo"] !== null) {
            $this->TaskGroupInstanceIsRedo = $param["TaskGroupInstanceIsRedo"];
        }

        if (array_key_exists("TaskGroupInstanceExecuteTime",$param) and $param["TaskGroupInstanceExecuteTime"] !== null) {
            $this->TaskGroupInstanceExecuteTime = $param["TaskGroupInstanceExecuteTime"];
        }
    }
}
