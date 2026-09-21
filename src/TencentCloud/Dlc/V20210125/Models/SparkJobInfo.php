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
 * spark作业详情。
 *
 * @method string getJobId() 获取<p>spark作业ID</p>
 * @method void setJobId(string $JobId) 设置<p>spark作业ID</p>
 * @method string getJobName() 获取<p>spark作业名</p>
 * @method void setJobName(string $JobName) 设置<p>spark作业名</p>
 * @method integer getJobType() 获取<p>spark作业类型，可去1或者2，1表示batch作业， 2表示streaming作业</p>
 * @method void setJobType(integer $JobType) 设置<p>spark作业类型，可去1或者2，1表示batch作业， 2表示streaming作业</p>
 * @method string getDataEngine() 获取<p>引擎名</p>
 * @method void setDataEngine(string $DataEngine) 设置<p>引擎名</p>
 * @method string getEni() 获取<p>该字段已下线，请使用字段Datasource</p>
 * @method void setEni(string $Eni) 设置<p>该字段已下线，请使用字段Datasource</p>
 * @method string getIsLocal() 获取<p>程序包是否本地上传，cos或者lakefs</p>
 * @method void setIsLocal(string $IsLocal) 设置<p>程序包是否本地上传，cos或者lakefs</p>
 * @method string getJobFile() 获取<p>程序包路径</p>
 * @method void setJobFile(string $JobFile) 设置<p>程序包路径</p>
 * @method integer getRoleArn() 获取<p>角色ID</p>
 * @method void setRoleArn(integer $RoleArn) 设置<p>角色ID</p>
 * @method string getMainClass() 获取<p>spark作业运行主类</p>
 * @method void setMainClass(string $MainClass) 设置<p>spark作业运行主类</p>
 * @method string getCmdArgs() 获取<p>命令行参数，spark作业命令行参数，空格分隔</p>
 * @method void setCmdArgs(string $CmdArgs) 设置<p>命令行参数，spark作业命令行参数，空格分隔</p>
 * @method string getJobConf() 获取<p>spark原生配置，换行符分隔</p>
 * @method void setJobConf(string $JobConf) 设置<p>spark原生配置，换行符分隔</p>
 * @method string getIsLocalJars() 获取<p>依赖jars是否本地上传，cos或者lakefs</p>
 * @method void setIsLocalJars(string $IsLocalJars) 设置<p>依赖jars是否本地上传，cos或者lakefs</p>
 * @method string getJobJars() 获取<p>spark作业依赖jars，逗号分隔</p>
 * @method void setJobJars(string $JobJars) 设置<p>spark作业依赖jars，逗号分隔</p>
 * @method string getIsLocalFiles() 获取<p>依赖文件是否本地上传，cos或者lakefs</p>
 * @method void setIsLocalFiles(string $IsLocalFiles) 设置<p>依赖文件是否本地上传，cos或者lakefs</p>
 * @method string getJobFiles() 获取<p>spark作业依赖文件，逗号分隔</p>
 * @method void setJobFiles(string $JobFiles) 设置<p>spark作业依赖文件，逗号分隔</p>
 * @method string getJobDriverSize() 获取<p>spark作业driver资源大小</p>
 * @method void setJobDriverSize(string $JobDriverSize) 设置<p>spark作业driver资源大小</p>
 * @method string getJobExecutorSize() 获取<p>spark作业executor资源大小</p>
 * @method void setJobExecutorSize(string $JobExecutorSize) 设置<p>spark作业executor资源大小</p>
 * @method integer getJobExecutorNums() 获取<p>spark作业executor个数</p>
 * @method void setJobExecutorNums(integer $JobExecutorNums) 设置<p>spark作业executor个数</p>
 * @method integer getJobMaxAttempts() 获取<p>spark流任务最大重试次数</p>
 * @method void setJobMaxAttempts(integer $JobMaxAttempts) 设置<p>spark流任务最大重试次数</p>
 * @method string getJobCreator() 获取<p>spark作业创建者</p>
 * @method void setJobCreator(string $JobCreator) 设置<p>spark作业创建者</p>
 * @method integer getJobCreateTime() 获取<p>spark作业创建时间</p>
 * @method void setJobCreateTime(integer $JobCreateTime) 设置<p>spark作业创建时间</p>
 * @method integer getJobUpdateTime() 获取<p>spark作业更新时间</p>
 * @method void setJobUpdateTime(integer $JobUpdateTime) 设置<p>spark作业更新时间</p>
 * @method string getCurrentTaskId() 获取<p>spark作业最近任务ID</p>
 * @method void setCurrentTaskId(string $CurrentTaskId) 设置<p>spark作业最近任务ID</p>
 * @method integer getJobStatus() 获取<p>spark作业最近运行状态，初始化：0，运行中：1，成功：2，数据写入中： 3， 排队中： 4， 失败： -1， 已删除： -3，已过期： -5</p>
 * @method void setJobStatus(integer $JobStatus) 设置<p>spark作业最近运行状态，初始化：0，运行中：1，成功：2，数据写入中： 3， 排队中： 4， 失败： -1， 已删除： -3，已过期： -5</p>
 * @method StreamingStatistics getStreamingStat() 获取<p>spark流作业统计</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStreamingStat(StreamingStatistics $StreamingStat) 设置<p>spark流作业统计</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSource() 获取<p>数据源名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSource(string $DataSource) 设置<p>数据源名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsLocalPythonFiles() 获取<p>pyspark：依赖上传方式，1、cos；2、lakefs（控制台使用，该方式不支持直接接口调用）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsLocalPythonFiles(string $IsLocalPythonFiles) 设置<p>pyspark：依赖上传方式，1、cos；2、lakefs（控制台使用，该方式不支持直接接口调用）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppPythonFiles() 获取<p>注：该返回值已废弃</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppPythonFiles(string $AppPythonFiles) 设置<p>注：该返回值已废弃</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsLocalArchives() 获取<p>archives：依赖上传方式，1、cos；2、lakefs（控制台使用，该方式不支持直接接口调用）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsLocalArchives(string $IsLocalArchives) 设置<p>archives：依赖上传方式，1、cos；2、lakefs（控制台使用，该方式不支持直接接口调用）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobArchives() 获取<p>archives：依赖资源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobArchives(string $JobArchives) 设置<p>archives：依赖资源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSparkImage() 获取<p>Spark Image 版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSparkImage(string $SparkImage) 设置<p>Spark Image 版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobPythonFiles() 获取<p>pyspark：python依赖, 除py文件外，还支持zip/egg等归档格式，多文件以逗号分隔</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobPythonFiles(string $JobPythonFiles) 设置<p>pyspark：python依赖, 除py文件外，还支持zip/egg等归档格式，多文件以逗号分隔</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskNum() 获取<p>当前job正在运行或准备运行的任务个数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskNum(integer $TaskNum) 设置<p>当前job正在运行或准备运行的任务个数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataEngineStatus() 获取<p>引擎状态：-100（默认：未知状态），-2~11：引擎正常状态；</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataEngineStatus(integer $DataEngineStatus) 设置<p>引擎状态：-100（默认：未知状态），-2~11：引擎正常状态；</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getJobExecutorMaxNumbers() 获取<p>指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于JobExecutorNums</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobExecutorMaxNumbers(integer $JobExecutorMaxNumbers) 设置<p>指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于JobExecutorNums</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSparkImageVersion() 获取<p>镜像版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSparkImageVersion(string $SparkImageVersion) 设置<p>镜像版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionId() 获取<p>查询脚本关联id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionId(string $SessionId) 设置<p>查询脚本关联id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataEngineClusterType() 获取<p>spark_emr_livy</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataEngineClusterType(string $DataEngineClusterType) 设置<p>spark_emr_livy</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataEngineImageVersion() 获取<p>Spark 3.2-EMR</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataEngineImageVersion(string $DataEngineImageVersion) 设置<p>Spark 3.2-EMR</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsInherit() 获取<p>任务资源配置是否继承集群模板，0（默认）不继承，1：继承</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsInherit(integer $IsInherit) 设置<p>任务资源配置是否继承集群模板，0（默认）不继承，1：继承</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsSessionStarted() 获取<p>是否使用session脚本的sql运行任务：false：否，true：是</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsSessionStarted(boolean $IsSessionStarted) 设置<p>是否使用session脚本的sql运行任务：false：否，true：是</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineTypeDetail() 获取<p>引擎详细类型：SparkSQL、PrestoSQL、SparkBatch、StandardSpark、StandardPresto</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineTypeDetail(string $EngineTypeDetail) 设置<p>引擎详细类型：SparkSQL、PrestoSQL、SparkBatch、StandardSpark、StandardPresto</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDependencyPackages() 获取<p>标准引擎依赖包</p>
 * @method void setDependencyPackages(array $DependencyPackages) 设置<p>标准引擎依赖包</p>
 * @method string getRunAsIdentity() 获取<p>作业运行鉴权身份</p>
 * @method void setRunAsIdentity(string $RunAsIdentity) 设置<p>作业运行鉴权身份</p>
 */
class SparkJobInfo extends AbstractModel
{
    /**
     * @var string <p>spark作业ID</p>
     */
    public $JobId;

    /**
     * @var string <p>spark作业名</p>
     */
    public $JobName;

    /**
     * @var integer <p>spark作业类型，可去1或者2，1表示batch作业， 2表示streaming作业</p>
     */
    public $JobType;

    /**
     * @var string <p>引擎名</p>
     */
    public $DataEngine;

    /**
     * @var string <p>该字段已下线，请使用字段Datasource</p>
     */
    public $Eni;

    /**
     * @var string <p>程序包是否本地上传，cos或者lakefs</p>
     */
    public $IsLocal;

    /**
     * @var string <p>程序包路径</p>
     */
    public $JobFile;

    /**
     * @var integer <p>角色ID</p>
     */
    public $RoleArn;

    /**
     * @var string <p>spark作业运行主类</p>
     */
    public $MainClass;

    /**
     * @var string <p>命令行参数，spark作业命令行参数，空格分隔</p>
     */
    public $CmdArgs;

    /**
     * @var string <p>spark原生配置，换行符分隔</p>
     */
    public $JobConf;

    /**
     * @var string <p>依赖jars是否本地上传，cos或者lakefs</p>
     */
    public $IsLocalJars;

    /**
     * @var string <p>spark作业依赖jars，逗号分隔</p>
     */
    public $JobJars;

    /**
     * @var string <p>依赖文件是否本地上传，cos或者lakefs</p>
     */
    public $IsLocalFiles;

    /**
     * @var string <p>spark作业依赖文件，逗号分隔</p>
     */
    public $JobFiles;

    /**
     * @var string <p>spark作业driver资源大小</p>
     */
    public $JobDriverSize;

    /**
     * @var string <p>spark作业executor资源大小</p>
     */
    public $JobExecutorSize;

    /**
     * @var integer <p>spark作业executor个数</p>
     */
    public $JobExecutorNums;

    /**
     * @var integer <p>spark流任务最大重试次数</p>
     */
    public $JobMaxAttempts;

    /**
     * @var string <p>spark作业创建者</p>
     */
    public $JobCreator;

    /**
     * @var integer <p>spark作业创建时间</p>
     */
    public $JobCreateTime;

    /**
     * @var integer <p>spark作业更新时间</p>
     */
    public $JobUpdateTime;

    /**
     * @var string <p>spark作业最近任务ID</p>
     */
    public $CurrentTaskId;

    /**
     * @var integer <p>spark作业最近运行状态，初始化：0，运行中：1，成功：2，数据写入中： 3， 排队中： 4， 失败： -1， 已删除： -3，已过期： -5</p>
     */
    public $JobStatus;

    /**
     * @var StreamingStatistics <p>spark流作业统计</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StreamingStat;

    /**
     * @var string <p>数据源名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSource;

    /**
     * @var string <p>pyspark：依赖上传方式，1、cos；2、lakefs（控制台使用，该方式不支持直接接口调用）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsLocalPythonFiles;

    /**
     * @var string <p>注：该返回值已废弃</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppPythonFiles;

    /**
     * @var string <p>archives：依赖上传方式，1、cos；2、lakefs（控制台使用，该方式不支持直接接口调用）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsLocalArchives;

    /**
     * @var string <p>archives：依赖资源</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobArchives;

    /**
     * @var string <p>Spark Image 版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SparkImage;

    /**
     * @var string <p>pyspark：python依赖, 除py文件外，还支持zip/egg等归档格式，多文件以逗号分隔</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobPythonFiles;

    /**
     * @var integer <p>当前job正在运行或准备运行的任务个数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskNum;

    /**
     * @var integer <p>引擎状态：-100（默认：未知状态），-2~11：引擎正常状态；</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataEngineStatus;

    /**
     * @var integer <p>指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于JobExecutorNums</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobExecutorMaxNumbers;

    /**
     * @var string <p>镜像版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SparkImageVersion;

    /**
     * @var string <p>查询脚本关联id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionId;

    /**
     * @var string <p>spark_emr_livy</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataEngineClusterType;

    /**
     * @var string <p>Spark 3.2-EMR</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataEngineImageVersion;

    /**
     * @var integer <p>任务资源配置是否继承集群模板，0（默认）不继承，1：继承</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsInherit;

    /**
     * @var boolean <p>是否使用session脚本的sql运行任务：false：否，true：是</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsSessionStarted;

    /**
     * @var string <p>引擎详细类型：SparkSQL、PrestoSQL、SparkBatch、StandardSpark、StandardPresto</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineTypeDetail;

    /**
     * @var array <p>标准引擎依赖包</p>
     */
    public $DependencyPackages;

    /**
     * @var string <p>作业运行鉴权身份</p>
     */
    public $RunAsIdentity;

    /**
     * @param string $JobId <p>spark作业ID</p>
     * @param string $JobName <p>spark作业名</p>
     * @param integer $JobType <p>spark作业类型，可去1或者2，1表示batch作业， 2表示streaming作业</p>
     * @param string $DataEngine <p>引擎名</p>
     * @param string $Eni <p>该字段已下线，请使用字段Datasource</p>
     * @param string $IsLocal <p>程序包是否本地上传，cos或者lakefs</p>
     * @param string $JobFile <p>程序包路径</p>
     * @param integer $RoleArn <p>角色ID</p>
     * @param string $MainClass <p>spark作业运行主类</p>
     * @param string $CmdArgs <p>命令行参数，spark作业命令行参数，空格分隔</p>
     * @param string $JobConf <p>spark原生配置，换行符分隔</p>
     * @param string $IsLocalJars <p>依赖jars是否本地上传，cos或者lakefs</p>
     * @param string $JobJars <p>spark作业依赖jars，逗号分隔</p>
     * @param string $IsLocalFiles <p>依赖文件是否本地上传，cos或者lakefs</p>
     * @param string $JobFiles <p>spark作业依赖文件，逗号分隔</p>
     * @param string $JobDriverSize <p>spark作业driver资源大小</p>
     * @param string $JobExecutorSize <p>spark作业executor资源大小</p>
     * @param integer $JobExecutorNums <p>spark作业executor个数</p>
     * @param integer $JobMaxAttempts <p>spark流任务最大重试次数</p>
     * @param string $JobCreator <p>spark作业创建者</p>
     * @param integer $JobCreateTime <p>spark作业创建时间</p>
     * @param integer $JobUpdateTime <p>spark作业更新时间</p>
     * @param string $CurrentTaskId <p>spark作业最近任务ID</p>
     * @param integer $JobStatus <p>spark作业最近运行状态，初始化：0，运行中：1，成功：2，数据写入中： 3， 排队中： 4， 失败： -1， 已删除： -3，已过期： -5</p>
     * @param StreamingStatistics $StreamingStat <p>spark流作业统计</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSource <p>数据源名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsLocalPythonFiles <p>pyspark：依赖上传方式，1、cos；2、lakefs（控制台使用，该方式不支持直接接口调用）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppPythonFiles <p>注：该返回值已废弃</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsLocalArchives <p>archives：依赖上传方式，1、cos；2、lakefs（控制台使用，该方式不支持直接接口调用）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobArchives <p>archives：依赖资源</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SparkImage <p>Spark Image 版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobPythonFiles <p>pyspark：python依赖, 除py文件外，还支持zip/egg等归档格式，多文件以逗号分隔</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskNum <p>当前job正在运行或准备运行的任务个数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataEngineStatus <p>引擎状态：-100（默认：未知状态），-2~11：引擎正常状态；</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $JobExecutorMaxNumbers <p>指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于JobExecutorNums</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SparkImageVersion <p>镜像版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionId <p>查询脚本关联id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataEngineClusterType <p>spark_emr_livy</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataEngineImageVersion <p>Spark 3.2-EMR</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsInherit <p>任务资源配置是否继承集群模板，0（默认）不继承，1：继承</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsSessionStarted <p>是否使用session脚本的sql运行任务：false：否，true：是</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineTypeDetail <p>引擎详细类型：SparkSQL、PrestoSQL、SparkBatch、StandardSpark、StandardPresto</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DependencyPackages <p>标准引擎依赖包</p>
     * @param string $RunAsIdentity <p>作业运行鉴权身份</p>
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("DataEngine",$param) and $param["DataEngine"] !== null) {
            $this->DataEngine = $param["DataEngine"];
        }

        if (array_key_exists("Eni",$param) and $param["Eni"] !== null) {
            $this->Eni = $param["Eni"];
        }

        if (array_key_exists("IsLocal",$param) and $param["IsLocal"] !== null) {
            $this->IsLocal = $param["IsLocal"];
        }

        if (array_key_exists("JobFile",$param) and $param["JobFile"] !== null) {
            $this->JobFile = $param["JobFile"];
        }

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }

        if (array_key_exists("MainClass",$param) and $param["MainClass"] !== null) {
            $this->MainClass = $param["MainClass"];
        }

        if (array_key_exists("CmdArgs",$param) and $param["CmdArgs"] !== null) {
            $this->CmdArgs = $param["CmdArgs"];
        }

        if (array_key_exists("JobConf",$param) and $param["JobConf"] !== null) {
            $this->JobConf = $param["JobConf"];
        }

        if (array_key_exists("IsLocalJars",$param) and $param["IsLocalJars"] !== null) {
            $this->IsLocalJars = $param["IsLocalJars"];
        }

        if (array_key_exists("JobJars",$param) and $param["JobJars"] !== null) {
            $this->JobJars = $param["JobJars"];
        }

        if (array_key_exists("IsLocalFiles",$param) and $param["IsLocalFiles"] !== null) {
            $this->IsLocalFiles = $param["IsLocalFiles"];
        }

        if (array_key_exists("JobFiles",$param) and $param["JobFiles"] !== null) {
            $this->JobFiles = $param["JobFiles"];
        }

        if (array_key_exists("JobDriverSize",$param) and $param["JobDriverSize"] !== null) {
            $this->JobDriverSize = $param["JobDriverSize"];
        }

        if (array_key_exists("JobExecutorSize",$param) and $param["JobExecutorSize"] !== null) {
            $this->JobExecutorSize = $param["JobExecutorSize"];
        }

        if (array_key_exists("JobExecutorNums",$param) and $param["JobExecutorNums"] !== null) {
            $this->JobExecutorNums = $param["JobExecutorNums"];
        }

        if (array_key_exists("JobMaxAttempts",$param) and $param["JobMaxAttempts"] !== null) {
            $this->JobMaxAttempts = $param["JobMaxAttempts"];
        }

        if (array_key_exists("JobCreator",$param) and $param["JobCreator"] !== null) {
            $this->JobCreator = $param["JobCreator"];
        }

        if (array_key_exists("JobCreateTime",$param) and $param["JobCreateTime"] !== null) {
            $this->JobCreateTime = $param["JobCreateTime"];
        }

        if (array_key_exists("JobUpdateTime",$param) and $param["JobUpdateTime"] !== null) {
            $this->JobUpdateTime = $param["JobUpdateTime"];
        }

        if (array_key_exists("CurrentTaskId",$param) and $param["CurrentTaskId"] !== null) {
            $this->CurrentTaskId = $param["CurrentTaskId"];
        }

        if (array_key_exists("JobStatus",$param) and $param["JobStatus"] !== null) {
            $this->JobStatus = $param["JobStatus"];
        }

        if (array_key_exists("StreamingStat",$param) and $param["StreamingStat"] !== null) {
            $this->StreamingStat = new StreamingStatistics();
            $this->StreamingStat->deserialize($param["StreamingStat"]);
        }

        if (array_key_exists("DataSource",$param) and $param["DataSource"] !== null) {
            $this->DataSource = $param["DataSource"];
        }

        if (array_key_exists("IsLocalPythonFiles",$param) and $param["IsLocalPythonFiles"] !== null) {
            $this->IsLocalPythonFiles = $param["IsLocalPythonFiles"];
        }

        if (array_key_exists("AppPythonFiles",$param) and $param["AppPythonFiles"] !== null) {
            $this->AppPythonFiles = $param["AppPythonFiles"];
        }

        if (array_key_exists("IsLocalArchives",$param) and $param["IsLocalArchives"] !== null) {
            $this->IsLocalArchives = $param["IsLocalArchives"];
        }

        if (array_key_exists("JobArchives",$param) and $param["JobArchives"] !== null) {
            $this->JobArchives = $param["JobArchives"];
        }

        if (array_key_exists("SparkImage",$param) and $param["SparkImage"] !== null) {
            $this->SparkImage = $param["SparkImage"];
        }

        if (array_key_exists("JobPythonFiles",$param) and $param["JobPythonFiles"] !== null) {
            $this->JobPythonFiles = $param["JobPythonFiles"];
        }

        if (array_key_exists("TaskNum",$param) and $param["TaskNum"] !== null) {
            $this->TaskNum = $param["TaskNum"];
        }

        if (array_key_exists("DataEngineStatus",$param) and $param["DataEngineStatus"] !== null) {
            $this->DataEngineStatus = $param["DataEngineStatus"];
        }

        if (array_key_exists("JobExecutorMaxNumbers",$param) and $param["JobExecutorMaxNumbers"] !== null) {
            $this->JobExecutorMaxNumbers = $param["JobExecutorMaxNumbers"];
        }

        if (array_key_exists("SparkImageVersion",$param) and $param["SparkImageVersion"] !== null) {
            $this->SparkImageVersion = $param["SparkImageVersion"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("DataEngineClusterType",$param) and $param["DataEngineClusterType"] !== null) {
            $this->DataEngineClusterType = $param["DataEngineClusterType"];
        }

        if (array_key_exists("DataEngineImageVersion",$param) and $param["DataEngineImageVersion"] !== null) {
            $this->DataEngineImageVersion = $param["DataEngineImageVersion"];
        }

        if (array_key_exists("IsInherit",$param) and $param["IsInherit"] !== null) {
            $this->IsInherit = $param["IsInherit"];
        }

        if (array_key_exists("IsSessionStarted",$param) and $param["IsSessionStarted"] !== null) {
            $this->IsSessionStarted = $param["IsSessionStarted"];
        }

        if (array_key_exists("EngineTypeDetail",$param) and $param["EngineTypeDetail"] !== null) {
            $this->EngineTypeDetail = $param["EngineTypeDetail"];
        }

        if (array_key_exists("DependencyPackages",$param) and $param["DependencyPackages"] !== null) {
            $this->DependencyPackages = [];
            foreach ($param["DependencyPackages"] as $key => $value){
                $obj = new DependencyPackage();
                $obj->deserialize($value);
                array_push($this->DependencyPackages, $obj);
            }
        }

        if (array_key_exists("RunAsIdentity",$param) and $param["RunAsIdentity"] !== null) {
            $this->RunAsIdentity = $param["RunAsIdentity"];
        }
    }
}
