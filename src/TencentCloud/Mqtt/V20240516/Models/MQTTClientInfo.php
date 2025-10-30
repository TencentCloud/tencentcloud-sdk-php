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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MQTT客户端信息
 *
 * @method string getClientId() 获取客户端ID
 * @method void setClientId(string $ClientId) 设置客户端ID
 * @method string getClientAddress() 获取客户端网络地址
 * @method void setClientAddress(string $ClientAddress) 设置客户端网络地址
 * @method integer getProtocolVersion() 获取MQTT 协议版本
3：表示MQTT 3.1版本
4：表示 MQTT 3.1.1
5：表示MQTT 5.0协议
 * @method void setProtocolVersion(integer $ProtocolVersion) 设置MQTT 协议版本
3：表示MQTT 3.1版本
4：表示 MQTT 3.1.1
5：表示MQTT 5.0协议
 * @method integer getKeepalive() 获取保持连接时间，单位：秒
 * @method void setKeepalive(integer $Keepalive) 设置保持连接时间，单位：秒
 * @method string getConnectionStatus() 获取连接状态，CONNECTED 已连接，DISCONNECTED 未连接
 * @method void setConnectionStatus(string $ConnectionStatus) 设置连接状态，CONNECTED 已连接，DISCONNECTED 未连接
 * @method integer getCreateTime() 获取客户端创建时间，毫秒级时间戳 。
 * @method void setCreateTime(integer $CreateTime) 设置客户端创建时间，毫秒级时间戳 。
 * @method integer getConnectTime() 获取上次建立连接时间，毫秒级时间戳 。
 * @method void setConnectTime(integer $ConnectTime) 设置上次建立连接时间，毫秒级时间戳 。
 * @method integer getDisconnectTime() 获取上次断开连接时间，仅对持久会话（cleanSession=false）并且客户端当前未连接时有意义，毫秒级时间戳 。
 * @method void setDisconnectTime(integer $DisconnectTime) 设置上次断开连接时间，仅对持久会话（cleanSession=false）并且客户端当前未连接时有意义，毫秒级时间戳 。
 * @method array getMQTTClientSubscriptions() 获取客户端的订阅列表
 * @method void setMQTTClientSubscriptions(array $MQTTClientSubscriptions) 设置客户端的订阅列表
 */
class MQTTClientInfo extends AbstractModel
{
    /**
     * @var string 客户端ID
     */
    public $ClientId;

    /**
     * @var string 客户端网络地址
     */
    public $ClientAddress;

    /**
     * @var integer MQTT 协议版本
3：表示MQTT 3.1版本
4：表示 MQTT 3.1.1
5：表示MQTT 5.0协议
     */
    public $ProtocolVersion;

    /**
     * @var integer 保持连接时间，单位：秒
     */
    public $Keepalive;

    /**
     * @var string 连接状态，CONNECTED 已连接，DISCONNECTED 未连接
     */
    public $ConnectionStatus;

    /**
     * @var integer 客户端创建时间，毫秒级时间戳 。
     */
    public $CreateTime;

    /**
     * @var integer 上次建立连接时间，毫秒级时间戳 。
     */
    public $ConnectTime;

    /**
     * @var integer 上次断开连接时间，仅对持久会话（cleanSession=false）并且客户端当前未连接时有意义，毫秒级时间戳 。
     */
    public $DisconnectTime;

    /**
     * @var array 客户端的订阅列表
     */
    public $MQTTClientSubscriptions;

    /**
     * @param string $ClientId 客户端ID
     * @param string $ClientAddress 客户端网络地址
     * @param integer $ProtocolVersion MQTT 协议版本
3：表示MQTT 3.1版本
4：表示 MQTT 3.1.1
5：表示MQTT 5.0协议
     * @param integer $Keepalive 保持连接时间，单位：秒
     * @param string $ConnectionStatus 连接状态，CONNECTED 已连接，DISCONNECTED 未连接
     * @param integer $CreateTime 客户端创建时间，毫秒级时间戳 。
     * @param integer $ConnectTime 上次建立连接时间，毫秒级时间戳 。
     * @param integer $DisconnectTime 上次断开连接时间，仅对持久会话（cleanSession=false）并且客户端当前未连接时有意义，毫秒级时间戳 。
     * @param array $MQTTClientSubscriptions 客户端的订阅列表
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
        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("ClientAddress",$param) and $param["ClientAddress"] !== null) {
            $this->ClientAddress = $param["ClientAddress"];
        }

        if (array_key_exists("ProtocolVersion",$param) and $param["ProtocolVersion"] !== null) {
            $this->ProtocolVersion = $param["ProtocolVersion"];
        }

        if (array_key_exists("Keepalive",$param) and $param["Keepalive"] !== null) {
            $this->Keepalive = $param["Keepalive"];
        }

        if (array_key_exists("ConnectionStatus",$param) and $param["ConnectionStatus"] !== null) {
            $this->ConnectionStatus = $param["ConnectionStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ConnectTime",$param) and $param["ConnectTime"] !== null) {
            $this->ConnectTime = $param["ConnectTime"];
        }

        if (array_key_exists("DisconnectTime",$param) and $param["DisconnectTime"] !== null) {
            $this->DisconnectTime = $param["DisconnectTime"];
        }

        if (array_key_exists("MQTTClientSubscriptions",$param) and $param["MQTTClientSubscriptions"] !== null) {
            $this->MQTTClientSubscriptions = [];
            foreach ($param["MQTTClientSubscriptions"] as $key => $value){
                $obj = new MQTTClientSubscription();
                $obj->deserialize($value);
                array_push($this->MQTTClientSubscriptions, $obj);
            }
        }
    }
}
