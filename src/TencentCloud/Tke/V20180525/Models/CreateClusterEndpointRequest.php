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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateClusterEndpoint请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getSubnetId() 获取集群端口所在的子网ID  (仅在开启非外网访问时需要填，必须为集群所在VPC内的子网)
 * @method void setSubnetId(string $SubnetId) 设置集群端口所在的子网ID  (仅在开启非外网访问时需要填，必须为集群所在VPC内的子网)
 * @method boolean getIsExtranet() 获取是否为外网访问（TRUE 外网访问 FALSE 内网访问，默认值： FALSE）
 * @method void setIsExtranet(boolean $IsExtranet) 设置是否为外网访问（TRUE 外网访问 FALSE 内网访问，默认值： FALSE）
 * @method string getDomain() 获取设置域名
 * @method void setDomain(string $Domain) 设置设置域名
 * @method string getSecurityGroup() 获取使用的安全组，只有外网访问需要传递（开启外网访问时必传）
 * @method void setSecurityGroup(string $SecurityGroup) 设置使用的安全组，只有外网访问需要传递（开启外网访问时必传）
 * @method string getExtensiveParameters() 获取创建lb参数，只有外网访问需要设置，是一个json格式化后的字符串：{"InternetAccessible":{"InternetChargeType":"TRAFFIC_POSTPAID_BY_HOUR","InternetMaxBandwidthOut":"200"},"VipIsp":"","BandwidthPackageId":""}。
各个参数意义：
InternetAccessible.InternetChargeType含义：TRAFFIC_POSTPAID_BY_HOUR按流量按小时后计费;BANDWIDTH_POSTPAID_BY_HOUR 按带宽按小时后计费;InternetAccessible.BANDWIDTH_PACKAGE 按带宽包计费。
InternetMaxBandwidthOut含义：最大出带宽，单位Mbps，范围支持0到2048，默认值10。
VipIsp含义：CMCC | CTCC | CUCC，分别对应 移动 | 电信 | 联通，如果不指定本参数，则默认使用BGP。可通过 DescribeSingleIsp 接口查询一个地域所支持的Isp。如果指定运营商，则网络计费式只能使用按带宽包计费(BANDWIDTH_PACKAGE)。
BandwidthPackageId含义：带宽包ID，指定此参数时，网络计费方式（InternetAccessible.InternetChargeType）只支持按带宽包计费（BANDWIDTH_PACKAGE。
 * @method void setExtensiveParameters(string $ExtensiveParameters) 设置创建lb参数，只有外网访问需要设置，是一个json格式化后的字符串：{"InternetAccessible":{"InternetChargeType":"TRAFFIC_POSTPAID_BY_HOUR","InternetMaxBandwidthOut":"200"},"VipIsp":"","BandwidthPackageId":""}。
各个参数意义：
InternetAccessible.InternetChargeType含义：TRAFFIC_POSTPAID_BY_HOUR按流量按小时后计费;BANDWIDTH_POSTPAID_BY_HOUR 按带宽按小时后计费;InternetAccessible.BANDWIDTH_PACKAGE 按带宽包计费。
InternetMaxBandwidthOut含义：最大出带宽，单位Mbps，范围支持0到2048，默认值10。
VipIsp含义：CMCC | CTCC | CUCC，分别对应 移动 | 电信 | 联通，如果不指定本参数，则默认使用BGP。可通过 DescribeSingleIsp 接口查询一个地域所支持的Isp。如果指定运营商，则网络计费式只能使用按带宽包计费(BANDWIDTH_PACKAGE)。
BandwidthPackageId含义：带宽包ID，指定此参数时，网络计费方式（InternetAccessible.InternetChargeType）只支持按带宽包计费（BANDWIDTH_PACKAGE。
 */
class CreateClusterEndpointRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 集群端口所在的子网ID  (仅在开启非外网访问时需要填，必须为集群所在VPC内的子网)
     */
    public $SubnetId;

    /**
     * @var boolean 是否为外网访问（TRUE 外网访问 FALSE 内网访问，默认值： FALSE）
     */
    public $IsExtranet;

    /**
     * @var string 设置域名
     */
    public $Domain;

    /**
     * @var string 使用的安全组，只有外网访问需要传递（开启外网访问时必传）
     */
    public $SecurityGroup;

    /**
     * @var string 创建lb参数，只有外网访问需要设置，是一个json格式化后的字符串：{"InternetAccessible":{"InternetChargeType":"TRAFFIC_POSTPAID_BY_HOUR","InternetMaxBandwidthOut":"200"},"VipIsp":"","BandwidthPackageId":""}。
各个参数意义：
InternetAccessible.InternetChargeType含义：TRAFFIC_POSTPAID_BY_HOUR按流量按小时后计费;BANDWIDTH_POSTPAID_BY_HOUR 按带宽按小时后计费;InternetAccessible.BANDWIDTH_PACKAGE 按带宽包计费。
InternetMaxBandwidthOut含义：最大出带宽，单位Mbps，范围支持0到2048，默认值10。
VipIsp含义：CMCC | CTCC | CUCC，分别对应 移动 | 电信 | 联通，如果不指定本参数，则默认使用BGP。可通过 DescribeSingleIsp 接口查询一个地域所支持的Isp。如果指定运营商，则网络计费式只能使用按带宽包计费(BANDWIDTH_PACKAGE)。
BandwidthPackageId含义：带宽包ID，指定此参数时，网络计费方式（InternetAccessible.InternetChargeType）只支持按带宽包计费（BANDWIDTH_PACKAGE。
     */
    public $ExtensiveParameters;

    /**
     * @param string $ClusterId 集群ID
     * @param string $SubnetId 集群端口所在的子网ID  (仅在开启非外网访问时需要填，必须为集群所在VPC内的子网)
     * @param boolean $IsExtranet 是否为外网访问（TRUE 外网访问 FALSE 内网访问，默认值： FALSE）
     * @param string $Domain 设置域名
     * @param string $SecurityGroup 使用的安全组，只有外网访问需要传递（开启外网访问时必传）
     * @param string $ExtensiveParameters 创建lb参数，只有外网访问需要设置，是一个json格式化后的字符串：{"InternetAccessible":{"InternetChargeType":"TRAFFIC_POSTPAID_BY_HOUR","InternetMaxBandwidthOut":"200"},"VipIsp":"","BandwidthPackageId":""}。
各个参数意义：
InternetAccessible.InternetChargeType含义：TRAFFIC_POSTPAID_BY_HOUR按流量按小时后计费;BANDWIDTH_POSTPAID_BY_HOUR 按带宽按小时后计费;InternetAccessible.BANDWIDTH_PACKAGE 按带宽包计费。
InternetMaxBandwidthOut含义：最大出带宽，单位Mbps，范围支持0到2048，默认值10。
VipIsp含义：CMCC | CTCC | CUCC，分别对应 移动 | 电信 | 联通，如果不指定本参数，则默认使用BGP。可通过 DescribeSingleIsp 接口查询一个地域所支持的Isp。如果指定运营商，则网络计费式只能使用按带宽包计费(BANDWIDTH_PACKAGE)。
BandwidthPackageId含义：带宽包ID，指定此参数时，网络计费方式（InternetAccessible.InternetChargeType）只支持按带宽包计费（BANDWIDTH_PACKAGE。
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
    }
}
