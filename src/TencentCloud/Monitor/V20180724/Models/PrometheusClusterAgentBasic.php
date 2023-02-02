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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 与云监控融合托管prometheus实例，关联集群基础信息
 *
 * @method string getRegion() 获取集群ID
 * @method void setRegion(string $Region) 设置集群ID
 * @method string getClusterType() 获取集群类型
 * @method void setClusterType(string $ClusterType) 设置集群类型
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method boolean getEnableExternal() 获取是否开启公网CLB
 * @method void setEnableExternal(boolean $EnableExternal) 设置是否开启公网CLB
 * @method PrometheusClusterAgentPodConfig getInClusterPodConfig() 获取集群内部署组件的pod配置
 * @method void setInClusterPodConfig(PrometheusClusterAgentPodConfig $InClusterPodConfig) 设置集群内部署组件的pod配置
 * @method array getExternalLabels() 获取该集群采集的所有指标都会带上这些labels
 * @method void setExternalLabels(array $ExternalLabels) 设置该集群采集的所有指标都会带上这些labels
 * @method boolean getNotInstallBasicScrape() 获取是否安装默认采集配置
 * @method void setNotInstallBasicScrape(boolean $NotInstallBasicScrape) 设置是否安装默认采集配置
 * @method boolean getNotScrape() 获取是否采集指标，true代表drop所有指标，false代表采集默认指标
 * @method void setNotScrape(boolean $NotScrape) 设置是否采集指标，true代表drop所有指标，false代表采集默认指标
 */
class PrometheusClusterAgentBasic extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $Region;

    /**
     * @var string 集群类型
     */
    public $ClusterType;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var boolean 是否开启公网CLB
     */
    public $EnableExternal;

    /**
     * @var PrometheusClusterAgentPodConfig 集群内部署组件的pod配置
     */
    public $InClusterPodConfig;

    /**
     * @var array 该集群采集的所有指标都会带上这些labels
     */
    public $ExternalLabels;

    /**
     * @var boolean 是否安装默认采集配置
     */
    public $NotInstallBasicScrape;

    /**
     * @var boolean 是否采集指标，true代表drop所有指标，false代表采集默认指标
     */
    public $NotScrape;

    /**
     * @param string $Region 集群ID
     * @param string $ClusterType 集群类型
     * @param string $ClusterId 集群ID
     * @param boolean $EnableExternal 是否开启公网CLB
     * @param PrometheusClusterAgentPodConfig $InClusterPodConfig 集群内部署组件的pod配置
     * @param array $ExternalLabels 该集群采集的所有指标都会带上这些labels
     * @param boolean $NotInstallBasicScrape 是否安装默认采集配置
     * @param boolean $NotScrape 是否采集指标，true代表drop所有指标，false代表采集默认指标
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("EnableExternal",$param) and $param["EnableExternal"] !== null) {
            $this->EnableExternal = $param["EnableExternal"];
        }

        if (array_key_exists("InClusterPodConfig",$param) and $param["InClusterPodConfig"] !== null) {
            $this->InClusterPodConfig = new PrometheusClusterAgentPodConfig();
            $this->InClusterPodConfig->deserialize($param["InClusterPodConfig"]);
        }

        if (array_key_exists("ExternalLabels",$param) and $param["ExternalLabels"] !== null) {
            $this->ExternalLabels = [];
            foreach ($param["ExternalLabels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->ExternalLabels, $obj);
            }
        }

        if (array_key_exists("NotInstallBasicScrape",$param) and $param["NotInstallBasicScrape"] !== null) {
            $this->NotInstallBasicScrape = $param["NotInstallBasicScrape"];
        }

        if (array_key_exists("NotScrape",$param) and $param["NotScrape"] !== null) {
            $this->NotScrape = $param["NotScrape"];
        }
    }
}
