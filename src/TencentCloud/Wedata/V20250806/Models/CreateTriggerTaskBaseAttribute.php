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
 * 创建任务基本属性信息
 *
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getTaskTypeId() 获取任务类型ID：
* 26:OfflineSynchronization
* 30:Python
* 32:DLC SQL
* 35:Shell
* 38:Shell Form Mode
* 46:DLC Spark
* 50:DLC PySpark
* 130:Branch Node
* 131:Merged Node
* 132:Notebook
* 133:SSH
* 137:For-each
* 139:DLC Spark Streaming
* 140:Run Workflow
 * @method void setTaskTypeId(string $TaskTypeId) 设置任务类型ID：
* 26:OfflineSynchronization
* 30:Python
* 32:DLC SQL
* 35:Shell
* 38:Shell Form Mode
* 46:DLC Spark
* 50:DLC PySpark
* 130:Branch Node
* 131:Merged Node
* 132:Notebook
* 133:SSH
* 137:For-each
* 139:DLC Spark Streaming
* 140:Run Workflow
 * @method string getWorkflowId() 获取工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
 * @method string getOwnerUin() 获取任务负责人ID，默认为当前用户
 * @method void setOwnerUin(string $OwnerUin) 设置任务负责人ID，默认为当前用户
 * @method string getTaskDescription() 获取任务描述
 * @method void setTaskDescription(string $TaskDescription) 设置任务描述
 * @method string getTaskFolderPath() 获取任务文件夹路径

注意：
- 路径上不要填写任务节点类型；例如，在 一个名为 wf01 的工作流，“通用” 分类下，现在想要在这个分类下的 tf_01 文件夹下，新建一个 shell 任务；则 填写 /tf_01 即可；
- 如果 tf_01 文件夹不存在，则需要先创建这个文件夹（使用 CreateTaskFolder 接口）才能操作成功；
 * @method void setTaskFolderPath(string $TaskFolderPath) 设置任务文件夹路径

注意：
- 路径上不要填写任务节点类型；例如，在 一个名为 wf01 的工作流，“通用” 分类下，现在想要在这个分类下的 tf_01 文件夹下，新建一个 shell 任务；则 填写 /tf_01 即可；
- 如果 tf_01 文件夹不存在，则需要先创建这个文件夹（使用 CreateTaskFolder 接口）才能操作成功；
 */
class CreateTriggerTaskBaseAttribute extends AbstractModel
{
    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 任务类型ID：
* 26:OfflineSynchronization
* 30:Python
* 32:DLC SQL
* 35:Shell
* 38:Shell Form Mode
* 46:DLC Spark
* 50:DLC PySpark
* 130:Branch Node
* 131:Merged Node
* 132:Notebook
* 133:SSH
* 137:For-each
* 139:DLC Spark Streaming
* 140:Run Workflow
     */
    public $TaskTypeId;

    /**
     * @var string 工作流ID
     */
    public $WorkflowId;

    /**
     * @var string 任务负责人ID，默认为当前用户
     */
    public $OwnerUin;

    /**
     * @var string 任务描述
     */
    public $TaskDescription;

    /**
     * @var string 任务文件夹路径

注意：
- 路径上不要填写任务节点类型；例如，在 一个名为 wf01 的工作流，“通用” 分类下，现在想要在这个分类下的 tf_01 文件夹下，新建一个 shell 任务；则 填写 /tf_01 即可；
- 如果 tf_01 文件夹不存在，则需要先创建这个文件夹（使用 CreateTaskFolder 接口）才能操作成功；
     */
    public $TaskFolderPath;

    /**
     * @param string $TaskName 任务名称
     * @param string $TaskTypeId 任务类型ID：
* 26:OfflineSynchronization
* 30:Python
* 32:DLC SQL
* 35:Shell
* 38:Shell Form Mode
* 46:DLC Spark
* 50:DLC PySpark
* 130:Branch Node
* 131:Merged Node
* 132:Notebook
* 133:SSH
* 137:For-each
* 139:DLC Spark Streaming
* 140:Run Workflow
     * @param string $WorkflowId 工作流ID
     * @param string $OwnerUin 任务负责人ID，默认为当前用户
     * @param string $TaskDescription 任务描述
     * @param string $TaskFolderPath 任务文件夹路径

注意：
- 路径上不要填写任务节点类型；例如，在 一个名为 wf01 的工作流，“通用” 分类下，现在想要在这个分类下的 tf_01 文件夹下，新建一个 shell 任务；则 填写 /tf_01 即可；
- 如果 tf_01 文件夹不存在，则需要先创建这个文件夹（使用 CreateTaskFolder 接口）才能操作成功；
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("TaskDescription",$param) and $param["TaskDescription"] !== null) {
            $this->TaskDescription = $param["TaskDescription"];
        }

        if (array_key_exists("TaskFolderPath",$param) and $param["TaskFolderPath"] !== null) {
            $this->TaskFolderPath = $param["TaskFolderPath"];
        }
    }
}
