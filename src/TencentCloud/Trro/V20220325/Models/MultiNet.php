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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多网的网卡状态信息
 *
 * @method integer getNetId() 获取网卡序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetId(integer $NetId) 设置网卡序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNetIp() 获取网卡IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetIp(string $NetIp) 设置网卡IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRtt() 获取时延，单位ms
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRtt(array $Rtt) 设置时延，单位ms
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLost() 获取丢包率，单位%
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLost(array $Lost) 设置丢包率，单位%
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSendBps() 获取发送bps，单位kbps
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSendBps(array $SendBps) 设置发送bps，单位kbps
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRecvBps() 获取接收bps，单位kbps
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecvBps(array $RecvBps) 设置接收bps，单位kbps
注意：此字段可能返回 null，表示取不到有效值。
 */
class MultiNet extends AbstractModel
{
    /**
     * @var integer 网卡序号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetId;

    /**
     * @var string 网卡IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetIp;

    /**
     * @var array 时延，单位ms
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rtt;

    /**
     * @var array 丢包率，单位%
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Lost;

    /**
     * @var array 发送bps，单位kbps
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SendBps;

    /**
     * @var array 接收bps，单位kbps
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecvBps;

    /**
     * @param integer $NetId 网卡序号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NetIp 网卡IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Rtt 时延，单位ms
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Lost 丢包率，单位%
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SendBps 发送bps，单位kbps
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RecvBps 接收bps，单位kbps
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
        if (array_key_exists("NetId",$param) and $param["NetId"] !== null) {
            $this->NetId = $param["NetId"];
        }

        if (array_key_exists("NetIp",$param) and $param["NetIp"] !== null) {
            $this->NetIp = $param["NetIp"];
        }

        if (array_key_exists("Rtt",$param) and $param["Rtt"] !== null) {
            $this->Rtt = $param["Rtt"];
        }

        if (array_key_exists("Lost",$param) and $param["Lost"] !== null) {
            $this->Lost = $param["Lost"];
        }

        if (array_key_exists("SendBps",$param) and $param["SendBps"] !== null) {
            $this->SendBps = $param["SendBps"];
        }

        if (array_key_exists("RecvBps",$param) and $param["RecvBps"] !== null) {
            $this->RecvBps = $param["RecvBps"];
        }
    }
}
