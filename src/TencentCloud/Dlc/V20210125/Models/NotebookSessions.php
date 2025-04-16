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
 * notebook session列表信息。
 *
 * @method string getKind() 获取类型，当前支持：spark、pyspark、sparkr、sql
 * @method void setKind(string $Kind) 设置类型，当前支持：spark、pyspark、sparkr、sql
 * @method string getSessionId() 获取Session唯一标识
 * @method void setSessionId(string $SessionId) 设置Session唯一标识
 * @method string getProxyUser() 获取代理用户，默认为root
 * @method void setProxyUser(string $ProxyUser) 设置代理用户，默认为root
 * @method string getState() 获取Session状态，包含：not_started（未启动）、starting（已启动）、idle（等待输入）、busy(正在运行statement)、shutting_down（停止）、error（异常）、dead（已退出）、killed（被杀死）、success（正常停止）
 * @method void setState(string $State) 设置Session状态，包含：not_started（未启动）、starting（已启动）、idle（等待输入）、busy(正在运行statement)、shutting_down（停止）、error（异常）、dead（已退出）、killed（被杀死）、success（正常停止）
 * @method string getSparkAppId() 获取Spark任务返回的AppId
 * @method void setSparkAppId(string $SparkAppId) 设置Spark任务返回的AppId
 * @method string getName() 获取Session名称
 * @method void setName(string $Name) 设置Session名称
 * @method string getCreateTime() 获取Session创建时间
 * @method void setCreateTime(string $CreateTime) 设置Session创建时间
 * @method string getDataEngineName() 获取引擎名称
 * @method void setDataEngineName(string $DataEngineName) 设置引擎名称
 * @method string getLastRunningTime() 获取最新的运行时间
 * @method void setLastRunningTime(string $LastRunningTime) 设置最新的运行时间
 * @method string getCreator() 获取创建者
 * @method void setCreator(string $Creator) 设置创建者
 * @method string getSparkUiUrl() 获取spark ui地址
 * @method void setSparkUiUrl(string $SparkUiUrl) 设置spark ui地址
 * @method string getSessionType() 获取session类型，group：资源组session independent：独立资源session，不依赖资源组
 * @method void setSessionType(string $SessionType) 设置session类型，group：资源组session independent：独立资源session，不依赖资源组
 * @method string getDataEngineId() 获取引擎id
 * @method void setDataEngineId(string $DataEngineId) 设置引擎id
 * @method string getResourceGroupId() 获取资源组id
 * @method void setResourceGroupId(string $ResourceGroupId) 设置资源组id
 * @method string getResourceGroupName() 获取资源组名字
 * @method void setResourceGroupName(string $ResourceGroupName) 设置资源组名字
 */
class NotebookSessions extends AbstractModel
{
    /**
     * @var string 类型，当前支持：spark、pyspark、sparkr、sql
     */
    public $Kind;

    /**
     * @var string Session唯一标识
     */
    public $SessionId;

    /**
     * @var string 代理用户，默认为root
     */
    public $ProxyUser;

    /**
     * @var string Session状态，包含：not_started（未启动）、starting（已启动）、idle（等待输入）、busy(正在运行statement)、shutting_down（停止）、error（异常）、dead（已退出）、killed（被杀死）、success（正常停止）
     */
    public $State;

    /**
     * @var string Spark任务返回的AppId
     */
    public $SparkAppId;

    /**
     * @var string Session名称
     */
    public $Name;

    /**
     * @var string Session创建时间
     */
    public $CreateTime;

    /**
     * @var string 引擎名称
     */
    public $DataEngineName;

    /**
     * @var string 最新的运行时间
     */
    public $LastRunningTime;

    /**
     * @var string 创建者
     */
    public $Creator;

    /**
     * @var string spark ui地址
     */
    public $SparkUiUrl;

    /**
     * @var string session类型，group：资源组session independent：独立资源session，不依赖资源组
     */
    public $SessionType;

    /**
     * @var string 引擎id
     */
    public $DataEngineId;

    /**
     * @var string 资源组id
     */
    public $ResourceGroupId;

    /**
     * @var string 资源组名字
     */
    public $ResourceGroupName;

    /**
     * @param string $Kind 类型，当前支持：spark、pyspark、sparkr、sql
     * @param string $SessionId Session唯一标识
     * @param string $ProxyUser 代理用户，默认为root
     * @param string $State Session状态，包含：not_started（未启动）、starting（已启动）、idle（等待输入）、busy(正在运行statement)、shutting_down（停止）、error（异常）、dead（已退出）、killed（被杀死）、success（正常停止）
     * @param string $SparkAppId Spark任务返回的AppId
     * @param string $Name Session名称
     * @param string $CreateTime Session创建时间
     * @param string $DataEngineName 引擎名称
     * @param string $LastRunningTime 最新的运行时间
     * @param string $Creator 创建者
     * @param string $SparkUiUrl spark ui地址
     * @param string $SessionType session类型，group：资源组session independent：独立资源session，不依赖资源组
     * @param string $DataEngineId 引擎id
     * @param string $ResourceGroupId 资源组id
     * @param string $ResourceGroupName 资源组名字
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
        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ProxyUser",$param) and $param["ProxyUser"] !== null) {
            $this->ProxyUser = $param["ProxyUser"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("SparkAppId",$param) and $param["SparkAppId"] !== null) {
            $this->SparkAppId = $param["SparkAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("LastRunningTime",$param) and $param["LastRunningTime"] !== null) {
            $this->LastRunningTime = $param["LastRunningTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("SparkUiUrl",$param) and $param["SparkUiUrl"] !== null) {
            $this->SparkUiUrl = $param["SparkUiUrl"];
        }

        if (array_key_exists("SessionType",$param) and $param["SessionType"] !== null) {
            $this->SessionType = $param["SessionType"];
        }

        if (array_key_exists("DataEngineId",$param) and $param["DataEngineId"] !== null) {
            $this->DataEngineId = $param["DataEngineId"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }
    }
}
