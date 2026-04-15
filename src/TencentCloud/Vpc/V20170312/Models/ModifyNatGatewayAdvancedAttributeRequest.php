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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNatGatewayAdvancedAttribute请求参数结构体
 *
 * @method string getNatGatewayId() 获取NAT网关的ID，形如：`nat-df45454`。
 * @method void setNatGatewayId(string $NatGatewayId) 设置NAT网关的ID，形如：`nat-df45454`。
 * @method integer getUDPMappingTimeout() 获取UDP映射空闲时间，单位：秒。含义为UDP流空闲多少秒以后从NAT映射中释放。取值范围为：3-7200，默认为180。
 * @method void setUDPMappingTimeout(integer $UDPMappingTimeout) 设置UDP映射空闲时间，单位：秒。含义为UDP流空闲多少秒以后从NAT映射中释放。取值范围为：3-7200，默认为180。
 * @method integer getTCPEstablishedConnectionTimeout() 获取TCP已建立的连接空闲超时时间，单位：秒。含义为TCP已建立的连接空闲多少秒以后从NAT映射中释放。取值范围为：40-10800，默认为10800。
 * @method void setTCPEstablishedConnectionTimeout(integer $TCPEstablishedConnectionTimeout) 设置TCP已建立的连接空闲超时时间，单位：秒。含义为TCP已建立的连接空闲多少秒以后从NAT映射中释放。取值范围为：40-10800，默认为10800。
 * @method integer getTCPTimeWaitTimeout() 获取TCP TIME_WAIT超时时间，单位：秒。含义为完全关闭的TCP连接在到期后保留在NAT映射中的秒数。取值范围为：10-600，默认为120。
 * @method void setTCPTimeWaitTimeout(integer $TCPTimeWaitTimeout) 设置TCP TIME_WAIT超时时间，单位：秒。含义为完全关闭的TCP连接在到期后保留在NAT映射中的秒数。取值范围为：10-600，默认为120。
 */
class ModifyNatGatewayAdvancedAttributeRequest extends AbstractModel
{
    /**
     * @var string NAT网关的ID，形如：`nat-df45454`。
     */
    public $NatGatewayId;

    /**
     * @var integer UDP映射空闲时间，单位：秒。含义为UDP流空闲多少秒以后从NAT映射中释放。取值范围为：3-7200，默认为180。
     */
    public $UDPMappingTimeout;

    /**
     * @var integer TCP已建立的连接空闲超时时间，单位：秒。含义为TCP已建立的连接空闲多少秒以后从NAT映射中释放。取值范围为：40-10800，默认为10800。
     */
    public $TCPEstablishedConnectionTimeout;

    /**
     * @var integer TCP TIME_WAIT超时时间，单位：秒。含义为完全关闭的TCP连接在到期后保留在NAT映射中的秒数。取值范围为：10-600，默认为120。
     */
    public $TCPTimeWaitTimeout;

    /**
     * @param string $NatGatewayId NAT网关的ID，形如：`nat-df45454`。
     * @param integer $UDPMappingTimeout UDP映射空闲时间，单位：秒。含义为UDP流空闲多少秒以后从NAT映射中释放。取值范围为：3-7200，默认为180。
     * @param integer $TCPEstablishedConnectionTimeout TCP已建立的连接空闲超时时间，单位：秒。含义为TCP已建立的连接空闲多少秒以后从NAT映射中释放。取值范围为：40-10800，默认为10800。
     * @param integer $TCPTimeWaitTimeout TCP TIME_WAIT超时时间，单位：秒。含义为完全关闭的TCP连接在到期后保留在NAT映射中的秒数。取值范围为：10-600，默认为120。
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
        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("UDPMappingTimeout",$param) and $param["UDPMappingTimeout"] !== null) {
            $this->UDPMappingTimeout = $param["UDPMappingTimeout"];
        }

        if (array_key_exists("TCPEstablishedConnectionTimeout",$param) and $param["TCPEstablishedConnectionTimeout"] !== null) {
            $this->TCPEstablishedConnectionTimeout = $param["TCPEstablishedConnectionTimeout"];
        }

        if (array_key_exists("TCPTimeWaitTimeout",$param) and $param["TCPTimeWaitTimeout"] !== null) {
            $this->TCPTimeWaitTimeout = $param["TCPTimeWaitTimeout"];
        }
    }
}
