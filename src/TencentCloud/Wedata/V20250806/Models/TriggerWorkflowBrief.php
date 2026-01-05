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
 * 工作流概要信息
 *
 * @method string getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取工作ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskCount() 获取任务数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskCount(integer $TaskCount) 设置任务数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderId() 获取文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(string $FolderId) 设置文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderName() 获取文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderName(string $FolderName) 设置文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method WorkflowTriggerConfig getWorkflowTriggerConfig() 获取调度配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowTriggerConfig(WorkflowTriggerConfig $WorkflowTriggerConfig) 设置调度配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserNameInCharge() 获取责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserNameInCharge(string $UserNameInCharge) 设置责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserUinInCharge() 获取责任人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserUinInCharge(string $UserUinInCharge) 设置责任人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowParams() 获取工作流参数
 * @method void setWorkflowParams(string $WorkflowParams) 设置工作流参数
 */
class TriggerWorkflowBrief extends AbstractModel
{
    /**
     * @var string 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 工作ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var integer 任务数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskCount;

    /**
     * @var string 文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderId;

    /**
     * @var string 文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderName;

    /**
     * @var WorkflowTriggerConfig 调度配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowTriggerConfig;

    /**
     * @var string 责任人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserNameInCharge;

    /**
     * @var string 责任人ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserUinInCharge;

    /**
     * @var string 工作流参数
     */
    public $WorkflowParams;

    /**
     * @param string $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId 工作ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskCount 任务数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId 文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderName 文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param WorkflowTriggerConfig $WorkflowTriggerConfig 调度配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserNameInCharge 责任人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserUinInCharge 责任人ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowParams 工作流参数
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("TaskCount",$param) and $param["TaskCount"] !== null) {
            $this->TaskCount = $param["TaskCount"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("WorkflowTriggerConfig",$param) and $param["WorkflowTriggerConfig"] !== null) {
            $this->WorkflowTriggerConfig = new WorkflowTriggerConfig();
            $this->WorkflowTriggerConfig->deserialize($param["WorkflowTriggerConfig"]);
        }

        if (array_key_exists("UserNameInCharge",$param) and $param["UserNameInCharge"] !== null) {
            $this->UserNameInCharge = $param["UserNameInCharge"];
        }

        if (array_key_exists("UserUinInCharge",$param) and $param["UserUinInCharge"] !== null) {
            $this->UserUinInCharge = $param["UserUinInCharge"];
        }

        if (array_key_exists("WorkflowParams",$param) and $param["WorkflowParams"] !== null) {
            $this->WorkflowParams = $param["WorkflowParams"];
        }
    }
}
