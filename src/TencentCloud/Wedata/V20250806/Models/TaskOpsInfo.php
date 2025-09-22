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
 * 任务运维工作流列表详情
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getTaskName() 获取任务名
 * @method void setTaskName(string $TaskName) 设置任务名
 * @method string getOwnerUin() 获取负责人Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置负责人Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取任务状态:
- Y: 调度中
- F: 已下线
- O: 已暂停
- T: 下线中
- INVALID: 已失效
 * @method void setStatus(string $Status) 设置任务状态:
- Y: 调度中
- F: 已下线
- O: 已暂停
- T: 下线中
- INVALID: 已失效
 * @method string getFolderId() 获取文件夹id
 * @method void setFolderId(string $FolderId) 设置文件夹id
 * @method string getFolderName() 获取文件夹名字
 * @method void setFolderName(string $FolderName) 设置文件夹名字
 * @method string getWorkflowId() 获取工作流id
 * @method void setWorkflowId(string $WorkflowId) 设置工作流id
 * @method string getWorkflowName() 获取工作流名称
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getProjectName() 获取项目名称
 * @method void setProjectName(string $ProjectName) 设置项目名称
 * @method string getUpdateUserUin() 获取更新人名称
 * @method void setUpdateUserUin(string $UpdateUserUin) 设置更新人名称
 * @method integer getTaskTypeId() 获取任务类型Id：
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
 * @method void setTaskTypeId(integer $TaskTypeId) 设置任务类型Id：
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
 * @method string getTaskTypeDesc() 获取任务类型描述
 - 通用数据同步
 - ETLTaskType
 - ETLTaskType
 - python
 - pyspark
 - HiveSQLTaskType
 - shell
 - SparkSQLTaskType
 - JDBCSQLTaskType
 - DLCTaskType
 - ImpalaTaskType
 - CDWTaskType
 - kettle
 - DLCSparkTaskType
 - TiOne机器学习
 - TrinoTaskType
 - DLCPyspark
 - spark
 - mr
 - shell脚本
 - hivesql脚本
 - 自定义业务通用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeDesc(string $TaskTypeDesc) 设置任务类型描述
 - 通用数据同步
 - ETLTaskType
 - ETLTaskType
 - python
 - pyspark
 - HiveSQLTaskType
 - shell
 - SparkSQLTaskType
 - JDBCSQLTaskType
 - DLCTaskType
 - ImpalaTaskType
 - CDWTaskType
 - kettle
 - DLCSparkTaskType
 - TiOne机器学习
 - TrinoTaskType
 - DLCPyspark
 - spark
 - mr
 - shell脚本
 - hivesql脚本
 - 自定义业务通用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleType() 获取任务周期类型
* ONEOFF_CYCLE: 一次性
* YEAR_CYCLE: 年
* MONTH_CYCLE: 月
* WEEK_CYCLE: 周
* DAY_CYCLE: 天
* HOUR_CYCLE: 小时
* MINUTE_CYCLE: 分钟
* CRONTAB_CYCLE: crontab表达式类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置任务周期类型
* ONEOFF_CYCLE: 一次性
* YEAR_CYCLE: 年
* MONTH_CYCLE: 月
* WEEK_CYCLE: 周
* DAY_CYCLE: 天
* HOUR_CYCLE: 小时
* MINUTE_CYCLE: 分钟
* CRONTAB_CYCLE: crontab表达式类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupId() 获取资源组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置资源组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleDesc() 获取调度描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleDesc(string $ScheduleDesc) 设置调度描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupName() 获取资源组名称
 * @method void setExecutorGroupName(string $ExecutorGroupName) 设置资源组名称
 * @method string getLastSchedulerCommitTime() 获取最新调度提交时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastSchedulerCommitTime(string $LastSchedulerCommitTime) 设置最新调度提交时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstRunTime() 获取首次执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstRunTime(string $FirstRunTime) 设置首次执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstSubmitTime() 获取最近一次提交时间
 * @method void setFirstSubmitTime(string $FirstSubmitTime) 设置最近一次提交时间
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastUpdateTime() 获取最近更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdateTime(string $LastUpdateTime) 设置最近更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskOpsInfo extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 任务名
     */
    public $TaskName;

    /**
     * @var string 负责人Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string 任务状态:
- Y: 调度中
- F: 已下线
- O: 已暂停
- T: 下线中
- INVALID: 已失效
     */
    public $Status;

    /**
     * @var string 文件夹id
     */
    public $FolderId;

    /**
     * @var string 文件夹名字
     */
    public $FolderName;

    /**
     * @var string 工作流id
     */
    public $WorkflowId;

    /**
     * @var string 工作流名称
     */
    public $WorkflowName;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 项目名称
     */
    public $ProjectName;

    /**
     * @var string 更新人名称
     */
    public $UpdateUserUin;

    /**
     * @var integer 任务类型Id：
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
     */
    public $TaskTypeId;

    /**
     * @var string 任务类型描述
 - 通用数据同步
 - ETLTaskType
 - ETLTaskType
 - python
 - pyspark
 - HiveSQLTaskType
 - shell
 - SparkSQLTaskType
 - JDBCSQLTaskType
 - DLCTaskType
 - ImpalaTaskType
 - CDWTaskType
 - kettle
 - DLCSparkTaskType
 - TiOne机器学习
 - TrinoTaskType
 - DLCPyspark
 - spark
 - mr
 - shell脚本
 - hivesql脚本
 - 自定义业务通用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeDesc;

    /**
     * @var string 任务周期类型
* ONEOFF_CYCLE: 一次性
* YEAR_CYCLE: 年
* MONTH_CYCLE: 月
* WEEK_CYCLE: 周
* DAY_CYCLE: 天
* HOUR_CYCLE: 小时
* MINUTE_CYCLE: 分钟
* CRONTAB_CYCLE: crontab表达式类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleType;

    /**
     * @var string 资源组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupId;

    /**
     * @var string 调度描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleDesc;

    /**
     * @var string 资源组名称
     */
    public $ExecutorGroupName;

    /**
     * @var string 最新调度提交时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastSchedulerCommitTime;

    /**
     * @var string 首次执行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstRunTime;

    /**
     * @var string 最近一次提交时间
     */
    public $FirstSubmitTime;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 最近更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdateTime;

    /**
     * @param string $TaskId 任务ID
     * @param string $TaskName 任务名
     * @param string $OwnerUin 负责人Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 任务状态:
- Y: 调度中
- F: 已下线
- O: 已暂停
- T: 下线中
- INVALID: 已失效
     * @param string $FolderId 文件夹id
     * @param string $FolderName 文件夹名字
     * @param string $WorkflowId 工作流id
     * @param string $WorkflowName 工作流名称
     * @param string $ProjectId 项目id
     * @param string $ProjectName 项目名称
     * @param string $UpdateUserUin 更新人名称
     * @param integer $TaskTypeId 任务类型Id：
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
     * @param string $TaskTypeDesc 任务类型描述
 - 通用数据同步
 - ETLTaskType
 - ETLTaskType
 - python
 - pyspark
 - HiveSQLTaskType
 - shell
 - SparkSQLTaskType
 - JDBCSQLTaskType
 - DLCTaskType
 - ImpalaTaskType
 - CDWTaskType
 - kettle
 - DLCSparkTaskType
 - TiOne机器学习
 - TrinoTaskType
 - DLCPyspark
 - spark
 - mr
 - shell脚本
 - hivesql脚本
 - 自定义业务通用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleType 任务周期类型
* ONEOFF_CYCLE: 一次性
* YEAR_CYCLE: 年
* MONTH_CYCLE: 月
* WEEK_CYCLE: 周
* DAY_CYCLE: 天
* HOUR_CYCLE: 小时
* MINUTE_CYCLE: 分钟
* CRONTAB_CYCLE: crontab表达式类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupId 资源组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleDesc 调度描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupName 资源组名称
     * @param string $LastSchedulerCommitTime 最新调度提交时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstRunTime 首次执行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstSubmitTime 最近一次提交时间
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastUpdateTime 最近更新时间
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

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("UpdateUserUin",$param) and $param["UpdateUserUin"] !== null) {
            $this->UpdateUserUin = $param["UpdateUserUin"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("TaskTypeDesc",$param) and $param["TaskTypeDesc"] !== null) {
            $this->TaskTypeDesc = $param["TaskTypeDesc"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("ScheduleDesc",$param) and $param["ScheduleDesc"] !== null) {
            $this->ScheduleDesc = $param["ScheduleDesc"];
        }

        if (array_key_exists("ExecutorGroupName",$param) and $param["ExecutorGroupName"] !== null) {
            $this->ExecutorGroupName = $param["ExecutorGroupName"];
        }

        if (array_key_exists("LastSchedulerCommitTime",$param) and $param["LastSchedulerCommitTime"] !== null) {
            $this->LastSchedulerCommitTime = $param["LastSchedulerCommitTime"];
        }

        if (array_key_exists("FirstRunTime",$param) and $param["FirstRunTime"] !== null) {
            $this->FirstRunTime = $param["FirstRunTime"];
        }

        if (array_key_exists("FirstSubmitTime",$param) and $param["FirstSubmitTime"] !== null) {
            $this->FirstSubmitTime = $param["FirstSubmitTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }
    }
}
