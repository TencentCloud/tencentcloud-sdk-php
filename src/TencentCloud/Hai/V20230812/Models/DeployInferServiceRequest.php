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
 * @method ServiceMetaData getServiceMetaData() 获取<p>服务元数据信息，如服务名</p>
 * @method void setServiceMetaData(ServiceMetaData $ServiceMetaData) 设置<p>服务元数据信息，如服务名</p>
 * @method ComputeInfo getComputeInfo() 获取<p>资源相关信息</p>
 * @method void setComputeInfo(ComputeInfo $ComputeInfo) 设置<p>资源相关信息</p>
 * @method array getDeploymentConfigs() 获取<p>服务部署信息</p>
 * @method void setDeploymentConfigs(array $DeploymentConfigs) 设置<p>服务部署信息</p>
 * @method HyperParam getHyperParam() 获取<p>服务超参数配置</p>
 * @method void setHyperParam(HyperParam $HyperParam) 设置<p>服务超参数配置</p>
 * @method NetworkSetting getNetworkSetting() 获取<p>网络设置</p>
 * @method void setNetworkSetting(NetworkSetting $NetworkSetting) 设置<p>网络设置</p>
 * @method string getSecurityType() 获取<p>安全类型</p><p>枚举值：</p><ul><li>STANDARD： 标准推理</li><li>CONFIDENTIAL： 可信推理</li></ul>
 * @method void setSecurityType(string $SecurityType) 设置<p>安全类型</p><p>枚举值：</p><ul><li>STANDARD： 标准推理</li><li>CONFIDENTIAL： 可信推理</li></ul>
 */
class DeployInferServiceRequest extends AbstractModel
{
    /**
     * @var ServiceMetaData <p>服务元数据信息，如服务名</p>
     */
    public $ServiceMetaData;

    /**
     * @var ComputeInfo <p>资源相关信息</p>
     */
    public $ComputeInfo;

    /**
     * @var array <p>服务部署信息</p>
     */
    public $DeploymentConfigs;

    /**
     * @var HyperParam <p>服务超参数配置</p>
     */
    public $HyperParam;

    /**
     * @var NetworkSetting <p>网络设置</p>
     */
    public $NetworkSetting;

    /**
     * @var string <p>安全类型</p><p>枚举值：</p><ul><li>STANDARD： 标准推理</li><li>CONFIDENTIAL： 可信推理</li></ul>
     */
    public $SecurityType;

    /**
     * @param ServiceMetaData $ServiceMetaData <p>服务元数据信息，如服务名</p>
     * @param ComputeInfo $ComputeInfo <p>资源相关信息</p>
     * @param array $DeploymentConfigs <p>服务部署信息</p>
     * @param HyperParam $HyperParam <p>服务超参数配置</p>
     * @param NetworkSetting $NetworkSetting <p>网络设置</p>
     * @param string $SecurityType <p>安全类型</p><p>枚举值：</p><ul><li>STANDARD： 标准推理</li><li>CONFIDENTIAL： 可信推理</li></ul>
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

        if (array_key_exists("SecurityType",$param) and $param["SecurityType"] !== null) {
            $this->SecurityType = $param["SecurityType"];
        }
    }
}
