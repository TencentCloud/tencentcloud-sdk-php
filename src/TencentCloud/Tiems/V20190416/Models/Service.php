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
namespace TencentCloud\Tiems\V20190416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getId() 获取服务ID
 * @method void setId(integer $Id) 设置服务ID
 * @method string getCluster() 获取运行集群
 * @method void setCluster(string $Cluster) 设置运行集群
 * @method string getName() 获取服务名称
 * @method void setName(string $Name) 设置服务名称
 * @method string getRuntime() 获取运行环境
 * @method void setRuntime(string $Runtime) 设置运行环境
 * @method string getModelUri() 获取模型地址
 * @method void setModelUri(string $ModelUri) 设置模型地址
 * @method integer getCpu() 获取处理器配置, 单位为1/1000核
 * @method void setCpu(integer $Cpu) 设置处理器配置, 单位为1/1000核
 * @method integer getMemory() 获取内存配置, 单位为1M
 * @method void setMemory(integer $Memory) 设置内存配置, 单位为1M
 * @method integer getTflopUnits() 获取处理器配置, 单位为1/100 tflops
 * @method void setTflopUnits(integer $TflopUnits) 设置处理器配置, 单位为1/100 tflops
 * @method integer getGpuMemory() 获取显存配置, 单位为1M
 * @method void setGpuMemory(integer $GpuMemory) 设置显存配置, 单位为1M
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getScaleMode() 获取支持AUTO, MANUAL
 * @method void setScaleMode(string $ScaleMode) 设置支持AUTO, MANUAL
 * @method Scaler getScaler() 获取弹性伸缩配置
 * @method void setScaler(Scaler $Scaler) 设置弹性伸缩配置
 * @method ServiceStatus getStatus() 获取服务状态
 * @method void setStatus(ServiceStatus $Status) 设置服务状态
 * @method string getServingIp() 获取服务地址
 * @method void setServingIp(string $ServingIp) 设置服务地址
 * @method string getAccessToken() 获取访问密钥
 * @method void setAccessToken(string $AccessToken) 设置访问密钥
 * @method integer getServiceConfigId() 获取服务配置Id
 * @method void setServiceConfigId(integer $ServiceConfigId) 设置服务配置Id
 * @method string getServiceConfigName() 获取服务配置名
 * @method void setServiceConfigName(string $ServiceConfigName) 设置服务配置名
 * @method integer getServeSeconds() 获取服务运行时长
 * @method void setServeSeconds(integer $ServeSeconds) 设置服务运行时长
 * @method string getServiceConfigVersion() 获取配置版本
 * @method void setServiceConfigVersion(string $ServiceConfigVersion) 设置配置版本
 */

/**
 *模型服务
 */
class Service extends AbstractModel
{
    /**
     * @var integer 服务ID
     */
    public $Id;

    /**
     * @var string 运行集群
     */
    public $Cluster;

    /**
     * @var string 服务名称
     */
    public $Name;

    /**
     * @var string 运行环境
     */
    public $Runtime;

    /**
     * @var string 模型地址
     */
    public $ModelUri;

    /**
     * @var integer 处理器配置, 单位为1/1000核
     */
    public $Cpu;

    /**
     * @var integer 内存配置, 单位为1M
     */
    public $Memory;

    /**
     * @var integer 处理器配置, 单位为1/100 tflops
     */
    public $TflopUnits;

    /**
     * @var integer 显存配置, 单位为1M
     */
    public $GpuMemory;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 支持AUTO, MANUAL
     */
    public $ScaleMode;

    /**
     * @var Scaler 弹性伸缩配置
     */
    public $Scaler;

    /**
     * @var ServiceStatus 服务状态
     */
    public $Status;

    /**
     * @var string 服务地址
     */
    public $ServingIp;

    /**
     * @var string 访问密钥
     */
    public $AccessToken;

    /**
     * @var integer 服务配置Id
     */
    public $ServiceConfigId;

    /**
     * @var string 服务配置名
     */
    public $ServiceConfigName;

    /**
     * @var integer 服务运行时长
     */
    public $ServeSeconds;

    /**
     * @var string 配置版本
     */
    public $ServiceConfigVersion;
    /**
     * @param integer $Id 服务ID
     * @param string $Cluster 运行集群
     * @param string $Name 服务名称
     * @param string $Runtime 运行环境
     * @param string $ModelUri 模型地址
     * @param integer $Cpu 处理器配置, 单位为1/1000核
     * @param integer $Memory 内存配置, 单位为1M
     * @param integer $TflopUnits 处理器配置, 单位为1/100 tflops
     * @param integer $GpuMemory 显存配置, 单位为1M
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param string $ScaleMode 支持AUTO, MANUAL
     * @param Scaler $Scaler 弹性伸缩配置
     * @param ServiceStatus $Status 服务状态
     * @param string $ServingIp 服务地址
     * @param string $AccessToken 访问密钥
     * @param integer $ServiceConfigId 服务配置Id
     * @param string $ServiceConfigName 服务配置名
     * @param integer $ServeSeconds 服务运行时长
     * @param string $ServiceConfigVersion 配置版本
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Cluster",$param) and $param["Cluster"] !== null) {
            $this->Cluster = $param["Cluster"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("ModelUri",$param) and $param["ModelUri"] !== null) {
            $this->ModelUri = $param["ModelUri"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("TflopUnits",$param) and $param["TflopUnits"] !== null) {
            $this->TflopUnits = $param["TflopUnits"];
        }

        if (array_key_exists("GpuMemory",$param) and $param["GpuMemory"] !== null) {
            $this->GpuMemory = $param["GpuMemory"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ScaleMode",$param) and $param["ScaleMode"] !== null) {
            $this->ScaleMode = $param["ScaleMode"];
        }

        if (array_key_exists("Scaler",$param) and $param["Scaler"] !== null) {
            $this->Scaler = new Scaler();
            $this->Scaler->deserialize($param["Scaler"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = new ServiceStatus();
            $this->Status->deserialize($param["Status"]);
        }

        if (array_key_exists("ServingIp",$param) and $param["ServingIp"] !== null) {
            $this->ServingIp = $param["ServingIp"];
        }

        if (array_key_exists("AccessToken",$param) and $param["AccessToken"] !== null) {
            $this->AccessToken = $param["AccessToken"];
        }

        if (array_key_exists("ServiceConfigId",$param) and $param["ServiceConfigId"] !== null) {
            $this->ServiceConfigId = $param["ServiceConfigId"];
        }

        if (array_key_exists("ServiceConfigName",$param) and $param["ServiceConfigName"] !== null) {
            $this->ServiceConfigName = $param["ServiceConfigName"];
        }

        if (array_key_exists("ServeSeconds",$param) and $param["ServeSeconds"] !== null) {
            $this->ServeSeconds = $param["ServeSeconds"];
        }

        if (array_key_exists("ServiceConfigVersion",$param) and $param["ServiceConfigVersion"] !== null) {
            $this->ServiceConfigVersion = $param["ServiceConfigVersion"];
        }
    }
}
