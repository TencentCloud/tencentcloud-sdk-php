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
 * 任务基本属性信息
 *
 * @method string getTaskId() 获取任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskTypeId() 获取任务类型ID：

* 21:JDBC SQL
* 23:TDSQL-PostgreSQL
* 26:OfflineSynchronization
* 30:Python
* 31:PySpark
* 33:Impala
* 34:Hive SQL
* 35:Shell
* 36:Spark SQL
* 38:Shell Form Mode
* 39:Spark
* 40:TCHouse-P
* 41:Kettle
* 42:Tchouse-X
* 43:TCHouse-X SQL
* 46:DLC Spark
* 47:TiOne
* 48:Trino
* 50:DLC PySpark
* 92:MapReduce
* 130:Branch Node
* 131:Merged Node
* 132:Notebook
* 133:SSH
* 134:StarRocks
* 137:For-each
* 138:Setats SQL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeId(integer $TaskTypeId) 设置任务类型ID：

* 21:JDBC SQL
* 23:TDSQL-PostgreSQL
* 26:OfflineSynchronization
* 30:Python
* 31:PySpark
* 33:Impala
* 34:Hive SQL
* 35:Shell
* 36:Spark SQL
* 38:Shell Form Mode
* 39:Spark
* 40:TCHouse-P
* 41:Kettle
* 42:Tchouse-X
* 43:TCHouse-X SQL
* 46:DLC Spark
* 47:TiOne
* 48:Trino
* 50:DLC PySpark
* 92:MapReduce
* 130:Branch Node
* 131:Merged Node
* 132:Notebook
* 133:SSH
* 134:StarRocks
* 137:For-each
* 138:Setats SQL
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskLatestVersionNo() 获取最近一次保存版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskLatestVersionNo(string $TaskLatestVersionNo) 设置最近一次保存版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskLatestSubmitVersionNo() 获取最近一次提交版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskLatestSubmitVersionNo(string $TaskLatestSubmitVersionNo) 设置最近一次提交版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取任务状态：
* N: 新建
* Y: 调度中
* F: 已下线
* O: 已暂停
* T: 下线中
* INVALID: 已失效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置任务状态：
* N: 新建
* Y: 调度中
* F: 已下线
* O: 已暂停
* T: 下线中
* INVALID: 已失效
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSubmit() 获取任务最新提交状态，任务是否已经提交：true/false
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmit(boolean $Submit) 设置任务最新提交状态，任务是否已经提交：true/false
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取任务创建时间，示例：2022-02-12 11:13:41
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间，示例：2022-02-12 11:13:41
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastUpdateTime() 获取最后更新时间，示例：2025-08-13 16:34:06
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdateTime(string $LastUpdateTime) 设置最后更新时间，示例：2025-08-13 16:34:06
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastUpdateUserName() 获取最后更新人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdateUserName(string $LastUpdateUserName) 设置最后更新人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastOpsTime() 获取最后运维时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastOpsTime(string $LastOpsTime) 设置最后运维时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastOpsUserName() 获取最后运维人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastOpsUserName(string $LastOpsUserName) 设置最后运维人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取任务负责人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置任务负责人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskDescription() 获取任务描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskDescription(string $TaskDescription) 设置任务描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUserUin() 获取最近一次更新用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUserUin(string $UpdateUserUin) 设置最近一次更新用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUserUin() 获取创建用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUserUin(string $CreateUserUin) 设置创建用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskFolderPath() 获取任务文件夹路径

注意：
- 路径上不要填写任务节点类型；例如，在 一个名为 wf01 的工作流，“通用” 分类下，现在想要在这个分类下的 tf_01 文件夹下，新建一个 shell 任务；则 填写 /tf_01 即可；
- 如果 tf_01 文件夹不存在，则需要先创建这个文件夹（使用 CreateTaskFolder 接口）才能操作成功；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskFolderPath(string $TaskFolderPath) 设置任务文件夹路径

注意：
- 路径上不要填写任务节点类型；例如，在 一个名为 wf01 的工作流，“通用” 分类下，现在想要在这个分类下的 tf_01 文件夹下，新建一个 shell 任务；则 填写 /tf_01 即可；
- 如果 tf_01 文件夹不存在，则需要先创建这个文件夹（使用 CreateTaskFolder 接口）才能操作成功；
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskBaseAttribute extends AbstractModel
{
    /**
     * @var string 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var integer 任务类型ID：

* 21:JDBC SQL
* 23:TDSQL-PostgreSQL
* 26:OfflineSynchronization
* 30:Python
* 31:PySpark
* 33:Impala
* 34:Hive SQL
* 35:Shell
* 36:Spark SQL
* 38:Shell Form Mode
* 39:Spark
* 40:TCHouse-P
* 41:Kettle
* 42:Tchouse-X
* 43:TCHouse-X SQL
* 46:DLC Spark
* 47:TiOne
* 48:Trino
* 50:DLC PySpark
* 92:MapReduce
* 130:Branch Node
* 131:Merged Node
* 132:Notebook
* 133:SSH
* 134:StarRocks
* 137:For-each
* 138:Setats SQL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeId;

    /**
     * @var string 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string 最近一次保存版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskLatestVersionNo;

    /**
     * @var string 最近一次提交版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskLatestSubmitVersionNo;

    /**
     * @var string 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string 任务状态：
* N: 新建
* Y: 调度中
* F: 已下线
* O: 已暂停
* T: 下线中
* INVALID: 已失效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var boolean 任务最新提交状态，任务是否已经提交：true/false
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Submit;

    /**
     * @var string 任务创建时间，示例：2022-02-12 11:13:41
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 最后更新时间，示例：2025-08-13 16:34:06
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdateTime;

    /**
     * @var string 最后更新人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdateUserName;

    /**
     * @var string 最后运维时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastOpsTime;

    /**
     * @var string 最后运维人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastOpsUserName;

    /**
     * @var string 任务负责人ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string 任务描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskDescription;

    /**
     * @var string 最近一次更新用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUserUin;

    /**
     * @var string 创建用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUserUin;

    /**
     * @var string 任务文件夹路径

注意：
- 路径上不要填写任务节点类型；例如，在 一个名为 wf01 的工作流，“通用” 分类下，现在想要在这个分类下的 tf_01 文件夹下，新建一个 shell 任务；则 填写 /tf_01 即可；
- 如果 tf_01 文件夹不存在，则需要先创建这个文件夹（使用 CreateTaskFolder 接口）才能操作成功；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskFolderPath;

    /**
     * @param string $TaskId 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskTypeId 任务类型ID：

* 21:JDBC SQL
* 23:TDSQL-PostgreSQL
* 26:OfflineSynchronization
* 30:Python
* 31:PySpark
* 33:Impala
* 34:Hive SQL
* 35:Shell
* 36:Spark SQL
* 38:Shell Form Mode
* 39:Spark
* 40:TCHouse-P
* 41:Kettle
* 42:Tchouse-X
* 43:TCHouse-X SQL
* 46:DLC Spark
* 47:TiOne
* 48:Trino
* 50:DLC PySpark
* 92:MapReduce
* 130:Branch Node
* 131:Merged Node
* 132:Notebook
* 133:SSH
* 134:StarRocks
* 137:For-each
* 138:Setats SQL
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskLatestVersionNo 最近一次保存版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskLatestSubmitVersionNo 最近一次提交版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 任务状态：
* N: 新建
* Y: 调度中
* F: 已下线
* O: 已暂停
* T: 下线中
* INVALID: 已失效
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Submit 任务最新提交状态，任务是否已经提交：true/false
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 任务创建时间，示例：2022-02-12 11:13:41
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastUpdateTime 最后更新时间，示例：2025-08-13 16:34:06
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastUpdateUserName 最后更新人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastOpsTime 最后运维时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastOpsUserName 最后运维人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin 任务负责人ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskDescription 任务描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUserUin 最近一次更新用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUserUin 创建用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskFolderPath 任务文件夹路径

注意：
- 路径上不要填写任务节点类型；例如，在 一个名为 wf01 的工作流，“通用” 分类下，现在想要在这个分类下的 tf_01 文件夹下，新建一个 shell 任务；则 填写 /tf_01 即可；
- 如果 tf_01 文件夹不存在，则需要先创建这个文件夹（使用 CreateTaskFolder 接口）才能操作成功；
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

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskLatestVersionNo",$param) and $param["TaskLatestVersionNo"] !== null) {
            $this->TaskLatestVersionNo = $param["TaskLatestVersionNo"];
        }

        if (array_key_exists("TaskLatestSubmitVersionNo",$param) and $param["TaskLatestSubmitVersionNo"] !== null) {
            $this->TaskLatestSubmitVersionNo = $param["TaskLatestSubmitVersionNo"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Submit",$param) and $param["Submit"] !== null) {
            $this->Submit = $param["Submit"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("LastUpdateUserName",$param) and $param["LastUpdateUserName"] !== null) {
            $this->LastUpdateUserName = $param["LastUpdateUserName"];
        }

        if (array_key_exists("LastOpsTime",$param) and $param["LastOpsTime"] !== null) {
            $this->LastOpsTime = $param["LastOpsTime"];
        }

        if (array_key_exists("LastOpsUserName",$param) and $param["LastOpsUserName"] !== null) {
            $this->LastOpsUserName = $param["LastOpsUserName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("TaskDescription",$param) and $param["TaskDescription"] !== null) {
            $this->TaskDescription = $param["TaskDescription"];
        }

        if (array_key_exists("UpdateUserUin",$param) and $param["UpdateUserUin"] !== null) {
            $this->UpdateUserUin = $param["UpdateUserUin"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("TaskFolderPath",$param) and $param["TaskFolderPath"] !== null) {
            $this->TaskFolderPath = $param["TaskFolderPath"];
        }
    }
}
