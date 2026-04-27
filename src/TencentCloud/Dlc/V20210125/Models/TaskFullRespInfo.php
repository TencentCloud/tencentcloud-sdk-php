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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务实例。
 *
 * @method string getDatabaseName() 获取<p>任务所属Database的名称。</p>
 * @method void setDatabaseName(string $DatabaseName) 设置<p>任务所属Database的名称。</p>
 * @method integer getDataAmount() 获取<p>任务数据量。</p>
 * @method void setDataAmount(integer $DataAmount) 设置<p>任务数据量。</p>
 * @method string getId() 获取<p>任务Id。</p>
 * @method void setId(string $Id) 设置<p>任务Id。</p>
 * @method integer getUsedTime() 获取<p>计算耗时，单位： ms</p>
 * @method void setUsedTime(integer $UsedTime) 设置<p>计算耗时，单位： ms</p>
 * @method string getOutputPath() 获取<p>任务输出路径。</p>
 * @method void setOutputPath(string $OutputPath) 设置<p>任务输出路径。</p>
 * @method string getCreateTime() 获取<p>任务创建时间。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>任务创建时间。</p>
 * @method integer getState() 获取<p>任务状态：0 初始化， 1 执行中， 2 执行成功，3 数据写入中，4 排队中。-1 执行失败，-3 已取消。</p>
 * @method void setState(integer $State) 设置<p>任务状态：0 初始化， 1 执行中， 2 执行成功，3 数据写入中，4 排队中。-1 执行失败，-3 已取消。</p>
 * @method string getSQLType() 获取<p>任务SQL类型，DDL|DML等</p>
 * @method void setSQLType(string $SQLType) 设置<p>任务SQL类型，DDL|DML等</p>
 * @method string getSQL() 获取<p>任务SQL语句</p>
 * @method void setSQL(string $SQL) 设置<p>任务SQL语句</p>
 * @method boolean getResultExpired() 获取<p>结果是否过期。</p>
 * @method void setResultExpired(boolean $ResultExpired) 设置<p>结果是否过期。</p>
 * @method string getRowAffectInfo() 获取<p>数据影响统计信息。</p>
 * @method void setRowAffectInfo(string $RowAffectInfo) 设置<p>数据影响统计信息。</p>
 * @method string getDataSet() 获取<p>任务结果数据表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSet(string $DataSet) 设置<p>任务结果数据表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getError() 获取<p>失败信息, 例如：errorMessage。该字段已废弃。</p>
 * @method void setError(string $Error) 设置<p>失败信息, 例如：errorMessage。该字段已废弃。</p>
 * @method integer getPercentage() 获取<p>任务执行进度num/100(%)</p>
 * @method void setPercentage(integer $Percentage) 设置<p>任务执行进度num/100(%)</p>
 * @method string getOutputMessage() 获取<p>任务执行输出信息。</p>
 * @method void setOutputMessage(string $OutputMessage) 设置<p>任务执行输出信息。</p>
 * @method string getTaskType() 获取<p>执行SQL的引擎类型</p>
 * @method void setTaskType(string $TaskType) 设置<p>执行SQL的引擎类型</p>
 * @method string getProgressDetail() 获取<p>任务进度明细</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgressDetail(string $ProgressDetail) 设置<p>任务进度明细</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>任务结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>任务结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataEngineId() 获取<p>计算资源id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataEngineId(string $DataEngineId) 设置<p>计算资源id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperateUin() 获取<p>执行sql的子uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperateUin(string $OperateUin) 设置<p>执行sql的子uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataEngineName() 获取<p>计算资源名字</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataEngineName(string $DataEngineName) 设置<p>计算资源名字</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputType() 获取<p>导入类型是本地导入还是cos</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputType(string $InputType) 设置<p>导入类型是本地导入还是cos</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputConf() 获取<p>导入配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputConf(string $InputConf) 设置<p>导入配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataNumber() 获取<p>数据条数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataNumber(integer $DataNumber) 设置<p>数据条数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCanDownload() 获取<p>查询数据能不能下载</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanDownload(boolean $CanDownload) 设置<p>查询数据能不能下载</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserAlias() 获取<p>用户别名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserAlias(string $UserAlias) 设置<p>用户别名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSparkJobName() 获取<p>spark应用作业名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSparkJobName(string $SparkJobName) 设置<p>spark应用作业名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSparkJobId() 获取<p>spark应用作业Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSparkJobId(string $SparkJobId) 设置<p>spark应用作业Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSparkJobFile() 获取<p>spark应用入口jar文件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSparkJobFile(string $SparkJobFile) 设置<p>spark应用入口jar文件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUiUrl() 获取<p>spark ui url</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUiUrl(string $UiUrl) 设置<p>spark ui url</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalTime() 获取<p>任务耗时，单位： ms</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalTime(integer $TotalTime) 设置<p>任务耗时，单位： ms</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCmdArgs() 获取<p>spark app job执行task的程序入口参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCmdArgs(string $CmdArgs) 设置<p>spark app job执行task的程序入口参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageVersion() 获取<p>集群镜像大版本名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageVersion(string $ImageVersion) 设置<p>集群镜像大版本名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDriverSize() 获取<p>driver规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDriverSize(string $DriverSize) 设置<p>driver规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorSize() 获取<p>executor规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorSize(string $ExecutorSize) 设置<p>executor规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExecutorNums() 获取<p>指定executor数量，最小值为1，最大值小于集群规格</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorNums(integer $ExecutorNums) 设置<p>指定executor数量，最小值为1，最大值小于集群规格</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExecutorMaxNumbers() 获取<p>指定executor max数量（动态配置场景下），最小值为1，最大值小于集群规格（当ExecutorMaxNumbers小于ExecutorNums时，改值设定为ExecutorNums）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorMaxNumbers(integer $ExecutorMaxNumbers) 设置<p>指定executor max数量（动态配置场景下），最小值为1，最大值小于集群规格（当ExecutorMaxNumbers小于ExecutorNums时，改值设定为ExecutorNums）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CommonMetrics getCommonMetrics() 获取<p>任务公共指标数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCommonMetrics(CommonMetrics $CommonMetrics) 设置<p>任务公共指标数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SparkMonitorMetrics getSparkMonitorMetrics() 获取<p>spark任务指标数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSparkMonitorMetrics(SparkMonitorMetrics $SparkMonitorMetrics) 设置<p>spark任务指标数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method PrestoMonitorMetrics getPrestoMonitorMetrics() 获取<p>presto任务指标数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrestoMonitorMetrics(PrestoMonitorMetrics $PrestoMonitorMetrics) 设置<p>presto任务指标数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResultFormat() 获取<p>结果文件格式：默认为csv</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultFormat(string $ResultFormat) 设置<p>结果文件格式：默认为csv</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineTypeDetail() 获取<p>引擎类型，SparkSQL：SparkSQL 引擎；SparkBatch：Spark作业引擎；PrestoSQL：Presto引擎</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineTypeDetail(string $EngineTypeDetail) 设置<p>引擎类型，SparkSQL：SparkSQL 引擎；SparkBatch：Spark作业引擎；PrestoSQL：Presto引擎</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupName() 获取<p>spark引擎资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupName(string $ResourceGroupName) 设置<p>spark引擎资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSource() 获取<p>任务来源信息,如thirdPartyApi,dataExploration, sparkAppTask等</p>
 * @method void setSource(string $Source) 设置<p>任务来源信息,如thirdPartyApi,dataExploration, sparkAppTask等</p>
 * @method string getSourceExtra() 获取<p>子渠道信息，一般由第三方调用定义</p>
 * @method void setSourceExtra(string $SourceExtra) 设置<p>子渠道信息，一般由第三方调用定义</p>
 * @method string getCreatorUin() 获取<p>创建人uin</p>
 * @method void setCreatorUin(string $CreatorUin) 设置<p>创建人uin</p>
 * @method string getCreatorAlias() 获取<p>创建人名字</p>
 * @method void setCreatorAlias(string $CreatorAlias) 设置<p>创建人名字</p>
 * @method string getCustomizedConf() 获取<p>引擎参数</p>
 * @method void setCustomizedConf(string $CustomizedConf) 设置<p>引擎参数</p>
 * @method integer getTaskTimeSum() 获取<p>单位秒，累计 CPU* 秒 ( 累计 CPU * 时 = 累计 CPU* 秒/ 3600)，统计参与计算所用 Spark Executor 每个 core 的 CPU 执行时长总和<br>示例值：4329</p>
 * @method void setTaskTimeSum(integer $TaskTimeSum) 设置<p>单位秒，累计 CPU* 秒 ( 累计 CPU * 时 = 累计 CPU* 秒/ 3600)，统计参与计算所用 Spark Executor 每个 core 的 CPU 执行时长总和<br>示例值：4329</p>
 * @method integer getStageStartTime() 获取<p>引擎执行时间</p>
 * @method void setStageStartTime(integer $StageStartTime) 设置<p>引擎执行时间</p>
 * @method integer getInputRecordsSum() 获取<p>数据扫描条数</p>
 * @method void setInputRecordsSum(integer $InputRecordsSum) 设置<p>数据扫描条数</p>
 * @method integer getAnalysisStatusType() 获取<p>健康状态</p>
 * @method void setAnalysisStatusType(integer $AnalysisStatusType) 设置<p>健康状态</p>
 * @method integer getOutputRecordsSum() 获取<p>输出总行数</p>
 * @method void setOutputRecordsSum(integer $OutputRecordsSum) 设置<p>输出总行数</p>
 * @method integer getOutputBytesSum() 获取<p>输出总大小</p>
 * @method void setOutputBytesSum(integer $OutputBytesSum) 设置<p>输出总大小</p>
 * @method integer getOutputFilesNum() 获取<p>输出文件个数</p>
 * @method void setOutputFilesNum(integer $OutputFilesNum) 设置<p>输出文件个数</p>
 * @method integer getOutputSmallFilesNum() 获取<p>输出小文件个数</p>
 * @method void setOutputSmallFilesNum(integer $OutputSmallFilesNum) 设置<p>输出小文件个数</p>
 * @method integer getShuffleReadRecordsSum() 获取<p>数据shuffle行数</p>
 * @method void setShuffleReadRecordsSum(integer $ShuffleReadRecordsSum) 设置<p>数据shuffle行数</p>
 * @method integer getShuffleReadBytesSum() 获取<p>数据shuffle大小</p>
 * @method void setShuffleReadBytesSum(integer $ShuffleReadBytesSum) 设置<p>数据shuffle大小</p>
 * @method string getSparkAppId() 获取<p>spark作业id</p>
 * @method void setSparkAppId(string $SparkAppId) 设置<p>spark作业id</p>
 * @method string getTaskCategory() 获取<p>任务大类，DLC2.0中任务区分为两大类，sql任务和作业任务</p>
 * @method void setTaskCategory(string $TaskCategory) 设置<p>任务大类，DLC2.0中任务区分为两大类，sql任务和作业任务</p>
 * @method string getTaskName() 获取<p>任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
 * @method string getEngineType() 获取<p>引擎类型，用做任务详情页跳转引擎tab</p>
 * @method void setEngineType(string $EngineType) 设置<p>引擎类型，用做任务详情页跳转引擎tab</p>
 * @method boolean getEngineHasListenerConfig() 获取<p>引擎是否支持洞察数据采集</p>
 * @method void setEngineHasListenerConfig(boolean $EngineHasListenerConfig) 设置<p>引擎是否支持洞察数据采集</p>
 * @method string getResourceGroupId() 获取<p>spark引擎资源组id</p>
 * @method void setResourceGroupId(string $ResourceGroupId) 设置<p>spark引擎资源组id</p>
 * @method integer getJobTimeSum() 获取<p>任务计算耗时</p>
 * @method void setJobTimeSum(integer $JobTimeSum) 设置<p>任务计算耗时</p>
 * @method string getLaunchTime() 获取<p>任务启动耗时</p>
 * @method void setLaunchTime(string $LaunchTime) 设置<p>任务启动耗时</p>
 * @method integer getGpuDriverSize() 获取<p>Gpu Driver 规格</p>
 * @method void setGpuDriverSize(integer $GpuDriverSize) 设置<p>Gpu Driver 规格</p>
 * @method integer getGpuExecutorSize() 获取<p>Gpu Executor 规格</p>
 * @method void setGpuExecutorSize(integer $GpuExecutorSize) 设置<p>Gpu Executor 规格</p>
 * @method integer getShuffleWriteBytesSum() 获取<p>ShuffleWrite数据量</p>
 * @method void setShuffleWriteBytesSum(integer $ShuffleWriteBytesSum) 设置<p>ShuffleWrite数据量</p>
 * @method integer getActiveCore() 获取<p>活跃core</p>
 * @method void setActiveCore(integer $ActiveCore) 设置<p>活跃core</p>
 */
class TaskFullRespInfo extends AbstractModel
{
    /**
     * @var string <p>任务所属Database的名称。</p>
     */
    public $DatabaseName;

    /**
     * @var integer <p>任务数据量。</p>
     */
    public $DataAmount;

    /**
     * @var string <p>任务Id。</p>
     */
    public $Id;

    /**
     * @var integer <p>计算耗时，单位： ms</p>
     */
    public $UsedTime;

    /**
     * @var string <p>任务输出路径。</p>
     */
    public $OutputPath;

    /**
     * @var string <p>任务创建时间。</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>任务状态：0 初始化， 1 执行中， 2 执行成功，3 数据写入中，4 排队中。-1 执行失败，-3 已取消。</p>
     */
    public $State;

    /**
     * @var string <p>任务SQL类型，DDL|DML等</p>
     */
    public $SQLType;

    /**
     * @var string <p>任务SQL语句</p>
     */
    public $SQL;

    /**
     * @var boolean <p>结果是否过期。</p>
     */
    public $ResultExpired;

    /**
     * @var string <p>数据影响统计信息。</p>
     */
    public $RowAffectInfo;

    /**
     * @var string <p>任务结果数据表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSet;

    /**
     * @var string <p>失败信息, 例如：errorMessage。该字段已废弃。</p>
     */
    public $Error;

    /**
     * @var integer <p>任务执行进度num/100(%)</p>
     */
    public $Percentage;

    /**
     * @var string <p>任务执行输出信息。</p>
     */
    public $OutputMessage;

    /**
     * @var string <p>执行SQL的引擎类型</p>
     */
    public $TaskType;

    /**
     * @var string <p>任务进度明细</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProgressDetail;

    /**
     * @var string <p>任务结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>计算资源id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataEngineId;

    /**
     * @var string <p>执行sql的子uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperateUin;

    /**
     * @var string <p>计算资源名字</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataEngineName;

    /**
     * @var string <p>导入类型是本地导入还是cos</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputType;

    /**
     * @var string <p>导入配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputConf;

    /**
     * @var integer <p>数据条数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataNumber;

    /**
     * @var boolean <p>查询数据能不能下载</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanDownload;

    /**
     * @var string <p>用户别名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserAlias;

    /**
     * @var string <p>spark应用作业名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SparkJobName;

    /**
     * @var string <p>spark应用作业Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SparkJobId;

    /**
     * @var string <p>spark应用入口jar文件</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SparkJobFile;

    /**
     * @var string <p>spark ui url</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UiUrl;

    /**
     * @var integer <p>任务耗时，单位： ms</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalTime;

    /**
     * @var string <p>spark app job执行task的程序入口参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CmdArgs;

    /**
     * @var string <p>集群镜像大版本名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageVersion;

    /**
     * @var string <p>driver规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DriverSize;

    /**
     * @var string <p>executor规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorSize;

    /**
     * @var integer <p>指定executor数量，最小值为1，最大值小于集群规格</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorNums;

    /**
     * @var integer <p>指定executor max数量（动态配置场景下），最小值为1，最大值小于集群规格（当ExecutorMaxNumbers小于ExecutorNums时，改值设定为ExecutorNums）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorMaxNumbers;

    /**
     * @var CommonMetrics <p>任务公共指标数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CommonMetrics;

    /**
     * @var SparkMonitorMetrics <p>spark任务指标数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SparkMonitorMetrics;

    /**
     * @var PrestoMonitorMetrics <p>presto任务指标数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrestoMonitorMetrics;

    /**
     * @var string <p>结果文件格式：默认为csv</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultFormat;

    /**
     * @var string <p>引擎类型，SparkSQL：SparkSQL 引擎；SparkBatch：Spark作业引擎；PrestoSQL：Presto引擎</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineTypeDetail;

    /**
     * @var string <p>spark引擎资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupName;

    /**
     * @var string <p>任务来源信息,如thirdPartyApi,dataExploration, sparkAppTask等</p>
     */
    public $Source;

    /**
     * @var string <p>子渠道信息，一般由第三方调用定义</p>
     */
    public $SourceExtra;

    /**
     * @var string <p>创建人uin</p>
     */
    public $CreatorUin;

    /**
     * @var string <p>创建人名字</p>
     */
    public $CreatorAlias;

    /**
     * @var string <p>引擎参数</p>
     */
    public $CustomizedConf;

    /**
     * @var integer <p>单位秒，累计 CPU* 秒 ( 累计 CPU * 时 = 累计 CPU* 秒/ 3600)，统计参与计算所用 Spark Executor 每个 core 的 CPU 执行时长总和<br>示例值：4329</p>
     */
    public $TaskTimeSum;

    /**
     * @var integer <p>引擎执行时间</p>
     */
    public $StageStartTime;

    /**
     * @var integer <p>数据扫描条数</p>
     */
    public $InputRecordsSum;

    /**
     * @var integer <p>健康状态</p>
     */
    public $AnalysisStatusType;

    /**
     * @var integer <p>输出总行数</p>
     */
    public $OutputRecordsSum;

    /**
     * @var integer <p>输出总大小</p>
     */
    public $OutputBytesSum;

    /**
     * @var integer <p>输出文件个数</p>
     */
    public $OutputFilesNum;

    /**
     * @var integer <p>输出小文件个数</p>
     */
    public $OutputSmallFilesNum;

    /**
     * @var integer <p>数据shuffle行数</p>
     */
    public $ShuffleReadRecordsSum;

    /**
     * @var integer <p>数据shuffle大小</p>
     */
    public $ShuffleReadBytesSum;

    /**
     * @var string <p>spark作业id</p>
     */
    public $SparkAppId;

    /**
     * @var string <p>任务大类，DLC2.0中任务区分为两大类，sql任务和作业任务</p>
     */
    public $TaskCategory;

    /**
     * @var string <p>任务名称</p>
     */
    public $TaskName;

    /**
     * @var string <p>引擎类型，用做任务详情页跳转引擎tab</p>
     */
    public $EngineType;

    /**
     * @var boolean <p>引擎是否支持洞察数据采集</p>
     */
    public $EngineHasListenerConfig;

    /**
     * @var string <p>spark引擎资源组id</p>
     */
    public $ResourceGroupId;

    /**
     * @var integer <p>任务计算耗时</p>
     */
    public $JobTimeSum;

    /**
     * @var string <p>任务启动耗时</p>
     */
    public $LaunchTime;

    /**
     * @var integer <p>Gpu Driver 规格</p>
     */
    public $GpuDriverSize;

    /**
     * @var integer <p>Gpu Executor 规格</p>
     */
    public $GpuExecutorSize;

    /**
     * @var integer <p>ShuffleWrite数据量</p>
     */
    public $ShuffleWriteBytesSum;

    /**
     * @var integer <p>活跃core</p>
     */
    public $ActiveCore;

    /**
     * @param string $DatabaseName <p>任务所属Database的名称。</p>
     * @param integer $DataAmount <p>任务数据量。</p>
     * @param string $Id <p>任务Id。</p>
     * @param integer $UsedTime <p>计算耗时，单位： ms</p>
     * @param string $OutputPath <p>任务输出路径。</p>
     * @param string $CreateTime <p>任务创建时间。</p>
     * @param integer $State <p>任务状态：0 初始化， 1 执行中， 2 执行成功，3 数据写入中，4 排队中。-1 执行失败，-3 已取消。</p>
     * @param string $SQLType <p>任务SQL类型，DDL|DML等</p>
     * @param string $SQL <p>任务SQL语句</p>
     * @param boolean $ResultExpired <p>结果是否过期。</p>
     * @param string $RowAffectInfo <p>数据影响统计信息。</p>
     * @param string $DataSet <p>任务结果数据表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Error <p>失败信息, 例如：errorMessage。该字段已废弃。</p>
     * @param integer $Percentage <p>任务执行进度num/100(%)</p>
     * @param string $OutputMessage <p>任务执行输出信息。</p>
     * @param string $TaskType <p>执行SQL的引擎类型</p>
     * @param string $ProgressDetail <p>任务进度明细</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>任务结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataEngineId <p>计算资源id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperateUin <p>执行sql的子uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataEngineName <p>计算资源名字</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputType <p>导入类型是本地导入还是cos</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputConf <p>导入配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataNumber <p>数据条数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CanDownload <p>查询数据能不能下载</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserAlias <p>用户别名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SparkJobName <p>spark应用作业名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SparkJobId <p>spark应用作业Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SparkJobFile <p>spark应用入口jar文件</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UiUrl <p>spark ui url</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalTime <p>任务耗时，单位： ms</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CmdArgs <p>spark app job执行task的程序入口参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageVersion <p>集群镜像大版本名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DriverSize <p>driver规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorSize <p>executor规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExecutorNums <p>指定executor数量，最小值为1，最大值小于集群规格</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExecutorMaxNumbers <p>指定executor max数量（动态配置场景下），最小值为1，最大值小于集群规格（当ExecutorMaxNumbers小于ExecutorNums时，改值设定为ExecutorNums）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CommonMetrics $CommonMetrics <p>任务公共指标数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SparkMonitorMetrics $SparkMonitorMetrics <p>spark任务指标数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param PrestoMonitorMetrics $PrestoMonitorMetrics <p>presto任务指标数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResultFormat <p>结果文件格式：默认为csv</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineTypeDetail <p>引擎类型，SparkSQL：SparkSQL 引擎；SparkBatch：Spark作业引擎；PrestoSQL：Presto引擎</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupName <p>spark引擎资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Source <p>任务来源信息,如thirdPartyApi,dataExploration, sparkAppTask等</p>
     * @param string $SourceExtra <p>子渠道信息，一般由第三方调用定义</p>
     * @param string $CreatorUin <p>创建人uin</p>
     * @param string $CreatorAlias <p>创建人名字</p>
     * @param string $CustomizedConf <p>引擎参数</p>
     * @param integer $TaskTimeSum <p>单位秒，累计 CPU* 秒 ( 累计 CPU * 时 = 累计 CPU* 秒/ 3600)，统计参与计算所用 Spark Executor 每个 core 的 CPU 执行时长总和<br>示例值：4329</p>
     * @param integer $StageStartTime <p>引擎执行时间</p>
     * @param integer $InputRecordsSum <p>数据扫描条数</p>
     * @param integer $AnalysisStatusType <p>健康状态</p>
     * @param integer $OutputRecordsSum <p>输出总行数</p>
     * @param integer $OutputBytesSum <p>输出总大小</p>
     * @param integer $OutputFilesNum <p>输出文件个数</p>
     * @param integer $OutputSmallFilesNum <p>输出小文件个数</p>
     * @param integer $ShuffleReadRecordsSum <p>数据shuffle行数</p>
     * @param integer $ShuffleReadBytesSum <p>数据shuffle大小</p>
     * @param string $SparkAppId <p>spark作业id</p>
     * @param string $TaskCategory <p>任务大类，DLC2.0中任务区分为两大类，sql任务和作业任务</p>
     * @param string $TaskName <p>任务名称</p>
     * @param string $EngineType <p>引擎类型，用做任务详情页跳转引擎tab</p>
     * @param boolean $EngineHasListenerConfig <p>引擎是否支持洞察数据采集</p>
     * @param string $ResourceGroupId <p>spark引擎资源组id</p>
     * @param integer $JobTimeSum <p>任务计算耗时</p>
     * @param string $LaunchTime <p>任务启动耗时</p>
     * @param integer $GpuDriverSize <p>Gpu Driver 规格</p>
     * @param integer $GpuExecutorSize <p>Gpu Executor 规格</p>
     * @param integer $ShuffleWriteBytesSum <p>ShuffleWrite数据量</p>
     * @param integer $ActiveCore <p>活跃core</p>
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("DataAmount",$param) and $param["DataAmount"] !== null) {
            $this->DataAmount = $param["DataAmount"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("UsedTime",$param) and $param["UsedTime"] !== null) {
            $this->UsedTime = $param["UsedTime"];
        }

        if (array_key_exists("OutputPath",$param) and $param["OutputPath"] !== null) {
            $this->OutputPath = $param["OutputPath"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("SQLType",$param) and $param["SQLType"] !== null) {
            $this->SQLType = $param["SQLType"];
        }

        if (array_key_exists("SQL",$param) and $param["SQL"] !== null) {
            $this->SQL = $param["SQL"];
        }

        if (array_key_exists("ResultExpired",$param) and $param["ResultExpired"] !== null) {
            $this->ResultExpired = $param["ResultExpired"];
        }

        if (array_key_exists("RowAffectInfo",$param) and $param["RowAffectInfo"] !== null) {
            $this->RowAffectInfo = $param["RowAffectInfo"];
        }

        if (array_key_exists("DataSet",$param) and $param["DataSet"] !== null) {
            $this->DataSet = $param["DataSet"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }

        if (array_key_exists("Percentage",$param) and $param["Percentage"] !== null) {
            $this->Percentage = $param["Percentage"];
        }

        if (array_key_exists("OutputMessage",$param) and $param["OutputMessage"] !== null) {
            $this->OutputMessage = $param["OutputMessage"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ProgressDetail",$param) and $param["ProgressDetail"] !== null) {
            $this->ProgressDetail = $param["ProgressDetail"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("DataEngineId",$param) and $param["DataEngineId"] !== null) {
            $this->DataEngineId = $param["DataEngineId"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("InputConf",$param) and $param["InputConf"] !== null) {
            $this->InputConf = $param["InputConf"];
        }

        if (array_key_exists("DataNumber",$param) and $param["DataNumber"] !== null) {
            $this->DataNumber = $param["DataNumber"];
        }

        if (array_key_exists("CanDownload",$param) and $param["CanDownload"] !== null) {
            $this->CanDownload = $param["CanDownload"];
        }

        if (array_key_exists("UserAlias",$param) and $param["UserAlias"] !== null) {
            $this->UserAlias = $param["UserAlias"];
        }

        if (array_key_exists("SparkJobName",$param) and $param["SparkJobName"] !== null) {
            $this->SparkJobName = $param["SparkJobName"];
        }

        if (array_key_exists("SparkJobId",$param) and $param["SparkJobId"] !== null) {
            $this->SparkJobId = $param["SparkJobId"];
        }

        if (array_key_exists("SparkJobFile",$param) and $param["SparkJobFile"] !== null) {
            $this->SparkJobFile = $param["SparkJobFile"];
        }

        if (array_key_exists("UiUrl",$param) and $param["UiUrl"] !== null) {
            $this->UiUrl = $param["UiUrl"];
        }

        if (array_key_exists("TotalTime",$param) and $param["TotalTime"] !== null) {
            $this->TotalTime = $param["TotalTime"];
        }

        if (array_key_exists("CmdArgs",$param) and $param["CmdArgs"] !== null) {
            $this->CmdArgs = $param["CmdArgs"];
        }

        if (array_key_exists("ImageVersion",$param) and $param["ImageVersion"] !== null) {
            $this->ImageVersion = $param["ImageVersion"];
        }

        if (array_key_exists("DriverSize",$param) and $param["DriverSize"] !== null) {
            $this->DriverSize = $param["DriverSize"];
        }

        if (array_key_exists("ExecutorSize",$param) and $param["ExecutorSize"] !== null) {
            $this->ExecutorSize = $param["ExecutorSize"];
        }

        if (array_key_exists("ExecutorNums",$param) and $param["ExecutorNums"] !== null) {
            $this->ExecutorNums = $param["ExecutorNums"];
        }

        if (array_key_exists("ExecutorMaxNumbers",$param) and $param["ExecutorMaxNumbers"] !== null) {
            $this->ExecutorMaxNumbers = $param["ExecutorMaxNumbers"];
        }

        if (array_key_exists("CommonMetrics",$param) and $param["CommonMetrics"] !== null) {
            $this->CommonMetrics = new CommonMetrics();
            $this->CommonMetrics->deserialize($param["CommonMetrics"]);
        }

        if (array_key_exists("SparkMonitorMetrics",$param) and $param["SparkMonitorMetrics"] !== null) {
            $this->SparkMonitorMetrics = new SparkMonitorMetrics();
            $this->SparkMonitorMetrics->deserialize($param["SparkMonitorMetrics"]);
        }

        if (array_key_exists("PrestoMonitorMetrics",$param) and $param["PrestoMonitorMetrics"] !== null) {
            $this->PrestoMonitorMetrics = new PrestoMonitorMetrics();
            $this->PrestoMonitorMetrics->deserialize($param["PrestoMonitorMetrics"]);
        }

        if (array_key_exists("ResultFormat",$param) and $param["ResultFormat"] !== null) {
            $this->ResultFormat = $param["ResultFormat"];
        }

        if (array_key_exists("EngineTypeDetail",$param) and $param["EngineTypeDetail"] !== null) {
            $this->EngineTypeDetail = $param["EngineTypeDetail"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("SourceExtra",$param) and $param["SourceExtra"] !== null) {
            $this->SourceExtra = $param["SourceExtra"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("CreatorAlias",$param) and $param["CreatorAlias"] !== null) {
            $this->CreatorAlias = $param["CreatorAlias"];
        }

        if (array_key_exists("CustomizedConf",$param) and $param["CustomizedConf"] !== null) {
            $this->CustomizedConf = $param["CustomizedConf"];
        }

        if (array_key_exists("TaskTimeSum",$param) and $param["TaskTimeSum"] !== null) {
            $this->TaskTimeSum = $param["TaskTimeSum"];
        }

        if (array_key_exists("StageStartTime",$param) and $param["StageStartTime"] !== null) {
            $this->StageStartTime = $param["StageStartTime"];
        }

        if (array_key_exists("InputRecordsSum",$param) and $param["InputRecordsSum"] !== null) {
            $this->InputRecordsSum = $param["InputRecordsSum"];
        }

        if (array_key_exists("AnalysisStatusType",$param) and $param["AnalysisStatusType"] !== null) {
            $this->AnalysisStatusType = $param["AnalysisStatusType"];
        }

        if (array_key_exists("OutputRecordsSum",$param) and $param["OutputRecordsSum"] !== null) {
            $this->OutputRecordsSum = $param["OutputRecordsSum"];
        }

        if (array_key_exists("OutputBytesSum",$param) and $param["OutputBytesSum"] !== null) {
            $this->OutputBytesSum = $param["OutputBytesSum"];
        }

        if (array_key_exists("OutputFilesNum",$param) and $param["OutputFilesNum"] !== null) {
            $this->OutputFilesNum = $param["OutputFilesNum"];
        }

        if (array_key_exists("OutputSmallFilesNum",$param) and $param["OutputSmallFilesNum"] !== null) {
            $this->OutputSmallFilesNum = $param["OutputSmallFilesNum"];
        }

        if (array_key_exists("ShuffleReadRecordsSum",$param) and $param["ShuffleReadRecordsSum"] !== null) {
            $this->ShuffleReadRecordsSum = $param["ShuffleReadRecordsSum"];
        }

        if (array_key_exists("ShuffleReadBytesSum",$param) and $param["ShuffleReadBytesSum"] !== null) {
            $this->ShuffleReadBytesSum = $param["ShuffleReadBytesSum"];
        }

        if (array_key_exists("SparkAppId",$param) and $param["SparkAppId"] !== null) {
            $this->SparkAppId = $param["SparkAppId"];
        }

        if (array_key_exists("TaskCategory",$param) and $param["TaskCategory"] !== null) {
            $this->TaskCategory = $param["TaskCategory"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("EngineHasListenerConfig",$param) and $param["EngineHasListenerConfig"] !== null) {
            $this->EngineHasListenerConfig = $param["EngineHasListenerConfig"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("JobTimeSum",$param) and $param["JobTimeSum"] !== null) {
            $this->JobTimeSum = $param["JobTimeSum"];
        }

        if (array_key_exists("LaunchTime",$param) and $param["LaunchTime"] !== null) {
            $this->LaunchTime = $param["LaunchTime"];
        }

        if (array_key_exists("GpuDriverSize",$param) and $param["GpuDriverSize"] !== null) {
            $this->GpuDriverSize = $param["GpuDriverSize"];
        }

        if (array_key_exists("GpuExecutorSize",$param) and $param["GpuExecutorSize"] !== null) {
            $this->GpuExecutorSize = $param["GpuExecutorSize"];
        }

        if (array_key_exists("ShuffleWriteBytesSum",$param) and $param["ShuffleWriteBytesSum"] !== null) {
            $this->ShuffleWriteBytesSum = $param["ShuffleWriteBytesSum"];
        }

        if (array_key_exists("ActiveCore",$param) and $param["ActiveCore"] !== null) {
            $this->ActiveCore = $param["ActiveCore"];
        }
    }
}
