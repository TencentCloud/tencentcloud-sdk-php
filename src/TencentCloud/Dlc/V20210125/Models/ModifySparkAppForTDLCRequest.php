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
 * ModifySparkAppForTDLC请求参数结构体
 *
 * @method string getAppName() 获取<p>spark作业名</p>
 * @method void setAppName(string $AppName) 设置<p>spark作业名</p>
 * @method integer getAppType() 获取<p>spark作业类型，1代表spark jar作业，2代表spark streaming作业</p>
 * @method void setAppType(integer $AppType) 设置<p>spark作业类型，1代表spark jar作业，2代表spark streaming作业</p>
 * @method string getDataEngine() 获取<p>执行spark作业的数据引擎名称</p>
 * @method void setDataEngine(string $DataEngine) 设置<p>执行spark作业的数据引擎名称</p>
 * @method string getAppFile() 获取<p>spark作业程序包文件路径</p>
 * @method void setAppFile(string $AppFile) 设置<p>spark作业程序包文件路径</p>
 * @method integer getRoleArn() 获取<p>数据访问策略，CAM Role arn</p>
 * @method void setRoleArn(integer $RoleArn) 设置<p>数据访问策略，CAM Role arn</p>
 * @method string getAppDriverSize() 获取<p>指定的Driver规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）</p>
 * @method void setAppDriverSize(string $AppDriverSize) 设置<p>指定的Driver规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）</p>
 * @method string getAppExecutorSize() 获取<p>指定的Executor规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）</p>
 * @method void setAppExecutorSize(string $AppExecutorSize) 设置<p>指定的Executor规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）</p>
 * @method integer getAppExecutorNums() 获取<p>spark作业executor个数</p>
 * @method void setAppExecutorNums(integer $AppExecutorNums) 设置<p>spark作业executor个数</p>
 * @method string getSparkAppId() 获取<p>spark作业Id</p>
 * @method void setSparkAppId(string $SparkAppId) 设置<p>spark作业Id</p>
 * @method string getEni() 获取<p>该字段已下线，请使用字段Datasource</p>
 * @method void setEni(string $Eni) 设置<p>该字段已下线，请使用字段Datasource</p>
 * @method string getIsLocal() 获取<p>spark作业程序包是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）</p>
 * @method void setIsLocal(string $IsLocal) 设置<p>spark作业程序包是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）</p>
 * @method string getMainClass() 获取<p>spark作业主类</p>
 * @method void setMainClass(string $MainClass) 设置<p>spark作业主类</p>
 * @method string getAppConf() 获取<p>spark配置，以换行符分隔</p>
 * @method void setAppConf(string $AppConf) 设置<p>spark配置，以换行符分隔</p>
 * @method string getIsLocalJars() 获取<p>spark 作业依赖jar包是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）</p>
 * @method void setIsLocalJars(string $IsLocalJars) 设置<p>spark 作业依赖jar包是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）</p>
 * @method string getAppJars() 获取<p>spark 作业依赖jar包（--jars），以逗号分隔</p>
 * @method void setAppJars(string $AppJars) 设置<p>spark 作业依赖jar包（--jars），以逗号分隔</p>
 * @method string getIsLocalFiles() 获取<p>spark作业依赖文件资源是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）</p>
 * @method void setIsLocalFiles(string $IsLocalFiles) 设置<p>spark作业依赖文件资源是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）</p>
 * @method string getAppFiles() 获取<p>spark作业依赖文件资源（--files）（非jar、zip），以逗号分隔</p>
 * @method void setAppFiles(string $AppFiles) 设置<p>spark作业依赖文件资源（--files）（非jar、zip），以逗号分隔</p>
 * @method string getIsLocalPythonFiles() 获取<p>pyspark：依赖上传方式，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）</p>
 * @method void setIsLocalPythonFiles(string $IsLocalPythonFiles) 设置<p>pyspark：依赖上传方式，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）</p>
 * @method string getAppPythonFiles() 获取<p>pyspark作业依赖python资源（--py-files），支持py/zip/egg等归档格式，多文件以逗号分隔</p>
 * @method void setAppPythonFiles(string $AppPythonFiles) 设置<p>pyspark作业依赖python资源（--py-files），支持py/zip/egg等归档格式，多文件以逗号分隔</p>
 * @method string getCmdArgs() 获取<p>spark作业程序入参</p>
 * @method void setCmdArgs(string $CmdArgs) 设置<p>spark作业程序入参</p>
 * @method integer getMaxRetries() 获取<p>最大重试次数，只对spark流任务生效</p>
 * @method void setMaxRetries(integer $MaxRetries) 设置<p>最大重试次数，只对spark流任务生效</p>
 * @method string getDataSource() 获取<p>数据源名</p>
 * @method void setDataSource(string $DataSource) 设置<p>数据源名</p>
 * @method string getIsLocalArchives() 获取<p>spark作业依赖archives资源是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）</p>
 * @method void setIsLocalArchives(string $IsLocalArchives) 设置<p>spark作业依赖archives资源是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）</p>
 * @method string getAppArchives() 获取<p>spark作业依赖archives资源（--archives），支持tar.gz/tgz/tar等归档格式，以逗号分隔</p>
 * @method void setAppArchives(string $AppArchives) 设置<p>spark作业依赖archives资源（--archives），支持tar.gz/tgz/tar等归档格式，以逗号分隔</p>
 * @method string getSparkImage() 获取<p>Spark Image 版本号</p>
 * @method void setSparkImage(string $SparkImage) 设置<p>Spark Image 版本号</p>
 * @method string getSparkImageVersion() 获取<p>Spark Image 版本名称</p>
 * @method void setSparkImageVersion(string $SparkImageVersion) 设置<p>Spark Image 版本名称</p>
 * @method integer getAppExecutorMaxNumbers() 获取<p>指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于AppExecutorNums</p>
 * @method void setAppExecutorMaxNumbers(integer $AppExecutorMaxNumbers) 设置<p>指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于AppExecutorNums</p>
 * @method string getSessionId() 获取<p>关联dlc查询脚本</p>
 * @method void setSessionId(string $SessionId) 设置<p>关联dlc查询脚本</p>
 * @method integer getIsInherit() 获取<p>任务资源配置是否继承集群配置模板：0（默认）不继承、1：继承</p>
 * @method void setIsInherit(integer $IsInherit) 设置<p>任务资源配置是否继承集群配置模板：0（默认）不继承、1：继承</p>
 * @method boolean getIsSessionStarted() 获取<p>是否使用session脚本的sql运行任务：false：否，true：是</p>
 * @method void setIsSessionStarted(boolean $IsSessionStarted) 设置<p>是否使用session脚本的sql运行任务：false：否，true：是</p>
 * @method array getDependencyPackages() 获取<p>标准引擎依赖包</p>
 * @method void setDependencyPackages(array $DependencyPackages) 设置<p>标准引擎依赖包</p>
 */
class ModifySparkAppForTDLCRequest extends AbstractModel
{
    /**
     * @var string <p>spark作业名</p>
     */
    public $AppName;

    /**
     * @var integer <p>spark作业类型，1代表spark jar作业，2代表spark streaming作业</p>
     */
    public $AppType;

    /**
     * @var string <p>执行spark作业的数据引擎名称</p>
     */
    public $DataEngine;

    /**
     * @var string <p>spark作业程序包文件路径</p>
     */
    public $AppFile;

    /**
     * @var integer <p>数据访问策略，CAM Role arn</p>
     */
    public $RoleArn;

    /**
     * @var string <p>指定的Driver规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）</p>
     */
    public $AppDriverSize;

    /**
     * @var string <p>指定的Executor规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）</p>
     */
    public $AppExecutorSize;

    /**
     * @var integer <p>spark作业executor个数</p>
     */
    public $AppExecutorNums;

    /**
     * @var string <p>spark作业Id</p>
     */
    public $SparkAppId;

    /**
     * @var string <p>该字段已下线，请使用字段Datasource</p>
     */
    public $Eni;

    /**
     * @var string <p>spark作业程序包是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）</p>
     */
    public $IsLocal;

    /**
     * @var string <p>spark作业主类</p>
     */
    public $MainClass;

    /**
     * @var string <p>spark配置，以换行符分隔</p>
     */
    public $AppConf;

    /**
     * @var string <p>spark 作业依赖jar包是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）</p>
     */
    public $IsLocalJars;

    /**
     * @var string <p>spark 作业依赖jar包（--jars），以逗号分隔</p>
     */
    public $AppJars;

    /**
     * @var string <p>spark作业依赖文件资源是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）</p>
     */
    public $IsLocalFiles;

    /**
     * @var string <p>spark作业依赖文件资源（--files）（非jar、zip），以逗号分隔</p>
     */
    public $AppFiles;

    /**
     * @var string <p>pyspark：依赖上传方式，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）</p>
     */
    public $IsLocalPythonFiles;

    /**
     * @var string <p>pyspark作业依赖python资源（--py-files），支持py/zip/egg等归档格式，多文件以逗号分隔</p>
     */
    public $AppPythonFiles;

    /**
     * @var string <p>spark作业程序入参</p>
     */
    public $CmdArgs;

    /**
     * @var integer <p>最大重试次数，只对spark流任务生效</p>
     */
    public $MaxRetries;

    /**
     * @var string <p>数据源名</p>
     */
    public $DataSource;

    /**
     * @var string <p>spark作业依赖archives资源是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）</p>
     */
    public $IsLocalArchives;

    /**
     * @var string <p>spark作业依赖archives资源（--archives），支持tar.gz/tgz/tar等归档格式，以逗号分隔</p>
     */
    public $AppArchives;

    /**
     * @var string <p>Spark Image 版本号</p>
     */
    public $SparkImage;

    /**
     * @var string <p>Spark Image 版本名称</p>
     */
    public $SparkImageVersion;

    /**
     * @var integer <p>指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于AppExecutorNums</p>
     */
    public $AppExecutorMaxNumbers;

    /**
     * @var string <p>关联dlc查询脚本</p>
     */
    public $SessionId;

    /**
     * @var integer <p>任务资源配置是否继承集群配置模板：0（默认）不继承、1：继承</p>
     */
    public $IsInherit;

    /**
     * @var boolean <p>是否使用session脚本的sql运行任务：false：否，true：是</p>
     */
    public $IsSessionStarted;

    /**
     * @var array <p>标准引擎依赖包</p>
     */
    public $DependencyPackages;

    /**
     * @param string $AppName <p>spark作业名</p>
     * @param integer $AppType <p>spark作业类型，1代表spark jar作业，2代表spark streaming作业</p>
     * @param string $DataEngine <p>执行spark作业的数据引擎名称</p>
     * @param string $AppFile <p>spark作业程序包文件路径</p>
     * @param integer $RoleArn <p>数据访问策略，CAM Role arn</p>
     * @param string $AppDriverSize <p>指定的Driver规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）</p>
     * @param string $AppExecutorSize <p>指定的Executor规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）</p>
     * @param integer $AppExecutorNums <p>spark作业executor个数</p>
     * @param string $SparkAppId <p>spark作业Id</p>
     * @param string $Eni <p>该字段已下线，请使用字段Datasource</p>
     * @param string $IsLocal <p>spark作业程序包是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）</p>
     * @param string $MainClass <p>spark作业主类</p>
     * @param string $AppConf <p>spark配置，以换行符分隔</p>
     * @param string $IsLocalJars <p>spark 作业依赖jar包是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）</p>
     * @param string $AppJars <p>spark 作业依赖jar包（--jars），以逗号分隔</p>
     * @param string $IsLocalFiles <p>spark作业依赖文件资源是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）</p>
     * @param string $AppFiles <p>spark作业依赖文件资源（--files）（非jar、zip），以逗号分隔</p>
     * @param string $IsLocalPythonFiles <p>pyspark：依赖上传方式，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）</p>
     * @param string $AppPythonFiles <p>pyspark作业依赖python资源（--py-files），支持py/zip/egg等归档格式，多文件以逗号分隔</p>
     * @param string $CmdArgs <p>spark作业程序入参</p>
     * @param integer $MaxRetries <p>最大重试次数，只对spark流任务生效</p>
     * @param string $DataSource <p>数据源名</p>
     * @param string $IsLocalArchives <p>spark作业依赖archives资源是否本地上传，cos：存放与cos，lakefs：本地上传（控制台使用，该方式不支持直接接口调用）</p>
     * @param string $AppArchives <p>spark作业依赖archives资源（--archives），支持tar.gz/tgz/tar等归档格式，以逗号分隔</p>
     * @param string $SparkImage <p>Spark Image 版本号</p>
     * @param string $SparkImageVersion <p>Spark Image 版本名称</p>
     * @param integer $AppExecutorMaxNumbers <p>指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于AppExecutorNums</p>
     * @param string $SessionId <p>关联dlc查询脚本</p>
     * @param integer $IsInherit <p>任务资源配置是否继承集群配置模板：0（默认）不继承、1：继承</p>
     * @param boolean $IsSessionStarted <p>是否使用session脚本的sql运行任务：false：否，true：是</p>
     * @param array $DependencyPackages <p>标准引擎依赖包</p>
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

        if (array_key_exists("SparkAppId",$param) and $param["SparkAppId"] !== null) {
            $this->SparkAppId = $param["SparkAppId"];
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

        if (array_key_exists("IsLocalPythonFiles",$param) and $param["IsLocalPythonFiles"] !== null) {
            $this->IsLocalPythonFiles = $param["IsLocalPythonFiles"];
        }

        if (array_key_exists("AppPythonFiles",$param) and $param["AppPythonFiles"] !== null) {
            $this->AppPythonFiles = $param["AppPythonFiles"];
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

        if (array_key_exists("DependencyPackages",$param) and $param["DependencyPackages"] !== null) {
            $this->DependencyPackages = [];
            foreach ($param["DependencyPackages"] as $key => $value){
                $obj = new DependencyPackage();
                $obj->deserialize($value);
                array_push($this->DependencyPackages, $obj);
            }
        }
    }
}
