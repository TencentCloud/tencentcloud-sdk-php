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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddBandwidthPackageResources请求参数结构体
 *
 * @method array getResourceIds() 获取资源唯一ID，当前支持EIP资源和LB资源，形如'eip-xxxx', 'lb-xxxx'。EIP资源列表可通过[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取，LB资源列表可通过[DescribeLoadBalancers](https://cloud.tencent.com/document/api/214/30685)接口获取。
 * @method void setResourceIds(array $ResourceIds) 设置资源唯一ID，当前支持EIP资源和LB资源，形如'eip-xxxx', 'lb-xxxx'。EIP资源列表可通过[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取，LB资源列表可通过[DescribeLoadBalancers](https://cloud.tencent.com/document/api/214/30685)接口获取。
 * @method string getBandwidthPackageId() 获取带宽包唯一标识ID，形如'bwp-xxxx'，可以使用[DescribeBandwidthPackages](https://cloud.tencent.com/document/product/215/19209)接口查询BandwidthPackageId。
 * @method void setBandwidthPackageId(string $BandwidthPackageId) 设置带宽包唯一标识ID，形如'bwp-xxxx'，可以使用[DescribeBandwidthPackages](https://cloud.tencent.com/document/product/215/19209)接口查询BandwidthPackageId。
 * @method string getNetworkType() 获取带宽包类型，可选值：
<li>BGP: 普通BGP共享带宽包</li>
<li>HIGH_QUALITY_BGP: 精品BGP共享带宽包</li>
<li>ANYCAST：公网加速带宽包</li>
<li>SINGLEISP_CMCC: 中国移动共享带宽包</li>
<li>SINGLEISP_CTCC: 中国电信共享带宽包</li>
<li>SINGLEISP_CUCC: 中国联通共享带宽包</li>
 * @method void setNetworkType(string $NetworkType) 设置带宽包类型，可选值：
<li>BGP: 普通BGP共享带宽包</li>
<li>HIGH_QUALITY_BGP: 精品BGP共享带宽包</li>
<li>ANYCAST：公网加速带宽包</li>
<li>SINGLEISP_CMCC: 中国移动共享带宽包</li>
<li>SINGLEISP_CTCC: 中国电信共享带宽包</li>
<li>SINGLEISP_CUCC: 中国联通共享带宽包</li>
 * @method string getResourceType() 获取资源类型，可选值：
<li>Address：弹性公网IP</li>
<li>LoadBalance：负载均衡</li>
 * @method void setResourceType(string $ResourceType) 设置资源类型，可选值：
<li>Address：弹性公网IP</li>
<li>LoadBalance：负载均衡</li>
 * @method string getProtocol() 获取带宽包协议类型。当前支持'ipv4'和'ipv6'协议类型。
 * @method void setProtocol(string $Protocol) 设置带宽包协议类型。当前支持'ipv4'和'ipv6'协议类型。
 * @method integer getInternetMaxBandwidthOut() 获取用于带宽包内添加IP资源时指定IP带宽值。<p>说明：当前功能处于内测中，如需使用，请提交[工单申请](https://console.cloud.tencent.com/workorder/category)。</p>
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置用于带宽包内添加IP资源时指定IP带宽值。<p>说明：当前功能处于内测中，如需使用，请提交[工单申请](https://console.cloud.tencent.com/workorder/category)。</p>
 */
class AddBandwidthPackageResourcesRequest extends AbstractModel
{
    /**
     * @var array 资源唯一ID，当前支持EIP资源和LB资源，形如'eip-xxxx', 'lb-xxxx'。EIP资源列表可通过[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取，LB资源列表可通过[DescribeLoadBalancers](https://cloud.tencent.com/document/api/214/30685)接口获取。
     */
    public $ResourceIds;

    /**
     * @var string 带宽包唯一标识ID，形如'bwp-xxxx'，可以使用[DescribeBandwidthPackages](https://cloud.tencent.com/document/product/215/19209)接口查询BandwidthPackageId。
     */
    public $BandwidthPackageId;

    /**
     * @var string 带宽包类型，可选值：
<li>BGP: 普通BGP共享带宽包</li>
<li>HIGH_QUALITY_BGP: 精品BGP共享带宽包</li>
<li>ANYCAST：公网加速带宽包</li>
<li>SINGLEISP_CMCC: 中国移动共享带宽包</li>
<li>SINGLEISP_CTCC: 中国电信共享带宽包</li>
<li>SINGLEISP_CUCC: 中国联通共享带宽包</li>
     */
    public $NetworkType;

    /**
     * @var string 资源类型，可选值：
<li>Address：弹性公网IP</li>
<li>LoadBalance：负载均衡</li>
     */
    public $ResourceType;

    /**
     * @var string 带宽包协议类型。当前支持'ipv4'和'ipv6'协议类型。
     */
    public $Protocol;

    /**
     * @var integer 用于带宽包内添加IP资源时指定IP带宽值。<p>说明：当前功能处于内测中，如需使用，请提交[工单申请](https://console.cloud.tencent.com/workorder/category)。</p>
     */
    public $InternetMaxBandwidthOut;

    /**
     * @param array $ResourceIds 资源唯一ID，当前支持EIP资源和LB资源，形如'eip-xxxx', 'lb-xxxx'。EIP资源列表可通过[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取，LB资源列表可通过[DescribeLoadBalancers](https://cloud.tencent.com/document/api/214/30685)接口获取。
     * @param string $BandwidthPackageId 带宽包唯一标识ID，形如'bwp-xxxx'，可以使用[DescribeBandwidthPackages](https://cloud.tencent.com/document/product/215/19209)接口查询BandwidthPackageId。
     * @param string $NetworkType 带宽包类型，可选值：
<li>BGP: 普通BGP共享带宽包</li>
<li>HIGH_QUALITY_BGP: 精品BGP共享带宽包</li>
<li>ANYCAST：公网加速带宽包</li>
<li>SINGLEISP_CMCC: 中国移动共享带宽包</li>
<li>SINGLEISP_CTCC: 中国电信共享带宽包</li>
<li>SINGLEISP_CUCC: 中国联通共享带宽包</li>
     * @param string $ResourceType 资源类型，可选值：
<li>Address：弹性公网IP</li>
<li>LoadBalance：负载均衡</li>
     * @param string $Protocol 带宽包协议类型。当前支持'ipv4'和'ipv6'协议类型。
     * @param integer $InternetMaxBandwidthOut 用于带宽包内添加IP资源时指定IP带宽值。<p>说明：当前功能处于内测中，如需使用，请提交[工单申请](https://console.cloud.tencent.com/workorder/category)。</p>
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
        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }
    }
}
