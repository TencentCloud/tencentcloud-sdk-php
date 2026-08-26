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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 与腾讯云可观测平台融合托管 Prometheus 实例，关联集群基础信息
 *
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method string getClusterType() 获取<p>集群类型。可填入tke、eks、tkeedge、tdcc、external，分别代表标准集群、弹性集群、边缘集群、注册集群 和外部集群</p>
 * @method void setClusterType(string $ClusterType) 设置<p>集群类型。可填入tke、eks、tkeedge、tdcc、external，分别代表标准集群、弹性集群、边缘集群、注册集群 和外部集群</p>
 * @method string getClusterId() 获取<p>集群 ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群 ID</p>
 * @method boolean getEnableExternal() 获取<p>是否开启公网 CLB</p>
 * @method void setEnableExternal(boolean $EnableExternal) 设置<p>是否开启公网 CLB</p>
 * @method PrometheusClusterAgentPodConfig getInClusterPodConfig() 获取<p>集群内部署组件的pod 配置</p>
 * @method void setInClusterPodConfig(PrometheusClusterAgentPodConfig $InClusterPodConfig) 设置<p>集群内部署组件的pod 配置</p>
 * @method array getExternalLabels() 获取<p>该集群采集的所有指标都会带上这些labels</p>
 * @method void setExternalLabels(array $ExternalLabels) 设置<p>该集群采集的所有指标都会带上这些labels</p>
 * @method boolean getNotInstallBasicScrape() 获取<p>是否安装默认采集 exporter 和采集配置</p>
 * @method void setNotInstallBasicScrape(boolean $NotInstallBasicScrape) 设置<p>是否安装默认采集 exporter 和采集配置</p>
 * @method boolean getNotScrape() 获取<p>是否安装采集配置，true 只安装采集 exporter 不会安装采集配置，false 会同时安装采集配置</p>
 * @method void setNotScrape(boolean $NotScrape) 设置<p>是否安装采集配置，true 只安装采集 exporter 不会安装采集配置，false 会同时安装采集配置</p>
 * @method boolean getDropAll() 获取<p>是否丢弃所有指标，true 代表丢弃所有指标，false 代表采集默认指标</p>
 * @method void setDropAll(boolean $DropAll) 设置<p>是否丢弃所有指标，true 代表丢弃所有指标，false 代表采集默认指标</p>
 * @method boolean getCollectAll() 获取<p>是否采集全部指标</p><p>枚举值：</p><ul><li>false： 不采集</li><li>true： 采集</li></ul><p>默认值：false</p>
 * @method void setCollectAll(boolean $CollectAll) 设置<p>是否采集全部指标</p><p>枚举值：</p><ul><li>false： 不采集</li><li>true： 采集</li></ul><p>默认值：false</p>
 * @method boolean getOpenDefaultRecord() 获取<p>是否开启默认预聚合规则</p>
 * @method void setOpenDefaultRecord(boolean $OpenDefaultRecord) 设置<p>是否开启默认预聚合规则</p>
 */
class PrometheusClusterAgentBasic extends AbstractModel
{
    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var string <p>集群类型。可填入tke、eks、tkeedge、tdcc、external，分别代表标准集群、弹性集群、边缘集群、注册集群 和外部集群</p>
     */
    public $ClusterType;

    /**
     * @var string <p>集群 ID</p>
     */
    public $ClusterId;

    /**
     * @var boolean <p>是否开启公网 CLB</p>
     */
    public $EnableExternal;

    /**
     * @var PrometheusClusterAgentPodConfig <p>集群内部署组件的pod 配置</p>
     */
    public $InClusterPodConfig;

    /**
     * @var array <p>该集群采集的所有指标都会带上这些labels</p>
     */
    public $ExternalLabels;

    /**
     * @var boolean <p>是否安装默认采集 exporter 和采集配置</p>
     */
    public $NotInstallBasicScrape;

    /**
     * @var boolean <p>是否安装采集配置，true 只安装采集 exporter 不会安装采集配置，false 会同时安装采集配置</p>
     */
    public $NotScrape;

    /**
     * @var boolean <p>是否丢弃所有指标，true 代表丢弃所有指标，false 代表采集默认指标</p>
     */
    public $DropAll;

    /**
     * @var boolean <p>是否采集全部指标</p><p>枚举值：</p><ul><li>false： 不采集</li><li>true： 采集</li></ul><p>默认值：false</p>
     */
    public $CollectAll;

    /**
     * @var boolean <p>是否开启默认预聚合规则</p>
     */
    public $OpenDefaultRecord;

    /**
     * @param string $Region <p>地域</p>
     * @param string $ClusterType <p>集群类型。可填入tke、eks、tkeedge、tdcc、external，分别代表标准集群、弹性集群、边缘集群、注册集群 和外部集群</p>
     * @param string $ClusterId <p>集群 ID</p>
     * @param boolean $EnableExternal <p>是否开启公网 CLB</p>
     * @param PrometheusClusterAgentPodConfig $InClusterPodConfig <p>集群内部署组件的pod 配置</p>
     * @param array $ExternalLabels <p>该集群采集的所有指标都会带上这些labels</p>
     * @param boolean $NotInstallBasicScrape <p>是否安装默认采集 exporter 和采集配置</p>
     * @param boolean $NotScrape <p>是否安装采集配置，true 只安装采集 exporter 不会安装采集配置，false 会同时安装采集配置</p>
     * @param boolean $DropAll <p>是否丢弃所有指标，true 代表丢弃所有指标，false 代表采集默认指标</p>
     * @param boolean $CollectAll <p>是否采集全部指标</p><p>枚举值：</p><ul><li>false： 不采集</li><li>true： 采集</li></ul><p>默认值：false</p>
     * @param boolean $OpenDefaultRecord <p>是否开启默认预聚合规则</p>
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

        if (array_key_exists("DropAll",$param) and $param["DropAll"] !== null) {
            $this->DropAll = $param["DropAll"];
        }

        if (array_key_exists("CollectAll",$param) and $param["CollectAll"] !== null) {
            $this->CollectAll = $param["CollectAll"];
        }

        if (array_key_exists("OpenDefaultRecord",$param) and $param["OpenDefaultRecord"] !== null) {
            $this->OpenDefaultRecord = $param["OpenDefaultRecord"];
        }
    }
}
