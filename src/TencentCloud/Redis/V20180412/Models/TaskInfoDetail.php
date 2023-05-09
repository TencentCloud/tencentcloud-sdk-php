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
 * 任务信息详情
 *
 * @method integer getTaskId() 获取任务 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(integer $TaskId) 设置任务 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取任务开始时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置任务开始时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskType() 获取任务类型。
- FLOW_CREATE：创建实例。
- FLOW_MODIFYCONNECTIONCONFIG：调整带宽连接数。
- FLOW_MODIFYINSTANCEPASSWORDFREE：免密变更流程。
- FLOW_CLEARNETWORK：VPC退还中。
- FLOW_SETPWD：设置访问密码。
- FLOW_EXPORSHR：扩缩容流程。
- FLOW_UpgradeArch：实例架构升级流程。
- FLOW_MODIFYINSTANCEPARAMS：修改实例参数。
- FLOW_MODIFYINSTACEREADONLY：只读变更流程。
- FLOW_CLOSE：关闭实例。
- FLOW_DELETE：删除实例。
- FLOW_OPEN_WAN：开启外网。
- FLOW_CLEAN：清空实例。      
- FLOW_MODIFYINSTANCEACCOUNT：修改实例账号。
- FLOW_ENABLEINSTANCE_REPLICATE：开启副本只读。
- FLOW_DISABLEINSTANCE_REPLICATE: 关闭副本只读。
- FLOW_SWITCHINSTANCEVIP：交换实例 VIP。
- FLOW_CHANGE_REPLICA_TO_MSTER：副本节点升主节点。
- FLOW_BACKUPINSTANCE：备份实例。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(string $TaskType) 设置任务类型。
- FLOW_CREATE：创建实例。
- FLOW_MODIFYCONNECTIONCONFIG：调整带宽连接数。
- FLOW_MODIFYINSTANCEPASSWORDFREE：免密变更流程。
- FLOW_CLEARNETWORK：VPC退还中。
- FLOW_SETPWD：设置访问密码。
- FLOW_EXPORSHR：扩缩容流程。
- FLOW_UpgradeArch：实例架构升级流程。
- FLOW_MODIFYINSTANCEPARAMS：修改实例参数。
- FLOW_MODIFYINSTACEREADONLY：只读变更流程。
- FLOW_CLOSE：关闭实例。
- FLOW_DELETE：删除实例。
- FLOW_OPEN_WAN：开启外网。
- FLOW_CLEAN：清空实例。      
- FLOW_MODIFYINSTANCEACCOUNT：修改实例账号。
- FLOW_ENABLEINSTANCE_REPLICATE：开启副本只读。
- FLOW_DISABLEINSTANCE_REPLICATE: 关闭副本只读。
- FLOW_SWITCHINSTANCEVIP：交换实例 VIP。
- FLOW_CHANGE_REPLICA_TO_MSTER：副本节点升主节点。
- FLOW_BACKUPINSTANCE：备份实例。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取实例名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProjectId() 获取项目 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(integer $ProjectId) 设置项目 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getProgress() 获取任务进度。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgress(float $Progress) 设置任务进度。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取任务执行结束时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置任务执行结束时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResult() 获取任务执行状态。

0：任务初始化。
1：执行中。
2：完成。
4：失败。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(integer $Result) 设置任务执行状态。

0：任务初始化。
1：执行中。
2：完成。
4：失败。
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskInfoDetail extends AbstractModel
{
    /**
     * @var integer 任务 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 任务开始时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 任务类型。
- FLOW_CREATE：创建实例。
- FLOW_MODIFYCONNECTIONCONFIG：调整带宽连接数。
- FLOW_MODIFYINSTANCEPASSWORDFREE：免密变更流程。
- FLOW_CLEARNETWORK：VPC退还中。
- FLOW_SETPWD：设置访问密码。
- FLOW_EXPORSHR：扩缩容流程。
- FLOW_UpgradeArch：实例架构升级流程。
- FLOW_MODIFYINSTANCEPARAMS：修改实例参数。
- FLOW_MODIFYINSTACEREADONLY：只读变更流程。
- FLOW_CLOSE：关闭实例。
- FLOW_DELETE：删除实例。
- FLOW_OPEN_WAN：开启外网。
- FLOW_CLEAN：清空实例。      
- FLOW_MODIFYINSTANCEACCOUNT：修改实例账号。
- FLOW_ENABLEINSTANCE_REPLICATE：开启副本只读。
- FLOW_DISABLEINSTANCE_REPLICATE: 关闭副本只读。
- FLOW_SWITCHINSTANCEVIP：交换实例 VIP。
- FLOW_CHANGE_REPLICA_TO_MSTER：副本节点升主节点。
- FLOW_BACKUPINSTANCE：备份实例。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var string 实例名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 实例 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var integer 项目 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var float 任务进度。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Progress;

    /**
     * @var string 任务执行结束时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var integer 任务执行状态。

0：任务初始化。
1：执行中。
2：完成。
4：失败。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @param integer $TaskId 任务 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 任务开始时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskType 任务类型。
- FLOW_CREATE：创建实例。
- FLOW_MODIFYCONNECTIONCONFIG：调整带宽连接数。
- FLOW_MODIFYINSTANCEPASSWORDFREE：免密变更流程。
- FLOW_CLEARNETWORK：VPC退还中。
- FLOW_SETPWD：设置访问密码。
- FLOW_EXPORSHR：扩缩容流程。
- FLOW_UpgradeArch：实例架构升级流程。
- FLOW_MODIFYINSTANCEPARAMS：修改实例参数。
- FLOW_MODIFYINSTACEREADONLY：只读变更流程。
- FLOW_CLOSE：关闭实例。
- FLOW_DELETE：删除实例。
- FLOW_OPEN_WAN：开启外网。
- FLOW_CLEAN：清空实例。      
- FLOW_MODIFYINSTANCEACCOUNT：修改实例账号。
- FLOW_ENABLEINSTANCE_REPLICATE：开启副本只读。
- FLOW_DISABLEINSTANCE_REPLICATE: 关闭副本只读。
- FLOW_SWITCHINSTANCEVIP：交换实例 VIP。
- FLOW_CHANGE_REPLICA_TO_MSTER：副本节点升主节点。
- FLOW_BACKUPINSTANCE：备份实例。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 实例名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProjectId 项目 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Progress 任务进度。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 任务执行结束时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Result 任务执行状态。

0：任务初始化。
1：执行中。
2：完成。
4：失败。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}
