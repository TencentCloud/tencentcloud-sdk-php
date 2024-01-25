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
 * 任务列表信息-项目克隆使用
 *
 * @method string getWorkflowId() 获取工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerName() 获取责任人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerName(string $OwnerName) 设置责任人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskType() 获取任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(string $TaskType) 设置任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskStatus() 获取N-新建
NS-草稿
Y-运行
F-停止
O-冻结
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskStatus(string $TaskStatus) 设置N-新建
NS-草稿
Y-运行
F-停止
O-冻结
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskLatestSubmitTime() 获取任务最近一次提交时间（未提交则为 null）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskLatestSubmitTime(string $TaskLatestSubmitTime) 设置任务最近一次提交时间（未提交则为 null）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginalResourceGroup() 获取原始资源组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginalResourceGroup(string $OriginalResourceGroup) 设置原始资源组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetResourceGroup() 获取目标资源组id（迁移使用），目前为 null
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetResourceGroup(string $TargetResourceGroup) 设置目标资源组id（迁移使用），目前为 null
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProjectCloneTaskInfo extends AbstractModel
{
    /**
     * @var string 工作流id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 责任人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerName;

    /**
     * @var string 任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var string N-新建
NS-草稿
Y-运行
F-停止
O-冻结
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskStatus;

    /**
     * @var string 任务最近一次提交时间（未提交则为 null）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskLatestSubmitTime;

    /**
     * @var string 原始资源组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginalResourceGroup;

    /**
     * @var string 目标资源组id（迁移使用），目前为 null
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetResourceGroup;

    /**
     * @param string $WorkflowId 工作流id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerName 责任人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskType 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskStatus N-新建
NS-草稿
Y-运行
F-停止
O-冻结
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskLatestSubmitTime 任务最近一次提交时间（未提交则为 null）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginalResourceGroup 原始资源组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetResourceGroup 目标资源组id（迁移使用），目前为 null
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
        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("OwnerName",$param) and $param["OwnerName"] !== null) {
            $this->OwnerName = $param["OwnerName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TaskLatestSubmitTime",$param) and $param["TaskLatestSubmitTime"] !== null) {
            $this->TaskLatestSubmitTime = $param["TaskLatestSubmitTime"];
        }

        if (array_key_exists("OriginalResourceGroup",$param) and $param["OriginalResourceGroup"] !== null) {
            $this->OriginalResourceGroup = $param["OriginalResourceGroup"];
        }

        if (array_key_exists("TargetResourceGroup",$param) and $param["TargetResourceGroup"] !== null) {
            $this->TargetResourceGroup = $param["TargetResourceGroup"];
        }
    }
}
