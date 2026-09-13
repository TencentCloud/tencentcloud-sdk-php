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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作流列表项中的工作流任务节点简要信息
 *
 * @method string getWorkflowId() 获取工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskTypeName() 获取任务类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeName(string $TaskTypeName) 设置任务类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDependOnList() 获取任务依赖列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependOnList(array $DependOnList) 设置任务依赖列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupId() 获取任务资源组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupId(string $ResourceGroupId) 设置任务资源组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupName() 获取任务资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupName(string $ResourceGroupName) 设置任务资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getLeftCoordinate() 获取任务X坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLeftCoordinate(float $LeftCoordinate) 设置任务X坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTopCoordinate() 获取任务Y坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopCoordinate(float $TopCoordinate) 设置任务Y坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskRetryStrategy getTaskRetryStrategy() 获取任务重试策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskRetryStrategy(TaskRetryStrategy $TaskRetryStrategy) 设置任务重试策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependOnRunCondition() 获取依赖运行条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependOnRunCondition(string $DependOnRunCondition) 设置依赖运行条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method AdvancedDependencyConfig getAdvancedDependencyConfig() 获取高级依赖配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvancedDependencyConfig(AdvancedDependencyConfig $AdvancedDependencyConfig) 设置高级依赖配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method WorkflowTaskNodeBrief getInnerTask() 获取内嵌工作流任务节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInnerTask(WorkflowTaskNodeBrief $InnerTask) 设置内嵌工作流任务节点
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowTaskNodeBrief extends AbstractModel
{
    /**
     * @var string 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string 任务类型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeName;

    /**
     * @var array 任务依赖列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependOnList;

    /**
     * @var string 任务资源组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupId;

    /**
     * @var string 任务资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupName;

    /**
     * @var float 任务X坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LeftCoordinate;

    /**
     * @var float 任务Y坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopCoordinate;

    /**
     * @var TaskRetryStrategy 任务重试策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskRetryStrategy;

    /**
     * @var string 依赖运行条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependOnRunCondition;

    /**
     * @var AdvancedDependencyConfig 高级依赖配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvancedDependencyConfig;

    /**
     * @var WorkflowTaskNodeBrief 内嵌工作流任务节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InnerTask;

    /**
     * @param string $WorkflowId 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskTypeName 任务类型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DependOnList 任务依赖列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupId 任务资源组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupName 任务资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $LeftCoordinate 任务X坐标
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TopCoordinate 任务Y坐标
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskRetryStrategy $TaskRetryStrategy 任务重试策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependOnRunCondition 依赖运行条件
注意：此字段可能返回 null，表示取不到有效值。
     * @param AdvancedDependencyConfig $AdvancedDependencyConfig 高级依赖配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param WorkflowTaskNodeBrief $InnerTask 内嵌工作流任务节点
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskTypeName",$param) and $param["TaskTypeName"] !== null) {
            $this->TaskTypeName = $param["TaskTypeName"];
        }

        if (array_key_exists("DependOnList",$param) and $param["DependOnList"] !== null) {
            $this->DependOnList = [];
            foreach ($param["DependOnList"] as $key => $value){
                $obj = new DependOnBrief();
                $obj->deserialize($value);
                array_push($this->DependOnList, $obj);
            }
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("LeftCoordinate",$param) and $param["LeftCoordinate"] !== null) {
            $this->LeftCoordinate = $param["LeftCoordinate"];
        }

        if (array_key_exists("TopCoordinate",$param) and $param["TopCoordinate"] !== null) {
            $this->TopCoordinate = $param["TopCoordinate"];
        }

        if (array_key_exists("TaskRetryStrategy",$param) and $param["TaskRetryStrategy"] !== null) {
            $this->TaskRetryStrategy = new TaskRetryStrategy();
            $this->TaskRetryStrategy->deserialize($param["TaskRetryStrategy"]);
        }

        if (array_key_exists("DependOnRunCondition",$param) and $param["DependOnRunCondition"] !== null) {
            $this->DependOnRunCondition = $param["DependOnRunCondition"];
        }

        if (array_key_exists("AdvancedDependencyConfig",$param) and $param["AdvancedDependencyConfig"] !== null) {
            $this->AdvancedDependencyConfig = new AdvancedDependencyConfig();
            $this->AdvancedDependencyConfig->deserialize($param["AdvancedDependencyConfig"]);
        }

        if (array_key_exists("InnerTask",$param) and $param["InnerTask"] !== null) {
            $this->InnerTask = new WorkflowTaskNodeBrief();
            $this->InnerTask->deserialize($param["InnerTask"]);
        }
    }
}
