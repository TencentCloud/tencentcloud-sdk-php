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
 * ModifySparkApp请求参数结构体
 *
 * @method string getAppName() 获取spark应用名
 * @method void setAppName(string $AppName) 设置spark应用名
 * @method integer getAppType() 获取1代表spark jar应用，2代表spark streaming应用
 * @method void setAppType(integer $AppType) 设置1代表spark jar应用，2代表spark streaming应用
 * @method string getDataEngine() 获取执行spark作业的数据引擎
 * @method void setDataEngine(string $DataEngine) 设置执行spark作业的数据引擎
 * @method string getAppFile() 获取spark应用的执行入口
 * @method void setAppFile(string $AppFile) 设置spark应用的执行入口
 * @method integer getRoleArn() 获取执行spark作业的角色ID
 * @method void setRoleArn(integer $RoleArn) 设置执行spark作业的角色ID
 * @method string getAppDriverSize() 获取spark作业driver资源规格大小, 可取small,medium,large,xlarge
 * @method void setAppDriverSize(string $AppDriverSize) 设置spark作业driver资源规格大小, 可取small,medium,large,xlarge
 * @method string getAppExecutorSize() 获取spark作业executor资源规格大小, 可取small,medium,large,xlarge
 * @method void setAppExecutorSize(string $AppExecutorSize) 设置spark作业executor资源规格大小, 可取small,medium,large,xlarge
 * @method integer getAppExecutorNums() 获取spark作业executor个数
 * @method void setAppExecutorNums(integer $AppExecutorNums) 设置spark作业executor个数
 * @method string getSparkAppId() 获取spark应用Id
 * @method void setSparkAppId(string $SparkAppId) 设置spark应用Id
 * @method string getEni() 获取该字段已下线，请使用字段Datasource
 * @method void setEni(string $Eni) 设置该字段已下线，请使用字段Datasource
 * @method string getIsLocal() 获取是否本地上传，可取cos,lakefs
 * @method void setIsLocal(string $IsLocal) 设置是否本地上传，可取cos,lakefs
 * @method string getMainClass() 获取spark jar作业时的主类
 * @method void setMainClass(string $MainClass) 设置spark jar作业时的主类
 * @method string getAppConf() 获取spark配置，以换行符分隔
 * @method void setAppConf(string $AppConf) 设置spark配置，以换行符分隔
 * @method string getIsLocalJars() 获取是否本地上传，可去cos,lakefs
 * @method void setIsLocalJars(string $IsLocalJars) 设置是否本地上传，可去cos,lakefs
 * @method string getAppJars() 获取spark jar作业依赖jars，以逗号分隔
 * @method void setAppJars(string $AppJars) 设置spark jar作业依赖jars，以逗号分隔
 * @method string getIsLocalFiles() 获取是否本地上传，可去cos,lakefs
 * @method void setIsLocalFiles(string $IsLocalFiles) 设置是否本地上传，可去cos,lakefs
 * @method string getAppFiles() 获取spark作业依赖资源，以逗号分隔
 * @method void setAppFiles(string $AppFiles) 设置spark作业依赖资源，以逗号分隔
 * @method string getCmdArgs() 获取spark作业命令行参数
 * @method void setCmdArgs(string $CmdArgs) 设置spark作业命令行参数
 * @method integer getMaxRetries() 获取只对spark流任务生效
 * @method void setMaxRetries(integer $MaxRetries) 设置只对spark流任务生效
 * @method string getDataSource() 获取数据源名
 * @method void setDataSource(string $DataSource) 设置数据源名
 */
class ModifySparkAppRequest extends AbstractModel
{
    /**
     * @var string spark应用名
     */
    public $AppName;

    /**
     * @var integer 1代表spark jar应用，2代表spark streaming应用
     */
    public $AppType;

    /**
     * @var string 执行spark作业的数据引擎
     */
    public $DataEngine;

    /**
     * @var string spark应用的执行入口
     */
    public $AppFile;

    /**
     * @var integer 执行spark作业的角色ID
     */
    public $RoleArn;

    /**
     * @var string spark作业driver资源规格大小, 可取small,medium,large,xlarge
     */
    public $AppDriverSize;

    /**
     * @var string spark作业executor资源规格大小, 可取small,medium,large,xlarge
     */
    public $AppExecutorSize;

    /**
     * @var integer spark作业executor个数
     */
    public $AppExecutorNums;

    /**
     * @var string spark应用Id
     */
    public $SparkAppId;

    /**
     * @var string 该字段已下线，请使用字段Datasource
     */
    public $Eni;

    /**
     * @var string 是否本地上传，可取cos,lakefs
     */
    public $IsLocal;

    /**
     * @var string spark jar作业时的主类
     */
    public $MainClass;

    /**
     * @var string spark配置，以换行符分隔
     */
    public $AppConf;

    /**
     * @var string 是否本地上传，可去cos,lakefs
     */
    public $IsLocalJars;

    /**
     * @var string spark jar作业依赖jars，以逗号分隔
     */
    public $AppJars;

    /**
     * @var string 是否本地上传，可去cos,lakefs
     */
    public $IsLocalFiles;

    /**
     * @var string spark作业依赖资源，以逗号分隔
     */
    public $AppFiles;

    /**
     * @var string spark作业命令行参数
     */
    public $CmdArgs;

    /**
     * @var integer 只对spark流任务生效
     */
    public $MaxRetries;

    /**
     * @var string 数据源名
     */
    public $DataSource;

    /**
     * @param string $AppName spark应用名
     * @param integer $AppType 1代表spark jar应用，2代表spark streaming应用
     * @param string $DataEngine 执行spark作业的数据引擎
     * @param string $AppFile spark应用的执行入口
     * @param integer $RoleArn 执行spark作业的角色ID
     * @param string $AppDriverSize spark作业driver资源规格大小, 可取small,medium,large,xlarge
     * @param string $AppExecutorSize spark作业executor资源规格大小, 可取small,medium,large,xlarge
     * @param integer $AppExecutorNums spark作业executor个数
     * @param string $SparkAppId spark应用Id
     * @param string $Eni 该字段已下线，请使用字段Datasource
     * @param string $IsLocal 是否本地上传，可取cos,lakefs
     * @param string $MainClass spark jar作业时的主类
     * @param string $AppConf spark配置，以换行符分隔
     * @param string $IsLocalJars 是否本地上传，可去cos,lakefs
     * @param string $AppJars spark jar作业依赖jars，以逗号分隔
     * @param string $IsLocalFiles 是否本地上传，可去cos,lakefs
     * @param string $AppFiles spark作业依赖资源，以逗号分隔
     * @param string $CmdArgs spark作业命令行参数
     * @param integer $MaxRetries 只对spark流任务生效
     * @param string $DataSource 数据源名
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

        if (array_key_exists("CmdArgs",$param) and $param["CmdArgs"] !== null) {
            $this->CmdArgs = $param["CmdArgs"];
        }

        if (array_key_exists("MaxRetries",$param) and $param["MaxRetries"] !== null) {
            $this->MaxRetries = $param["MaxRetries"];
        }

        if (array_key_exists("DataSource",$param) and $param["DataSource"] !== null) {
            $this->DataSource = $param["DataSource"];
        }
    }
}
