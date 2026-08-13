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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateClusterEndpoint请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getSubnetId() 获取<p>集群端口所在的子网ID  (仅在开启非外网访问时需要填，必须为集群所在VPC内的子网)。获取方式：https://cloud.tencent.com/document/product/215/15784</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>集群端口所在的子网ID  (仅在开启非外网访问时需要填，必须为集群所在VPC内的子网)。获取方式：https://cloud.tencent.com/document/product/215/15784</p>
 * @method boolean getIsExtranet() 获取<p>是否为外网访问（TRUE 外网访问 FALSE 内网访问，默认值： FALSE）</p>
 * @method void setIsExtranet(boolean $IsExtranet) 设置<p>是否为外网访问（TRUE 外网访问 FALSE 内网访问，默认值： FALSE）</p>
 * @method string getDomain() 获取<p>设置域名</p>
 * @method void setDomain(string $Domain) 设置<p>设置域名</p>
 * @method string getSecurityGroup() 获取<p>使用的安全组（开启内外网访问且不使用已有clb时可传，内网访问需要先找clb侧加白使用）。获取方式：https://cloud.tencent.com/document/api/215/15808</p>
 * @method void setSecurityGroup(string $SecurityGroup) 设置<p>使用的安全组（开启内外网访问且不使用已有clb时可传，内网访问需要先找clb侧加白使用）。获取方式：https://cloud.tencent.com/document/api/215/15808</p>
 * @method string getExtensiveParameters() 获取<p>创建lb参数，只有外网访问需要设置，是一个json格式化后的字符串：{&quot;InternetAccessible&quot;:{&quot;InternetChargeType&quot;:&quot;TRAFFIC_POSTPAID_BY_HOUR&quot;,&quot;InternetMaxBandwidthOut&quot;:200},&quot;VipIsp&quot;:&quot;&quot;,&quot;BandwidthPackageId&quot;:&quot;&quot;}。<br>各个参数意义：<br>InternetAccessible.InternetChargeType含义：TRAFFIC_POSTPAID_BY_HOUR按流量按小时后计费;BANDWIDTH_POSTPAID_BY_HOUR 按带宽按小时后计费;InternetAccessible.BANDWIDTH_PACKAGE 按带宽包计费。<br>InternetMaxBandwidthOut含义：最大出带宽，单位Mbps，范围支持0到2048，默认值10。<br>VipIsp含义：CMCC | CTCC | CUCC，分别对应 移动 | 电信 | 联通，如果不指定本参数，则默认使用BGP。可通过 DescribeSingleIsp 接口查询一个地域所支持的Isp。如果指定运营商，则网络计费式只能使用按带宽包计费BANDWIDTH_PACKAGE。<br>BandwidthPackageId含义：带宽包ID，指定此参数时，网络计费方式InternetAccessible.InternetChargeType只支持按带宽包计费BANDWIDTH_PACKAGE。</p>
 * @method void setExtensiveParameters(string $ExtensiveParameters) 设置<p>创建lb参数，只有外网访问需要设置，是一个json格式化后的字符串：{&quot;InternetAccessible&quot;:{&quot;InternetChargeType&quot;:&quot;TRAFFIC_POSTPAID_BY_HOUR&quot;,&quot;InternetMaxBandwidthOut&quot;:200},&quot;VipIsp&quot;:&quot;&quot;,&quot;BandwidthPackageId&quot;:&quot;&quot;}。<br>各个参数意义：<br>InternetAccessible.InternetChargeType含义：TRAFFIC_POSTPAID_BY_HOUR按流量按小时后计费;BANDWIDTH_POSTPAID_BY_HOUR 按带宽按小时后计费;InternetAccessible.BANDWIDTH_PACKAGE 按带宽包计费。<br>InternetMaxBandwidthOut含义：最大出带宽，单位Mbps，范围支持0到2048，默认值10。<br>VipIsp含义：CMCC | CTCC | CUCC，分别对应 移动 | 电信 | 联通，如果不指定本参数，则默认使用BGP。可通过 DescribeSingleIsp 接口查询一个地域所支持的Isp。如果指定运营商，则网络计费式只能使用按带宽包计费BANDWIDTH_PACKAGE。<br>BandwidthPackageId含义：带宽包ID，指定此参数时，网络计费方式InternetAccessible.InternetChargeType只支持按带宽包计费BANDWIDTH_PACKAGE。</p>
 * @method string getExistedLoadBalancerId() 获取<p>使用已有clb开启内网或外网访问</p>
 * @method void setExistedLoadBalancerId(string $ExistedLoadBalancerId) 设置<p>使用已有clb开启内网或外网访问</p>
 */
class CreateClusterEndpointRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>集群端口所在的子网ID  (仅在开启非外网访问时需要填，必须为集群所在VPC内的子网)。获取方式：https://cloud.tencent.com/document/product/215/15784</p>
     */
    public $SubnetId;

    /**
     * @var boolean <p>是否为外网访问（TRUE 外网访问 FALSE 内网访问，默认值： FALSE）</p>
     */
    public $IsExtranet;

    /**
     * @var string <p>设置域名</p>
     */
    public $Domain;

    /**
     * @var string <p>使用的安全组（开启内外网访问且不使用已有clb时可传，内网访问需要先找clb侧加白使用）。获取方式：https://cloud.tencent.com/document/api/215/15808</p>
     */
    public $SecurityGroup;

    /**
     * @var string <p>创建lb参数，只有外网访问需要设置，是一个json格式化后的字符串：{&quot;InternetAccessible&quot;:{&quot;InternetChargeType&quot;:&quot;TRAFFIC_POSTPAID_BY_HOUR&quot;,&quot;InternetMaxBandwidthOut&quot;:200},&quot;VipIsp&quot;:&quot;&quot;,&quot;BandwidthPackageId&quot;:&quot;&quot;}。<br>各个参数意义：<br>InternetAccessible.InternetChargeType含义：TRAFFIC_POSTPAID_BY_HOUR按流量按小时后计费;BANDWIDTH_POSTPAID_BY_HOUR 按带宽按小时后计费;InternetAccessible.BANDWIDTH_PACKAGE 按带宽包计费。<br>InternetMaxBandwidthOut含义：最大出带宽，单位Mbps，范围支持0到2048，默认值10。<br>VipIsp含义：CMCC | CTCC | CUCC，分别对应 移动 | 电信 | 联通，如果不指定本参数，则默认使用BGP。可通过 DescribeSingleIsp 接口查询一个地域所支持的Isp。如果指定运营商，则网络计费式只能使用按带宽包计费BANDWIDTH_PACKAGE。<br>BandwidthPackageId含义：带宽包ID，指定此参数时，网络计费方式InternetAccessible.InternetChargeType只支持按带宽包计费BANDWIDTH_PACKAGE。</p>
     */
    public $ExtensiveParameters;

    /**
     * @var string <p>使用已有clb开启内网或外网访问</p>
     */
    public $ExistedLoadBalancerId;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param string $SubnetId <p>集群端口所在的子网ID  (仅在开启非外网访问时需要填，必须为集群所在VPC内的子网)。获取方式：https://cloud.tencent.com/document/product/215/15784</p>
     * @param boolean $IsExtranet <p>是否为外网访问（TRUE 外网访问 FALSE 内网访问，默认值： FALSE）</p>
     * @param string $Domain <p>设置域名</p>
     * @param string $SecurityGroup <p>使用的安全组（开启内外网访问且不使用已有clb时可传，内网访问需要先找clb侧加白使用）。获取方式：https://cloud.tencent.com/document/api/215/15808</p>
     * @param string $ExtensiveParameters <p>创建lb参数，只有外网访问需要设置，是一个json格式化后的字符串：{&quot;InternetAccessible&quot;:{&quot;InternetChargeType&quot;:&quot;TRAFFIC_POSTPAID_BY_HOUR&quot;,&quot;InternetMaxBandwidthOut&quot;:200},&quot;VipIsp&quot;:&quot;&quot;,&quot;BandwidthPackageId&quot;:&quot;&quot;}。<br>各个参数意义：<br>InternetAccessible.InternetChargeType含义：TRAFFIC_POSTPAID_BY_HOUR按流量按小时后计费;BANDWIDTH_POSTPAID_BY_HOUR 按带宽按小时后计费;InternetAccessible.BANDWIDTH_PACKAGE 按带宽包计费。<br>InternetMaxBandwidthOut含义：最大出带宽，单位Mbps，范围支持0到2048，默认值10。<br>VipIsp含义：CMCC | CTCC | CUCC，分别对应 移动 | 电信 | 联通，如果不指定本参数，则默认使用BGP。可通过 DescribeSingleIsp 接口查询一个地域所支持的Isp。如果指定运营商，则网络计费式只能使用按带宽包计费BANDWIDTH_PACKAGE。<br>BandwidthPackageId含义：带宽包ID，指定此参数时，网络计费方式InternetAccessible.InternetChargeType只支持按带宽包计费BANDWIDTH_PACKAGE。</p>
     * @param string $ExistedLoadBalancerId <p>使用已有clb开启内网或外网访问</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("IsExtranet",$param) and $param["IsExtranet"] !== null) {
            $this->IsExtranet = $param["IsExtranet"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("ExtensiveParameters",$param) and $param["ExtensiveParameters"] !== null) {
            $this->ExtensiveParameters = $param["ExtensiveParameters"];
        }

        if (array_key_exists("ExistedLoadBalancerId",$param) and $param["ExistedLoadBalancerId"] !== null) {
            $this->ExistedLoadBalancerId = $param["ExistedLoadBalancerId"];
        }
    }
}
