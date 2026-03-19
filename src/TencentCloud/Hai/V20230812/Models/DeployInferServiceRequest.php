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
 * DeployInferService请求参数结构体
 *
 * @method ServiceMetaData getServiceMetaData() 获取服务元数据信息，如服务名
 * @method void setServiceMetaData(ServiceMetaData $ServiceMetaData) 设置服务元数据信息，如服务名
 * @method ComputeInfo getComputeInfo() 获取资源相关信息
 * @method void setComputeInfo(ComputeInfo $ComputeInfo) 设置资源相关信息
 * @method array getDeploymentConfigs() 获取服务部署信息
 * @method void setDeploymentConfigs(array $DeploymentConfigs) 设置服务部署信息
 * @method HyperParam getHyperParam() 获取服务超参数配置
 * @method void setHyperParam(HyperParam $HyperParam) 设置服务超参数配置
 * @method NetworkSetting getNetworkSetting() 获取网络设置
 * @method void setNetworkSetting(NetworkSetting $NetworkSetting) 设置网络设置
 */
class DeployInferServiceRequest extends AbstractModel
{
    /**
     * @var ServiceMetaData 服务元数据信息，如服务名
     */
    public $ServiceMetaData;

    /**
     * @var ComputeInfo 资源相关信息
     */
    public $ComputeInfo;

    /**
     * @var array 服务部署信息
     */
    public $DeploymentConfigs;

    /**
     * @var HyperParam 服务超参数配置
     */
    public $HyperParam;

    /**
     * @var NetworkSetting 网络设置
     */
    public $NetworkSetting;

    /**
     * @param ServiceMetaData $ServiceMetaData 服务元数据信息，如服务名
     * @param ComputeInfo $ComputeInfo 资源相关信息
     * @param array $DeploymentConfigs 服务部署信息
     * @param HyperParam $HyperParam 服务超参数配置
     * @param NetworkSetting $NetworkSetting 网络设置
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
        if (array_key_exists("ServiceMetaData",$param) and $param["ServiceMetaData"] !== null) {
            $this->ServiceMetaData = new ServiceMetaData();
            $this->ServiceMetaData->deserialize($param["ServiceMetaData"]);
        }

        if (array_key_exists("ComputeInfo",$param) and $param["ComputeInfo"] !== null) {
            $this->ComputeInfo = new ComputeInfo();
            $this->ComputeInfo->deserialize($param["ComputeInfo"]);
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

        if (array_key_exists("NetworkSetting",$param) and $param["NetworkSetting"] !== null) {
            $this->NetworkSetting = new NetworkSetting();
            $this->NetworkSetting->deserialize($param["NetworkSetting"]);
        }
    }
}
