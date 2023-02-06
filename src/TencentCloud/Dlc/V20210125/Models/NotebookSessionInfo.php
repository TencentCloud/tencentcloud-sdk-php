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
 * Notebook Session详细信息。
 *
 * @method string getName() 获取Session名称
 * @method void setName(string $Name) 设置Session名称
 * @method string getKind() 获取类型，当前支持：spark、pyspark、sparkr、sql
 * @method void setKind(string $Kind) 设置类型，当前支持：spark、pyspark、sparkr、sql
 * @method string getDataEngineName() 获取DLC Spark作业引擎名称
 * @method void setDataEngineName(string $DataEngineName) 设置DLC Spark作业引擎名称
 * @method array getArguments() 获取Session相关配置，当前支持：eni、roleArn以及用户指定的配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArguments(array $Arguments) 设置Session相关配置，当前支持：eni、roleArn以及用户指定的配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProgramDependentFiles() 获取运行程序地址，当前支持：cosn://和lakefs://两种路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgramDependentFiles(array $ProgramDependentFiles) 设置运行程序地址，当前支持：cosn://和lakefs://两种路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProgramDependentJars() 获取依赖的jar程序地址，当前支持：cosn://和lakefs://两种路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgramDependentJars(array $ProgramDependentJars) 设置依赖的jar程序地址，当前支持：cosn://和lakefs://两种路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProgramDependentPython() 获取依赖的python程序地址，当前支持：cosn://和lakefs://两种路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgramDependentPython(array $ProgramDependentPython) 设置依赖的python程序地址，当前支持：cosn://和lakefs://两种路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProgramArchives() 获取依赖的pyspark虚拟环境地址，当前支持：cosn://和lakefs://两种路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgramArchives(array $ProgramArchives) 设置依赖的pyspark虚拟环境地址，当前支持：cosn://和lakefs://两种路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDriverSize() 获取指定的Driver规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDriverSize(string $DriverSize) 设置指定的Driver规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorSize() 获取指定的Executor规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorSize(string $ExecutorSize) 设置指定的Executor规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExecutorNumbers() 获取指定的Executor数量，默认为1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorNumbers(integer $ExecutorNumbers) 设置指定的Executor数量，默认为1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProxyUser() 获取代理用户，默认为root
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyUser(string $ProxyUser) 设置代理用户，默认为root
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeoutInSecond() 获取指定的Session超时时间，单位秒，默认3600秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeoutInSecond(integer $TimeoutInSecond) 设置指定的Session超时时间，单位秒，默认3600秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSparkAppId() 获取Spark任务返回的AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSparkAppId(string $SparkAppId) 设置Spark任务返回的AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionId() 获取Session唯一标识
 * @method void setSessionId(string $SessionId) 设置Session唯一标识
 * @method string getState() 获取Session状态，包含：not_started（未启动）、starting（已启动）、idle（等待输入）、busy(正在运行statement)、shutting_down（停止）、error（异常）、dead（已退出）、killed（被杀死）、success（正常停止）
 * @method void setState(string $State) 设置Session状态，包含：not_started（未启动）、starting（已启动）、idle（等待输入）、busy(正在运行statement)、shutting_down（停止）、error（异常）、dead（已退出）、killed（被杀死）、success（正常停止）
 * @method string getCreateTime() 获取Session创建时间
 * @method void setCreateTime(string $CreateTime) 设置Session创建时间
 * @method array getAppInfo() 获取其它信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppInfo(array $AppInfo) 设置其它信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSparkUiUrl() 获取Spark ui地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSparkUiUrl(string $SparkUiUrl) 设置Spark ui地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExecutorMaxNumbers() 获取指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于ExecutorNumbers
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorMaxNumbers(integer $ExecutorMaxNumbers) 设置指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于ExecutorNumbers
注意：此字段可能返回 null，表示取不到有效值。
 */
class NotebookSessionInfo extends AbstractModel
{
    /**
     * @var string Session名称
     */
    public $Name;

    /**
     * @var string 类型，当前支持：spark、pyspark、sparkr、sql
     */
    public $Kind;

    /**
     * @var string DLC Spark作业引擎名称
     */
    public $DataEngineName;

    /**
     * @var array Session相关配置，当前支持：eni、roleArn以及用户指定的配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Arguments;

    /**
     * @var array 运行程序地址，当前支持：cosn://和lakefs://两种路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProgramDependentFiles;

    /**
     * @var array 依赖的jar程序地址，当前支持：cosn://和lakefs://两种路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProgramDependentJars;

    /**
     * @var array 依赖的python程序地址，当前支持：cosn://和lakefs://两种路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProgramDependentPython;

    /**
     * @var array 依赖的pyspark虚拟环境地址，当前支持：cosn://和lakefs://两种路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProgramArchives;

    /**
     * @var string 指定的Driver规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DriverSize;

    /**
     * @var string 指定的Executor规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorSize;

    /**
     * @var integer 指定的Executor数量，默认为1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorNumbers;

    /**
     * @var string 代理用户，默认为root
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyUser;

    /**
     * @var integer 指定的Session超时时间，单位秒，默认3600秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeoutInSecond;

    /**
     * @var string Spark任务返回的AppId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SparkAppId;

    /**
     * @var string Session唯一标识
     */
    public $SessionId;

    /**
     * @var string Session状态，包含：not_started（未启动）、starting（已启动）、idle（等待输入）、busy(正在运行statement)、shutting_down（停止）、error（异常）、dead（已退出）、killed（被杀死）、success（正常停止）
     */
    public $State;

    /**
     * @var string Session创建时间
     */
    public $CreateTime;

    /**
     * @var array 其它信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppInfo;

    /**
     * @var string Spark ui地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SparkUiUrl;

    /**
     * @var integer 指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于ExecutorNumbers
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorMaxNumbers;

    /**
     * @param string $Name Session名称
     * @param string $Kind 类型，当前支持：spark、pyspark、sparkr、sql
     * @param string $DataEngineName DLC Spark作业引擎名称
     * @param array $Arguments Session相关配置，当前支持：eni、roleArn以及用户指定的配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProgramDependentFiles 运行程序地址，当前支持：cosn://和lakefs://两种路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProgramDependentJars 依赖的jar程序地址，当前支持：cosn://和lakefs://两种路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProgramDependentPython 依赖的python程序地址，当前支持：cosn://和lakefs://两种路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProgramArchives 依赖的pyspark虚拟环境地址，当前支持：cosn://和lakefs://两种路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DriverSize 指定的Driver规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorSize 指定的Executor规格，当前支持：small（默认，1cu）、medium（2cu）、large（4cu）、xlarge（8cu）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExecutorNumbers 指定的Executor数量，默认为1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProxyUser 代理用户，默认为root
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimeoutInSecond 指定的Session超时时间，单位秒，默认3600秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SparkAppId Spark任务返回的AppId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionId Session唯一标识
     * @param string $State Session状态，包含：not_started（未启动）、starting（已启动）、idle（等待输入）、busy(正在运行statement)、shutting_down（停止）、error（异常）、dead（已退出）、killed（被杀死）、success（正常停止）
     * @param string $CreateTime Session创建时间
     * @param array $AppInfo 其它信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SparkUiUrl Spark ui地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExecutorMaxNumbers 指定的Executor数量（最大值），默认为1，当开启动态分配有效，若未开启，则该值等于ExecutorNumbers
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("Arguments",$param) and $param["Arguments"] !== null) {
            $this->Arguments = [];
            foreach ($param["Arguments"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Arguments, $obj);
            }
        }

        if (array_key_exists("ProgramDependentFiles",$param) and $param["ProgramDependentFiles"] !== null) {
            $this->ProgramDependentFiles = $param["ProgramDependentFiles"];
        }

        if (array_key_exists("ProgramDependentJars",$param) and $param["ProgramDependentJars"] !== null) {
            $this->ProgramDependentJars = $param["ProgramDependentJars"];
        }

        if (array_key_exists("ProgramDependentPython",$param) and $param["ProgramDependentPython"] !== null) {
            $this->ProgramDependentPython = $param["ProgramDependentPython"];
        }

        if (array_key_exists("ProgramArchives",$param) and $param["ProgramArchives"] !== null) {
            $this->ProgramArchives = $param["ProgramArchives"];
        }

        if (array_key_exists("DriverSize",$param) and $param["DriverSize"] !== null) {
            $this->DriverSize = $param["DriverSize"];
        }

        if (array_key_exists("ExecutorSize",$param) and $param["ExecutorSize"] !== null) {
            $this->ExecutorSize = $param["ExecutorSize"];
        }

        if (array_key_exists("ExecutorNumbers",$param) and $param["ExecutorNumbers"] !== null) {
            $this->ExecutorNumbers = $param["ExecutorNumbers"];
        }

        if (array_key_exists("ProxyUser",$param) and $param["ProxyUser"] !== null) {
            $this->ProxyUser = $param["ProxyUser"];
        }

        if (array_key_exists("TimeoutInSecond",$param) and $param["TimeoutInSecond"] !== null) {
            $this->TimeoutInSecond = $param["TimeoutInSecond"];
        }

        if (array_key_exists("SparkAppId",$param) and $param["SparkAppId"] !== null) {
            $this->SparkAppId = $param["SparkAppId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AppInfo",$param) and $param["AppInfo"] !== null) {
            $this->AppInfo = [];
            foreach ($param["AppInfo"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->AppInfo, $obj);
            }
        }

        if (array_key_exists("SparkUiUrl",$param) and $param["SparkUiUrl"] !== null) {
            $this->SparkUiUrl = $param["SparkUiUrl"];
        }

        if (array_key_exists("ExecutorMaxNumbers",$param) and $param["ExecutorMaxNumbers"] !== null) {
            $this->ExecutorMaxNumbers = $param["ExecutorMaxNumbers"];
        }
    }
}
