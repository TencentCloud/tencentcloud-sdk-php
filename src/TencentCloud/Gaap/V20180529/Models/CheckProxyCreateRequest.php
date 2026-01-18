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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckProxyCreate请求参数结构体
 *
 * @method string getAccessRegion() 获取<p>通道的接入(加速)区域。取值可通过接口DescribeAccessRegionsByDestRegion获取到</p>
 * @method void setAccessRegion(string $AccessRegion) 设置<p>通道的接入(加速)区域。取值可通过接口DescribeAccessRegionsByDestRegion获取到</p>
 * @method string getRealServerRegion() 获取<p>通道的源站区域。取值可通过接口DescribeDestRegions获取到</p>
 * @method void setRealServerRegion(string $RealServerRegion) 设置<p>通道的源站区域。取值可通过接口DescribeDestRegions获取到</p>
 * @method integer getBandwidth() 获取<p>通道带宽上限，单位：Mbps。</p>
 * @method void setBandwidth(integer $Bandwidth) 设置<p>通道带宽上限，单位：Mbps。</p>
 * @method integer getConcurrent() 获取<p>通道并发量上限，表示同时在线的连接数，单位：万。</p>
 * @method void setConcurrent(integer $Concurrent) 设置<p>通道并发量上限，表示同时在线的连接数，单位：万。</p>
 * @method string getGroupId() 获取<p>如果在通道组下创建通道，需要填写通道组的ID</p>
 * @method void setGroupId(string $GroupId) 设置<p>如果在通道组下创建通道，需要填写通道组的ID</p>
 * @method string getIPAddressVersion() 获取<p>IP版本，可取值：IPv4、IPv6，默认值IPv4</p>
 * @method void setIPAddressVersion(string $IPAddressVersion) 设置<p>IP版本，可取值：IPv4、IPv6，默认值IPv4</p>
 * @method string getNetworkType() 获取<p>网络类型，可取值：normal、cn2，默认值normal</p>
 * @method void setNetworkType(string $NetworkType) 设置<p>网络类型，可取值：normal、cn2，默认值normal</p>
 * @method string getPackageType() 获取<p>通道套餐类型。Thunder表示标准通道组，Accelerator表示游戏加速器通道，CrossBorder表示跨境通道。</p>
 * @method void setPackageType(string $PackageType) 设置<p>通道套餐类型。Thunder表示标准通道组，Accelerator表示游戏加速器通道，CrossBorder表示跨境通道。</p>
 * @method integer getHttp3Supported() 获取<p>该字段已废弃，当IPAddressVersion为IPv4时，所创建的通道默认支持Http3.0；当为IPv6，默认不支持Http3.0。</p>
 * @method void setHttp3Supported(integer $Http3Supported) 设置<p>该字段已废弃，当IPAddressVersion为IPv4时，所创建的通道默认支持Http3.0；当为IPv6，默认不支持Http3.0。</p>
 */
class CheckProxyCreateRequest extends AbstractModel
{
    /**
     * @var string <p>通道的接入(加速)区域。取值可通过接口DescribeAccessRegionsByDestRegion获取到</p>
     */
    public $AccessRegion;

    /**
     * @var string <p>通道的源站区域。取值可通过接口DescribeDestRegions获取到</p>
     */
    public $RealServerRegion;

    /**
     * @var integer <p>通道带宽上限，单位：Mbps。</p>
     */
    public $Bandwidth;

    /**
     * @var integer <p>通道并发量上限，表示同时在线的连接数，单位：万。</p>
     */
    public $Concurrent;

    /**
     * @var string <p>如果在通道组下创建通道，需要填写通道组的ID</p>
     */
    public $GroupId;

    /**
     * @var string <p>IP版本，可取值：IPv4、IPv6，默认值IPv4</p>
     */
    public $IPAddressVersion;

    /**
     * @var string <p>网络类型，可取值：normal、cn2，默认值normal</p>
     */
    public $NetworkType;

    /**
     * @var string <p>通道套餐类型。Thunder表示标准通道组，Accelerator表示游戏加速器通道，CrossBorder表示跨境通道。</p>
     */
    public $PackageType;

    /**
     * @var integer <p>该字段已废弃，当IPAddressVersion为IPv4时，所创建的通道默认支持Http3.0；当为IPv6，默认不支持Http3.0。</p>
     */
    public $Http3Supported;

    /**
     * @param string $AccessRegion <p>通道的接入(加速)区域。取值可通过接口DescribeAccessRegionsByDestRegion获取到</p>
     * @param string $RealServerRegion <p>通道的源站区域。取值可通过接口DescribeDestRegions获取到</p>
     * @param integer $Bandwidth <p>通道带宽上限，单位：Mbps。</p>
     * @param integer $Concurrent <p>通道并发量上限，表示同时在线的连接数，单位：万。</p>
     * @param string $GroupId <p>如果在通道组下创建通道，需要填写通道组的ID</p>
     * @param string $IPAddressVersion <p>IP版本，可取值：IPv4、IPv6，默认值IPv4</p>
     * @param string $NetworkType <p>网络类型，可取值：normal、cn2，默认值normal</p>
     * @param string $PackageType <p>通道套餐类型。Thunder表示标准通道组，Accelerator表示游戏加速器通道，CrossBorder表示跨境通道。</p>
     * @param integer $Http3Supported <p>该字段已废弃，当IPAddressVersion为IPv4时，所创建的通道默认支持Http3.0；当为IPv6，默认不支持Http3.0。</p>
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
        if (array_key_exists("AccessRegion",$param) and $param["AccessRegion"] !== null) {
            $this->AccessRegion = $param["AccessRegion"];
        }

        if (array_key_exists("RealServerRegion",$param) and $param["RealServerRegion"] !== null) {
            $this->RealServerRegion = $param["RealServerRegion"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Concurrent",$param) and $param["Concurrent"] !== null) {
            $this->Concurrent = $param["Concurrent"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("IPAddressVersion",$param) and $param["IPAddressVersion"] !== null) {
            $this->IPAddressVersion = $param["IPAddressVersion"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("Http3Supported",$param) and $param["Http3Supported"] !== null) {
            $this->Http3Supported = $param["Http3Supported"];
        }
    }
}
