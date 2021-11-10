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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 独享实例网络配置
 *
 * @method integer getInternetMaxBandwidthOut() 获取最大出带宽
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置最大出带宽
 * @method boolean getEnableInternetInbound() 获取EnableInternetInbound信息
 * @method void setEnableInternetInbound(boolean $EnableInternetInbound) 设置EnableInternetInbound信息
 * @method boolean getEnableInternetOutbound() 获取EnableInternetOutbound信息
 * @method void setEnableInternetOutbound(boolean $EnableInternetOutbound) 设置EnableInternetOutbound信息
 * @method array getInboundIpAddresses() 获取InboundIpAddresses信息
 * @method void setInboundIpAddresses(array $InboundIpAddresses) 设置InboundIpAddresses信息
 * @method array getOutboundIpAddresses() 获取OutboundIpAddresses信息
 * @method void setOutboundIpAddresses(array $OutboundIpAddresses) 设置OutboundIpAddresses信息
 */
class NetworkConfig extends AbstractModel
{
    /**
     * @var integer 最大出带宽
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var boolean EnableInternetInbound信息
     */
    public $EnableInternetInbound;

    /**
     * @var boolean EnableInternetOutbound信息
     */
    public $EnableInternetOutbound;

    /**
     * @var array InboundIpAddresses信息
     */
    public $InboundIpAddresses;

    /**
     * @var array OutboundIpAddresses信息
     */
    public $OutboundIpAddresses;

    /**
     * @param integer $InternetMaxBandwidthOut 最大出带宽
     * @param boolean $EnableInternetInbound EnableInternetInbound信息
     * @param boolean $EnableInternetOutbound EnableInternetOutbound信息
     * @param array $InboundIpAddresses InboundIpAddresses信息
     * @param array $OutboundIpAddresses OutboundIpAddresses信息
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
        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("EnableInternetInbound",$param) and $param["EnableInternetInbound"] !== null) {
            $this->EnableInternetInbound = $param["EnableInternetInbound"];
        }

        if (array_key_exists("EnableInternetOutbound",$param) and $param["EnableInternetOutbound"] !== null) {
            $this->EnableInternetOutbound = $param["EnableInternetOutbound"];
        }

        if (array_key_exists("InboundIpAddresses",$param) and $param["InboundIpAddresses"] !== null) {
            $this->InboundIpAddresses = $param["InboundIpAddresses"];
        }

        if (array_key_exists("OutboundIpAddresses",$param) and $param["OutboundIpAddresses"] !== null) {
            $this->OutboundIpAddresses = $param["OutboundIpAddresses"];
        }
    }
}
