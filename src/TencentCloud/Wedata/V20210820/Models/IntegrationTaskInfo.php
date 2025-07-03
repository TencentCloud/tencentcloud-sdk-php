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
 * 集成任务
 *
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getDescription() 获取任务描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置任务描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSyncType() 获取同步类型1.解决方案(整库迁移),2.单表同步
 * @method void setSyncType(integer $SyncType) 设置同步类型1.解决方案(整库迁移),2.单表同步
 * @method integer getTaskType() 获取201.实时,202.离线
 * @method void setTaskType(integer $TaskType) 设置201.实时,202.离线
 * @method string getWorkflowId() 获取任务所属工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置任务所属工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleTaskId() 获取任务调度id(oceanus or us等作业id)，非填项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleTaskId(string $ScheduleTaskId) 设置任务调度id(oceanus or us等作业id)，非填项
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskGroupId() 获取inlong任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskGroupId(string $TaskGroupId) 设置inlong任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorUin() 获取创建人uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorUin(string $CreatorUin) 设置创建人uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperatorUin() 获取操作人uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorUin(string $OperatorUin) 设置操作人uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取owner uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置owner uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取应用id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置应用id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取0:新建(任务开发态默认状态)|1:未开始|2:操作中|3:运行中|4:暂停|5:任务停止中|6:停止|7:执行失败|20:异常|21:未知|
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置0:新建(任务开发态默认状态)|1:未开始|2:操作中|3:运行中|4:暂停|5:任务停止中|6:停止|7:执行失败|20:异常|21:未知|
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNodes() 获取节点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodes(array $Nodes) 设置节点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorId() 获取执行资源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorId(string $ExecutorId) 设置执行资源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConfig() 获取任务配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfig(array $Config) 设置任务配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExtConfig() 获取任务扩展配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtConfig(array $ExtConfig) 设置任务扩展配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExecuteContext() 获取任务执行context信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecuteContext(array $ExecuteContext) 设置任务执行context信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMappings() 获取节点映射
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMappings(array $Mappings) 设置节点映射
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskMode() 获取任务配置模式，0:画布 1:表单 3:脚本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskMode(string $TaskMode) 设置任务配置模式，0:画布 1:表单 3:脚本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIncharge() 获取责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncharge(string $Incharge) 设置责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method OfflineTaskAddParam getOfflineTaskAddEntity() 获取离线新增参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOfflineTaskAddEntity(OfflineTaskAddParam $OfflineTaskAddEntity) 设置离线新增参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupName() 获取group name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupName(string $ExecutorGroupName) 设置group name
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInLongManagerUrl() 获取inlong manager url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInLongManagerUrl(string $InLongManagerUrl) 设置inlong manager url
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInLongStreamId() 获取stream id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInLongStreamId(string $InLongStreamId) 设置stream id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInLongManagerVersion() 获取version
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInLongManagerVersion(string $InLongManagerVersion) 设置version
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDataProxyUrl() 获取inlong dataproxy url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataProxyUrl(array $DataProxyUrl) 设置inlong dataproxy url
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSubmit() 获取任务版本是否已提交运维
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmit(boolean $Submit) 设置任务版本是否已提交运维
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputDatasourceType() 获取数据源类型：MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputDatasourceType(string $InputDatasourceType) 设置数据源类型：MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutputDatasourceType() 获取数据源类型：MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputDatasourceType(string $OutputDatasourceType) 设置数据源类型：MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNumRecordsIn() 获取读取条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumRecordsIn(integer $NumRecordsIn) 设置读取条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNumRecordsOut() 获取写入条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumRecordsOut(integer $NumRecordsOut) 设置写入条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getReaderDelay() 获取读取延迟
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReaderDelay(float $ReaderDelay) 设置读取延迟
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNumRestarts() 获取重启次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumRestarts(integer $NumRestarts) 设置重启次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取任务创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取任务更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置任务更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastRunTime() 获取任务最后一次运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastRunTime(string $LastRunTime) 设置任务最后一次运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStopTime() 获取任务停止时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStopTime(string $StopTime) 设置任务停止时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHasVersion() 获取作业是否已提交
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasVersion(boolean $HasVersion) 设置作业是否已提交
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getLocked() 获取任务是否被锁定
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocked(boolean $Locked) 设置任务是否被锁定
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocker() 获取任务锁定人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocker(string $Locker) 设置任务锁定人
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRunningCu() 获取耗费资源量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningCu(float $RunningCu) 设置耗费资源量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskAlarmRegularList() 获取该任务关联的告警规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskAlarmRegularList(array $TaskAlarmRegularList) 设置该任务关联的告警规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSwitchResource() 获取实时任务资源分层情况： 0：进行中,1：成功 ,2：失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitchResource(integer $SwitchResource) 设置实时任务资源分层情况： 0：进行中,1：成功 ,2：失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReadPhase() 获取实时任务读取阶段：0：全部全量,1：部分全量,2：全部增量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReadPhase(integer $ReadPhase) 设置实时任务读取阶段：0：全部全量,1：部分全量,2：全部增量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceVersion() 获取实时任务版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceVersion(integer $InstanceVersion) 设置实时任务版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getArrangeSpaceTaskId() 获取离线任务导入到编排空间的任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArrangeSpaceTaskId(string $ArrangeSpaceTaskId) 设置离线任务导入到编排空间的任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOfflineTaskStatus() 获取离线任务状态区分1.未提交2.已提交3.已导出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOfflineTaskStatus(integer $OfflineTaskStatus) 设置离线任务状态区分1.未提交2.已提交3.已导出
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskImportInfo getTaskImportInfo() 获取导入到编排空间配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskImportInfo(TaskImportInfo $TaskImportInfo) 设置导入到编排空间配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBusinessLatency() 获取业务延迟
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessLatency(integer $BusinessLatency) 设置业务延迟
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCurrentSyncPosition() 获取当前同步位点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentSyncPosition(integer $CurrentSyncPosition) 设置当前同步位点
注意：此字段可能返回 null，表示取不到有效值。
 */
class IntegrationTaskInfo extends AbstractModel
{
    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 任务描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 同步类型1.解决方案(整库迁移),2.单表同步
     */
    public $SyncType;

    /**
     * @var integer 201.实时,202.离线
     */
    public $TaskType;

    /**
     * @var string 任务所属工作流id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 任务调度id(oceanus or us等作业id)，非填项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleTaskId;

    /**
     * @var string inlong任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskGroupId;

    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 创建人uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorUin;

    /**
     * @var string 操作人uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorUin;

    /**
     * @var string owner uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string 应用id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var integer 0:新建(任务开发态默认状态)|1:未开始|2:操作中|3:运行中|4:暂停|5:任务停止中|6:停止|7:执行失败|20:异常|21:未知|
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array 节点列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nodes;

    /**
     * @var string 执行资源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorId;

    /**
     * @var array 任务配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Config;

    /**
     * @var array 任务扩展配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtConfig;

    /**
     * @var array 任务执行context信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecuteContext;

    /**
     * @var array 节点映射
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mappings;

    /**
     * @var string 任务配置模式，0:画布 1:表单 3:脚本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskMode;

    /**
     * @var string 责任人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Incharge;

    /**
     * @var OfflineTaskAddParam 离线新增参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OfflineTaskAddEntity;

    /**
     * @var string group name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupName;

    /**
     * @var string inlong manager url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InLongManagerUrl;

    /**
     * @var string stream id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InLongStreamId;

    /**
     * @var string version
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InLongManagerVersion;

    /**
     * @var array inlong dataproxy url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataProxyUrl;

    /**
     * @var boolean 任务版本是否已提交运维
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Submit;

    /**
     * @var string 数据源类型：MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputDatasourceType;

    /**
     * @var string 数据源类型：MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputDatasourceType;

    /**
     * @var integer 读取条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumRecordsIn;

    /**
     * @var integer 写入条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumRecordsOut;

    /**
     * @var float 读取延迟
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReaderDelay;

    /**
     * @var integer 重启次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumRestarts;

    /**
     * @var string 任务创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 任务更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 任务最后一次运行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastRunTime;

    /**
     * @var string 任务停止时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StopTime;

    /**
     * @var boolean 作业是否已提交
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasVersion;

    /**
     * @var boolean 任务是否被锁定
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Locked;

    /**
     * @var string 任务锁定人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Locker;

    /**
     * @var float 耗费资源量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningCu;

    /**
     * @var array 该任务关联的告警规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskAlarmRegularList;

    /**
     * @var integer 实时任务资源分层情况： 0：进行中,1：成功 ,2：失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SwitchResource;

    /**
     * @var integer 实时任务读取阶段：0：全部全量,1：部分全量,2：全部增量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReadPhase;

    /**
     * @var integer 实时任务版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceVersion;

    /**
     * @var string 离线任务导入到编排空间的任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ArrangeSpaceTaskId;

    /**
     * @var integer 离线任务状态区分1.未提交2.已提交3.已导出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OfflineTaskStatus;

    /**
     * @var TaskImportInfo 导入到编排空间配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskImportInfo;

    /**
     * @var integer 业务延迟
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessLatency;

    /**
     * @var integer 当前同步位点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentSyncPosition;

    /**
     * @param string $TaskName 任务名称
     * @param string $Description 任务描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SyncType 同步类型1.解决方案(整库迁移),2.单表同步
     * @param integer $TaskType 201.实时,202.离线
     * @param string $WorkflowId 任务所属工作流id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleTaskId 任务调度id(oceanus or us等作业id)，非填项
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskGroupId inlong任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorUin 创建人uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperatorUin 操作人uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin owner uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId 应用id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 0:新建(任务开发态默认状态)|1:未开始|2:操作中|3:运行中|4:暂停|5:任务停止中|6:停止|7:执行失败|20:异常|21:未知|
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Nodes 节点列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorId 执行资源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Config 任务配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExtConfig 任务扩展配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExecuteContext 任务执行context信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Mappings 节点映射
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskMode 任务配置模式，0:画布 1:表单 3:脚本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Incharge 责任人
注意：此字段可能返回 null，表示取不到有效值。
     * @param OfflineTaskAddParam $OfflineTaskAddEntity 离线新增参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupName group name
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InLongManagerUrl inlong manager url
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InLongStreamId stream id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InLongManagerVersion version
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DataProxyUrl inlong dataproxy url
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Submit 任务版本是否已提交运维
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputDatasourceType 数据源类型：MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutputDatasourceType 数据源类型：MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NumRecordsIn 读取条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NumRecordsOut 写入条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ReaderDelay 读取延迟
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NumRestarts 重启次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 任务创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 任务更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastRunTime 任务最后一次运行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StopTime 任务停止时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HasVersion 作业是否已提交
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Locked 任务是否被锁定
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Locker 任务锁定人
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RunningCu 耗费资源量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskAlarmRegularList 该任务关联的告警规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SwitchResource 实时任务资源分层情况： 0：进行中,1：成功 ,2：失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReadPhase 实时任务读取阶段：0：全部全量,1：部分全量,2：全部增量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceVersion 实时任务版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ArrangeSpaceTaskId 离线任务导入到编排空间的任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OfflineTaskStatus 离线任务状态区分1.未提交2.已提交3.已导出
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskImportInfo $TaskImportInfo 导入到编排空间配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BusinessLatency 业务延迟
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CurrentSyncPosition 当前同步位点
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SyncType",$param) and $param["SyncType"] !== null) {
            $this->SyncType = $param["SyncType"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ScheduleTaskId",$param) and $param["ScheduleTaskId"] !== null) {
            $this->ScheduleTaskId = $param["ScheduleTaskId"];
        }

        if (array_key_exists("TaskGroupId",$param) and $param["TaskGroupId"] !== null) {
            $this->TaskGroupId = $param["TaskGroupId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("OperatorUin",$param) and $param["OperatorUin"] !== null) {
            $this->OperatorUin = $param["OperatorUin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = [];
            foreach ($param["Nodes"] as $key => $value){
                $obj = new IntegrationNodeInfo();
                $obj->deserialize($value);
                array_push($this->Nodes, $obj);
            }
        }

        if (array_key_exists("ExecutorId",$param) and $param["ExecutorId"] !== null) {
            $this->ExecutorId = $param["ExecutorId"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = [];
            foreach ($param["Config"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->Config, $obj);
            }
        }

        if (array_key_exists("ExtConfig",$param) and $param["ExtConfig"] !== null) {
            $this->ExtConfig = [];
            foreach ($param["ExtConfig"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->ExtConfig, $obj);
            }
        }

        if (array_key_exists("ExecuteContext",$param) and $param["ExecuteContext"] !== null) {
            $this->ExecuteContext = [];
            foreach ($param["ExecuteContext"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->ExecuteContext, $obj);
            }
        }

        if (array_key_exists("Mappings",$param) and $param["Mappings"] !== null) {
            $this->Mappings = [];
            foreach ($param["Mappings"] as $key => $value){
                $obj = new IntegrationNodeMapping();
                $obj->deserialize($value);
                array_push($this->Mappings, $obj);
            }
        }

        if (array_key_exists("TaskMode",$param) and $param["TaskMode"] !== null) {
            $this->TaskMode = $param["TaskMode"];
        }

        if (array_key_exists("Incharge",$param) and $param["Incharge"] !== null) {
            $this->Incharge = $param["Incharge"];
        }

        if (array_key_exists("OfflineTaskAddEntity",$param) and $param["OfflineTaskAddEntity"] !== null) {
            $this->OfflineTaskAddEntity = new OfflineTaskAddParam();
            $this->OfflineTaskAddEntity->deserialize($param["OfflineTaskAddEntity"]);
        }

        if (array_key_exists("ExecutorGroupName",$param) and $param["ExecutorGroupName"] !== null) {
            $this->ExecutorGroupName = $param["ExecutorGroupName"];
        }

        if (array_key_exists("InLongManagerUrl",$param) and $param["InLongManagerUrl"] !== null) {
            $this->InLongManagerUrl = $param["InLongManagerUrl"];
        }

        if (array_key_exists("InLongStreamId",$param) and $param["InLongStreamId"] !== null) {
            $this->InLongStreamId = $param["InLongStreamId"];
        }

        if (array_key_exists("InLongManagerVersion",$param) and $param["InLongManagerVersion"] !== null) {
            $this->InLongManagerVersion = $param["InLongManagerVersion"];
        }

        if (array_key_exists("DataProxyUrl",$param) and $param["DataProxyUrl"] !== null) {
            $this->DataProxyUrl = $param["DataProxyUrl"];
        }

        if (array_key_exists("Submit",$param) and $param["Submit"] !== null) {
            $this->Submit = $param["Submit"];
        }

        if (array_key_exists("InputDatasourceType",$param) and $param["InputDatasourceType"] !== null) {
            $this->InputDatasourceType = $param["InputDatasourceType"];
        }

        if (array_key_exists("OutputDatasourceType",$param) and $param["OutputDatasourceType"] !== null) {
            $this->OutputDatasourceType = $param["OutputDatasourceType"];
        }

        if (array_key_exists("NumRecordsIn",$param) and $param["NumRecordsIn"] !== null) {
            $this->NumRecordsIn = $param["NumRecordsIn"];
        }

        if (array_key_exists("NumRecordsOut",$param) and $param["NumRecordsOut"] !== null) {
            $this->NumRecordsOut = $param["NumRecordsOut"];
        }

        if (array_key_exists("ReaderDelay",$param) and $param["ReaderDelay"] !== null) {
            $this->ReaderDelay = $param["ReaderDelay"];
        }

        if (array_key_exists("NumRestarts",$param) and $param["NumRestarts"] !== null) {
            $this->NumRestarts = $param["NumRestarts"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("LastRunTime",$param) and $param["LastRunTime"] !== null) {
            $this->LastRunTime = $param["LastRunTime"];
        }

        if (array_key_exists("StopTime",$param) and $param["StopTime"] !== null) {
            $this->StopTime = $param["StopTime"];
        }

        if (array_key_exists("HasVersion",$param) and $param["HasVersion"] !== null) {
            $this->HasVersion = $param["HasVersion"];
        }

        if (array_key_exists("Locked",$param) and $param["Locked"] !== null) {
            $this->Locked = $param["Locked"];
        }

        if (array_key_exists("Locker",$param) and $param["Locker"] !== null) {
            $this->Locker = $param["Locker"];
        }

        if (array_key_exists("RunningCu",$param) and $param["RunningCu"] !== null) {
            $this->RunningCu = $param["RunningCu"];
        }

        if (array_key_exists("TaskAlarmRegularList",$param) and $param["TaskAlarmRegularList"] !== null) {
            $this->TaskAlarmRegularList = $param["TaskAlarmRegularList"];
        }

        if (array_key_exists("SwitchResource",$param) and $param["SwitchResource"] !== null) {
            $this->SwitchResource = $param["SwitchResource"];
        }

        if (array_key_exists("ReadPhase",$param) and $param["ReadPhase"] !== null) {
            $this->ReadPhase = $param["ReadPhase"];
        }

        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }

        if (array_key_exists("ArrangeSpaceTaskId",$param) and $param["ArrangeSpaceTaskId"] !== null) {
            $this->ArrangeSpaceTaskId = $param["ArrangeSpaceTaskId"];
        }

        if (array_key_exists("OfflineTaskStatus",$param) and $param["OfflineTaskStatus"] !== null) {
            $this->OfflineTaskStatus = $param["OfflineTaskStatus"];
        }

        if (array_key_exists("TaskImportInfo",$param) and $param["TaskImportInfo"] !== null) {
            $this->TaskImportInfo = new TaskImportInfo();
            $this->TaskImportInfo->deserialize($param["TaskImportInfo"]);
        }

        if (array_key_exists("BusinessLatency",$param) and $param["BusinessLatency"] !== null) {
            $this->BusinessLatency = $param["BusinessLatency"];
        }

        if (array_key_exists("CurrentSyncPosition",$param) and $param["CurrentSyncPosition"] !== null) {
            $this->CurrentSyncPosition = $param["CurrentSyncPosition"];
        }
    }
}
