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
 * 【项目克隆任务模式】依赖任务信息
 *
 * @method string getSelectedTaskId() 获取已选任务id
 * @method void setSelectedTaskId(string $SelectedTaskId) 设置已选任务id
 * @method string getSelectedTaskName() 获取已选任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelectedTaskName(string $SelectedTaskName) 设置已选任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependencyTaskId() 获取依赖任务id
 * @method void setDependencyTaskId(string $DependencyTaskId) 设置依赖任务id
 * @method string getDependencyTaskName() 获取依赖任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyTaskName(string $DependencyTaskName) 设置依赖任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCrossProject() 获取依赖任务是否跨项目
 * @method void setCrossProject(boolean $CrossProject) 设置依赖任务是否跨项目
 * @method string getDependencyProjectId() 获取依赖任务对应项目id
 * @method void setDependencyProjectId(string $DependencyProjectId) 设置依赖任务对应项目id
 * @method string getDependencyProjectName() 获取依赖任务对应项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyProjectName(string $DependencyProjectName) 设置依赖任务对应项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDependencyTaskVirtualFlag() 获取依赖任务虚拟标识
 * @method void setDependencyTaskVirtualFlag(boolean $DependencyTaskVirtualFlag) 设置依赖任务虚拟标识
 * @method boolean getLinkDependency() 获取边依赖标识
 * @method void setLinkDependency(boolean $LinkDependency) 设置边依赖标识
 * @method boolean getSelectedTaskVirtualFlag() 获取已选任务虚拟标识
 * @method void setSelectedTaskVirtualFlag(boolean $SelectedTaskVirtualFlag) 设置已选任务虚拟标识
 * @method string getDependencyTaskWorkflowName() 获取依赖任务工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyTaskWorkflowName(string $DependencyTaskWorkflowName) 设置依赖任务工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class DependencyTaskDTO extends AbstractModel
{
    /**
     * @var string 已选任务id
     */
    public $SelectedTaskId;

    /**
     * @var string 已选任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelectedTaskName;

    /**
     * @var string 依赖任务id
     */
    public $DependencyTaskId;

    /**
     * @var string 依赖任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyTaskName;

    /**
     * @var boolean 依赖任务是否跨项目
     */
    public $CrossProject;

    /**
     * @var string 依赖任务对应项目id
     */
    public $DependencyProjectId;

    /**
     * @var string 依赖任务对应项目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyProjectName;

    /**
     * @var boolean 依赖任务虚拟标识
     */
    public $DependencyTaskVirtualFlag;

    /**
     * @var boolean 边依赖标识
     */
    public $LinkDependency;

    /**
     * @var boolean 已选任务虚拟标识
     */
    public $SelectedTaskVirtualFlag;

    /**
     * @var string 依赖任务工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyTaskWorkflowName;

    /**
     * @param string $SelectedTaskId 已选任务id
     * @param string $SelectedTaskName 已选任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependencyTaskId 依赖任务id
     * @param string $DependencyTaskName 依赖任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CrossProject 依赖任务是否跨项目
     * @param string $DependencyProjectId 依赖任务对应项目id
     * @param string $DependencyProjectName 依赖任务对应项目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DependencyTaskVirtualFlag 依赖任务虚拟标识
     * @param boolean $LinkDependency 边依赖标识
     * @param boolean $SelectedTaskVirtualFlag 已选任务虚拟标识
     * @param string $DependencyTaskWorkflowName 依赖任务工作流名称
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
        if (array_key_exists("SelectedTaskId",$param) and $param["SelectedTaskId"] !== null) {
            $this->SelectedTaskId = $param["SelectedTaskId"];
        }

        if (array_key_exists("SelectedTaskName",$param) and $param["SelectedTaskName"] !== null) {
            $this->SelectedTaskName = $param["SelectedTaskName"];
        }

        if (array_key_exists("DependencyTaskId",$param) and $param["DependencyTaskId"] !== null) {
            $this->DependencyTaskId = $param["DependencyTaskId"];
        }

        if (array_key_exists("DependencyTaskName",$param) and $param["DependencyTaskName"] !== null) {
            $this->DependencyTaskName = $param["DependencyTaskName"];
        }

        if (array_key_exists("CrossProject",$param) and $param["CrossProject"] !== null) {
            $this->CrossProject = $param["CrossProject"];
        }

        if (array_key_exists("DependencyProjectId",$param) and $param["DependencyProjectId"] !== null) {
            $this->DependencyProjectId = $param["DependencyProjectId"];
        }

        if (array_key_exists("DependencyProjectName",$param) and $param["DependencyProjectName"] !== null) {
            $this->DependencyProjectName = $param["DependencyProjectName"];
        }

        if (array_key_exists("DependencyTaskVirtualFlag",$param) and $param["DependencyTaskVirtualFlag"] !== null) {
            $this->DependencyTaskVirtualFlag = $param["DependencyTaskVirtualFlag"];
        }

        if (array_key_exists("LinkDependency",$param) and $param["LinkDependency"] !== null) {
            $this->LinkDependency = $param["LinkDependency"];
        }

        if (array_key_exists("SelectedTaskVirtualFlag",$param) and $param["SelectedTaskVirtualFlag"] !== null) {
            $this->SelectedTaskVirtualFlag = $param["SelectedTaskVirtualFlag"];
        }

        if (array_key_exists("DependencyTaskWorkflowName",$param) and $param["DependencyTaskWorkflowName"] !== null) {
            $this->DependencyTaskWorkflowName = $param["DependencyTaskWorkflowName"];
        }
    }
}
