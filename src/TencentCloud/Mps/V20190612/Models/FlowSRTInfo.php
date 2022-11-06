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
 * 传输流的SRT质量数据。
 *
 * @method integer getTimestamp() 获取时间戳，单位是秒。
 * @method void setTimestamp(integer $Timestamp) 设置时间戳，单位是秒。
 * @method integer getSendPacketLossRate() 获取发送丢包率。
 * @method void setSendPacketLossRate(integer $SendPacketLossRate) 设置发送丢包率。
 * @method integer getSendRetransmissionRate() 获取发送重传率。
 * @method void setSendRetransmissionRate(integer $SendRetransmissionRate) 设置发送重传率。
 * @method integer getRecvPacketLossRate() 获取接收丢包率。
 * @method void setRecvPacketLossRate(integer $RecvPacketLossRate) 设置接收丢包率。
 * @method integer getRecvRetransmissionRate() 获取接收重传率。
 * @method void setRecvRetransmissionRate(integer $RecvRetransmissionRate) 设置接收重传率。
 * @method integer getRTT() 获取与对端的RTT时延。
 * @method void setRTT(integer $RTT) 设置与对端的RTT时延。
 * @method string getSessionId() 获取标志同一次推流。
 * @method void setSessionId(string $SessionId) 设置标志同一次推流。
 * @method integer getSendPacketDropNumber() 获取发送弃包数。
 * @method void setSendPacketDropNumber(integer $SendPacketDropNumber) 设置发送弃包数。
 * @method integer getRecvPacketDropNumber() 获取接收弃包数。
 * @method void setRecvPacketDropNumber(integer $RecvPacketDropNumber) 设置接收弃包数。
 */
class FlowSRTInfo extends AbstractModel
{
    /**
     * @var integer 时间戳，单位是秒。
     */
    public $Timestamp;

    /**
     * @var integer 发送丢包率。
     */
    public $SendPacketLossRate;

    /**
     * @var integer 发送重传率。
     */
    public $SendRetransmissionRate;

    /**
     * @var integer 接收丢包率。
     */
    public $RecvPacketLossRate;

    /**
     * @var integer 接收重传率。
     */
    public $RecvRetransmissionRate;

    /**
     * @var integer 与对端的RTT时延。
     */
    public $RTT;

    /**
     * @var string 标志同一次推流。
     */
    public $SessionId;

    /**
     * @var integer 发送弃包数。
     */
    public $SendPacketDropNumber;

    /**
     * @var integer 接收弃包数。
     */
    public $RecvPacketDropNumber;

    /**
     * @param integer $Timestamp 时间戳，单位是秒。
     * @param integer $SendPacketLossRate 发送丢包率。
     * @param integer $SendRetransmissionRate 发送重传率。
     * @param integer $RecvPacketLossRate 接收丢包率。
     * @param integer $RecvRetransmissionRate 接收重传率。
     * @param integer $RTT 与对端的RTT时延。
     * @param string $SessionId 标志同一次推流。
     * @param integer $SendPacketDropNumber 发送弃包数。
     * @param integer $RecvPacketDropNumber 接收弃包数。
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("SendPacketLossRate",$param) and $param["SendPacketLossRate"] !== null) {
            $this->SendPacketLossRate = $param["SendPacketLossRate"];
        }

        if (array_key_exists("SendRetransmissionRate",$param) and $param["SendRetransmissionRate"] !== null) {
            $this->SendRetransmissionRate = $param["SendRetransmissionRate"];
        }

        if (array_key_exists("RecvPacketLossRate",$param) and $param["RecvPacketLossRate"] !== null) {
            $this->RecvPacketLossRate = $param["RecvPacketLossRate"];
        }

        if (array_key_exists("RecvRetransmissionRate",$param) and $param["RecvRetransmissionRate"] !== null) {
            $this->RecvRetransmissionRate = $param["RecvRetransmissionRate"];
        }

        if (array_key_exists("RTT",$param) and $param["RTT"] !== null) {
            $this->RTT = $param["RTT"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SendPacketDropNumber",$param) and $param["SendPacketDropNumber"] !== null) {
            $this->SendPacketDropNumber = $param["SendPacketDropNumber"];
        }

        if (array_key_exists("RecvPacketDropNumber",$param) and $param["RecvPacketDropNumber"] !== null) {
            $this->RecvPacketDropNumber = $param["RecvPacketDropNumber"];
        }
    }
}
