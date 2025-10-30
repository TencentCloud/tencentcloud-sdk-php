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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多网的网卡状态信息
 *
 * @method integer getNetId() 获取网卡序号
 * @method void setNetId(integer $NetId) 设置网卡序号
 * @method string getNetIp() 获取网卡IP
 * @method void setNetIp(string $NetIp) 设置网卡IP
 * @method array getRtt() 获取时延，单位ms
 * @method void setRtt(array $Rtt) 设置时延，单位ms
 * @method array getLost() 获取丢包率，单位%
 * @method void setLost(array $Lost) 设置丢包率，单位%
 * @method array getSendBps() 获取发送bps，单位kbps
 * @method void setSendBps(array $SendBps) 设置发送bps，单位kbps
 * @method array getRecvBps() 获取接收bps，单位kbps
 * @method void setRecvBps(array $RecvBps) 设置接收bps，单位kbps
 */
class MultiNet extends AbstractModel
{
    /**
     * @var integer 网卡序号
     */
    public $NetId;

    /**
     * @var string 网卡IP
     */
    public $NetIp;

    /**
     * @var array 时延，单位ms
     */
    public $Rtt;

    /**
     * @var array 丢包率，单位%
     */
    public $Lost;

    /**
     * @var array 发送bps，单位kbps
     */
    public $SendBps;

    /**
     * @var array 接收bps，单位kbps
     */
    public $RecvBps;

    /**
     * @param integer $NetId 网卡序号
     * @param string $NetIp 网卡IP
     * @param array $Rtt 时延，单位ms
     * @param array $Lost 丢包率，单位%
     * @param array $SendBps 发送bps，单位kbps
     * @param array $RecvBps 接收bps，单位kbps
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
