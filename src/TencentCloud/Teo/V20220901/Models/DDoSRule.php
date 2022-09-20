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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS防护配置
 *
 * @method DDoSStatusInfo getDDoSStatusInfo() 获取DDoS防护等级。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDDoSStatusInfo(DDoSStatusInfo $DDoSStatusInfo) 设置DDoS防护等级。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DDoSGeoIp getDDoSGeoIp() 获取DDoS地域封禁。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDDoSGeoIp(DDoSGeoIp $DDoSGeoIp) 设置DDoS地域封禁。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DDoSAllowBlock getDDoSAllowBlock() 获取DDoS黑白名单。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDDoSAllowBlock(DDoSAllowBlock $DDoSAllowBlock) 设置DDoS黑白名单。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DDoSAntiPly getDDoSAntiPly() 获取DDoS 协议封禁+连接防护。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDDoSAntiPly(DDoSAntiPly $DDoSAntiPly) 设置DDoS 协议封禁+连接防护。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DDoSPacketFilter getDDoSPacketFilter() 获取DDoS特征过滤。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDDoSPacketFilter(DDoSPacketFilter $DDoSPacketFilter) 设置DDoS特征过滤。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DDoSAcl getDDoSAcl() 获取DDoS端口过滤。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDDoSAcl(DDoSAcl $DDoSAcl) 设置DDoS端口过滤。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSwitch() 获取DDoS开关，取值有:
<li>on ：开启 ；</li>
<li>off ：关闭 。</li>如果为null，默认使用历史配置。
 * @method void setSwitch(string $Switch) 设置DDoS开关，取值有:
<li>on ：开启 ；</li>
<li>off ：关闭 。</li>如果为null，默认使用历史配置。
 * @method string getUdpShardOpen() 获取UDP分片功能是否支持，取值有:
<li>on ：支持 ；</li>
<li>off ：不支持 。</li>仅出参字段，入参无需填写。
 * @method void setUdpShardOpen(string $UdpShardOpen) 设置UDP分片功能是否支持，取值有:
<li>on ：支持 ；</li>
<li>off ：不支持 。</li>仅出参字段，入参无需填写。
 * @method DDoSSpeedLimit getDDoSSpeedLimit() 获取DDoS源站访问速率限制。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDDoSSpeedLimit(DDoSSpeedLimit $DDoSSpeedLimit) 设置DDoS源站访问速率限制。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DDoSRule extends AbstractModel
{
    /**
     * @var DDoSStatusInfo DDoS防护等级。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DDoSStatusInfo;

    /**
     * @var DDoSGeoIp DDoS地域封禁。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DDoSGeoIp;

    /**
     * @var DDoSAllowBlock DDoS黑白名单。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DDoSAllowBlock;

    /**
     * @var DDoSAntiPly DDoS 协议封禁+连接防护。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DDoSAntiPly;

    /**
     * @var DDoSPacketFilter DDoS特征过滤。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DDoSPacketFilter;

    /**
     * @var DDoSAcl DDoS端口过滤。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DDoSAcl;

    /**
     * @var string DDoS开关，取值有:
<li>on ：开启 ；</li>
<li>off ：关闭 。</li>如果为null，默认使用历史配置。
     */
    public $Switch;

    /**
     * @var string UDP分片功能是否支持，取值有:
<li>on ：支持 ；</li>
<li>off ：不支持 。</li>仅出参字段，入参无需填写。
     */
    public $UdpShardOpen;

    /**
     * @var DDoSSpeedLimit DDoS源站访问速率限制。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DDoSSpeedLimit;

    /**
     * @param DDoSStatusInfo $DDoSStatusInfo DDoS防护等级。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DDoSGeoIp $DDoSGeoIp DDoS地域封禁。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DDoSAllowBlock $DDoSAllowBlock DDoS黑白名单。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DDoSAntiPly $DDoSAntiPly DDoS 协议封禁+连接防护。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DDoSPacketFilter $DDoSPacketFilter DDoS特征过滤。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DDoSAcl $DDoSAcl DDoS端口过滤。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Switch DDoS开关，取值有:
<li>on ：开启 ；</li>
<li>off ：关闭 。</li>如果为null，默认使用历史配置。
     * @param string $UdpShardOpen UDP分片功能是否支持，取值有:
<li>on ：支持 ；</li>
<li>off ：不支持 。</li>仅出参字段，入参无需填写。
     * @param DDoSSpeedLimit $DDoSSpeedLimit DDoS源站访问速率限制。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("DDoSStatusInfo",$param) and $param["DDoSStatusInfo"] !== null) {
            $this->DDoSStatusInfo = new DDoSStatusInfo();
            $this->DDoSStatusInfo->deserialize($param["DDoSStatusInfo"]);
        }

        if (array_key_exists("DDoSGeoIp",$param) and $param["DDoSGeoIp"] !== null) {
            $this->DDoSGeoIp = new DDoSGeoIp();
            $this->DDoSGeoIp->deserialize($param["DDoSGeoIp"]);
        }

        if (array_key_exists("DDoSAllowBlock",$param) and $param["DDoSAllowBlock"] !== null) {
            $this->DDoSAllowBlock = new DDoSAllowBlock();
            $this->DDoSAllowBlock->deserialize($param["DDoSAllowBlock"]);
        }

        if (array_key_exists("DDoSAntiPly",$param) and $param["DDoSAntiPly"] !== null) {
            $this->DDoSAntiPly = new DDoSAntiPly();
            $this->DDoSAntiPly->deserialize($param["DDoSAntiPly"]);
        }

        if (array_key_exists("DDoSPacketFilter",$param) and $param["DDoSPacketFilter"] !== null) {
            $this->DDoSPacketFilter = new DDoSPacketFilter();
            $this->DDoSPacketFilter->deserialize($param["DDoSPacketFilter"]);
        }

        if (array_key_exists("DDoSAcl",$param) and $param["DDoSAcl"] !== null) {
            $this->DDoSAcl = new DDoSAcl();
            $this->DDoSAcl->deserialize($param["DDoSAcl"]);
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("UdpShardOpen",$param) and $param["UdpShardOpen"] !== null) {
            $this->UdpShardOpen = $param["UdpShardOpen"];
        }

        if (array_key_exists("DDoSSpeedLimit",$param) and $param["DDoSSpeedLimit"] !== null) {
            $this->DDoSSpeedLimit = new DDoSSpeedLimit();
            $this->DDoSSpeedLimit->deserialize($param["DDoSSpeedLimit"]);
        }
    }
}
