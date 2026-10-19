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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 概览南北向带宽详情
 *
 * @method float getInternetBandwidthTotalMbps() 获取<p>南北向互联网总带宽，单位为 Mbps。</p><p>单位：Mbps</p>
 * @method void setInternetBandwidthTotalMbps(float $InternetBandwidthTotalMbps) 设置<p>南北向互联网总带宽，单位为 Mbps。</p><p>单位：Mbps</p>
 * @method float getNetMaxFlowBps() 获取<p>南北向网络峰值流量，单位为 bps。</p><p>单位：bps</p>
 * @method void setNetMaxFlowBps(float $NetMaxFlowBps) 设置<p>南北向网络峰值流量，单位为 bps。</p><p>单位：bps</p>
 * @method integer getSerialBandwidthTotalMbps() 获取<p>串行接入总带宽，单位为 Mbps。</p><p>单位：Mbps</p>
 * @method void setSerialBandwidthTotalMbps(integer $SerialBandwidthTotalMbps) 设置<p>串行接入总带宽，单位为 Mbps。</p><p>单位：Mbps</p>
 * @method integer getNatBandwidthTotalMbps() 获取<p>NAT 防火墙总带宽，单位为 Mbps。</p><p>单位：Mbps</p>
 * @method void setNatBandwidthTotalMbps(integer $NatBandwidthTotalMbps) 设置<p>NAT 防火墙总带宽，单位为 Mbps。</p><p>单位：Mbps</p>
 * @method integer getBypassOnlyBandwidthMbps() 获取<p>仅旁路接入带宽，单位为 Mbps。</p><p>单位：Mbps</p>
 * @method void setBypassOnlyBandwidthMbps(integer $BypassOnlyBandwidthMbps) 设置<p>仅旁路接入带宽，单位为 Mbps。</p><p>单位：Mbps</p>
 * @method integer getUnusedBandwidthMbps() 获取<p>未使用带宽，单位为 Mbps。</p><p>单位：Mbps</p>
 * @method void setUnusedBandwidthMbps(integer $UnusedBandwidthMbps) 设置<p>未使用带宽，单位为 Mbps。</p><p>单位：Mbps</p>
 * @method integer getCanUsedBandwidthMbps() 获取<p>当前仍可使用带宽，单位为 Mbps。</p><p>单位：Mbps</p>
 * @method void setCanUsedBandwidthMbps(integer $CanUsedBandwidthMbps) 设置<p>当前仍可使用带宽，单位为 Mbps。</p><p>单位：Mbps</p>
 * @method string getMaxSerialRegion() 获取<p>串行链路峰值流量最高的地域名称。</p>
 * @method void setMaxSerialRegion(string $MaxSerialRegion) 设置<p>串行链路峰值流量最高的地域名称。</p>
 * @method integer getSerialRegionInFlowMax() 获取<p>峰值最高地域的入站流量峰值，单位为 bps。</p><p>单位：bps</p>
 * @method void setSerialRegionInFlowMax(integer $SerialRegionInFlowMax) 设置<p>峰值最高地域的入站流量峰值，单位为 bps。</p><p>单位：bps</p>
 * @method integer getSerialRegionOutFlowMax() 获取<p>峰值最高地域的出方向最大流量，单位为 bps。</p><p>单位：bps</p>
 * @method void setSerialRegionOutFlowMax(integer $SerialRegionOutFlowMax) 设置<p>峰值最高地域的出方向最大流量，单位为 bps。</p><p>单位：bps</p>
 */
class OverviewNorthSouthDetail extends AbstractModel
{
    /**
     * @var float <p>南北向互联网总带宽，单位为 Mbps。</p><p>单位：Mbps</p>
     */
    public $InternetBandwidthTotalMbps;

    /**
     * @var float <p>南北向网络峰值流量，单位为 bps。</p><p>单位：bps</p>
     */
    public $NetMaxFlowBps;

    /**
     * @var integer <p>串行接入总带宽，单位为 Mbps。</p><p>单位：Mbps</p>
     */
    public $SerialBandwidthTotalMbps;

    /**
     * @var integer <p>NAT 防火墙总带宽，单位为 Mbps。</p><p>单位：Mbps</p>
     */
    public $NatBandwidthTotalMbps;

    /**
     * @var integer <p>仅旁路接入带宽，单位为 Mbps。</p><p>单位：Mbps</p>
     */
    public $BypassOnlyBandwidthMbps;

    /**
     * @var integer <p>未使用带宽，单位为 Mbps。</p><p>单位：Mbps</p>
     */
    public $UnusedBandwidthMbps;

    /**
     * @var integer <p>当前仍可使用带宽，单位为 Mbps。</p><p>单位：Mbps</p>
     */
    public $CanUsedBandwidthMbps;

    /**
     * @var string <p>串行链路峰值流量最高的地域名称。</p>
     */
    public $MaxSerialRegion;

    /**
     * @var integer <p>峰值最高地域的入站流量峰值，单位为 bps。</p><p>单位：bps</p>
     */
    public $SerialRegionInFlowMax;

    /**
     * @var integer <p>峰值最高地域的出方向最大流量，单位为 bps。</p><p>单位：bps</p>
     */
    public $SerialRegionOutFlowMax;

    /**
     * @param float $InternetBandwidthTotalMbps <p>南北向互联网总带宽，单位为 Mbps。</p><p>单位：Mbps</p>
     * @param float $NetMaxFlowBps <p>南北向网络峰值流量，单位为 bps。</p><p>单位：bps</p>
     * @param integer $SerialBandwidthTotalMbps <p>串行接入总带宽，单位为 Mbps。</p><p>单位：Mbps</p>
     * @param integer $NatBandwidthTotalMbps <p>NAT 防火墙总带宽，单位为 Mbps。</p><p>单位：Mbps</p>
     * @param integer $BypassOnlyBandwidthMbps <p>仅旁路接入带宽，单位为 Mbps。</p><p>单位：Mbps</p>
     * @param integer $UnusedBandwidthMbps <p>未使用带宽，单位为 Mbps。</p><p>单位：Mbps</p>
     * @param integer $CanUsedBandwidthMbps <p>当前仍可使用带宽，单位为 Mbps。</p><p>单位：Mbps</p>
     * @param string $MaxSerialRegion <p>串行链路峰值流量最高的地域名称。</p>
     * @param integer $SerialRegionInFlowMax <p>峰值最高地域的入站流量峰值，单位为 bps。</p><p>单位：bps</p>
     * @param integer $SerialRegionOutFlowMax <p>峰值最高地域的出方向最大流量，单位为 bps。</p><p>单位：bps</p>
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
        if (array_key_exists("InternetBandwidthTotalMbps",$param) and $param["InternetBandwidthTotalMbps"] !== null) {
            $this->InternetBandwidthTotalMbps = $param["InternetBandwidthTotalMbps"];
        }

        if (array_key_exists("NetMaxFlowBps",$param) and $param["NetMaxFlowBps"] !== null) {
            $this->NetMaxFlowBps = $param["NetMaxFlowBps"];
        }

        if (array_key_exists("SerialBandwidthTotalMbps",$param) and $param["SerialBandwidthTotalMbps"] !== null) {
            $this->SerialBandwidthTotalMbps = $param["SerialBandwidthTotalMbps"];
        }

        if (array_key_exists("NatBandwidthTotalMbps",$param) and $param["NatBandwidthTotalMbps"] !== null) {
            $this->NatBandwidthTotalMbps = $param["NatBandwidthTotalMbps"];
        }

        if (array_key_exists("BypassOnlyBandwidthMbps",$param) and $param["BypassOnlyBandwidthMbps"] !== null) {
            $this->BypassOnlyBandwidthMbps = $param["BypassOnlyBandwidthMbps"];
        }

        if (array_key_exists("UnusedBandwidthMbps",$param) and $param["UnusedBandwidthMbps"] !== null) {
            $this->UnusedBandwidthMbps = $param["UnusedBandwidthMbps"];
        }

        if (array_key_exists("CanUsedBandwidthMbps",$param) and $param["CanUsedBandwidthMbps"] !== null) {
            $this->CanUsedBandwidthMbps = $param["CanUsedBandwidthMbps"];
        }

        if (array_key_exists("MaxSerialRegion",$param) and $param["MaxSerialRegion"] !== null) {
            $this->MaxSerialRegion = $param["MaxSerialRegion"];
        }

        if (array_key_exists("SerialRegionInFlowMax",$param) and $param["SerialRegionInFlowMax"] !== null) {
            $this->SerialRegionInFlowMax = $param["SerialRegionInFlowMax"];
        }

        if (array_key_exists("SerialRegionOutFlowMax",$param) and $param["SerialRegionOutFlowMax"] !== null) {
            $this->SerialRegionOutFlowMax = $param["SerialRegionOutFlowMax"];
        }
    }
}
