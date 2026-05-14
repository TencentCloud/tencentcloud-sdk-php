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
 * 集成任务
 *
 * @method string getTaskName() 获取<p>任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
 * @method string getDescription() 获取<p>任务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>任务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSyncType() 获取<p>同步类型1.解决方案(整库迁移),2.单表同步</p>
 * @method void setSyncType(integer $SyncType) 设置<p>同步类型1.解决方案(整库迁移),2.单表同步</p>
 * @method integer getTaskType() 获取<p>201.实时,202.离线</p>
 * @method void setTaskType(integer $TaskType) 设置<p>201.实时,202.离线</p>
 * @method string getWorkflowId() 获取<p>任务所属工作流id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置<p>任务所属工作流id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取<p>任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置<p>任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleTaskId() 获取<p>任务调度id(oceanus or us等作业id)，非填项</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleTaskId(string $ScheduleTaskId) 设置<p>任务调度id(oceanus or us等作业id)，非填项</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskGroupId() 获取<p>inlong任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskGroupId(string $TaskGroupId) 设置<p>inlong任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取<p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置<p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorUin() 获取<p>创建人uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorUin(string $CreatorUin) 设置<p>创建人uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperatorUin() 获取<p>操作人uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorUin(string $OperatorUin) 设置<p>操作人uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取<p>owner uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置<p>owner uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取<p>应用id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置<p>应用id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>0:新建(任务开发态默认状态)|1:未开始|2:操作中|3:运行中|4:暂停|5:任务停止中|6:停止|7:执行失败|20:异常|21:未知|</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>0:新建(任务开发态默认状态)|1:未开始|2:操作中|3:运行中|4:暂停|5:任务停止中|6:停止|7:执行失败|20:异常|21:未知|</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNodes() 获取<p>节点列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodes(array $Nodes) 设置<p>节点列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorId() 获取<p>执行资源id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorId(string $ExecutorId) 设置<p>执行资源id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConfig() 获取<p>任务配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfig(array $Config) 设置<p>任务配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExtConfig() 获取<p>任务扩展配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtConfig(array $ExtConfig) 设置<p>任务扩展配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExecuteContext() 获取<p>任务执行context信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecuteContext(array $ExecuteContext) 设置<p>任务执行context信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMappings() 获取<p>节点映射</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMappings(array $Mappings) 设置<p>节点映射</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskMode() 获取<p>任务配置模式，0:画布 1:表单 3:脚本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskMode(string $TaskMode) 设置<p>任务配置模式，0:画布 1:表单 3:脚本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIncharge() 获取<p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncharge(string $Incharge) 设置<p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method OfflineTaskAddParam getOfflineTaskAddEntity() 获取<p>离线新增参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOfflineTaskAddEntity(OfflineTaskAddParam $OfflineTaskAddEntity) 设置<p>离线新增参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupName() 获取<p>group name</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupName(string $ExecutorGroupName) 设置<p>group name</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInLongManagerUrl() 获取<p>inlong manager url</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInLongManagerUrl(string $InLongManagerUrl) 设置<p>inlong manager url</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInLongStreamId() 获取<p>stream id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInLongStreamId(string $InLongStreamId) 设置<p>stream id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInLongManagerVersion() 获取<p>version</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInLongManagerVersion(string $InLongManagerVersion) 设置<p>version</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDataProxyUrl() 获取<p>inlong dataproxy url</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataProxyUrl(array $DataProxyUrl) 设置<p>inlong dataproxy url</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSubmit() 获取<p>任务版本是否已提交运维</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmit(boolean $Submit) 设置<p>任务版本是否已提交运维</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputDatasourceType() 获取<p>数据源类型：MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputDatasourceType(string $InputDatasourceType) 设置<p>数据源类型：MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutputDatasourceType() 获取<p>数据源类型：MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputDatasourceType(string $OutputDatasourceType) 设置<p>数据源类型：MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNumRecordsIn() 获取<p>读取条数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumRecordsIn(integer $NumRecordsIn) 设置<p>读取条数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNumRecordsOut() 获取<p>写入条数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumRecordsOut(integer $NumRecordsOut) 设置<p>写入条数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getReaderDelay() 获取<p>读取延迟</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReaderDelay(float $ReaderDelay) 设置<p>读取延迟</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNumRestarts() 获取<p>重启次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumRestarts(integer $NumRestarts) 设置<p>重启次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>任务创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>任务创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>任务更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>任务更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastRunTime() 获取<p>任务最后一次运行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastRunTime(string $LastRunTime) 设置<p>任务最后一次运行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStopTime() 获取<p>任务停止时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStopTime(string $StopTime) 设置<p>任务停止时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHasVersion() 获取<p>作业是否已提交</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasVersion(boolean $HasVersion) 设置<p>作业是否已提交</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getLocked() 获取<p>任务是否被锁定</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocked(boolean $Locked) 设置<p>任务是否被锁定</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocker() 获取<p>任务锁定人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocker(string $Locker) 设置<p>任务锁定人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRunningCu() 获取<p>耗费资源量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningCu(float $RunningCu) 设置<p>耗费资源量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskAlarmRegularList() 获取<p>该任务关联的告警规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskAlarmRegularList(array $TaskAlarmRegularList) 设置<p>该任务关联的告警规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSwitchResource() 获取<p>实时任务资源分层情况： 0：进行中,1：成功 ,2：失败</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitchResource(integer $SwitchResource) 设置<p>实时任务资源分层情况： 0：进行中,1：成功 ,2：失败</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReadPhase() 获取<p>实时任务读取阶段：0：全部全量,1：部分全量,2：全部增量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReadPhase(integer $ReadPhase) 设置<p>实时任务读取阶段：0：全部全量,1：部分全量,2：全部增量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceVersion() 获取<p>实时任务版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceVersion(integer $InstanceVersion) 设置<p>实时任务版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getArrangeSpaceTaskId() 获取<p>离线任务导入到编排空间的任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArrangeSpaceTaskId(string $ArrangeSpaceTaskId) 设置<p>离线任务导入到编排空间的任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOfflineTaskStatus() 获取<p>离线任务状态区分1.未提交2.已提交3.已导出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOfflineTaskStatus(integer $OfflineTaskStatus) 设置<p>离线任务状态区分1.未提交2.已提交3.已导出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskImportInfo getTaskImportInfo() 获取<p>导入到编排空间配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskImportInfo(TaskImportInfo $TaskImportInfo) 设置<p>导入到编排空间配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBusinessLatency() 获取<p>业务延迟</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessLatency(integer $BusinessLatency) 设置<p>业务延迟</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCurrentSyncPosition() 获取<p>当前同步位点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentSyncPosition(integer $CurrentSyncPosition) 设置<p>当前同步位点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagList() 获取<p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagList(array $TagList) 设置<p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMessage() 获取<p>错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskSubType() 获取<p>任务子状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskSubType(integer $TaskSubType) 设置<p>任务子状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNotExistsCheckPoint() 获取<p>是否存在SavePoint, 0-存在, 1-不存在, null 为未知</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotExistsCheckPoint(integer $NotExistsCheckPoint) 设置<p>是否存在SavePoint, 0-存在, 1-不存在, null 为未知</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSavePointId() 获取<p>savepiontPath</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSavePointId(string $SavePointId) 设置<p>savepiontPath</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSavePointPath() 获取<p>savepiontId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSavePointPath(string $SavePointPath) 设置<p>savepiontId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method LastOperateInfo getLastOperateInfo() 获取<p>最近一次操作信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastOperateInfo(LastOperateInfo $LastOperateInfo) 设置<p>最近一次操作信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class IntegrationTaskInfo extends AbstractModel
{
    /**
     * @var string <p>任务名称</p>
     */
    public $TaskName;

    /**
     * @var string <p>任务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer <p>同步类型1.解决方案(整库迁移),2.单表同步</p>
     */
    public $SyncType;

    /**
     * @var integer <p>201.实时,202.离线</p>
     */
    public $TaskType;

    /**
     * @var string <p>任务所属工作流id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string <p>任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string <p>任务调度id(oceanus or us等作业id)，非填项</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleTaskId;

    /**
     * @var string <p>inlong任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskGroupId;

    /**
     * @var string <p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string <p>创建人uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorUin;

    /**
     * @var string <p>操作人uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorUin;

    /**
     * @var string <p>owner uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string <p>应用id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var integer <p>0:新建(任务开发态默认状态)|1:未开始|2:操作中|3:运行中|4:暂停|5:任务停止中|6:停止|7:执行失败|20:异常|21:未知|</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array <p>节点列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nodes;

    /**
     * @var string <p>执行资源id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorId;

    /**
     * @var array <p>任务配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Config;

    /**
     * @var array <p>任务扩展配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtConfig;

    /**
     * @var array <p>任务执行context信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecuteContext;

    /**
     * @var array <p>节点映射</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mappings;

    /**
     * @var string <p>任务配置模式，0:画布 1:表单 3:脚本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskMode;

    /**
     * @var string <p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Incharge;

    /**
     * @var OfflineTaskAddParam <p>离线新增参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OfflineTaskAddEntity;

    /**
     * @var string <p>group name</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupName;

    /**
     * @var string <p>inlong manager url</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InLongManagerUrl;

    /**
     * @var string <p>stream id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InLongStreamId;

    /**
     * @var string <p>version</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InLongManagerVersion;

    /**
     * @var array <p>inlong dataproxy url</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataProxyUrl;

    /**
     * @var boolean <p>任务版本是否已提交运维</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Submit;

    /**
     * @var string <p>数据源类型：MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputDatasourceType;

    /**
     * @var string <p>数据源类型：MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputDatasourceType;

    /**
     * @var integer <p>读取条数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumRecordsIn;

    /**
     * @var integer <p>写入条数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumRecordsOut;

    /**
     * @var float <p>读取延迟</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReaderDelay;

    /**
     * @var integer <p>重启次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumRestarts;

    /**
     * @var string <p>任务创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>任务更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>任务最后一次运行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastRunTime;

    /**
     * @var string <p>任务停止时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StopTime;

    /**
     * @var boolean <p>作业是否已提交</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasVersion;

    /**
     * @var boolean <p>任务是否被锁定</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Locked;

    /**
     * @var string <p>任务锁定人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Locker;

    /**
     * @var float <p>耗费资源量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningCu;

    /**
     * @var array <p>该任务关联的告警规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskAlarmRegularList;

    /**
     * @var integer <p>实时任务资源分层情况： 0：进行中,1：成功 ,2：失败</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SwitchResource;

    /**
     * @var integer <p>实时任务读取阶段：0：全部全量,1：部分全量,2：全部增量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReadPhase;

    /**
     * @var integer <p>实时任务版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceVersion;

    /**
     * @var string <p>离线任务导入到编排空间的任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ArrangeSpaceTaskId;

    /**
     * @var integer <p>离线任务状态区分1.未提交2.已提交3.已导出</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OfflineTaskStatus;

    /**
     * @var TaskImportInfo <p>导入到编排空间配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskImportInfo;

    /**
     * @var integer <p>业务延迟</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessLatency;

    /**
     * @var integer <p>当前同步位点</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentSyncPosition;

    /**
     * @var array <p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagList;

    /**
     * @var string <p>错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var integer <p>任务子状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskSubType;

    /**
     * @var integer <p>是否存在SavePoint, 0-存在, 1-不存在, null 为未知</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotExistsCheckPoint;

    /**
     * @var string <p>savepiontPath</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SavePointId;

    /**
     * @var string <p>savepiontId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SavePointPath;

    /**
     * @var LastOperateInfo <p>最近一次操作信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastOperateInfo;

    /**
     * @param string $TaskName <p>任务名称</p>
     * @param string $Description <p>任务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SyncType <p>同步类型1.解决方案(整库迁移),2.单表同步</p>
     * @param integer $TaskType <p>201.实时,202.离线</p>
     * @param string $WorkflowId <p>任务所属工作流id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId <p>任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleTaskId <p>任务调度id(oceanus or us等作业id)，非填项</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskGroupId <p>inlong任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId <p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorUin <p>创建人uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperatorUin <p>操作人uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin <p>owner uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId <p>应用id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>0:新建(任务开发态默认状态)|1:未开始|2:操作中|3:运行中|4:暂停|5:任务停止中|6:停止|7:执行失败|20:异常|21:未知|</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Nodes <p>节点列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorId <p>执行资源id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Config <p>任务配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExtConfig <p>任务扩展配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExecuteContext <p>任务执行context信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Mappings <p>节点映射</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskMode <p>任务配置模式，0:画布 1:表单 3:脚本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Incharge <p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param OfflineTaskAddParam $OfflineTaskAddEntity <p>离线新增参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupName <p>group name</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InLongManagerUrl <p>inlong manager url</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InLongStreamId <p>stream id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InLongManagerVersion <p>version</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DataProxyUrl <p>inlong dataproxy url</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Submit <p>任务版本是否已提交运维</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputDatasourceType <p>数据源类型：MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutputDatasourceType <p>数据源类型：MYSQL|POSTGRE|ORACLE|SQLSERVER|FTP|HIVE|HDFS|ICEBERG|KAFKA|HBASE|SPARK|VIRTUAL|TBASE|DB2|DM|GAUSSDB|GBASE|IMPALA|ES|S3_DATAINSIGHT|GREENPLUM|PHOENIX|SAP_HANA|SFTP|OCEANBASE|CLICKHOUSE|KUDU|VERTICA|REDIS|COS|DLC|DLCV1|DORIS|CKAFKA|DTS_KAFKA|S3|CDW|LOCAL|TDSQLC|TDSQL|TDSQL_MYSQL|MONGODB|INFORMIX|SYBASE|REST_API|SuperSQL|PRESTO|DR_SUM|TiDB|StarRocks|Trino|Kyuubi|GDB|TCHOUSE_X|TCHOUSE_P|TDSQL_POSTGRE</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NumRecordsIn <p>读取条数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NumRecordsOut <p>写入条数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ReaderDelay <p>读取延迟</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NumRestarts <p>重启次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>任务创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>任务更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastRunTime <p>任务最后一次运行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StopTime <p>任务停止时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HasVersion <p>作业是否已提交</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Locked <p>任务是否被锁定</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Locker <p>任务锁定人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RunningCu <p>耗费资源量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskAlarmRegularList <p>该任务关联的告警规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SwitchResource <p>实时任务资源分层情况： 0：进行中,1：成功 ,2：失败</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReadPhase <p>实时任务读取阶段：0：全部全量,1：部分全量,2：全部增量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceVersion <p>实时任务版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ArrangeSpaceTaskId <p>离线任务导入到编排空间的任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OfflineTaskStatus <p>离线任务状态区分1.未提交2.已提交3.已导出</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskImportInfo $TaskImportInfo <p>导入到编排空间配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BusinessLatency <p>业务延迟</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CurrentSyncPosition <p>当前同步位点</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagList <p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMessage <p>错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskSubType <p>任务子状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NotExistsCheckPoint <p>是否存在SavePoint, 0-存在, 1-不存在, null 为未知</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SavePointId <p>savepiontPath</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SavePointPath <p>savepiontId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param LastOperateInfo $LastOperateInfo <p>最近一次操作信息</p>
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

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new IntegrationTag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("TaskSubType",$param) and $param["TaskSubType"] !== null) {
            $this->TaskSubType = $param["TaskSubType"];
        }

        if (array_key_exists("NotExistsCheckPoint",$param) and $param["NotExistsCheckPoint"] !== null) {
            $this->NotExistsCheckPoint = $param["NotExistsCheckPoint"];
        }

        if (array_key_exists("SavePointId",$param) and $param["SavePointId"] !== null) {
            $this->SavePointId = $param["SavePointId"];
        }

        if (array_key_exists("SavePointPath",$param) and $param["SavePointPath"] !== null) {
            $this->SavePointPath = $param["SavePointPath"];
        }

        if (array_key_exists("LastOperateInfo",$param) and $param["LastOperateInfo"] !== null) {
            $this->LastOperateInfo = new LastOperateInfo();
            $this->LastOperateInfo->deserialize($param["LastOperateInfo"]);
        }
    }
}
