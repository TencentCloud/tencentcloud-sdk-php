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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckProxyCreate请求参数结构体
 *
 * @method string getAccessRegion() 获取通道的接入(加速)区域。取值可通过接口DescribeAccessRegionsByDestRegion获取到
 * @method void setAccessRegion(string $AccessRegion) 设置通道的接入(加速)区域。取值可通过接口DescribeAccessRegionsByDestRegion获取到
 * @method string getRealServerRegion() 获取通道的源站区域。取值可通过接口DescribeDestRegions获取到
 * @method void setRealServerRegion(string $RealServerRegion) 设置通道的源站区域。取值可通过接口DescribeDestRegions获取到
 * @method integer getBandwidth() 获取通道带宽上限，单位：Mbps。
 * @method void setBandwidth(integer $Bandwidth) 设置通道带宽上限，单位：Mbps。
 * @method integer getConcurrent() 获取通道并发量上限，表示同时在线的连接数，单位：万。
 * @method void setConcurrent(integer $Concurrent) 设置通道并发量上限，表示同时在线的连接数，单位：万。
 * @method string getGroupId() 获取如果在通道组下创建通道，需要填写通道组的ID
 * @method void setGroupId(string $GroupId) 设置如果在通道组下创建通道，需要填写通道组的ID
 * @method string getIPAddressVersion() 获取IP版本，可取值：IPv4、IPv6，默认值IPv4
 * @method void setIPAddressVersion(string $IPAddressVersion) 设置IP版本，可取值：IPv4、IPv6，默认值IPv4
 * @method string getNetworkType() 获取网络类型，可取值：normal、cn2，默认值normal
 * @method void setNetworkType(string $NetworkType) 设置网络类型，可取值：normal、cn2，默认值normal
 * @method string getPackageType() 获取通道套餐类型。Thunder表示标准通道组，Accelerator表示游戏加速器通道，CrossBorder表示跨境通道。
 * @method void setPackageType(string $PackageType) 设置通道套餐类型。Thunder表示标准通道组，Accelerator表示游戏加速器通道，CrossBorder表示跨境通道。
 * @method integer getHttp3Supported() 获取该字段已废弃，当IPAddressVersion为IPv4时，所创建的通道默认支持Http3.0；当为IPv6，默认不支持Http3.0。
 * @method void setHttp3Supported(integer $Http3Supported) 设置该字段已废弃，当IPAddressVersion为IPv4时，所创建的通道默认支持Http3.0；当为IPv6，默认不支持Http3.0。
 */
class CheckProxyCreateRequest extends AbstractModel
{
    /**
     * @var string 通道的接入(加速)区域。取值可通过接口DescribeAccessRegionsByDestRegion获取到
     */
    public $AccessRegion;

    /**
     * @var string 通道的源站区域。取值可通过接口DescribeDestRegions获取到
     */
    public $RealServerRegion;

    /**
     * @var integer 通道带宽上限，单位：Mbps。
     */
    public $Bandwidth;

    /**
     * @var integer 通道并发量上限，表示同时在线的连接数，单位：万。
     */
    public $Concurrent;

    /**
     * @var string 如果在通道组下创建通道，需要填写通道组的ID
     */
    public $GroupId;

    /**
     * @var string IP版本，可取值：IPv4、IPv6，默认值IPv4
     */
    public $IPAddressVersion;

    /**
     * @var string 网络类型，可取值：normal、cn2，默认值normal
     */
    public $NetworkType;

    /**
     * @var string 通道套餐类型。Thunder表示标准通道组，Accelerator表示游戏加速器通道，CrossBorder表示跨境通道。
     */
    public $PackageType;

    /**
     * @var integer 该字段已废弃，当IPAddressVersion为IPv4时，所创建的通道默认支持Http3.0；当为IPv6，默认不支持Http3.0。
     */
    public $Http3Supported;

    /**
     * @param string $AccessRegion 通道的接入(加速)区域。取值可通过接口DescribeAccessRegionsByDestRegion获取到
     * @param string $RealServerRegion 通道的源站区域。取值可通过接口DescribeDestRegions获取到
     * @param integer $Bandwidth 通道带宽上限，单位：Mbps。
     * @param integer $Concurrent 通道并发量上限，表示同时在线的连接数，单位：万。
     * @param string $GroupId 如果在通道组下创建通道，需要填写通道组的ID
     * @param string $IPAddressVersion IP版本，可取值：IPv4、IPv6，默认值IPv4
     * @param string $NetworkType 网络类型，可取值：normal、cn2，默认值normal
     * @param string $PackageType 通道套餐类型。Thunder表示标准通道组，Accelerator表示游戏加速器通道，CrossBorder表示跨境通道。
     * @param integer $Http3Supported 该字段已废弃，当IPAddressVersion为IPv4时，所创建的通道默认支持Http3.0；当为IPv6，默认不支持Http3.0。
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
