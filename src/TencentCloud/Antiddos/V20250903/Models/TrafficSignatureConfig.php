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
 * 流量签名校验配置。
 *
 * @method string getSwitch() 获取<p>流量签名配置开关。</p>
 * @method void setSwitch(string $Switch) 设置<p>流量签名配置开关。</p>
 * @method array getTrafficSignatureKeys() 获取<p>流量签名密钥。</p>
 * @method void setTrafficSignatureKeys(array $TrafficSignatureKeys) 设置<p>流量签名密钥。</p>
 * @method array getUdpCheckPortRanges() 获取<p>UDP 协议校验的端口范围，支持输入多个端口或端口范围。</p>
 * @method void setUdpCheckPortRanges(array $UdpCheckPortRanges) 设置<p>UDP 协议校验的端口范围，支持输入多个端口或端口范围。</p>
 * @method array getTcpCheckPortRanges() 获取<p>TCP 协议校验的端口范围，支持输入多个端口或端口范围。</p>
 * @method void setTcpCheckPortRanges(array $TcpCheckPortRanges) 设置<p>TCP 协议校验的端口范围，支持输入多个端口或端口范围。</p>
 * @method integer getUdpTrafficSignatureOffset() 获取<p>UDP 协议下签名在数据包负载中的起始偏移位置，支持 0 至 100 字节偏移量。默认为0。</p>
 * @method void setUdpTrafficSignatureOffset(integer $UdpTrafficSignatureOffset) 设置<p>UDP 协议下签名在数据包负载中的起始偏移位置，支持 0 至 100 字节偏移量。默认为0。</p>
 * @method integer getTcpTrafficSignatureOffset() 获取<p>TCP 协议下签名在数据包负载中的起始偏移位置，支持 0 至 100 字节偏移量。默认为0</p>
 * @method void setTcpTrafficSignatureOffset(integer $TcpTrafficSignatureOffset) 设置<p>TCP 协议下签名在数据包负载中的起始偏移位置，支持 0 至 100 字节偏移量。默认为0</p>
 */
class TrafficSignatureConfig extends AbstractModel
{
    /**
     * @var string <p>流量签名配置开关。</p>
     */
    public $Switch;

    /**
     * @var array <p>流量签名密钥。</p>
     */
    public $TrafficSignatureKeys;

    /**
     * @var array <p>UDP 协议校验的端口范围，支持输入多个端口或端口范围。</p>
     */
    public $UdpCheckPortRanges;

    /**
     * @var array <p>TCP 协议校验的端口范围，支持输入多个端口或端口范围。</p>
     */
    public $TcpCheckPortRanges;

    /**
     * @var integer <p>UDP 协议下签名在数据包负载中的起始偏移位置，支持 0 至 100 字节偏移量。默认为0。</p>
     */
    public $UdpTrafficSignatureOffset;

    /**
     * @var integer <p>TCP 协议下签名在数据包负载中的起始偏移位置，支持 0 至 100 字节偏移量。默认为0</p>
     */
    public $TcpTrafficSignatureOffset;

    /**
     * @param string $Switch <p>流量签名配置开关。</p>
     * @param array $TrafficSignatureKeys <p>流量签名密钥。</p>
     * @param array $UdpCheckPortRanges <p>UDP 协议校验的端口范围，支持输入多个端口或端口范围。</p>
     * @param array $TcpCheckPortRanges <p>TCP 协议校验的端口范围，支持输入多个端口或端口范围。</p>
     * @param integer $UdpTrafficSignatureOffset <p>UDP 协议下签名在数据包负载中的起始偏移位置，支持 0 至 100 字节偏移量。默认为0。</p>
     * @param integer $TcpTrafficSignatureOffset <p>TCP 协议下签名在数据包负载中的起始偏移位置，支持 0 至 100 字节偏移量。默认为0</p>
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("TrafficSignatureKeys",$param) and $param["TrafficSignatureKeys"] !== null) {
            $this->TrafficSignatureKeys = $param["TrafficSignatureKeys"];
        }

        if (array_key_exists("UdpCheckPortRanges",$param) and $param["UdpCheckPortRanges"] !== null) {
            $this->UdpCheckPortRanges = [];
            foreach ($param["UdpCheckPortRanges"] as $key => $value){
                $obj = new PortRange();
                $obj->deserialize($value);
                array_push($this->UdpCheckPortRanges, $obj);
            }
        }

        if (array_key_exists("TcpCheckPortRanges",$param) and $param["TcpCheckPortRanges"] !== null) {
            $this->TcpCheckPortRanges = [];
            foreach ($param["TcpCheckPortRanges"] as $key => $value){
                $obj = new PortRange();
                $obj->deserialize($value);
                array_push($this->TcpCheckPortRanges, $obj);
            }
        }

        if (array_key_exists("UdpTrafficSignatureOffset",$param) and $param["UdpTrafficSignatureOffset"] !== null) {
            $this->UdpTrafficSignatureOffset = $param["UdpTrafficSignatureOffset"];
        }

        if (array_key_exists("TcpTrafficSignatureOffset",$param) and $param["TcpTrafficSignatureOffset"] !== null) {
            $this->TcpTrafficSignatureOffset = $param["TcpTrafficSignatureOffset"];
        }
    }
}
