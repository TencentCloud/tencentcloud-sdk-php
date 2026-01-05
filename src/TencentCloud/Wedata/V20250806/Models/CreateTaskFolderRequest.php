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
 * CreateTaskFolder请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getParentTaskFolderPath() 获取父文件夹绝对路径，如/abc/de，如果是根目录则传/
 * @method void setParentTaskFolderPath(string $ParentTaskFolderPath) 设置父文件夹绝对路径，如/abc/de，如果是根目录则传/
 * @method string getTaskFolderName() 获取要创建的文件夹名字
 * @method void setTaskFolderName(string $TaskFolderName) 设置要创建的文件夹名字
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
 * @method string getWorkflowId() 获取工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
 */
class CreateTaskFolderRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 父文件夹绝对路径，如/abc/de，如果是根目录则传/
     */
    public $ParentTaskFolderPath;

    /**
     * @var string 要创建的文件夹名字
     */
    public $TaskFolderName;

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
     */
    public $TaskFolderType;

    /**
     * @var string 工作流ID
     */
    public $WorkflowId;

    /**
     * @param string $ProjectId 项目ID
     * @param string $ParentTaskFolderPath 父文件夹绝对路径，如/abc/de，如果是根目录则传/
     * @param string $TaskFolderName 要创建的文件夹名字
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
     * @param string $WorkflowId 工作流ID
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

        if (array_key_exists("ParentTaskFolderPath",$param) and $param["ParentTaskFolderPath"] !== null) {
            $this->ParentTaskFolderPath = $param["ParentTaskFolderPath"];
        }

        if (array_key_exists("TaskFolderName",$param) and $param["TaskFolderName"] !== null) {
            $this->TaskFolderName = $param["TaskFolderName"];
        }

        if (array_key_exists("TaskFolderType",$param) and $param["TaskFolderType"] !== null) {
            $this->TaskFolderType = $param["TaskFolderType"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }
    }
}
