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
 * CreateSparkApp请求参数结构体
 *
 * @method string getAppName() 获取spark作业名
 * @method void setAppName(string $AppName) 设置spark作业名
 * @method integer getAppType() 获取spark作业类型，1代表spark jar作业，2代表spark streaming作业
 * @method void setAppType(integer $AppType) 设置spark作业类型，1代表spark jar作业，2代表spark streaming作业
 * @method string getDataEngine() 获取执行spark作业的数据引擎名称
 * @method void setDataEngine(string $DataEngine) 设置执行spark作业的数据引擎名称
 * @method string getAppFile() 获取spark作业程序包文件路径
 * @method void setAppFile(string $AppFile) 设置spark作业程序包文件路径
 * @method integer getRoleArn() 获取数据访问策略，CAM Role arn
 * @method void setRoleArn(integer $RoleArn) 设置数据访问策略，CAM Role arn
 * @method string getAppDriverSize() 获取指定的Driver规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）
 * @method void setAppDriverSize(string $AppDriverSize) 设置指定的Driver规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）
 * @method string getAppExecutorSize() 获取指定的Executor规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）
 * @method void setAppExecutorSize(string $AppExecutorSize) 设置指定的Executor规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）
 * @method integer getAppExecutorNums() 获取spark作业executor个数
 * @method void setAppExecutorNums(integer $AppExecutorNums) 设置spark作业executor个数
 * @method string getEni() 获取该字段已下线，请使用字段Datasource
 * @method void setEni(string $Eni) 设置该字段已下线，请使用字段Datasource
 * @method string getIsLocal() 获取spark作业程序包是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）
 * @method void setIsLocal(string $IsLocal) 设置spark作业程序包是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）
 * @method string getMainClass() 获取spark作业主类
 * @method void setMainClass(string $MainClass) 设置spark作业主类
 * @method string getAppConf() 获取spark配置，以换行符分隔
 * @method void setAppConf(string $AppConf) 设置spark配置，以换行符分隔
 * @method string getIsLocalJars() 获取spark 作业依赖jar包是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）
 * @method void setIsLocalJars(string $IsLocalJars) 设置spark 作业依赖jar包是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）
 * @method string getAppJars() 获取spark 作业依赖jar包（--jars），以逗号分隔
 * @method void setAppJars(string $AppJars) 设置spark 作业依赖jar包（--jars），以逗号分隔
 * @method string getIsLocalFiles() 获取spark作业依赖文件资源是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）
 * @method void setIsLocalFiles(string $IsLocalFiles) 设置spark作业依赖文件资源是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）
 * @method string getAppFiles() 获取spark作业依赖文件资源（--files）（非jar、zip），以逗号分隔
 * @method void setAppFiles(string $AppFiles) 设置spark作业依赖文件资源（--files）（非jar、zip），以逗号分隔
 * @method string getCmdArgs() 获取spark作业程序入参，空格分割
 * @method void setCmdArgs(string $CmdArgs) 设置spark作业程序入参，空格分割
 * @method integer getMaxRetries() 获取最大重试次数，只对spark流任务生效
 * @method void setMaxRetries(integer $MaxRetries) 设置最大重试次数，只对spark流任务生效
 * @method string getDataSource() 获取数据源名称
 * @method void setDataSource(string $DataSource) 设置数据源名称
 * @method string getIsLocalPythonFiles() 获取pyspark：依赖上传方式，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）
 * @method void setIsLocalPythonFiles(string $IsLocalPythonFiles) 设置pyspark：依赖上传方式，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）
 * @method string getAppPythonFiles() 获取pyspark作业依赖python资源（--py-files），支持py/zip/egg等归档格式，多文件以逗号分隔
 * @method void setAppPythonFiles(string $AppPythonFiles) 设置pyspark作业依赖python资源（--py-files），支持py/zip/egg等归档格式，多文件以逗号分隔
 * @method string getIsLocalArchives() 获取spark作业依赖archives资源是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）
 * @method void setIsLocalArchives(string $IsLocalArchives) 设置spark作业依赖archives资源是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）
 * @method string getAppArchives() 获取spark作业依赖archives资源（--archives），支持tar.gz/tgz/tar等归档格式，以逗号分隔
 * @method void setAppArchives(string $AppArchives) 设置spark作业依赖archives资源（--archives），支持tar.gz/tgz/tar等归档格式，以逗号分隔
 * @method string getSparkImage() 获取Spark Image 版本号
 * @method void setSparkImage(string $SparkImage) 设置Spark Image 版本号
 * @method string getSparkImageVersion() 获取Spark Image 版本名称
 * @method void setSparkImageVersion(string $SparkImageVersion) 设置Spark Image 版本名称
 * @method integer getAppExecutorMaxNumbers() 获取指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于AppExecutorNums
 * @method void setAppExecutorMaxNumbers(integer $AppExecutorMaxNumbers) 设置指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于AppExecutorNums
 * @method string getSessionId() 获取关联dlc查询脚本id
 * @method void setSessionId(string $SessionId) 设置关联dlc查询脚本id
 * @method integer getIsInherit() 获取任务资源配置是否继承集群模板，0（默认）不继承，1：继承
 * @method void setIsInherit(integer $IsInherit) 设置任务资源配置是否继承集群模板，0（默认）不继承，1：继承
 * @method boolean getIsSessionStarted() 获取是否使用session脚本的sql运行任务：false：否，true：是
 * @method void setIsSessionStarted(boolean $IsSessionStarted) 设置是否使用session脚本的sql运行任务：false：否，true：是
 */
class CreateSparkAppRequest extends AbstractModel
{
    /**
     * @var string spark作业名
     */
    public $AppName;

    /**
     * @var integer spark作业类型，1代表spark jar作业，2代表spark streaming作业
     */
    public $AppType;

    /**
     * @var string 执行spark作业的数据引擎名称
     */
    public $DataEngine;

    /**
     * @var string spark作业程序包文件路径
     */
    public $AppFile;

    /**
     * @var integer 数据访问策略，CAM Role arn
     */
    public $RoleArn;

    /**
     * @var string 指定的Driver规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）
     */
    public $AppDriverSize;

    /**
     * @var string 指定的Executor规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）
     */
    public $AppExecutorSize;

    /**
     * @var integer spark作业executor个数
     */
    public $AppExecutorNums;

    /**
     * @var string 该字段已下线，请使用字段Datasource
     */
    public $Eni;

    /**
     * @var string spark作业程序包是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）
     */
    public $IsLocal;

    /**
     * @var string spark作业主类
     */
    public $MainClass;

    /**
     * @var string spark配置，以换行符分隔
     */
    public $AppConf;

    /**
     * @var string spark 作业依赖jar包是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）
     */
    public $IsLocalJars;

    /**
     * @var string spark 作业依赖jar包（--jars），以逗号分隔
     */
    public $AppJars;

    /**
     * @var string spark作业依赖文件资源是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）
     */
    public $IsLocalFiles;

    /**
     * @var string spark作业依赖文件资源（--files）（非jar、zip），以逗号分隔
     */
    public $AppFiles;

    /**
     * @var string spark作业程序入参，空格分割
     */
    public $CmdArgs;

    /**
     * @var integer 最大重试次数，只对spark流任务生效
     */
    public $MaxRetries;

    /**
     * @var string 数据源名称
     */
    public $DataSource;

    /**
     * @var string pyspark：依赖上传方式，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）
     */
    public $IsLocalPythonFiles;

    /**
     * @var string pyspark作业依赖python资源（--py-files），支持py/zip/egg等归档格式，多文件以逗号分隔
     */
    public $AppPythonFiles;

    /**
     * @var string spark作业依赖archives资源是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）
     */
    public $IsLocalArchives;

    /**
     * @var string spark作业依赖archives资源（--archives），支持tar.gz/tgz/tar等归档格式，以逗号分隔
     */
    public $AppArchives;

    /**
     * @var string Spark Image 版本号
     */
    public $SparkImage;

    /**
     * @var string Spark Image 版本名称
     */
    public $SparkImageVersion;

    /**
     * @var integer 指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于AppExecutorNums
     */
    public $AppExecutorMaxNumbers;

    /**
     * @var string 关联dlc查询脚本id
     */
    public $SessionId;

    /**
     * @var integer 任务资源配置是否继承集群模板，0（默认）不继承，1：继承
     */
    public $IsInherit;

    /**
     * @var boolean 是否使用session脚本的sql运行任务：false：否，true：是
     */
    public $IsSessionStarted;

    /**
     * @param string $AppName spark作业名
     * @param integer $AppType spark作业类型，1代表spark jar作业，2代表spark streaming作业
     * @param string $DataEngine 执行spark作业的数据引擎名称
     * @param string $AppFile spark作业程序包文件路径
     * @param integer $RoleArn 数据访问策略，CAM Role arn
     * @param string $AppDriverSize 指定的Driver规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）
     * @param string $AppExecutorSize 指定的Executor规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）
     * @param integer $AppExecutorNums spark作业executor个数
     * @param string $Eni 该字段已下线，请使用字段Datasource
     * @param string $IsLocal spark作业程序包是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）
     * @param string $MainClass spark作业主类
     * @param string $AppConf spark配置，以换行符分隔
     * @param string $IsLocalJars spark 作业依赖jar包是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）
     * @param string $AppJars spark 作业依赖jar包（--jars），以逗号分隔
     * @param string $IsLocalFiles spark作业依赖文件资源是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）
     * @param string $AppFiles spark作业依赖文件资源（--files）（非jar、zip），以逗号分隔
     * @param string $CmdArgs spark作业程序入参，空格分割
     * @param integer $MaxRetries 最大重试次数，只对spark流任务生效
     * @param string $DataSource 数据源名称
     * @param string $IsLocalPythonFiles pyspark：依赖上传方式，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）
     * @param string $AppPythonFiles pyspark作业依赖python资源（--py-files），支持py/zip/egg等归档格式，多文件以逗号分隔
     * @param string $IsLocalArchives spark作业依赖archives资源是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）
     * @param string $AppArchives spark作业依赖archives资源（--archives），支持tar.gz/tgz/tar等归档格式，以逗号分隔
     * @param string $SparkImage Spark Image 版本号
     * @param string $SparkImageVersion Spark Image 版本名称
     * @param integer $AppExecutorMaxNumbers 指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于AppExecutorNums
     * @param string $SessionId 关联dlc查询脚本id
     * @param integer $IsInherit 任务资源配置是否继承集群模板，0（默认）不继承，1：继承
     * @param boolean $IsSessionStarted 是否使用session脚本的sql运行任务：false：否，true：是
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("DataEngine",$param) and $param["DataEngine"] !== null) {
            $this->DataEngine = $param["DataEngine"];
        }

        if (array_key_exists("AppFile",$param) and $param["AppFile"] !== null) {
            $this->AppFile = $param["AppFile"];
        }

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }

        if (array_key_exists("AppDriverSize",$param) and $param["AppDriverSize"] !== null) {
            $this->AppDriverSize = $param["AppDriverSize"];
        }

        if (array_key_exists("AppExecutorSize",$param) and $param["AppExecutorSize"] !== null) {
            $this->AppExecutorSize = $param["AppExecutorSize"];
        }

        if (array_key_exists("AppExecutorNums",$param) and $param["AppExecutorNums"] !== null) {
            $this->AppExecutorNums = $param["AppExecutorNums"];
        }

        if (array_key_exists("Eni",$param) and $param["Eni"] !== null) {
            $this->Eni = $param["Eni"];
        }

        if (array_key_exists("IsLocal",$param) and $param["IsLocal"] !== null) {
            $this->IsLocal = $param["IsLocal"];
        }

        if (array_key_exists("MainClass",$param) and $param["MainClass"] !== null) {
            $this->MainClass = $param["MainClass"];
        }

        if (array_key_exists("AppConf",$param) and $param["AppConf"] !== null) {
            $this->AppConf = $param["AppConf"];
        }

        if (array_key_exists("IsLocalJars",$param) and $param["IsLocalJars"] !== null) {
            $this->IsLocalJars = $param["IsLocalJars"];
        }

        if (array_key_exists("AppJars",$param) and $param["AppJars"] !== null) {
            $this->AppJars = $param["AppJars"];
        }

        if (array_key_exists("IsLocalFiles",$param) and $param["IsLocalFiles"] !== null) {
            $this->IsLocalFiles = $param["IsLocalFiles"];
        }

        if (array_key_exists("AppFiles",$param) and $param["AppFiles"] !== null) {
            $this->AppFiles = $param["AppFiles"];
        }

        if (array_key_exists("CmdArgs",$param) and $param["CmdArgs"] !== null) {
            $this->CmdArgs = $param["CmdArgs"];
        }

        if (array_key_exists("MaxRetries",$param) and $param["MaxRetries"] !== null) {
            $this->MaxRetries = $param["MaxRetries"];
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

        if (array_key_exists("AppArchives",$param) and $param["AppArchives"] !== null) {
            $this->AppArchives = $param["AppArchives"];
        }

        if (array_key_exists("SparkImage",$param) and $param["SparkImage"] !== null) {
            $this->SparkImage = $param["SparkImage"];
        }

        if (array_key_exists("SparkImageVersion",$param) and $param["SparkImageVersion"] !== null) {
            $this->SparkImageVersion = $param["SparkImageVersion"];
        }

        if (array_key_exists("AppExecutorMaxNumbers",$param) and $param["AppExecutorMaxNumbers"] !== null) {
            $this->AppExecutorMaxNumbers = $param["AppExecutorMaxNumbers"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("IsInherit",$param) and $param["IsInherit"] !== null) {
            $this->IsInherit = $param["IsInherit"];
        }

        if (array_key_exists("IsSessionStarted",$param) and $param["IsSessionStarted"] !== null) {
            $this->IsSessionStarted = $param["IsSessionStarted"];
        }
    }
}
