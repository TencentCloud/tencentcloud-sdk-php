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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多通道安全网关详情
 *
 * @method string getGatewayId() 获取网关 ID。
 * @method void setGatewayId(string $GatewayId) 设置网关 ID。
 * @method string getGatewayName() 获取网关名。
 * @method void setGatewayName(string $GatewayName) 设置网关名。
 * @method string getGatewayType() 获取网关类型，取值有：
<li> cloud：云上网关，腾讯云创建和管理的网关。</li>
<li> private：自有网关，用户部署的私有网关。</li>
 * @method void setGatewayType(string $GatewayType) 设置网关类型，取值有：
<li> cloud：云上网关，腾讯云创建和管理的网关。</li>
<li> private：自有网关，用户部署的私有网关。</li>
 * @method integer getGatewayPort() 获取网关端口，范围 1～65535（除去 8888 ）。
 * @method void setGatewayPort(integer $GatewayPort) 设置网关端口，范围 1～65535（除去 8888 ）。
 * @method string getStatus() 获取网关状态，取值有：
<li> creating : 创建中；</li>
<li> online : 在线；</li>
<li> offline : 离线；</li>
<li> disable : 已停用。</li>
 * @method void setStatus(string $Status) 设置网关状态，取值有：
<li> creating : 创建中；</li>
<li> online : 在线；</li>
<li> offline : 离线；</li>
<li> disable : 已停用。</li>
 * @method string getGatewayIP() 获取网关 IP， 格式为 IPv4。
 * @method void setGatewayIP(string $GatewayIP) 设置网关 IP， 格式为 IPv4。
 * @method string getRegionId() 获取网关地域 Id，可以从接口 DescribeMultiPathGatewayRegions 获取 RegionId 列表。
 * @method void setRegionId(string $RegionId) 设置网关地域 Id，可以从接口 DescribeMultiPathGatewayRegions 获取 RegionId 列表。
 * @method array getLines() 获取线路信息，当查询网关信息详情 DescribeMultiPathGateway 的时候会返回，当查询网关列表 DescribeMultiPathGateways 的时候不会返回。
 * @method void setLines(array $Lines) 设置线路信息，当查询网关信息详情 DescribeMultiPathGateway 的时候会返回，当查询网关列表 DescribeMultiPathGateways 的时候不会返回。
 * @method string getNeedConfirm() 获取网关回源 IP 列表发生了变化是否需要重新确认，取值有：<li>true：回源 IP 列表发生了变化，需要确认；</li><li>false：回源 IP 列表未发生变化，无需确认。</li>
 * @method void setNeedConfirm(string $NeedConfirm) 设置网关回源 IP 列表发生了变化是否需要重新确认，取值有：<li>true：回源 IP 列表发生了变化，需要确认；</li><li>false：回源 IP 列表未发生变化，无需确认。</li>
 */
class MultiPathGateway extends AbstractModel
{
    /**
     * @var string 网关 ID。
     */
    public $GatewayId;

    /**
     * @var string 网关名。
     */
    public $GatewayName;

    /**
     * @var string 网关类型，取值有：
<li> cloud：云上网关，腾讯云创建和管理的网关。</li>
<li> private：自有网关，用户部署的私有网关。</li>
     */
    public $GatewayType;

    /**
     * @var integer 网关端口，范围 1～65535（除去 8888 ）。
     */
    public $GatewayPort;

    /**
     * @var string 网关状态，取值有：
<li> creating : 创建中；</li>
<li> online : 在线；</li>
<li> offline : 离线；</li>
<li> disable : 已停用。</li>
     */
    public $Status;

    /**
     * @var string 网关 IP， 格式为 IPv4。
     */
    public $GatewayIP;

    /**
     * @var string 网关地域 Id，可以从接口 DescribeMultiPathGatewayRegions 获取 RegionId 列表。
     */
    public $RegionId;

    /**
     * @var array 线路信息，当查询网关信息详情 DescribeMultiPathGateway 的时候会返回，当查询网关列表 DescribeMultiPathGateways 的时候不会返回。
     */
    public $Lines;

    /**
     * @var string 网关回源 IP 列表发生了变化是否需要重新确认，取值有：<li>true：回源 IP 列表发生了变化，需要确认；</li><li>false：回源 IP 列表未发生变化，无需确认。</li>
     */
    public $NeedConfirm;

    /**
     * @param string $GatewayId 网关 ID。
     * @param string $GatewayName 网关名。
     * @param string $GatewayType 网关类型，取值有：
<li> cloud：云上网关，腾讯云创建和管理的网关。</li>
<li> private：自有网关，用户部署的私有网关。</li>
     * @param integer $GatewayPort 网关端口，范围 1～65535（除去 8888 ）。
     * @param string $Status 网关状态，取值有：
<li> creating : 创建中；</li>
<li> online : 在线；</li>
<li> offline : 离线；</li>
<li> disable : 已停用。</li>
     * @param string $GatewayIP 网关 IP， 格式为 IPv4。
     * @param string $RegionId 网关地域 Id，可以从接口 DescribeMultiPathGatewayRegions 获取 RegionId 列表。
     * @param array $Lines 线路信息，当查询网关信息详情 DescribeMultiPathGateway 的时候会返回，当查询网关列表 DescribeMultiPathGateways 的时候不会返回。
     * @param string $NeedConfirm 网关回源 IP 列表发生了变化是否需要重新确认，取值有：<li>true：回源 IP 列表发生了变化，需要确认；</li><li>false：回源 IP 列表未发生变化，无需确认。</li>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GatewayName",$param) and $param["GatewayName"] !== null) {
            $this->GatewayName = $param["GatewayName"];
        }

        if (array_key_exists("GatewayType",$param) and $param["GatewayType"] !== null) {
            $this->GatewayType = $param["GatewayType"];
        }

        if (array_key_exists("GatewayPort",$param) and $param["GatewayPort"] !== null) {
            $this->GatewayPort = $param["GatewayPort"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("GatewayIP",$param) and $param["GatewayIP"] !== null) {
            $this->GatewayIP = $param["GatewayIP"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("Lines",$param) and $param["Lines"] !== null) {
            $this->Lines = [];
            foreach ($param["Lines"] as $key => $value){
                $obj = new MultiPathGatewayLine();
                $obj->deserialize($value);
                array_push($this->Lines, $obj);
            }
        }

        if (array_key_exists("NeedConfirm",$param) and $param["NeedConfirm"] !== null) {
            $this->NeedConfirm = $param["NeedConfirm"];
        }
    }
}
