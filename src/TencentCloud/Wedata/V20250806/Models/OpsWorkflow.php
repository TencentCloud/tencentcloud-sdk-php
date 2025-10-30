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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作流列表分页详情
 *
 * @method integer getTaskCount() 获取任务数量
 * @method void setTaskCount(integer $TaskCount) 设置任务数量
 * @method string getFolderName() 获取文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderName(string $FolderName) 设置文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderId() 获取工作流文件id
 * @method void setFolderId(string $FolderId) 设置工作流文件id
 * @method string getWorkflowId() 获取工作流id
 * @method void setWorkflowId(string $WorkflowId) 设置工作流id
 * @method string getWorkflowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowType() 获取工作流类型
 - cycle周期
 - manual手动
 * @method void setWorkflowType(string $WorkflowType) 设置工作流类型
 - cycle周期
 - manual手动
 * @method string getWorkflowDesc() 获取工作流描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowDesc(string $WorkflowDesc) 设置工作流描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取负责人userId,多个‘；’隔开
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置负责人userId,多个‘；’隔开
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getProjectName() 获取项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取工作流状态
* ALL_RUNNING : 全部调度中
* ALL_FREEZED : 全部已暂停
* ALL_STOPPTED : 全部已下线
* PART_RUNNING : 部分调度中
* ALL_NO_RUNNING : 全部未调度
* ALL_INVALID : 全部已失效
 * @method void setStatus(string $Status) 设置工作流状态
* ALL_RUNNING : 全部调度中
* ALL_FREEZED : 全部已暂停
* ALL_STOPPTED : 全部已下线
* PART_RUNNING : 部分调度中
* ALL_NO_RUNNING : 全部未调度
* ALL_INVALID : 全部已失效
 * @method string getCreateTime() 获取工作流创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置工作流创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取最近更新时间, 包含开发、生产变更
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置最近更新时间, 包含开发、生产变更
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUserUin() 获取最近更新人，包含开发、生产变更
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUserUin(string $UpdateUserUin) 设置最近更新人，包含开发、生产变更
注意：此字段可能返回 null，表示取不到有效值。
 */
class OpsWorkflow extends AbstractModel
{
    /**
     * @var integer 任务数量
     */
    public $TaskCount;

    /**
     * @var string 文件名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderName;

    /**
     * @var string 工作流文件id
     */
    public $FolderId;

    /**
     * @var string 工作流id
     */
    public $WorkflowId;

    /**
     * @var string 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string 工作流类型
 - cycle周期
 - manual手动
     */
    public $WorkflowType;

    /**
     * @var string 工作流描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowDesc;

    /**
     * @var string 负责人userId,多个‘；’隔开
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string 工作流状态
* ALL_RUNNING : 全部调度中
* ALL_FREEZED : 全部已暂停
* ALL_STOPPTED : 全部已下线
* PART_RUNNING : 部分调度中
* ALL_NO_RUNNING : 全部未调度
* ALL_INVALID : 全部已失效
     */
    public $Status;

    /**
     * @var string 工作流创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 最近更新时间, 包含开发、生产变更
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 最近更新人，包含开发、生产变更
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUserUin;

    /**
     * @param integer $TaskCount 任务数量
     * @param string $FolderName 文件名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId 工作流文件id
     * @param string $WorkflowId 工作流id
     * @param string $WorkflowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowType 工作流类型
 - cycle周期
 - manual手动
     * @param string $WorkflowDesc 工作流描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin 负责人userId,多个‘；’隔开
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
     * @param string $ProjectName 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 工作流状态
* ALL_RUNNING : 全部调度中
* ALL_FREEZED : 全部已暂停
* ALL_STOPPTED : 全部已下线
* PART_RUNNING : 部分调度中
* ALL_NO_RUNNING : 全部未调度
* ALL_INVALID : 全部已失效
     * @param string $CreateTime 工作流创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 最近更新时间, 包含开发、生产变更
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUserUin 最近更新人，包含开发、生产变更
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

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("WorkflowType",$param) and $param["WorkflowType"] !== null) {
            $this->WorkflowType = $param["WorkflowType"];
        }

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("UpdateUserUin",$param) and $param["UpdateUserUin"] !== null) {
            $this->UpdateUserUin = $param["UpdateUserUin"];
        }
    }
}
