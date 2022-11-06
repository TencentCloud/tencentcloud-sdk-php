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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流状态实时查询接口的SRT信息。
 *
 * @method integer getLatency() 获取延迟，单位为ms。
 * @method void setLatency(integer $Latency) 设置延迟，单位为ms。
 * @method integer getRTT() 获取RTT，单位为ms。
 * @method void setRTT(integer $RTT) 设置RTT，单位为ms。
 * @method integer getPackets() 获取实时发包数或者收包数。
 * @method void setPackets(integer $Packets) 设置实时发包数或者收包数。
 * @method float getPacketLossRate() 获取丢包率。
 * @method void setPacketLossRate(float $PacketLossRate) 设置丢包率。
 * @method float getRetransmitRate() 获取重传率。
 * @method void setRetransmitRate(float $RetransmitRate) 设置重传率。
 * @method integer getDroppedPackets() 获取实时丢包数。
 * @method void setDroppedPackets(integer $DroppedPackets) 设置实时丢包数。
 * @method string getEncryption() 获取是否加密，On|Off。
 * @method void setEncryption(string $Encryption) 设置是否加密，On|Off。
 */
class FlowRealtimeStatusSRT extends AbstractModel
{
    /**
     * @var integer 延迟，单位为ms。
     */
    public $Latency;

    /**
     * @var integer RTT，单位为ms。
     */
    public $RTT;

    /**
     * @var integer 实时发包数或者收包数。
     */
    public $Packets;

    /**
     * @var float 丢包率。
     */
    public $PacketLossRate;

    /**
     * @var float 重传率。
     */
    public $RetransmitRate;

    /**
     * @var integer 实时丢包数。
     */
    public $DroppedPackets;

    /**
     * @var string 是否加密，On|Off。
     */
    public $Encryption;

    /**
     * @param integer $Latency 延迟，单位为ms。
     * @param integer $RTT RTT，单位为ms。
     * @param integer $Packets 实时发包数或者收包数。
     * @param float $PacketLossRate 丢包率。
     * @param float $RetransmitRate 重传率。
     * @param integer $DroppedPackets 实时丢包数。
     * @param string $Encryption 是否加密，On|Off。
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
        if (array_key_exists("Latency",$param) and $param["Latency"] !== null) {
            $this->Latency = $param["Latency"];
        }

        if (array_key_exists("RTT",$param) and $param["RTT"] !== null) {
            $this->RTT = $param["RTT"];
        }

        if (array_key_exists("Packets",$param) and $param["Packets"] !== null) {
            $this->Packets = $param["Packets"];
        }

        if (array_key_exists("PacketLossRate",$param) and $param["PacketLossRate"] !== null) {
            $this->PacketLossRate = $param["PacketLossRate"];
        }

        if (array_key_exists("RetransmitRate",$param) and $param["RetransmitRate"] !== null) {
            $this->RetransmitRate = $param["RetransmitRate"];
        }

        if (array_key_exists("DroppedPackets",$param) and $param["DroppedPackets"] !== null) {
            $this->DroppedPackets = $param["DroppedPackets"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = $param["Encryption"];
        }
    }
}
