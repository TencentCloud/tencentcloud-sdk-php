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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * spark作业详情。
 *
 * @method string getJobId() 获取spark作业ID
 * @method void setJobId(string $JobId) 设置spark作业ID
 * @method string getJobName() 获取spark作业名
 * @method void setJobName(string $JobName) 设置spark作业名
 * @method integer getJobType() 获取spark作业类型，可去1或者2，1表示batch作业， 2表示streaming作业
 * @method void setJobType(integer $JobType) 设置spark作业类型，可去1或者2，1表示batch作业， 2表示streaming作业
 * @method string getDataEngine() 获取引擎名
 * @method void setDataEngine(string $DataEngine) 设置引擎名
 * @method string getEni() 获取该字段已下线，请使用字段Datasource
 * @method void setEni(string $Eni) 设置该字段已下线，请使用字段Datasource
 * @method string getIsLocal() 获取程序包是否本地上传，cos或者lakefs
 * @method void setIsLocal(string $IsLocal) 设置程序包是否本地上传，cos或者lakefs
 * @method string getJobFile() 获取程序包路径
 * @method void setJobFile(string $JobFile) 设置程序包路径
 * @method integer getRoleArn() 获取角色ID
 * @method void setRoleArn(integer $RoleArn) 设置角色ID
 * @method string getMainClass() 获取spark作业运行主类
 * @method void setMainClass(string $MainClass) 设置spark作业运行主类
 * @method string getCmdArgs() 获取命令行参数，spark作业命令行参数，空格分隔
 * @method void setCmdArgs(string $CmdArgs) 设置命令行参数，spark作业命令行参数，空格分隔
 * @method string getJobConf() 获取spark原生配置，换行符分隔
 * @method void setJobConf(string $JobConf) 设置spark原生配置，换行符分隔
 * @method string getIsLocalJars() 获取依赖jars是否本地上传，cos或者lakefs
 * @method void setIsLocalJars(string $IsLocalJars) 设置依赖jars是否本地上传，cos或者lakefs
 * @method string getJobJars() 获取spark作业依赖jars，逗号分隔
 * @method void setJobJars(string $JobJars) 设置spark作业依赖jars，逗号分隔
 * @method string getIsLocalFiles() 获取依赖文件是否本地上传，cos或者lakefs
 * @method void setIsLocalFiles(string $IsLocalFiles) 设置依赖文件是否本地上传，cos或者lakefs
 * @method string getJobFiles() 获取spark作业依赖文件，逗号分隔
 * @method void setJobFiles(string $JobFiles) 设置spark作业依赖文件，逗号分隔
 * @method string getJobDriverSize() 获取spark作业driver资源大小
 * @method void setJobDriverSize(string $JobDriverSize) 设置spark作业driver资源大小
 * @method string getJobExecutorSize() 获取spark作业executor资源大小
 * @method void setJobExecutorSize(string $JobExecutorSize) 设置spark作业executor资源大小
 * @method integer getJobExecutorNums() 获取spark作业executor个数
 * @method void setJobExecutorNums(integer $JobExecutorNums) 设置spark作业executor个数
 * @method integer getJobMaxAttempts() 获取spark流任务最大重试次数
 * @method void setJobMaxAttempts(integer $JobMaxAttempts) 设置spark流任务最大重试次数
 * @method string getJobCreator() 获取spark作业创建者
 * @method void setJobCreator(string $JobCreator) 设置spark作业创建者
 * @method integer getJobCreateTime() 获取spark作业创建时间
 * @method void setJobCreateTime(integer $JobCreateTime) 设置spark作业创建时间
 * @method integer getJobUpdateTime() 获取spark作业更新时间
 * @method void setJobUpdateTime(integer $JobUpdateTime) 设置spark作业更新时间
 * @method string getCurrentTaskId() 获取spark作业最近任务ID
 * @method void setCurrentTaskId(string $CurrentTaskId) 设置spark作业最近任务ID
 * @method integer getJobStatus() 获取spark作业最近运行状态
 * @method void setJobStatus(integer $JobStatus) 设置spark作业最近运行状态
 * @method StreamingStatistics getStreamingStat() 获取spark流作业统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStreamingStat(StreamingStatistics $StreamingStat) 设置spark流作业统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSource() 获取数据源名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSource(string $DataSource) 设置数据源名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsLocalPythonFiles() 获取pyspark：依赖上传方式，1、cos；2、lakefs（控制台使用，该方式不支持直接接口调用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsLocalPythonFiles(string $IsLocalPythonFiles) 设置pyspark：依赖上传方式，1、cos；2、lakefs（控制台使用，该方式不支持直接接口调用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppPythonFiles() 获取注：该返回值已废弃
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppPythonFiles(string $AppPythonFiles) 设置注：该返回值已废弃
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsLocalArchives() 获取archives：依赖上传方式，1、cos；2、lakefs（控制台使用，该方式不支持直接接口调用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsLocalArchives(string $IsLocalArchives) 设置archives：依赖上传方式，1、cos；2、lakefs（控制台使用，该方式不支持直接接口调用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobArchives() 获取archives：依赖资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobArchives(string $JobArchives) 设置archives：依赖资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSparkImage() 获取Spark Image 版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSparkImage(string $SparkImage) 设置Spark Image 版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobPythonFiles() 获取pyspark：python依赖, 除py文件外，还支持zip/egg等归档格式，多文件以逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobPythonFiles(string $JobPythonFiles) 设置pyspark：python依赖, 除py文件外，还支持zip/egg等归档格式，多文件以逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskNum() 获取当前job正在运行或准备运行的任务个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskNum(integer $TaskNum) 设置当前job正在运行或准备运行的任务个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataEngineStatus() 获取引擎状态：-100（默认：未知状态），-2~11：引擎正常状态；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataEngineStatus(integer $DataEngineStatus) 设置引擎状态：-100（默认：未知状态），-2~11：引擎正常状态；
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getJobExecutorMaxNumbers() 获取指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于JobExecutorNums
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobExecutorMaxNumbers(integer $JobExecutorMaxNumbers) 设置指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于JobExecutorNums
注意：此字段可能返回 null，表示取不到有效值。
 */
class SparkJobInfo extends AbstractModel
{
    /**
     * @var string spark作业ID
     */
    public $JobId;

    /**
     * @var string spark作业名
     */
    public $JobName;

    /**
     * @var integer spark作业类型，可去1或者2，1表示batch作业， 2表示streaming作业
     */
    public $JobType;

    /**
     * @var string 引擎名
     */
    public $DataEngine;

    /**
     * @var string 该字段已下线，请使用字段Datasource
     */
    public $Eni;

    /**
     * @var string 程序包是否本地上传，cos或者lakefs
     */
    public $IsLocal;

    /**
     * @var string 程序包路径
     */
    public $JobFile;

    /**
     * @var integer 角色ID
     */
    public $RoleArn;

    /**
     * @var string spark作业运行主类
     */
    public $MainClass;

    /**
     * @var string 命令行参数，spark作业命令行参数，空格分隔
     */
    public $CmdArgs;

    /**
     * @var string spark原生配置，换行符分隔
     */
    public $JobConf;

    /**
     * @var string 依赖jars是否本地上传，cos或者lakefs
     */
    public $IsLocalJars;

    /**
     * @var string spark作业依赖jars，逗号分隔
     */
    public $JobJars;

    /**
     * @var string 依赖文件是否本地上传，cos或者lakefs
     */
    public $IsLocalFiles;

    /**
     * @var string spark作业依赖文件，逗号分隔
     */
    public $JobFiles;

    /**
     * @var string spark作业driver资源大小
     */
    public $JobDriverSize;

    /**
     * @var string spark作业executor资源大小
     */
    public $JobExecutorSize;

    /**
     * @var integer spark作业executor个数
     */
    public $JobExecutorNums;

    /**
     * @var integer spark流任务最大重试次数
     */
    public $JobMaxAttempts;

    /**
     * @var string spark作业创建者
     */
    public $JobCreator;

    /**
     * @var integer spark作业创建时间
     */
    public $JobCreateTime;

    /**
     * @var integer spark作业更新时间
     */
    public $JobUpdateTime;

    /**
     * @var string spark作业最近任务ID
     */
    public $CurrentTaskId;

    /**
     * @var integer spark作业最近运行状态
     */
    public $JobStatus;

    /**
     * @var StreamingStatistics spark流作业统计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StreamingStat;

    /**
     * @var string 数据源名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSource;

    /**
     * @var string pyspark：依赖上传方式，1、cos；2、lakefs（控制台使用，该方式不支持直接接口调用）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsLocalPythonFiles;

    /**
     * @var string 注：该返回值已废弃
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppPythonFiles;

    /**
     * @var string archives：依赖上传方式，1、cos；2、lakefs（控制台使用，该方式不支持直接接口调用）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsLocalArchives;

    /**
     * @var string archives：依赖资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobArchives;

    /**
     * @var string Spark Image 版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SparkImage;

    /**
     * @var string pyspark：python依赖, 除py文件外，还支持zip/egg等归档格式，多文件以逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobPythonFiles;

    /**
     * @var integer 当前job正在运行或准备运行的任务个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskNum;

    /**
     * @var integer 引擎状态：-100（默认：未知状态），-2~11：引擎正常状态；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataEngineStatus;

    /**
     * @var integer 指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于JobExecutorNums
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobExecutorMaxNumbers;

    /**
     * @param string $JobId spark作业ID
     * @param string $JobName spark作业名
     * @param integer $JobType spark作业类型，可去1或者2，1表示batch作业， 2表示streaming作业
     * @param string $DataEngine 引擎名
     * @param string $Eni 该字段已下线，请使用字段Datasource
     * @param string $IsLocal 程序包是否本地上传，cos或者lakefs
     * @param string $JobFile 程序包路径
     * @param integer $RoleArn 角色ID
     * @param string $MainClass spark作业运行主类
     * @param string $CmdArgs 命令行参数，spark作业命令行参数，空格分隔
     * @param string $JobConf spark原生配置，换行符分隔
     * @param string $IsLocalJars 依赖jars是否本地上传，cos或者lakefs
     * @param string $JobJars spark作业依赖jars，逗号分隔
     * @param string $IsLocalFiles 依赖文件是否本地上传，cos或者lakefs
     * @param string $JobFiles spark作业依赖文件，逗号分隔
     * @param string $JobDriverSize spark作业driver资源大小
     * @param string $JobExecutorSize spark作业executor资源大小
     * @param integer $JobExecutorNums spark作业executor个数
     * @param integer $JobMaxAttempts spark流任务最大重试次数
     * @param string $JobCreator spark作业创建者
     * @param integer $JobCreateTime spark作业创建时间
     * @param integer $JobUpdateTime spark作业更新时间
     * @param string $CurrentTaskId spark作业最近任务ID
     * @param integer $JobStatus spark作业最近运行状态
     * @param StreamingStatistics $StreamingStat spark流作业统计
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSource 数据源名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsLocalPythonFiles pyspark：依赖上传方式，1、cos；2、lakefs（控制台使用，该方式不支持直接接口调用）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppPythonFiles 注：该返回值已废弃
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsLocalArchives archives：依赖上传方式，1、cos；2、lakefs（控制台使用，该方式不支持直接接口调用）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobArchives archives：依赖资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SparkImage Spark Image 版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobPythonFiles pyspark：python依赖, 除py文件外，还支持zip/egg等归档格式，多文件以逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskNum 当前job正在运行或准备运行的任务个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataEngineStatus 引擎状态：-100（默认：未知状态），-2~11：引擎正常状态；
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $JobExecutorMaxNumbers 指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于JobExecutorNums
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
    }
}
