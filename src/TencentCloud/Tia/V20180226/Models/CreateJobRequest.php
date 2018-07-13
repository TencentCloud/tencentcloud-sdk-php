<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Tia\V20180226\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getName() 获取任务名称
 * @method void setName(string $Name) 设置任务名称
 * @method string getCluster() 获取运行任务的集群
 * @method void setCluster(string $Cluster) 设置运行任务的集群
 * @method string getRuntimeVersion() 获取运行任务的环境
 * @method void setRuntimeVersion(string $RuntimeVersion) 设置运行任务的环境
 * @method array getPackageDir() 获取挂载的路径，支持nfs,cos(cos只在tia运行环境中支持)
 * @method void setPackageDir(array $PackageDir) 设置挂载的路径，支持nfs,cos(cos只在tia运行环境中支持)
 * @method array getCommand() 获取任务启动命令
 * @method void setCommand(array $Command) 设置任务启动命令
 * @method array getArgs() 获取任务启动参数
 * @method void setArgs(array $Args) 设置任务启动参数
 * @method string getScaleTier() 获取运行任务的配置信息
 * @method void setScaleTier(string $ScaleTier) 设置运行任务的配置信息
 * @method string getMasterType() 获取（ScaleTier为Custom时）master机器类型
 * @method void setMasterType(string $MasterType) 设置（ScaleTier为Custom时）master机器类型
 * @method string getWorkerType() 获取（ScaleTier为Custom时）worker机器类型
 * @method void setWorkerType(string $WorkerType) 设置（ScaleTier为Custom时）worker机器类型
 * @method string getParameterServerType() 获取（ScaleTier为Custom时）parameter server机器类型
 * @method void setParameterServerType(string $ParameterServerType) 设置（ScaleTier为Custom时）parameter server机器类型
 * @method integer getWorkerCount() 获取（ScaleTier为Custom时）worker机器数量
 * @method void setWorkerCount(integer $WorkerCount) 设置（ScaleTier为Custom时）worker机器数量
 * @method integer getParameterServerCount() 获取（ScaleTier为Custom时）parameter server机器数量
 * @method void setParameterServerCount(integer $ParameterServerCount) 设置（ScaleTier为Custom时）parameter server机器数量
 * @method boolean getDebug() 获取启动debug mode，默认为false
 * @method void setDebug(boolean $Debug) 设置启动debug mode，默认为false
 */

/**
 *CreateJob请求参数结构体
 */
class CreateJobRequest extends AbstractModel
{
    /**
     * @var string 任务名称
     */
    public $Name;

    /**
     * @var string 运行任务的集群
     */
    public $Cluster;

    /**
     * @var string 运行任务的环境
     */
    public $RuntimeVersion;

    /**
     * @var array 挂载的路径，支持nfs,cos(cos只在tia运行环境中支持)
     */
    public $PackageDir;

    /**
     * @var array 任务启动命令
     */
    public $Command;

    /**
     * @var array 任务启动参数
     */
    public $Args;

    /**
     * @var string 运行任务的配置信息
     */
    public $ScaleTier;

    /**
     * @var string （ScaleTier为Custom时）master机器类型
     */
    public $MasterType;

    /**
     * @var string （ScaleTier为Custom时）worker机器类型
     */
    public $WorkerType;

    /**
     * @var string （ScaleTier为Custom时）parameter server机器类型
     */
    public $ParameterServerType;

    /**
     * @var integer （ScaleTier为Custom时）worker机器数量
     */
    public $WorkerCount;

    /**
     * @var integer （ScaleTier为Custom时）parameter server机器数量
     */
    public $ParameterServerCount;

    /**
     * @var boolean 启动debug mode，默认为false
     */
    public $Debug;
    /**
     * @param string $Name 任务名称
     * @param string $Cluster 运行任务的集群
     * @param string $RuntimeVersion 运行任务的环境
     * @param array $PackageDir 挂载的路径，支持nfs,cos(cos只在tia运行环境中支持)
     * @param array $Command 任务启动命令
     * @param array $Args 任务启动参数
     * @param string $ScaleTier 运行任务的配置信息
     * @param string $MasterType （ScaleTier为Custom时）master机器类型
     * @param string $WorkerType （ScaleTier为Custom时）worker机器类型
     * @param string $ParameterServerType （ScaleTier为Custom时）parameter server机器类型
     * @param integer $WorkerCount （ScaleTier为Custom时）worker机器数量
     * @param integer $ParameterServerCount （ScaleTier为Custom时）parameter server机器数量
     * @param boolean $Debug 启动debug mode，默认为false
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Cluster",$param) and $param["Cluster"] !== null) {
            $this->Cluster = $param["Cluster"];
        }

        if (array_key_exists("RuntimeVersion",$param) and $param["RuntimeVersion"] !== null) {
            $this->RuntimeVersion = $param["RuntimeVersion"];
        }

        if (array_key_exists("PackageDir",$param) and $param["PackageDir"] !== null) {
            $this->PackageDir = $param["PackageDir"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("Args",$param) and $param["Args"] !== null) {
            $this->Args = $param["Args"];
        }

        if (array_key_exists("ScaleTier",$param) and $param["ScaleTier"] !== null) {
            $this->ScaleTier = $param["ScaleTier"];
        }

        if (array_key_exists("MasterType",$param) and $param["MasterType"] !== null) {
            $this->MasterType = $param["MasterType"];
        }

        if (array_key_exists("WorkerType",$param) and $param["WorkerType"] !== null) {
            $this->WorkerType = $param["WorkerType"];
        }

        if (array_key_exists("ParameterServerType",$param) and $param["ParameterServerType"] !== null) {
            $this->ParameterServerType = $param["ParameterServerType"];
        }

        if (array_key_exists("WorkerCount",$param) and $param["WorkerCount"] !== null) {
            $this->WorkerCount = $param["WorkerCount"];
        }

        if (array_key_exists("ParameterServerCount",$param) and $param["ParameterServerCount"] !== null) {
            $this->ParameterServerCount = $param["ParameterServerCount"];
        }

        if (array_key_exists("Debug",$param) and $param["Debug"] !== null) {
            $this->Debug = $param["Debug"];
        }
    }
}
