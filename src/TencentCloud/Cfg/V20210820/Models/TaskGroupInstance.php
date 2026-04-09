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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务分组动作实例
 *
 * @method integer getTaskGroupInstanceId() 获取<p>实例ID</p>
 * @method void setTaskGroupInstanceId(integer $TaskGroupInstanceId) 设置<p>实例ID</p>
 * @method string getTaskGroupInstanceObjectId() 获取<p>实例ID</p>
 * @method void setTaskGroupInstanceObjectId(string $TaskGroupInstanceObjectId) 设置<p>实例ID</p>
 * @method integer getTaskGroupInstanceStatus() 获取<p>实例动作执行状态</p><p>枚举值：</p><ul><li>3001： 未开始</li><li>3002： 执行中</li><li>3003： 执行结束</li><li>3004： 准备中</li></ul>
 * @method void setTaskGroupInstanceStatus(integer $TaskGroupInstanceStatus) 设置<p>实例动作执行状态</p><p>枚举值：</p><ul><li>3001： 未开始</li><li>3002： 执行中</li><li>3003： 执行结束</li><li>3004： 准备中</li></ul>
 * @method string getTaskGroupInstanceCreateTime() 获取<p>实例创建时间</p>
 * @method void setTaskGroupInstanceCreateTime(string $TaskGroupInstanceCreateTime) 设置<p>实例创建时间</p>
 * @method string getTaskGroupInstanceUpdateTime() 获取<p>实例更新时间</p>
 * @method void setTaskGroupInstanceUpdateTime(string $TaskGroupInstanceUpdateTime) 设置<p>实例更新时间</p>
 * @method integer getTaskGroupInstanceStatusType() 获取<p>状态类型: 0 -- 无状态，1 -- 成功，2-- 失败，3--终止，4--跳过</p>
 * @method void setTaskGroupInstanceStatusType(integer $TaskGroupInstanceStatusType) 设置<p>状态类型: 0 -- 无状态，1 -- 成功，2-- 失败，3--终止，4--跳过</p>
 * @method string getTaskGroupInstanceStartTime() 获取<p>执行开始时间</p>
 * @method void setTaskGroupInstanceStartTime(string $TaskGroupInstanceStartTime) 设置<p>执行开始时间</p>
 * @method string getTaskGroupInstanceEndTime() 获取<p>执行结束时间</p>
 * @method void setTaskGroupInstanceEndTime(string $TaskGroupInstanceEndTime) 设置<p>执行结束时间</p>
 * @method string getTaskGroupInstanceExecuteLog() 获取<p>实例动作执行日志</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskGroupInstanceExecuteLog(string $TaskGroupInstanceExecuteLog) 设置<p>实例动作执行日志</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTaskGroupInstanceIsRedo() 获取<p>实例是否可重试</p>
 * @method void setTaskGroupInstanceIsRedo(boolean $TaskGroupInstanceIsRedo) 设置<p>实例是否可重试</p>
 * @method integer getTaskGroupInstanceExecuteTime() 获取<p>动作实例执行时间</p><p>单位：秒</p>
 * @method void setTaskGroupInstanceExecuteTime(integer $TaskGroupInstanceExecuteTime) 设置<p>动作实例执行时间</p><p>单位：秒</p>
 */
class TaskGroupInstance extends AbstractModel
{
    /**
     * @var integer <p>实例ID</p>
     */
    public $TaskGroupInstanceId;

    /**
     * @var string <p>实例ID</p>
     */
    public $TaskGroupInstanceObjectId;

    /**
     * @var integer <p>实例动作执行状态</p><p>枚举值：</p><ul><li>3001： 未开始</li><li>3002： 执行中</li><li>3003： 执行结束</li><li>3004： 准备中</li></ul>
     */
    public $TaskGroupInstanceStatus;

    /**
     * @var string <p>实例创建时间</p>
     */
    public $TaskGroupInstanceCreateTime;

    /**
     * @var string <p>实例更新时间</p>
     */
    public $TaskGroupInstanceUpdateTime;

    /**
     * @var integer <p>状态类型: 0 -- 无状态，1 -- 成功，2-- 失败，3--终止，4--跳过</p>
     */
    public $TaskGroupInstanceStatusType;

    /**
     * @var string <p>执行开始时间</p>
     */
    public $TaskGroupInstanceStartTime;

    /**
     * @var string <p>执行结束时间</p>
     */
    public $TaskGroupInstanceEndTime;

    /**
     * @var string <p>实例动作执行日志</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $TaskGroupInstanceExecuteLog;

    /**
     * @var boolean <p>实例是否可重试</p>
     */
    public $TaskGroupInstanceIsRedo;

    /**
     * @var integer <p>动作实例执行时间</p><p>单位：秒</p>
     */
    public $TaskGroupInstanceExecuteTime;

    /**
     * @param integer $TaskGroupInstanceId <p>实例ID</p>
     * @param string $TaskGroupInstanceObjectId <p>实例ID</p>
     * @param integer $TaskGroupInstanceStatus <p>实例动作执行状态</p><p>枚举值：</p><ul><li>3001： 未开始</li><li>3002： 执行中</li><li>3003： 执行结束</li><li>3004： 准备中</li></ul>
     * @param string $TaskGroupInstanceCreateTime <p>实例创建时间</p>
     * @param string $TaskGroupInstanceUpdateTime <p>实例更新时间</p>
     * @param integer $TaskGroupInstanceStatusType <p>状态类型: 0 -- 无状态，1 -- 成功，2-- 失败，3--终止，4--跳过</p>
     * @param string $TaskGroupInstanceStartTime <p>执行开始时间</p>
     * @param string $TaskGroupInstanceEndTime <p>执行结束时间</p>
     * @param string $TaskGroupInstanceExecuteLog <p>实例动作执行日志</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $TaskGroupInstanceIsRedo <p>实例是否可重试</p>
     * @param integer $TaskGroupInstanceExecuteTime <p>动作实例执行时间</p><p>单位：秒</p>
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

        if (array_key_exists("TaskGroupInstanceExecuteLog",$param) and $param["TaskGroupInstanceExecuteLog"] !== null) {
            $this->TaskGroupInstanceExecuteLog = $param["TaskGroupInstanceExecuteLog"];
        }

        if (array_key_exists("TaskGroupInstanceIsRedo",$param) and $param["TaskGroupInstanceIsRedo"] !== null) {
            $this->TaskGroupInstanceIsRedo = $param["TaskGroupInstanceIsRedo"];
        }

        if (array_key_exists("TaskGroupInstanceExecuteTime",$param) and $param["TaskGroupInstanceExecuteTime"] !== null) {
            $this->TaskGroupInstanceExecuteTime = $param["TaskGroupInstanceExecuteTime"];
        }
    }
}
