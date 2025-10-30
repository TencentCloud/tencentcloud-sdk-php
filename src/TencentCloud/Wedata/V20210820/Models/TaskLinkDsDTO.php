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
 * Task Link 信息
 *
 * @method string getTaskTo() 获取TaskTo信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTo(string $TaskTo) 设置TaskTo信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskFrom() 获取TaskFrom信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskFrom(string $TaskFrom) 设置TaskFrom信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLinkType() 获取LinkType信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinkType(string $LinkType) 设置LinkType信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLinkKey() 获取key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinkKey(string $LinkKey) 设置key
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取LinkId信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置LinkId信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInCharge() 获取责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInCharge(string $InCharge) 设置责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLinkDependencyType() 获取父子任务之间的依赖关系
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinkDependencyType(string $LinkDependencyType) 设置父子任务之间的依赖关系
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOffset() 获取父子任务之间依赖偏移量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffset(integer $Offset) 设置父子任务之间依赖偏移量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealFromTaskId() 获取实体任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealFromTaskId(string $RealFromTaskId) 设置实体任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealFromTaskName() 获取实体任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealFromTaskName(string $RealFromTaskName) 设置实体任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealFromWorkflowId() 获取实体任务所属工作流
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealFromWorkflowId(string $RealFromWorkflowId) 设置实体任务所属工作流
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealFromWorkflowName() 获取实体任务所属工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealFromWorkflowName(string $RealFromWorkflowName) 设置实体任务所属工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealProjectId() 获取实体任务所属项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealProjectId(string $RealProjectId) 设置实体任务所属项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealProjectIdent() 获取实体任务所属项目标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealProjectIdent(string $RealProjectIdent) 设置实体任务所属项目标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealProjectName() 获取实体任务所属项目名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealProjectName(string $RealProjectName) 设置实体任务所属项目名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurveType() 获取曲线类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurveType(string $CurveType) 设置曲线类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskLinkDsDTO extends AbstractModel
{
    /**
     * @var string TaskTo信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTo;

    /**
     * @var string TaskFrom信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskFrom;

    /**
     * @var string LinkType信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LinkType;

    /**
     * @var string key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LinkKey;

    /**
     * @var string LinkId信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 责任人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InCharge;

    /**
     * @var string 父子任务之间的依赖关系
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LinkDependencyType;

    /**
     * @var integer 父子任务之间依赖偏移量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Offset;

    /**
     * @var string 工作流id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 实体任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealFromTaskId;

    /**
     * @var string 实体任务名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealFromTaskName;

    /**
     * @var string 实体任务所属工作流
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealFromWorkflowId;

    /**
     * @var string 实体任务所属工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealFromWorkflowName;

    /**
     * @var string 实体任务所属项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealProjectId;

    /**
     * @var string 实体任务所属项目标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealProjectIdent;

    /**
     * @var string 实体任务所属项目名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealProjectName;

    /**
     * @var string 曲线类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurveType;

    /**
     * @param string $TaskTo TaskTo信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskFrom TaskFrom信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LinkType LinkType信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LinkKey key
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id LinkId信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InCharge 责任人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LinkDependencyType 父子任务之间的依赖关系
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Offset 父子任务之间依赖偏移量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId 工作流id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealFromTaskId 实体任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealFromTaskName 实体任务名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealFromWorkflowId 实体任务所属工作流
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealFromWorkflowName 实体任务所属工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealProjectId 实体任务所属项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealProjectIdent 实体任务所属项目标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealProjectName 实体任务所属项目名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurveType 曲线类型
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
        if (array_key_exists("TaskTo",$param) and $param["TaskTo"] !== null) {
            $this->TaskTo = $param["TaskTo"];
        }

        if (array_key_exists("TaskFrom",$param) and $param["TaskFrom"] !== null) {
            $this->TaskFrom = $param["TaskFrom"];
        }

        if (array_key_exists("LinkType",$param) and $param["LinkType"] !== null) {
            $this->LinkType = $param["LinkType"];
        }

        if (array_key_exists("LinkKey",$param) and $param["LinkKey"] !== null) {
            $this->LinkKey = $param["LinkKey"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("LinkDependencyType",$param) and $param["LinkDependencyType"] !== null) {
            $this->LinkDependencyType = $param["LinkDependencyType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("RealFromTaskId",$param) and $param["RealFromTaskId"] !== null) {
            $this->RealFromTaskId = $param["RealFromTaskId"];
        }

        if (array_key_exists("RealFromTaskName",$param) and $param["RealFromTaskName"] !== null) {
            $this->RealFromTaskName = $param["RealFromTaskName"];
        }

        if (array_key_exists("RealFromWorkflowId",$param) and $param["RealFromWorkflowId"] !== null) {
            $this->RealFromWorkflowId = $param["RealFromWorkflowId"];
        }

        if (array_key_exists("RealFromWorkflowName",$param) and $param["RealFromWorkflowName"] !== null) {
            $this->RealFromWorkflowName = $param["RealFromWorkflowName"];
        }

        if (array_key_exists("RealProjectId",$param) and $param["RealProjectId"] !== null) {
            $this->RealProjectId = $param["RealProjectId"];
        }

        if (array_key_exists("RealProjectIdent",$param) and $param["RealProjectIdent"] !== null) {
            $this->RealProjectIdent = $param["RealProjectIdent"];
        }

        if (array_key_exists("RealProjectName",$param) and $param["RealProjectName"] !== null) {
            $this->RealProjectName = $param["RealProjectName"];
        }

        if (array_key_exists("CurveType",$param) and $param["CurveType"] !== null) {
            $this->CurveType = $param["CurveType"];
        }
    }
}
