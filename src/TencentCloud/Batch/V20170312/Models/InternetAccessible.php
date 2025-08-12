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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了实例的公网可访问性，声明了实例的公网使用计费模式，最大带宽等
 *
 * @method string getInternetChargeType() 获取网络计费类型。取值范围：<br><li>BANDWIDTH_PREPAID：预付费按带宽结算</li><li>TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费</li><li>BANDWIDTH_POSTPAID_BY_HOUR：带宽按小时后付费</li><li>BANDWIDTH_PACKAGE：带宽包用户</li>默认取值：非带宽包用户默认与子机付费类型保持一致，比如子机付费类型为预付费，网络计费类型默认为预付费；子机付费类型为后付费，网络计费类型默认为后付费。
 * @method void setInternetChargeType(string $InternetChargeType) 设置网络计费类型。取值范围：<br><li>BANDWIDTH_PREPAID：预付费按带宽结算</li><li>TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费</li><li>BANDWIDTH_POSTPAID_BY_HOUR：带宽按小时后付费</li><li>BANDWIDTH_PACKAGE：带宽包用户</li>默认取值：非带宽包用户默认与子机付费类型保持一致，比如子机付费类型为预付费，网络计费类型默认为预付费；子机付费类型为后付费，网络计费类型默认为后付费。
 * @method integer getInternetMaxBandwidthOut() 获取公网出带宽上限，单位：Mbps。默认值：0Mbps。不同机型带宽上限范围不一致，具体限制详见[购买网络带宽](https://cloud.tencent.com/document/product/213/12523)。
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置公网出带宽上限，单位：Mbps。默认值：0Mbps。不同机型带宽上限范围不一致，具体限制详见[购买网络带宽](https://cloud.tencent.com/document/product/213/12523)。
 * @method boolean getPublicIpAssigned() 获取是否分配公网IP。取值范围：<br><li>true：表示分配公网IP</li><li>false：表示不分配公网IP</li><br>当公网带宽大于0Mbps时，可自由选择开通与否，默认开通公网IP；当公网带宽为0，则不允许分配公网IP。该参数仅在RunInstances接口中作为入参使用。
 * @method void setPublicIpAssigned(boolean $PublicIpAssigned) 设置是否分配公网IP。取值范围：<br><li>true：表示分配公网IP</li><li>false：表示不分配公网IP</li><br>当公网带宽大于0Mbps时，可自由选择开通与否，默认开通公网IP；当公网带宽为0，则不允许分配公网IP。该参数仅在RunInstances接口中作为入参使用。
 * @method string getBandwidthPackageId() 获取带宽包ID。可通过[ DescribeBandwidthPackages ](https://cloud.tencent.com/document/api/215/19209)接口返回值中的`BandwidthPackageId`获取。该参数仅在RunInstances接口中作为入参使用。
 * @method void setBandwidthPackageId(string $BandwidthPackageId) 设置带宽包ID。可通过[ DescribeBandwidthPackages ](https://cloud.tencent.com/document/api/215/19209)接口返回值中的`BandwidthPackageId`获取。该参数仅在RunInstances接口中作为入参使用。
 * @method string getInternetServiceProvider() 获取线路类型。各种线路类型及支持地区详情可参考：[EIP 的 IP 地址类型](https://cloud.tencent.com/document/product/1199/41646)。默认值：BGP。
<li>BGP：常规 BGP 线路</li>
已开通静态单线IP白名单的用户，可选值：
<li>CMCC：中国移动</li>
<li>CTCC：中国电信</li>
<li>CUCC：中国联通</li>
注意：仅部分地域支持静态单线IP。

 * @method void setInternetServiceProvider(string $InternetServiceProvider) 设置线路类型。各种线路类型及支持地区详情可参考：[EIP 的 IP 地址类型](https://cloud.tencent.com/document/product/1199/41646)。默认值：BGP。
<li>BGP：常规 BGP 线路</li>
已开通静态单线IP白名单的用户，可选值：
<li>CMCC：中国移动</li>
<li>CTCC：中国电信</li>
<li>CUCC：中国联通</li>
注意：仅部分地域支持静态单线IP。

 * @method string getIPv4AddressType() 获取公网 IP 类型。

<li> WanIP：普通公网IP。</li>
<li> HighQualityEIP：精品 IP。仅新加坡和中国香港支持精品IP。</li>
<li> AntiDDoSEIP：高防 IP。仅部分地域支持高防IP，详情可见[弹性公网IP产品概述](https://cloud.tencent.com/document/product/1199/41646)。</li>
如需为资源分配公网IPv4地址，请指定公网IPv4地址类型。

此功能仅部分地区灰度开放，如需使用[请提交工单咨询](https://console.cloud.tencent.com/workorder/category)
 * @method void setIPv4AddressType(string $IPv4AddressType) 设置公网 IP 类型。

<li> WanIP：普通公网IP。</li>
<li> HighQualityEIP：精品 IP。仅新加坡和中国香港支持精品IP。</li>
<li> AntiDDoSEIP：高防 IP。仅部分地域支持高防IP，详情可见[弹性公网IP产品概述](https://cloud.tencent.com/document/product/1199/41646)。</li>
如需为资源分配公网IPv4地址，请指定公网IPv4地址类型。

此功能仅部分地区灰度开放，如需使用[请提交工单咨询](https://console.cloud.tencent.com/workorder/category)
 * @method string getIPv6AddressType() 获取弹性公网 IPv6 类型。
<li> EIPv6：弹性公网 IPv6。</li>
<li> HighQualityEIPv6：精品 IPv6。仅中国香港支持精品IPv6。</li>
如需为资源分配IPv6地址，请指定弹性公网IPv6类型。

此功能仅部分地区灰度开放，如需使用[请提交工单咨询](https://console.cloud.tencent.com/workorder/category)
 * @method void setIPv6AddressType(string $IPv6AddressType) 设置弹性公网 IPv6 类型。
<li> EIPv6：弹性公网 IPv6。</li>
<li> HighQualityEIPv6：精品 IPv6。仅中国香港支持精品IPv6。</li>
如需为资源分配IPv6地址，请指定弹性公网IPv6类型。

此功能仅部分地区灰度开放，如需使用[请提交工单咨询](https://console.cloud.tencent.com/workorder/category)
 * @method string getAntiDDoSPackageId() 获取高防包唯一ID，申请高防IP时，该字段必传。

 * @method void setAntiDDoSPackageId(string $AntiDDoSPackageId) 设置高防包唯一ID，申请高防IP时，该字段必传。
 */
class InternetAccessible extends AbstractModel
{
    /**
     * @var string 网络计费类型。取值范围：<br><li>BANDWIDTH_PREPAID：预付费按带宽结算</li><li>TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费</li><li>BANDWIDTH_POSTPAID_BY_HOUR：带宽按小时后付费</li><li>BANDWIDTH_PACKAGE：带宽包用户</li>默认取值：非带宽包用户默认与子机付费类型保持一致，比如子机付费类型为预付费，网络计费类型默认为预付费；子机付费类型为后付费，网络计费类型默认为后付费。
     */
    public $InternetChargeType;

    /**
     * @var integer 公网出带宽上限，单位：Mbps。默认值：0Mbps。不同机型带宽上限范围不一致，具体限制详见[购买网络带宽](https://cloud.tencent.com/document/product/213/12523)。
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var boolean 是否分配公网IP。取值范围：<br><li>true：表示分配公网IP</li><li>false：表示不分配公网IP</li><br>当公网带宽大于0Mbps时，可自由选择开通与否，默认开通公网IP；当公网带宽为0，则不允许分配公网IP。该参数仅在RunInstances接口中作为入参使用。
     */
    public $PublicIpAssigned;

    /**
     * @var string 带宽包ID。可通过[ DescribeBandwidthPackages ](https://cloud.tencent.com/document/api/215/19209)接口返回值中的`BandwidthPackageId`获取。该参数仅在RunInstances接口中作为入参使用。
     */
    public $BandwidthPackageId;

    /**
     * @var string 线路类型。各种线路类型及支持地区详情可参考：[EIP 的 IP 地址类型](https://cloud.tencent.com/document/product/1199/41646)。默认值：BGP。
<li>BGP：常规 BGP 线路</li>
已开通静态单线IP白名单的用户，可选值：
<li>CMCC：中国移动</li>
<li>CTCC：中国电信</li>
<li>CUCC：中国联通</li>
注意：仅部分地域支持静态单线IP。

     */
    public $InternetServiceProvider;

    /**
     * @var string 公网 IP 类型。

<li> WanIP：普通公网IP。</li>
<li> HighQualityEIP：精品 IP。仅新加坡和中国香港支持精品IP。</li>
<li> AntiDDoSEIP：高防 IP。仅部分地域支持高防IP，详情可见[弹性公网IP产品概述](https://cloud.tencent.com/document/product/1199/41646)。</li>
如需为资源分配公网IPv4地址，请指定公网IPv4地址类型。

此功能仅部分地区灰度开放，如需使用[请提交工单咨询](https://console.cloud.tencent.com/workorder/category)
     */
    public $IPv4AddressType;

    /**
     * @var string 弹性公网 IPv6 类型。
<li> EIPv6：弹性公网 IPv6。</li>
<li> HighQualityEIPv6：精品 IPv6。仅中国香港支持精品IPv6。</li>
如需为资源分配IPv6地址，请指定弹性公网IPv6类型。

此功能仅部分地区灰度开放，如需使用[请提交工单咨询](https://console.cloud.tencent.com/workorder/category)
     */
    public $IPv6AddressType;

    /**
     * @var string 高防包唯一ID，申请高防IP时，该字段必传。

     */
    public $AntiDDoSPackageId;

    /**
     * @param string $InternetChargeType 网络计费类型。取值范围：<br><li>BANDWIDTH_PREPAID：预付费按带宽结算</li><li>TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费</li><li>BANDWIDTH_POSTPAID_BY_HOUR：带宽按小时后付费</li><li>BANDWIDTH_PACKAGE：带宽包用户</li>默认取值：非带宽包用户默认与子机付费类型保持一致，比如子机付费类型为预付费，网络计费类型默认为预付费；子机付费类型为后付费，网络计费类型默认为后付费。
     * @param integer $InternetMaxBandwidthOut 公网出带宽上限，单位：Mbps。默认值：0Mbps。不同机型带宽上限范围不一致，具体限制详见[购买网络带宽](https://cloud.tencent.com/document/product/213/12523)。
     * @param boolean $PublicIpAssigned 是否分配公网IP。取值范围：<br><li>true：表示分配公网IP</li><li>false：表示不分配公网IP</li><br>当公网带宽大于0Mbps时，可自由选择开通与否，默认开通公网IP；当公网带宽为0，则不允许分配公网IP。该参数仅在RunInstances接口中作为入参使用。
     * @param string $BandwidthPackageId 带宽包ID。可通过[ DescribeBandwidthPackages ](https://cloud.tencent.com/document/api/215/19209)接口返回值中的`BandwidthPackageId`获取。该参数仅在RunInstances接口中作为入参使用。
     * @param string $InternetServiceProvider 线路类型。各种线路类型及支持地区详情可参考：[EIP 的 IP 地址类型](https://cloud.tencent.com/document/product/1199/41646)。默认值：BGP。
<li>BGP：常规 BGP 线路</li>
已开通静态单线IP白名单的用户，可选值：
<li>CMCC：中国移动</li>
<li>CTCC：中国电信</li>
<li>CUCC：中国联通</li>
注意：仅部分地域支持静态单线IP。

     * @param string $IPv4AddressType 公网 IP 类型。

<li> WanIP：普通公网IP。</li>
<li> HighQualityEIP：精品 IP。仅新加坡和中国香港支持精品IP。</li>
<li> AntiDDoSEIP：高防 IP。仅部分地域支持高防IP，详情可见[弹性公网IP产品概述](https://cloud.tencent.com/document/product/1199/41646)。</li>
如需为资源分配公网IPv4地址，请指定公网IPv4地址类型。

此功能仅部分地区灰度开放，如需使用[请提交工单咨询](https://console.cloud.tencent.com/workorder/category)
     * @param string $IPv6AddressType 弹性公网 IPv6 类型。
<li> EIPv6：弹性公网 IPv6。</li>
<li> HighQualityEIPv6：精品 IPv6。仅中国香港支持精品IPv6。</li>
如需为资源分配IPv6地址，请指定弹性公网IPv6类型。

此功能仅部分地区灰度开放，如需使用[请提交工单咨询](https://console.cloud.tencent.com/workorder/category)
     * @param string $AntiDDoSPackageId 高防包唯一ID，申请高防IP时，该字段必传。
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
        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("PublicIpAssigned",$param) and $param["PublicIpAssigned"] !== null) {
            $this->PublicIpAssigned = $param["PublicIpAssigned"];
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }

        if (array_key_exists("InternetServiceProvider",$param) and $param["InternetServiceProvider"] !== null) {
            $this->InternetServiceProvider = $param["InternetServiceProvider"];
        }

        if (array_key_exists("IPv4AddressType",$param) and $param["IPv4AddressType"] !== null) {
            $this->IPv4AddressType = $param["IPv4AddressType"];
        }

        if (array_key_exists("IPv6AddressType",$param) and $param["IPv6AddressType"] !== null) {
            $this->IPv6AddressType = $param["IPv6AddressType"];
        }

        if (array_key_exists("AntiDDoSPackageId",$param) and $param["AntiDDoSPackageId"] !== null) {
            $this->AntiDDoSPackageId = $param["AntiDDoSPackageId"];
        }
    }
}
