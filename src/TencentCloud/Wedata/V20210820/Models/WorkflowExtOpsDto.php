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
 * 工作流
 *
 * @method integer getTaskCount() 获取任务数量count
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskCount(integer $TaskCount) 设置任务数量count
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderName() 获取文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderName(string $FolderName) 设置文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkFlowId() 获取工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkFlowId(string $WorkFlowId) 设置工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwner() 获取责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwner(string $Owner) 设置责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerId() 获取责任人userId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerId(string $OwnerId) 设置责任人userId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectIdent() 获取项目标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectIdent(string $ProjectIdent) 设置项目标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkFlowDesc() 获取工作流描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkFlowDesc(string $WorkFlowDesc) 设置工作流描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkFlowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkFlowName(string $WorkFlowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderId() 获取工作流文件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(string $FolderId) 设置工作流文件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取工作流状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置工作流状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取工作流创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置工作流创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取最近更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置最近更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowType() 获取工作流类型，周期cycle，手动manual
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowType(string $WorkflowType) 设置工作流类型，周期cycle，手动manual
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowExtOpsDto extends AbstractModel
{
    /**
     * @var integer 任务数量count
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskCount;

    /**
     * @var string 文件名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderName;

    /**
     * @var string 工作流id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkFlowId;

    /**
     * @var string 责任人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Owner;

    /**
     * @var string 责任人userId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerId;

    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 项目标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectIdent;

    /**
     * @var string 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string 工作流描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkFlowDesc;

    /**
     * @var string 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkFlowName;

    /**
     * @var string 工作流文件id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderId;

    /**
     * @var string 工作流状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 工作流创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 最近更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var string 工作流类型，周期cycle，手动manual
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowType;

    /**
     * @param integer $TaskCount 任务数量count
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderName 文件名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkFlowId 工作流id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Owner 责任人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerId 责任人userId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectIdent 项目标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkFlowDesc 工作流描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkFlowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId 工作流文件id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 工作流状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 工作流创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 最近更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowType 工作流类型，周期cycle，手动manual
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
        if (array_key_exists("TaskCount",$param) and $param["TaskCount"] !== null) {
            $this->TaskCount = $param["TaskCount"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("WorkFlowId",$param) and $param["WorkFlowId"] !== null) {
            $this->WorkFlowId = $param["WorkFlowId"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("OwnerId",$param) and $param["OwnerId"] !== null) {
            $this->OwnerId = $param["OwnerId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectIdent",$param) and $param["ProjectIdent"] !== null) {
            $this->ProjectIdent = $param["ProjectIdent"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("WorkFlowDesc",$param) and $param["WorkFlowDesc"] !== null) {
            $this->WorkFlowDesc = $param["WorkFlowDesc"];
        }

        if (array_key_exists("WorkFlowName",$param) and $param["WorkFlowName"] !== null) {
            $this->WorkFlowName = $param["WorkFlowName"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("WorkflowType",$param) and $param["WorkflowType"] !== null) {
            $this->WorkflowType = $param["WorkflowType"];
        }
    }
}
