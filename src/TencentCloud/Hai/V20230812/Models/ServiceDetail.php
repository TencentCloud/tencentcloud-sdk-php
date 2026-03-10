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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务详情
 *
 * @method string getServiceId() 获取服务id
 * @method void setServiceId(string $ServiceId) 设置服务id
 * @method string getServiceName() 获取服务名称
 * @method void setServiceName(string $ServiceName) 设置服务名称
 * @method string getServiceState() 获取服务状态
 * @method void setServiceState(string $ServiceState) 设置服务状态
 * @method integer getRunningReplicas() 获取运行中的副本数
 * @method void setRunningReplicas(integer $RunningReplicas) 设置运行中的副本数
 * @method integer getTotalReplicas() 获取期望的副本总数
 * @method void setTotalReplicas(integer $TotalReplicas) 设置期望的副本总数
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method array getComputeSet() 获取算力套餐详情
 * @method void setComputeSet(array $ComputeSet) 设置算力套餐详情
 * @method string getModelName() 获取模型名称
 * @method void setModelName(string $ModelName) 设置模型名称
 * @method array getDeploymentConfigs() 获取服务部署信息
 * @method void setDeploymentConfigs(array $DeploymentConfigs) 设置服务部署信息
 * @method HyperParam getHyperParam() 获取服务超参数配置
 * @method void setHyperParam(HyperParam $HyperParam) 设置服务超参数配置
 */
class ServiceDetail extends AbstractModel
{
    /**
     * @var string 服务id
     */
    public $ServiceId;

    /**
     * @var string 服务名称
     */
    public $ServiceName;

    /**
     * @var string 服务状态
     */
    public $ServiceState;

    /**
     * @var integer 运行中的副本数
     */
    public $RunningReplicas;

    /**
     * @var integer 期望的副本总数
     */
    public $TotalReplicas;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var array 算力套餐详情
     */
    public $ComputeSet;

    /**
     * @var string 模型名称
     */
    public $ModelName;

    /**
     * @var array 服务部署信息
     */
    public $DeploymentConfigs;

    /**
     * @var HyperParam 服务超参数配置
     */
    public $HyperParam;

    /**
     * @param string $ServiceId 服务id
     * @param string $ServiceName 服务名称
     * @param string $ServiceState 服务状态
     * @param integer $RunningReplicas 运行中的副本数
     * @param integer $TotalReplicas 期望的副本总数
     * @param string $CreateTime 创建时间
     * @param array $ComputeSet 算力套餐详情
     * @param string $ModelName 模型名称
     * @param array $DeploymentConfigs 服务部署信息
     * @param HyperParam $HyperParam 服务超参数配置
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceState",$param) and $param["ServiceState"] !== null) {
            $this->ServiceState = $param["ServiceState"];
        }

        if (array_key_exists("RunningReplicas",$param) and $param["RunningReplicas"] !== null) {
            $this->RunningReplicas = $param["RunningReplicas"];
        }

        if (array_key_exists("TotalReplicas",$param) and $param["TotalReplicas"] !== null) {
            $this->TotalReplicas = $param["TotalReplicas"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ComputeSet",$param) and $param["ComputeSet"] !== null) {
            $this->ComputeSet = [];
            foreach ($param["ComputeSet"] as $key => $value){
                $obj = new ComputeDetail();
                $obj->deserialize($value);
                array_push($this->ComputeSet, $obj);
            }
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("DeploymentConfigs",$param) and $param["DeploymentConfigs"] !== null) {
            $this->DeploymentConfigs = [];
            foreach ($param["DeploymentConfigs"] as $key => $value){
                $obj = new DeploymentConfig();
                $obj->deserialize($value);
                array_push($this->DeploymentConfigs, $obj);
            }
        }

        if (array_key_exists("HyperParam",$param) and $param["HyperParam"] !== null) {
            $this->HyperParam = new HyperParam();
            $this->HyperParam->deserialize($param["HyperParam"]);
        }
    }
}
