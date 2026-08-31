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
 * 批量操作任务列表
 *
 * @method string getTaskId() 获取<p>任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置<p>任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取<p>任务名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置<p>任务名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取<p>工作流Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置<p>工作流Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取<p>工作流名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置<p>工作流名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskTypeId() 获取<p>任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeId(integer $TaskTypeId) 设置<p>任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskTypeDesc() 获取<p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeDesc(string $TaskTypeDesc) 设置<p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderName() 获取<p>文件夹名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderName(string $FolderName) 设置<p>文件夹名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderId() 获取<p>文件夹ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(string $FolderId) 设置<p>文件夹ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInCharge() 获取<p>负责人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInCharge(string $InCharge) 设置<p>负责人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSubmit() 获取<p>是否提交</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmit(integer $Submit) 设置<p>是否提交</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataEngine() 获取<p>引擎：<br>presto\SparkJob\SparkSql</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataEngine(string $DataEngine) 设置<p>引擎：<br>presto\SparkJob\SparkSql</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创造时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创造时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleUnit() 获取<p>周期类型D天周期<br>H小时<br>Ccrontab类型<br>I分钟<br>O一次性<br>Y年<br>R用户驱动<br>W周<br>M月</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleUnit(string $CycleUnit) 设置<p>周期类型D天周期<br>H小时<br>Ccrontab类型<br>I分钟<br>O一次性<br>Y年<br>R用户驱动<br>W周<br>M月</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleDesc() 获取<p>调度计划</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleDesc(string $ScheduleDesc) 设置<p>调度计划</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceId() 获取<p>数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置<p>数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceType() 获取<p>数据源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceType(string $DatasourceType) 设置<p>数据源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComputeResource() 获取<p>引擎名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComputeResource(string $ComputeResource) 设置<p>引擎名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDlcRegion() 获取<p>dlc地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDlcRegion(string $DlcRegion) 设置<p>dlc地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsInherit() 获取<p>资源组或自定义</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsInherit(string $IsInherit) 设置<p>资源组或自定义</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivilege() 获取<p>用户对该资源的最高权限</p><p>枚举值：</p><ul><li>NO_PERMISSIONS： 无权限</li><li>CAN_VIEW： 只读权限</li><li>CAN_MANAGE： 管理权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivilege(string $Privilege) 设置<p>用户对该资源的最高权限</p><p>枚举值：</p><ul><li>NO_PERMISSIONS： 无权限</li><li>CAN_VIEW： 只读权限</li><li>CAN_MANAGE： 管理权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeBatchOperateTaskDTO extends AbstractModel
{
    /**
     * @var string <p>任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string <p>任务名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string <p>工作流Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string <p>工作流名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string <p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer <p>任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeId;

    /**
     * @var string <p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeDesc;

    /**
     * @var string <p>文件夹名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderName;

    /**
     * @var string <p>文件夹ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderId;

    /**
     * @var string <p>负责人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InCharge;

    /**
     * @var integer <p>是否提交</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Submit;

    /**
     * @var string <p>引擎：<br>presto\SparkJob\SparkSql</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataEngine;

    /**
     * @var string <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>创造时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>周期类型D天周期<br>H小时<br>Ccrontab类型<br>I分钟<br>O一次性<br>Y年<br>R用户驱动<br>W周<br>M月</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleUnit;

    /**
     * @var string <p>调度计划</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleDesc;

    /**
     * @var string <p>数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string <p>数据源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceType;

    /**
     * @var string <p>引擎名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComputeResource;

    /**
     * @var string <p>dlc地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DlcRegion;

    /**
     * @var string <p>资源组或自定义</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsInherit;

    /**
     * @var string <p>用户对该资源的最高权限</p><p>枚举值：</p><ul><li>NO_PERMISSIONS： 无权限</li><li>CAN_VIEW： 只读权限</li><li>CAN_MANAGE： 管理权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Privilege;

    /**
     * @param string $TaskId <p>任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName <p>任务名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId <p>工作流Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName <p>工作流名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskTypeId <p>任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskTypeDesc <p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderName <p>文件夹名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId <p>文件夹ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InCharge <p>负责人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Submit <p>是否提交</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataEngine <p>引擎：<br>presto\SparkJob\SparkSql</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创造时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleUnit <p>周期类型D天周期<br>H小时<br>Ccrontab类型<br>I分钟<br>O一次性<br>Y年<br>R用户驱动<br>W周<br>M月</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleDesc <p>调度计划</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceId <p>数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceType <p>数据源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ComputeResource <p>引擎名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DlcRegion <p>dlc地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsInherit <p>资源组或自定义</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Privilege <p>用户对该资源的最高权限</p><p>枚举值：</p><ul><li>NO_PERMISSIONS： 无权限</li><li>CAN_VIEW： 只读权限</li><li>CAN_MANAGE： 管理权限</li></ul>
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("TaskTypeDesc",$param) and $param["TaskTypeDesc"] !== null) {
            $this->TaskTypeDesc = $param["TaskTypeDesc"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("Submit",$param) and $param["Submit"] !== null) {
            $this->Submit = $param["Submit"];
        }

        if (array_key_exists("DataEngine",$param) and $param["DataEngine"] !== null) {
            $this->DataEngine = $param["DataEngine"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CycleUnit",$param) and $param["CycleUnit"] !== null) {
            $this->CycleUnit = $param["CycleUnit"];
        }

        if (array_key_exists("ScheduleDesc",$param) and $param["ScheduleDesc"] !== null) {
            $this->ScheduleDesc = $param["ScheduleDesc"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatasourceType",$param) and $param["DatasourceType"] !== null) {
            $this->DatasourceType = $param["DatasourceType"];
        }

        if (array_key_exists("ComputeResource",$param) and $param["ComputeResource"] !== null) {
            $this->ComputeResource = $param["ComputeResource"];
        }

        if (array_key_exists("DlcRegion",$param) and $param["DlcRegion"] !== null) {
            $this->DlcRegion = $param["DlcRegion"];
        }

        if (array_key_exists("IsInherit",$param) and $param["IsInherit"] !== null) {
            $this->IsInherit = $param["IsInherit"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }
    }
}
