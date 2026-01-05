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
 * 任务文件夹详细信息
 *
 * @method string getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskFolderId() 获取文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskFolderId(string $TaskFolderId) 设置文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskFolderPath() 获取文件夹绝对路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskFolderPath(string $TaskFolderPath) 设置文件夹绝对路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUserUin() 获取创建人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUserUin(string $CreateUserUin) 设置创建人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentTaskFolderPath() 获取父文件夹绝对路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentTaskFolderPath(string $ParentTaskFolderPath) 设置父文件夹绝对路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskFolderName() 获取文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskFolderName(string $TaskFolderName) 设置文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskFolderType() 获取任务文件夹类型

| 任务文件夹类型取值 | 任务文件夹类型界面对应名称 |
| ---------------- | ------------------------ |
| ETL              | 集成任务                 |
| EMR              | EMR                      |
| DLC              | DLC                      |
| SETATS           | SETATS                   |
| TDSQL            | TDSQL                    |
| TCHOUSE          | TCHOUSE                  |
| GENERAL          | 通用                     |
| TI_ONE           | TI-ONE机器学习           |
| ACROSS_WORKFLOWS | 跨工作流                 |

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskFolderType(string $TaskFolderType) 设置任务文件夹类型

| 任务文件夹类型取值 | 任务文件夹类型界面对应名称 |
| ---------------- | ------------------------ |
| ETL              | 集成任务                 |
| EMR              | EMR                      |
| DLC              | DLC                      |
| SETATS           | SETATS                   |
| TDSQL            | TDSQL                    |
| TCHOUSE          | TCHOUSE                  |
| GENERAL          | 通用                     |
| TI_ONE           | TI-ONE机器学习           |
| ACROSS_WORKFLOWS | 跨工作流                 |

注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskFolderDetail extends AbstractModel
{
    /**
     * @var string 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskFolderId;

    /**
     * @var string 文件夹绝对路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskFolderPath;

    /**
     * @var string 创建人ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUserUin;

    /**
     * @var string 父文件夹绝对路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentTaskFolderPath;

    /**
     * @var string 文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskFolderName;

    /**
     * @var string 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 任务文件夹类型

| 任务文件夹类型取值 | 任务文件夹类型界面对应名称 |
| ---------------- | ------------------------ |
| ETL              | 集成任务                 |
| EMR              | EMR                      |
| DLC              | DLC                      |
| SETATS           | SETATS                   |
| TDSQL            | TDSQL                    |
| TCHOUSE          | TCHOUSE                  |
| GENERAL          | 通用                     |
| TI_ONE           | TI-ONE机器学习           |
| ACROSS_WORKFLOWS | 跨工作流                 |

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskFolderType;

    /**
     * @param string $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskFolderId 文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskFolderPath 文件夹绝对路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUserUin 创建人ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentTaskFolderPath 父文件夹绝对路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskFolderName 文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskFolderType 任务文件夹类型

| 任务文件夹类型取值 | 任务文件夹类型界面对应名称 |
| ---------------- | ------------------------ |
| ETL              | 集成任务                 |
| EMR              | EMR                      |
| DLC              | DLC                      |
| SETATS           | SETATS                   |
| TDSQL            | TDSQL                    |
| TCHOUSE          | TCHOUSE                  |
| GENERAL          | 通用                     |
| TI_ONE           | TI-ONE机器学习           |
| ACROSS_WORKFLOWS | 跨工作流                 |

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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskFolderId",$param) and $param["TaskFolderId"] !== null) {
            $this->TaskFolderId = $param["TaskFolderId"];
        }

        if (array_key_exists("TaskFolderPath",$param) and $param["TaskFolderPath"] !== null) {
            $this->TaskFolderPath = $param["TaskFolderPath"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("ParentTaskFolderPath",$param) and $param["ParentTaskFolderPath"] !== null) {
            $this->ParentTaskFolderPath = $param["ParentTaskFolderPath"];
        }

        if (array_key_exists("TaskFolderName",$param) and $param["TaskFolderName"] !== null) {
            $this->TaskFolderName = $param["TaskFolderName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("TaskFolderType",$param) and $param["TaskFolderType"] !== null) {
            $this->TaskFolderType = $param["TaskFolderType"];
        }
    }
}
