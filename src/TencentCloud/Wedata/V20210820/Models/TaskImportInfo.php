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
 * 集成任务导入到编排空间配置
 *
 * @method boolean getIsImport() 获取是否导入编排空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsImport(boolean $IsImport) 设置是否导入编排空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsNewWorkFlow() 获取是否新建工作流
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsNewWorkFlow(boolean $IsNewWorkFlow) 设置是否新建工作流
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkFlowFolderId() 获取工作流所属目录id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkFlowFolderId(string $WorkFlowFolderId) 设置工作流所属目录id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkFlowFolderName() 获取工作流所属目录名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkFlowFolderName(string $WorkFlowFolderName) 设置工作流所属目录名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkFlowId() 获取工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkFlowId(string $WorkFlowId) 设置工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkFlowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkFlowName(string $WorkFlowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskNameExistMode() 获取重名任务处理策略, 0:跳过,不导入; 1: 重命名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskNameExistMode(integer $TaskNameExistMode) 设置重名任务处理策略, 0:跳过,不导入; 1: 重命名
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskImportInfo extends AbstractModel
{
    /**
     * @var boolean 是否导入编排空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsImport;

    /**
     * @var boolean 是否新建工作流
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsNewWorkFlow;

    /**
     * @var string 工作流所属目录id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkFlowFolderId;

    /**
     * @var string 工作流所属目录名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkFlowFolderName;

    /**
     * @var string 工作流id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkFlowId;

    /**
     * @var string 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkFlowName;

    /**
     * @var integer 重名任务处理策略, 0:跳过,不导入; 1: 重命名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskNameExistMode;

    /**
     * @param boolean $IsImport 是否导入编排空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsNewWorkFlow 是否新建工作流
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkFlowFolderId 工作流所属目录id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkFlowFolderName 工作流所属目录名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkFlowId 工作流id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkFlowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskNameExistMode 重名任务处理策略, 0:跳过,不导入; 1: 重命名
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
        if (array_key_exists("IsImport",$param) and $param["IsImport"] !== null) {
            $this->IsImport = $param["IsImport"];
        }

        if (array_key_exists("IsNewWorkFlow",$param) and $param["IsNewWorkFlow"] !== null) {
            $this->IsNewWorkFlow = $param["IsNewWorkFlow"];
        }

        if (array_key_exists("WorkFlowFolderId",$param) and $param["WorkFlowFolderId"] !== null) {
            $this->WorkFlowFolderId = $param["WorkFlowFolderId"];
        }

        if (array_key_exists("WorkFlowFolderName",$param) and $param["WorkFlowFolderName"] !== null) {
            $this->WorkFlowFolderName = $param["WorkFlowFolderName"];
        }

        if (array_key_exists("WorkFlowId",$param) and $param["WorkFlowId"] !== null) {
            $this->WorkFlowId = $param["WorkFlowId"];
        }

        if (array_key_exists("WorkFlowName",$param) and $param["WorkFlowName"] !== null) {
            $this->WorkFlowName = $param["WorkFlowName"];
        }

        if (array_key_exists("TaskNameExistMode",$param) and $param["TaskNameExistMode"] !== null) {
            $this->TaskNameExistMode = $param["TaskNameExistMode"];
        }
    }
}
