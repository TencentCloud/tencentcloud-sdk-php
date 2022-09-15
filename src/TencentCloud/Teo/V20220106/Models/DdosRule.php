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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Ddos防护配置
 *
 * @method DDoSStatusInfo getDdosStatusInfo() 获取DDoS防护等级。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDdosStatusInfo(DDoSStatusInfo $DdosStatusInfo) 设置DDoS防护等级。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DDoSGeoIp getDdosGeoIp() 获取DDoS地域封禁。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDdosGeoIp(DDoSGeoIp $DdosGeoIp) 设置DDoS地域封禁。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DdosAllowBlock getDdosAllowBlock() 获取DDoS黑白名单。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDdosAllowBlock(DdosAllowBlock $DdosAllowBlock) 设置DDoS黑白名单。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DDoSAntiPly getDdosAntiPly() 获取DDoS 协议封禁+连接防护。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDdosAntiPly(DDoSAntiPly $DdosAntiPly) 设置DDoS 协议封禁+连接防护。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DdosPacketFilter getDdosPacketFilter() 获取DDoS特征过滤。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDdosPacketFilter(DdosPacketFilter $DdosPacketFilter) 设置DDoS特征过滤。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DdosAcls getDdosAcl() 获取DDoS端口过滤。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDdosAcl(DdosAcls $DdosAcl) 设置DDoS端口过滤。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSwitch() 获取DDoS开关，取值有:
<li>on ：开启 ；</li>
<li>off ：关闭 。</li>
 * @method void setSwitch(string $Switch) 设置DDoS开关，取值有:
<li>on ：开启 ；</li>
<li>off ：关闭 。</li>
 * @method string getUdpShardOpen() 获取UDP分片功能是否支持，取值有:
<li>on ：支持 ；</li>
<li>off ：不支持 。</li>
 * @method void setUdpShardOpen(string $UdpShardOpen) 设置UDP分片功能是否支持，取值有:
<li>on ：支持 ；</li>
<li>off ：不支持 。</li>
 * @method DdosSpeedLimit getDdosSpeedLimit() 获取DDoS源站访问速率限制。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDdosSpeedLimit(DdosSpeedLimit $DdosSpeedLimit) 设置DDoS源站访问速率限制。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DdosRule extends AbstractModel
{
    /**
     * @var DDoSStatusInfo DDoS防护等级。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DdosStatusInfo;

    /**
     * @var DDoSGeoIp DDoS地域封禁。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DdosGeoIp;

    /**
     * @var DdosAllowBlock DDoS黑白名单。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DdosAllowBlock;

    /**
     * @var DDoSAntiPly DDoS 协议封禁+连接防护。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DdosAntiPly;

    /**
     * @var DdosPacketFilter DDoS特征过滤。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DdosPacketFilter;

    /**
     * @var DdosAcls DDoS端口过滤。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DdosAcl;

    /**
     * @var string DDoS开关，取值有:
<li>on ：开启 ；</li>
<li>off ：关闭 。</li>
     */
    public $Switch;

    /**
     * @var string UDP分片功能是否支持，取值有:
<li>on ：支持 ；</li>
<li>off ：不支持 。</li>
     */
    public $UdpShardOpen;

    /**
     * @var DdosSpeedLimit DDoS源站访问速率限制。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DdosSpeedLimit;

    /**
     * @param DDoSStatusInfo $DdosStatusInfo DDoS防护等级。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DDoSGeoIp $DdosGeoIp DDoS地域封禁。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DdosAllowBlock $DdosAllowBlock DDoS黑白名单。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DDoSAntiPly $DdosAntiPly DDoS 协议封禁+连接防护。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DdosPacketFilter $DdosPacketFilter DDoS特征过滤。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DdosAcls $DdosAcl DDoS端口过滤。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Switch DDoS开关，取值有:
<li>on ：开启 ；</li>
<li>off ：关闭 。</li>
     * @param string $UdpShardOpen UDP分片功能是否支持，取值有:
<li>on ：支持 ；</li>
<li>off ：不支持 。</li>
     * @param DdosSpeedLimit $DdosSpeedLimit DDoS源站访问速率限制。
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
        if (array_key_exists("DdosStatusInfo",$param) and $param["DdosStatusInfo"] !== null) {
            $this->DdosStatusInfo = new DDoSStatusInfo();
            $this->DdosStatusInfo->deserialize($param["DdosStatusInfo"]);
        }

        if (array_key_exists("DdosGeoIp",$param) and $param["DdosGeoIp"] !== null) {
            $this->DdosGeoIp = new DDoSGeoIp();
            $this->DdosGeoIp->deserialize($param["DdosGeoIp"]);
        }

        if (array_key_exists("DdosAllowBlock",$param) and $param["DdosAllowBlock"] !== null) {
            $this->DdosAllowBlock = new DdosAllowBlock();
            $this->DdosAllowBlock->deserialize($param["DdosAllowBlock"]);
        }

        if (array_key_exists("DdosAntiPly",$param) and $param["DdosAntiPly"] !== null) {
            $this->DdosAntiPly = new DDoSAntiPly();
            $this->DdosAntiPly->deserialize($param["DdosAntiPly"]);
        }

        if (array_key_exists("DdosPacketFilter",$param) and $param["DdosPacketFilter"] !== null) {
            $this->DdosPacketFilter = new DdosPacketFilter();
            $this->DdosPacketFilter->deserialize($param["DdosPacketFilter"]);
        }

        if (array_key_exists("DdosAcl",$param) and $param["DdosAcl"] !== null) {
            $this->DdosAcl = new DdosAcls();
            $this->DdosAcl->deserialize($param["DdosAcl"]);
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("UdpShardOpen",$param) and $param["UdpShardOpen"] !== null) {
            $this->UdpShardOpen = $param["UdpShardOpen"];
        }

        if (array_key_exists("DdosSpeedLimit",$param) and $param["DdosSpeedLimit"] !== null) {
            $this->DdosSpeedLimit = new DdosSpeedLimit();
            $this->DdosSpeedLimit->deserialize($param["DdosSpeedLimit"]);
        }
    }
}
