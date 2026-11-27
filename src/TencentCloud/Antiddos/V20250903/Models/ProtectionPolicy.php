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
namespace TencentCloud\Antiddos\V20250903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 防护实例的 L3/4 DDoS 防护策略。
 *
 * @method DefaultProtectionConfig getDefaultProtection() 获取<p>默认防护配置。</p>
 * @method void setDefaultProtection(DefaultProtectionConfig $DefaultProtection) 设置<p>默认防护配置。</p>
 * @method IPACLRules getIPACLRules() 获取<p>IP 黑白名单规则列表。</p>
 * @method void setIPACLRules(IPACLRules $IPACLRules) 设置<p>IP 黑白名单规则列表。</p>
 * @method PortACLRules getPortACLRules() 获取<p>端口过滤规则列表。</p>
 * @method void setPortACLRules(PortACLRules $PortACLRules) 设置<p>端口过滤规则列表。</p>
 * @method SpeedLimitRules getSpeedLimitRules() 获取<p>限速规则列表。</p>
 * @method void setSpeedLimitRules(SpeedLimitRules $SpeedLimitRules) 设置<p>限速规则列表。</p>
 * @method PacketFilterRules getPacketFilterRules() 获取<p>包特征过滤规则列表。</p>
 * @method void setPacketFilterRules(PacketFilterRules $PacketFilterRules) 设置<p>包特征过滤规则列表。</p>
 * @method GeoBlockingConfig getGeoBlocking() 获取<p>区域封禁配置。</p>
 * @method void setGeoBlocking(GeoBlockingConfig $GeoBlocking) 设置<p>区域封禁配置。</p>
 * @method ProtocolBlockingConfig getProtocolBlocking() 获取<p>协议封禁配置。</p>
 * @method void setProtocolBlocking(ProtocolBlockingConfig $ProtocolBlocking) 设置<p>协议封禁配置。</p>
 * @method ConnectionProtectionConfig getConnectionProtection() 获取<p>连接类攻击防护配置。</p>
 * @method void setConnectionProtection(ConnectionProtectionConfig $ConnectionProtection) 设置<p>连接类攻击防护配置。</p>
 * @method TrafficSignatureConfig getTrafficSignature() 获取<p>流量签名配置。</p>
 * @method void setTrafficSignature(TrafficSignatureConfig $TrafficSignature) 设置<p>流量签名配置。</p>
 */
class ProtectionPolicy extends AbstractModel
{
    /**
     * @var DefaultProtectionConfig <p>默认防护配置。</p>
     */
    public $DefaultProtection;

    /**
     * @var IPACLRules <p>IP 黑白名单规则列表。</p>
     */
    public $IPACLRules;

    /**
     * @var PortACLRules <p>端口过滤规则列表。</p>
     */
    public $PortACLRules;

    /**
     * @var SpeedLimitRules <p>限速规则列表。</p>
     */
    public $SpeedLimitRules;

    /**
     * @var PacketFilterRules <p>包特征过滤规则列表。</p>
     */
    public $PacketFilterRules;

    /**
     * @var GeoBlockingConfig <p>区域封禁配置。</p>
     */
    public $GeoBlocking;

    /**
     * @var ProtocolBlockingConfig <p>协议封禁配置。</p>
     */
    public $ProtocolBlocking;

    /**
     * @var ConnectionProtectionConfig <p>连接类攻击防护配置。</p>
     */
    public $ConnectionProtection;

    /**
     * @var TrafficSignatureConfig <p>流量签名配置。</p>
     */
    public $TrafficSignature;

    /**
     * @param DefaultProtectionConfig $DefaultProtection <p>默认防护配置。</p>
     * @param IPACLRules $IPACLRules <p>IP 黑白名单规则列表。</p>
     * @param PortACLRules $PortACLRules <p>端口过滤规则列表。</p>
     * @param SpeedLimitRules $SpeedLimitRules <p>限速规则列表。</p>
     * @param PacketFilterRules $PacketFilterRules <p>包特征过滤规则列表。</p>
     * @param GeoBlockingConfig $GeoBlocking <p>区域封禁配置。</p>
     * @param ProtocolBlockingConfig $ProtocolBlocking <p>协议封禁配置。</p>
     * @param ConnectionProtectionConfig $ConnectionProtection <p>连接类攻击防护配置。</p>
     * @param TrafficSignatureConfig $TrafficSignature <p>流量签名配置。</p>
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
        if (array_key_exists("DefaultProtection",$param) and $param["DefaultProtection"] !== null) {
            $this->DefaultProtection = new DefaultProtectionConfig();
            $this->DefaultProtection->deserialize($param["DefaultProtection"]);
        }

        if (array_key_exists("IPACLRules",$param) and $param["IPACLRules"] !== null) {
            $this->IPACLRules = new IPACLRules();
            $this->IPACLRules->deserialize($param["IPACLRules"]);
        }

        if (array_key_exists("PortACLRules",$param) and $param["PortACLRules"] !== null) {
            $this->PortACLRules = new PortACLRules();
            $this->PortACLRules->deserialize($param["PortACLRules"]);
        }

        if (array_key_exists("SpeedLimitRules",$param) and $param["SpeedLimitRules"] !== null) {
            $this->SpeedLimitRules = new SpeedLimitRules();
            $this->SpeedLimitRules->deserialize($param["SpeedLimitRules"]);
        }

        if (array_key_exists("PacketFilterRules",$param) and $param["PacketFilterRules"] !== null) {
            $this->PacketFilterRules = new PacketFilterRules();
            $this->PacketFilterRules->deserialize($param["PacketFilterRules"]);
        }

        if (array_key_exists("GeoBlocking",$param) and $param["GeoBlocking"] !== null) {
            $this->GeoBlocking = new GeoBlockingConfig();
            $this->GeoBlocking->deserialize($param["GeoBlocking"]);
        }

        if (array_key_exists("ProtocolBlocking",$param) and $param["ProtocolBlocking"] !== null) {
            $this->ProtocolBlocking = new ProtocolBlockingConfig();
            $this->ProtocolBlocking->deserialize($param["ProtocolBlocking"]);
        }

        if (array_key_exists("ConnectionProtection",$param) and $param["ConnectionProtection"] !== null) {
            $this->ConnectionProtection = new ConnectionProtectionConfig();
            $this->ConnectionProtection->deserialize($param["ConnectionProtection"]);
        }

        if (array_key_exists("TrafficSignature",$param) and $param["TrafficSignature"] !== null) {
            $this->TrafficSignature = new TrafficSignatureConfig();
            $this->TrafficSignature->deserialize($param["TrafficSignature"]);
        }
    }
}
