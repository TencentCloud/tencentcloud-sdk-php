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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则组调度信息
 *
 * @method integer getId() 获取规则组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置规则组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMonitorType() 获取1:未配置 2:关联生产调度 3:离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorType(integer $MonitorType) 设置1:未配置 2:关联生产调度 3:离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleType() 获取循环类型简写
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置循环类型简写
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCycleStep() 获取循环步长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleStep(integer $CycleStep) 设置循环步长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleDesc() 获取循环类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleDesc(string $CycleDesc) 设置循环类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskAction() 获取离线周期检测下指定时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskAction(string $TaskAction) 设置离线周期检测下指定时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDelayTime() 获取离线周期检测下延迟时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelayTime(integer $DelayTime) 设置离线周期检测下延迟时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleTaskId() 获取离线周期检测下注册到任务调度的任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleTaskId(string $CycleTaskId) 设置离线周期检测下注册到任务调度的任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAssociateTaskIds() 获取关联生产调度下关联的任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssociateTaskIds(array $AssociateTaskIds) 设置关联生产调度下关联的任务ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleGroupSchedulerInfo extends AbstractModel
{
    /**
     * @var integer 规则组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer 1:未配置 2:关联生产调度 3:离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorType;

    /**
     * @var string 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 循环类型简写
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleType;

    /**
     * @var integer 循环步长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleStep;

    /**
     * @var string 循环类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleDesc;

    /**
     * @var string 离线周期检测下指定时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskAction;

    /**
     * @var integer 离线周期检测下延迟时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DelayTime;

    /**
     * @var string 离线周期检测下注册到任务调度的任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleTaskId;

    /**
     * @var array 关联生产调度下关联的任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssociateTaskIds;

    /**
     * @param integer $Id 规则组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MonitorType 1:未配置 2:关联生产调度 3:离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleType 循环类型简写
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CycleStep 循环步长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleDesc 循环类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskAction 离线周期检测下指定时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DelayTime 离线周期检测下延迟时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleTaskId 离线周期检测下注册到任务调度的任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AssociateTaskIds 关联生产调度下关联的任务ID
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("CycleStep",$param) and $param["CycleStep"] !== null) {
            $this->CycleStep = $param["CycleStep"];
        }

        if (array_key_exists("CycleDesc",$param) and $param["CycleDesc"] !== null) {
            $this->CycleDesc = $param["CycleDesc"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("CycleTaskId",$param) and $param["CycleTaskId"] !== null) {
            $this->CycleTaskId = $param["CycleTaskId"];
        }

        if (array_key_exists("AssociateTaskIds",$param) and $param["AssociateTaskIds"] !== null) {
            $this->AssociateTaskIds = $param["AssociateTaskIds"];
        }
    }
}
