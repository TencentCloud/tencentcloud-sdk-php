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
 * @method string getDatabaseName() 获取任务所属Database的名称。
 * @method void setDatabaseName(string $DatabaseName) 设置任务所属Database的名称。
 * @method integer getDataAmount() 获取任务数据量。
 * @method void setDataAmount(integer $DataAmount) 设置任务数据量。
 * @method string getId() 获取任务Id。
 * @method void setId(string $Id) 设置任务Id。
 * @method integer getUsedTime() 获取计算耗时，单位： ms
 * @method void setUsedTime(integer $UsedTime) 设置计算耗时，单位： ms
 * @method string getOutputPath() 获取任务输出路径。
 * @method void setOutputPath(string $OutputPath) 设置任务输出路径。
 * @method string getCreateTime() 获取任务创建时间。
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间。
 * @method integer getState() 获取任务状态：0 初始化， 1 执行中， 2 执行成功，3 数据写入中，4 排队中。-1 执行失败，-3 已取消。
 * @method void setState(integer $State) 设置任务状态：0 初始化， 1 执行中， 2 执行成功，3 数据写入中，4 排队中。-1 执行失败，-3 已取消。
 * @method string getSQLType() 获取任务SQL类型，DDL|DML等
 * @method void setSQLType(string $SQLType) 设置任务SQL类型，DDL|DML等
 * @method string getSQL() 获取任务SQL语句
 * @method void setSQL(string $SQL) 设置任务SQL语句
 * @method boolean getResultExpired() 获取结果是否过期。
 * @method void setResultExpired(boolean $ResultExpired) 设置结果是否过期。
 * @method string getRowAffectInfo() 获取数据影响统计信息。
 * @method void setRowAffectInfo(string $RowAffectInfo) 设置数据影响统计信息。
 * @method string getDataSet() 获取任务结果数据表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSet(string $DataSet) 设置任务结果数据表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getError() 获取失败信息, 例如：errorMessage。该字段已废弃。
 * @method void setError(string $Error) 设置失败信息, 例如：errorMessage。该字段已废弃。
 * @method integer getPercentage() 获取任务执行进度num/100(%)
 * @method void setPercentage(integer $Percentage) 设置任务执行进度num/100(%)
 * @method string getOutputMessage() 获取任务执行输出信息。
 * @method void setOutputMessage(string $OutputMessage) 设置任务执行输出信息。
 * @method string getTaskType() 获取执行SQL的引擎类型
 * @method void setTaskType(string $TaskType) 设置执行SQL的引擎类型
 * @method string getProgressDetail() 获取任务进度明细
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgressDetail(string $ProgressDetail) 设置任务进度明细
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataEngineId() 获取计算资源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataEngineId(string $DataEngineId) 设置计算资源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperateUin() 获取执行sql的子uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperateUin(string $OperateUin) 设置执行sql的子uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataEngineName() 获取计算资源名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataEngineName(string $DataEngineName) 设置计算资源名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputType() 获取导入类型是本地导入还是cos
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputType(string $InputType) 设置导入类型是本地导入还是cos
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputConf() 获取导入配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputConf(string $InputConf) 设置导入配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataNumber() 获取数据条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataNumber(integer $DataNumber) 设置数据条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCanDownload() 获取查询数据能不能下载
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanDownload(boolean $CanDownload) 设置查询数据能不能下载
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserAlias() 获取用户别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserAlias(string $UserAlias) 设置用户别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSparkJobName() 获取spark应用作业名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSparkJobName(string $SparkJobName) 设置spark应用作业名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSparkJobId() 获取spark应用作业Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSparkJobId(string $SparkJobId) 设置spark应用作业Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSparkJobFile() 获取spark应用入口jar文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSparkJobFile(string $SparkJobFile) 设置spark应用入口jar文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUiUrl() 获取spark ui url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUiUrl(string $UiUrl) 设置spark ui url
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalTime() 获取任务耗时，单位： ms
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalTime(integer $TotalTime) 设置任务耗时，单位： ms
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCmdArgs() 获取spark app job执行task的程序入口参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCmdArgs(string $CmdArgs) 设置spark app job执行task的程序入口参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageVersion() 获取集群镜像大版本名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageVersion(string $ImageVersion) 设置集群镜像大版本名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDriverSize() 获取driver规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDriverSize(string $DriverSize) 设置driver规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorSize() 获取executor规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorSize(string $ExecutorSize) 设置executor规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExecutorNums() 获取指定executor数量，最小值为1，最大值小于集群规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorNums(integer $ExecutorNums) 设置指定executor数量，最小值为1，最大值小于集群规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExecutorMaxNumbers() 获取指定executor max数量（动态配置场景下），最小值为1，最大值小于集群规格（当ExecutorMaxNumbers小于ExecutorNums时，改值设定为ExecutorNums）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorMaxNumbers(integer $ExecutorMaxNumbers) 设置指定executor max数量（动态配置场景下），最小值为1，最大值小于集群规格（当ExecutorMaxNumbers小于ExecutorNums时，改值设定为ExecutorNums）
注意：此字段可能返回 null，表示取不到有效值。
 * @method CommonMetrics getCommonMetrics() 获取任务公共指标数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCommonMetrics(CommonMetrics $CommonMetrics) 设置任务公共指标数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method SparkMonitorMetrics getSparkMonitorMetrics() 获取spark任务指标数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSparkMonitorMetrics(SparkMonitorMetrics $SparkMonitorMetrics) 设置spark任务指标数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method PrestoMonitorMetrics getPrestoMonitorMetrics() 获取presto任务指标数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrestoMonitorMetrics(PrestoMonitorMetrics $PrestoMonitorMetrics) 设置presto任务指标数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResultFormat() 获取结果文件格式：默认为csv
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultFormat(string $ResultFormat) 设置结果文件格式：默认为csv
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineTypeDetail() 获取引擎类型，SparkSQL：SparkSQL 引擎；SparkBatch：Spark作业引擎；PrestoSQL：Presto引擎
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineTypeDetail(string $EngineTypeDetail) 设置引擎类型，SparkSQL：SparkSQL 引擎；SparkBatch：Spark作业引擎；PrestoSQL：Presto引擎
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupName() 获取spark引擎资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupName(string $ResourceGroupName) 设置spark引擎资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSource() 获取任务来源信息,如thirdPartyApi,dataExploration, sparkAppTask等
 * @method void setSource(string $Source) 设置任务来源信息,如thirdPartyApi,dataExploration, sparkAppTask等
 * @method string getSourceExtra() 获取子渠道信息，一般由第三方调用定义
 * @method void setSourceExtra(string $SourceExtra) 设置子渠道信息，一般由第三方调用定义
 * @method string getCreatorUin() 获取创建人uin
 * @method void setCreatorUin(string $CreatorUin) 设置创建人uin
 * @method string getCreatorAlias() 获取创建人名字
 * @method void setCreatorAlias(string $CreatorAlias) 设置创建人名字
 * @method string getCustomizedConf() 获取引擎参数
 * @method void setCustomizedConf(string $CustomizedConf) 设置引擎参数
 * @method integer getTaskTimeSum() 获取单位秒，累计 CPU* 秒 ( 累计 CPU * 时 = 累计 CPU* 秒/ 3600)，统计参与计算所用 Spark Executor 每个 core 的 CPU 执行时长总和
示例值：4329
 * @method void setTaskTimeSum(integer $TaskTimeSum) 设置单位秒，累计 CPU* 秒 ( 累计 CPU * 时 = 累计 CPU* 秒/ 3600)，统计参与计算所用 Spark Executor 每个 core 的 CPU 执行时长总和
示例值：4329
 * @method integer getStageStartTime() 获取引擎执行时间
 * @method void setStageStartTime(integer $StageStartTime) 设置引擎执行时间
 * @method integer getInputRecordsSum() 获取数据扫描条数
 * @method void setInputRecordsSum(integer $InputRecordsSum) 设置数据扫描条数
 * @method integer getAnalysisStatusType() 获取健康状态
 * @method void setAnalysisStatusType(integer $AnalysisStatusType) 设置健康状态
 * @method integer getOutputRecordsSum() 获取输出总行数
 * @method void setOutputRecordsSum(integer $OutputRecordsSum) 设置输出总行数
 * @method integer getOutputBytesSum() 获取输出总大小
 * @method void setOutputBytesSum(integer $OutputBytesSum) 设置输出总大小
 * @method integer getOutputFilesNum() 获取输出文件个数
 * @method void setOutputFilesNum(integer $OutputFilesNum) 设置输出文件个数
 * @method integer getOutputSmallFilesNum() 获取输出小文件个数
 * @method void setOutputSmallFilesNum(integer $OutputSmallFilesNum) 设置输出小文件个数
 * @method integer getShuffleReadRecordsSum() 获取数据shuffle行数
 * @method void setShuffleReadRecordsSum(integer $ShuffleReadRecordsSum) 设置数据shuffle行数
 * @method integer getShuffleReadBytesSum() 获取数据shuffle大小
 * @method void setShuffleReadBytesSum(integer $ShuffleReadBytesSum) 设置数据shuffle大小
 * @method string getSparkAppId() 获取spark作业id
 * @method void setSparkAppId(string $SparkAppId) 设置spark作业id
 * @method string getTaskCategory() 获取任务大类，DLC2.0中任务区分为两大类，sql任务和作业任务
 * @method void setTaskCategory(string $TaskCategory) 设置任务大类，DLC2.0中任务区分为两大类，sql任务和作业任务
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getEngineType() 获取引擎类型，用做任务详情页跳转引擎tab
 * @method void setEngineType(string $EngineType) 设置引擎类型，用做任务详情页跳转引擎tab
 * @method boolean getEngineHasListenerConfig() 获取引擎是否支持洞察数据采集
 * @method void setEngineHasListenerConfig(boolean $EngineHasListenerConfig) 设置引擎是否支持洞察数据采集
 * @method string getResourceGroupId() 获取spark引擎资源组id
 * @method void setResourceGroupId(string $ResourceGroupId) 设置spark引擎资源组id
 * @method integer getJobTimeSum() 获取任务计算耗时
 * @method void setJobTimeSum(integer $JobTimeSum) 设置任务计算耗时
 * @method string getLaunchTime() 获取任务启动耗时
 * @method void setLaunchTime(string $LaunchTime) 设置任务启动耗时
 * @method integer getGpuDriverSize() 获取Gpu Driver 规格
 * @method void setGpuDriverSize(integer $GpuDriverSize) 设置Gpu Driver 规格
 * @method integer getGpuExecutorSize() 获取Gpu Executor 规格
 * @method void setGpuExecutorSize(integer $GpuExecutorSize) 设置Gpu Executor 规格
 */
class TaskFullRespInfo extends AbstractModel
{
    /**
     * @var string 任务所属Database的名称。
     */
    public $DatabaseName;

    /**
     * @var integer 任务数据量。
     */
    public $DataAmount;

    /**
     * @var string 任务Id。
     */
    public $Id;

    /**
     * @var integer 计算耗时，单位： ms
     */
    public $UsedTime;

    /**
     * @var string 任务输出路径。
     */
    public $OutputPath;

    /**
     * @var string 任务创建时间。
     */
    public $CreateTime;

    /**
     * @var integer 任务状态：0 初始化， 1 执行中， 2 执行成功，3 数据写入中，4 排队中。-1 执行失败，-3 已取消。
     */
    public $State;

    /**
     * @var string 任务SQL类型，DDL|DML等
     */
    public $SQLType;

    /**
     * @var string 任务SQL语句
     */
    public $SQL;

    /**
     * @var boolean 结果是否过期。
     */
    public $ResultExpired;

    /**
     * @var string 数据影响统计信息。
     */
    public $RowAffectInfo;

    /**
     * @var string 任务结果数据表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSet;

    /**
     * @var string 失败信息, 例如：errorMessage。该字段已废弃。
     */
    public $Error;

    /**
     * @var integer 任务执行进度num/100(%)
     */
    public $Percentage;

    /**
     * @var string 任务执行输出信息。
     */
    public $OutputMessage;

    /**
     * @var string 执行SQL的引擎类型
     */
    public $TaskType;

    /**
     * @var string 任务进度明细
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProgressDetail;

    /**
     * @var string 任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 计算资源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataEngineId;

    /**
     * @var string 执行sql的子uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperateUin;

    /**
     * @var string 计算资源名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataEngineName;

    /**
     * @var string 导入类型是本地导入还是cos
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputType;

    /**
     * @var string 导入配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputConf;

    /**
     * @var integer 数据条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataNumber;

    /**
     * @var boolean 查询数据能不能下载
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanDownload;

    /**
     * @var string 用户别名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserAlias;

    /**
     * @var string spark应用作业名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SparkJobName;

    /**
     * @var string spark应用作业Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SparkJobId;

    /**
     * @var string spark应用入口jar文件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SparkJobFile;

    /**
     * @var string spark ui url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UiUrl;

    /**
     * @var integer 任务耗时，单位： ms
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalTime;

    /**
     * @var string spark app job执行task的程序入口参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CmdArgs;

    /**
     * @var string 集群镜像大版本名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageVersion;

    /**
     * @var string driver规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DriverSize;

    /**
     * @var string executor规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorSize;

    /**
     * @var integer 指定executor数量，最小值为1，最大值小于集群规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorNums;

    /**
     * @var integer 指定executor max数量（动态配置场景下），最小值为1，最大值小于集群规格（当ExecutorMaxNumbers小于ExecutorNums时，改值设定为ExecutorNums）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorMaxNumbers;

    /**
     * @var CommonMetrics 任务公共指标数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CommonMetrics;

    /**
     * @var SparkMonitorMetrics spark任务指标数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SparkMonitorMetrics;

    /**
     * @var PrestoMonitorMetrics presto任务指标数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrestoMonitorMetrics;

    /**
     * @var string 结果文件格式：默认为csv
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultFormat;

    /**
     * @var string 引擎类型，SparkSQL：SparkSQL 引擎；SparkBatch：Spark作业引擎；PrestoSQL：Presto引擎
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineTypeDetail;

    /**
     * @var string spark引擎资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupName;

    /**
     * @var string 任务来源信息,如thirdPartyApi,dataExploration, sparkAppTask等
     */
    public $Source;

    /**
     * @var string 子渠道信息，一般由第三方调用定义
     */
    public $SourceExtra;

    /**
     * @var string 创建人uin
     */
    public $CreatorUin;

    /**
     * @var string 创建人名字
     */
    public $CreatorAlias;

    /**
     * @var string 引擎参数
     */
    public $CustomizedConf;

    /**
     * @var integer 单位秒，累计 CPU* 秒 ( 累计 CPU * 时 = 累计 CPU* 秒/ 3600)，统计参与计算所用 Spark Executor 每个 core 的 CPU 执行时长总和
示例值：4329
     */
    public $TaskTimeSum;

    /**
     * @var integer 引擎执行时间
     */
    public $StageStartTime;

    /**
     * @var integer 数据扫描条数
     */
    public $InputRecordsSum;

    /**
     * @var integer 健康状态
     */
    public $AnalysisStatusType;

    /**
     * @var integer 输出总行数
     */
    public $OutputRecordsSum;

    /**
     * @var integer 输出总大小
     */
    public $OutputBytesSum;

    /**
     * @var integer 输出文件个数
     */
    public $OutputFilesNum;

    /**
     * @var integer 输出小文件个数
     */
    public $OutputSmallFilesNum;

    /**
     * @var integer 数据shuffle行数
     */
    public $ShuffleReadRecordsSum;

    /**
     * @var integer 数据shuffle大小
     */
    public $ShuffleReadBytesSum;

    /**
     * @var string spark作业id
     */
    public $SparkAppId;

    /**
     * @var string 任务大类，DLC2.0中任务区分为两大类，sql任务和作业任务
     */
    public $TaskCategory;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 引擎类型，用做任务详情页跳转引擎tab
     */
    public $EngineType;

    /**
     * @var boolean 引擎是否支持洞察数据采集
     */
    public $EngineHasListenerConfig;

    /**
     * @var string spark引擎资源组id
     */
    public $ResourceGroupId;

    /**
     * @var integer 任务计算耗时
     */
    public $JobTimeSum;

    /**
     * @var string 任务启动耗时
     */
    public $LaunchTime;

    /**
     * @var integer Gpu Driver 规格
     */
    public $GpuDriverSize;

    /**
     * @var integer Gpu Executor 规格
     */
    public $GpuExecutorSize;

    /**
     * @param string $DatabaseName 任务所属Database的名称。
     * @param integer $DataAmount 任务数据量。
     * @param string $Id 任务Id。
     * @param integer $UsedTime 计算耗时，单位： ms
     * @param string $OutputPath 任务输出路径。
     * @param string $CreateTime 任务创建时间。
     * @param integer $State 任务状态：0 初始化， 1 执行中， 2 执行成功，3 数据写入中，4 排队中。-1 执行失败，-3 已取消。
     * @param string $SQLType 任务SQL类型，DDL|DML等
     * @param string $SQL 任务SQL语句
     * @param boolean $ResultExpired 结果是否过期。
     * @param string $RowAffectInfo 数据影响统计信息。
     * @param string $DataSet 任务结果数据表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Error 失败信息, 例如：errorMessage。该字段已废弃。
     * @param integer $Percentage 任务执行进度num/100(%)
     * @param string $OutputMessage 任务执行输出信息。
     * @param string $TaskType 执行SQL的引擎类型
     * @param string $ProgressDetail 任务进度明细
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataEngineId 计算资源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperateUin 执行sql的子uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataEngineName 计算资源名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputType 导入类型是本地导入还是cos
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputConf 导入配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataNumber 数据条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CanDownload 查询数据能不能下载
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserAlias 用户别名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SparkJobName spark应用作业名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SparkJobId spark应用作业Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SparkJobFile spark应用入口jar文件
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UiUrl spark ui url
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalTime 任务耗时，单位： ms
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CmdArgs spark app job执行task的程序入口参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageVersion 集群镜像大版本名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DriverSize driver规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorSize executor规格：small,medium,large,xlarge；内存型(引擎类型)：m.small,m.medium,m.large,m.xlarge
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExecutorNums 指定executor数量，最小值为1，最大值小于集群规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExecutorMaxNumbers 指定executor max数量（动态配置场景下），最小值为1，最大值小于集群规格（当ExecutorMaxNumbers小于ExecutorNums时，改值设定为ExecutorNums）
注意：此字段可能返回 null，表示取不到有效值。
     * @param CommonMetrics $CommonMetrics 任务公共指标数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param SparkMonitorMetrics $SparkMonitorMetrics spark任务指标数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param PrestoMonitorMetrics $PrestoMonitorMetrics presto任务指标数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResultFormat 结果文件格式：默认为csv
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineTypeDetail 引擎类型，SparkSQL：SparkSQL 引擎；SparkBatch：Spark作业引擎；PrestoSQL：Presto引擎
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupName spark引擎资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Source 任务来源信息,如thirdPartyApi,dataExploration, sparkAppTask等
     * @param string $SourceExtra 子渠道信息，一般由第三方调用定义
     * @param string $CreatorUin 创建人uin
     * @param string $CreatorAlias 创建人名字
     * @param string $CustomizedConf 引擎参数
     * @param integer $TaskTimeSum 单位秒，累计 CPU* 秒 ( 累计 CPU * 时 = 累计 CPU* 秒/ 3600)，统计参与计算所用 Spark Executor 每个 core 的 CPU 执行时长总和
示例值：4329
     * @param integer $StageStartTime 引擎执行时间
     * @param integer $InputRecordsSum 数据扫描条数
     * @param integer $AnalysisStatusType 健康状态
     * @param integer $OutputRecordsSum 输出总行数
     * @param integer $OutputBytesSum 输出总大小
     * @param integer $OutputFilesNum 输出文件个数
     * @param integer $OutputSmallFilesNum 输出小文件个数
     * @param integer $ShuffleReadRecordsSum 数据shuffle行数
     * @param integer $ShuffleReadBytesSum 数据shuffle大小
     * @param string $SparkAppId spark作业id
     * @param string $TaskCategory 任务大类，DLC2.0中任务区分为两大类，sql任务和作业任务
     * @param string $TaskName 任务名称
     * @param string $EngineType 引擎类型，用做任务详情页跳转引擎tab
     * @param boolean $EngineHasListenerConfig 引擎是否支持洞察数据采集
     * @param string $ResourceGroupId spark引擎资源组id
     * @param integer $JobTimeSum 任务计算耗时
     * @param string $LaunchTime 任务启动耗时
     * @param integer $GpuDriverSize Gpu Driver 规格
     * @param integer $GpuExecutorSize Gpu Executor 规格
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
    }
}
