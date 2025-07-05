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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMQTTClient返回参数结构体
 *
 * @method string getClientId() 获取客户端唯一标识
 * @method void setClientId(string $ClientId) 设置客户端唯一标识
 * @method string getClientAddress() 获取客户端网络地址
 * @method void setClientAddress(string $ClientAddress) 设置客户端网络地址
 * @method integer getProtocolVersion() 获取MQTT 协议版本，4 表示 MQTT 3.1.1
 * @method void setProtocolVersion(integer $ProtocolVersion) 设置MQTT 协议版本，4 表示 MQTT 3.1.1
 * @method integer getKeepalive() 获取保持连接时间，单位：秒
 * @method void setKeepalive(integer $Keepalive) 设置保持连接时间，单位：秒
 * @method string getConnectionStatus() 获取连接状态，CONNECTED 已连接，DISCONNECTED 未连接
 * @method void setConnectionStatus(string $ConnectionStatus) 设置连接状态，CONNECTED 已连接，DISCONNECTED 未连接
 * @method integer getCreateTime() 获取客户端创建时间
 * @method void setCreateTime(integer $CreateTime) 设置客户端创建时间
 * @method integer getConnectTime() 获取上次建立连接时间
 * @method void setConnectTime(integer $ConnectTime) 设置上次建立连接时间
 * @method integer getDisconnectTime() 获取上次断开连接时间，仅对持久会话（cleanSession=false）并且客户端当前未连接时有意义
 * @method void setDisconnectTime(integer $DisconnectTime) 设置上次断开连接时间，仅对持久会话（cleanSession=false）并且客户端当前未连接时有意义
 * @method array getMQTTClientSubscriptions() 获取客户端的订阅列表
 * @method void setMQTTClientSubscriptions(array $MQTTClientSubscriptions) 设置客户端的订阅列表
 * @method StatisticsReport getInbound() 获取服务端到客户端的流量统计
 * @method void setInbound(StatisticsReport $Inbound) 设置服务端到客户端的流量统计
 * @method StatisticsReport getOutBound() 获取客户端到服务端的流量统计
 * @method void setOutBound(StatisticsReport $OutBound) 设置客户端到服务端的流量统计
 * @method boolean getCleanSession() 获取cleansession标志
 * @method void setCleanSession(boolean $CleanSession) 设置cleansession标志
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMQTTClientResponse extends AbstractModel
{
    /**
     * @var string 客户端唯一标识
     */
    public $ClientId;

    /**
     * @var string 客户端网络地址
     */
    public $ClientAddress;

    /**
     * @var integer MQTT 协议版本，4 表示 MQTT 3.1.1
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
     * @var integer 客户端创建时间
     */
    public $CreateTime;

    /**
     * @var integer 上次建立连接时间
     */
    public $ConnectTime;

    /**
     * @var integer 上次断开连接时间，仅对持久会话（cleanSession=false）并且客户端当前未连接时有意义
     */
    public $DisconnectTime;

    /**
     * @var array 客户端的订阅列表
     */
    public $MQTTClientSubscriptions;

    /**
     * @var StatisticsReport 服务端到客户端的流量统计
     */
    public $Inbound;

    /**
     * @var StatisticsReport 客户端到服务端的流量统计
     */
    public $OutBound;

    /**
     * @var boolean cleansession标志
     */
    public $CleanSession;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ClientId 客户端唯一标识
     * @param string $ClientAddress 客户端网络地址
     * @param integer $ProtocolVersion MQTT 协议版本，4 表示 MQTT 3.1.1
     * @param integer $Keepalive 保持连接时间，单位：秒
     * @param string $ConnectionStatus 连接状态，CONNECTED 已连接，DISCONNECTED 未连接
     * @param integer $CreateTime 客户端创建时间
     * @param integer $ConnectTime 上次建立连接时间
     * @param integer $DisconnectTime 上次断开连接时间，仅对持久会话（cleanSession=false）并且客户端当前未连接时有意义
     * @param array $MQTTClientSubscriptions 客户端的订阅列表
     * @param StatisticsReport $Inbound 服务端到客户端的流量统计
     * @param StatisticsReport $OutBound 客户端到服务端的流量统计
     * @param boolean $CleanSession cleansession标志
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("Inbound",$param) and $param["Inbound"] !== null) {
            $this->Inbound = new StatisticsReport();
            $this->Inbound->deserialize($param["Inbound"]);
        }

        if (array_key_exists("OutBound",$param) and $param["OutBound"] !== null) {
            $this->OutBound = new StatisticsReport();
            $this->OutBound->deserialize($param["OutBound"]);
        }

        if (array_key_exists("CleanSession",$param) and $param["CleanSession"] !== null) {
            $this->CleanSession = $param["CleanSession"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
