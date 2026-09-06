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
 * ModifyGatewayFlowQos请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关实例ID，目前我们支持的网关实例类型有，<br>专线网关实例ID，形如，<code>dcg-ltjahce6</code>；<br>Nat网关实例ID，形如，<code>nat-ltjahce6</code>；<br>VPN网关实例ID，形如，<code>vpn-ltjahce6</code>。</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关实例ID，目前我们支持的网关实例类型有，<br>专线网关实例ID，形如，<code>dcg-ltjahce6</code>；<br>Nat网关实例ID，形如，<code>nat-ltjahce6</code>；<br>VPN网关实例ID，形如，<code>vpn-ltjahce6</code>。</p>
 * @method integer getBandwidth() 获取<p>流控带宽值。取值大于0，表示限流到指定的Mbps；取值等于0，表示完全限流；取值为-1，不限流。</p>
 * @method void setBandwidth(integer $Bandwidth) 设置<p>流控带宽值。取值大于0，表示限流到指定的Mbps；取值等于0，表示完全限流；取值为-1，不限流。</p>
 * @method array getIpAddresses() 获取<p>限流的云服务器内网IP。</p><p>参数格式：10.0.0.2</p>
 * @method void setIpAddresses(array $IpAddresses) 设置<p>限流的云服务器内网IP。</p><p>参数格式：10.0.0.2</p>
 * @method string getDirection() 获取<p>限流方向，取值为In代表入向，Out代表出向。当前仅标准型Nat实例网关流控带宽方向可设置入向限流。</p>
 * @method void setDirection(string $Direction) 设置<p>限流方向，取值为In代表入向，Out代表出向。当前仅标准型Nat实例网关流控带宽方向可设置入向限流。</p>
 */
class ModifyGatewayFlowQosRequest extends AbstractModel
{
    /**
     * @var string <p>网关实例ID，目前我们支持的网关实例类型有，<br>专线网关实例ID，形如，<code>dcg-ltjahce6</code>；<br>Nat网关实例ID，形如，<code>nat-ltjahce6</code>；<br>VPN网关实例ID，形如，<code>vpn-ltjahce6</code>。</p>
     */
    public $GatewayId;

    /**
     * @var integer <p>流控带宽值。取值大于0，表示限流到指定的Mbps；取值等于0，表示完全限流；取值为-1，不限流。</p>
     */
    public $Bandwidth;

    /**
     * @var array <p>限流的云服务器内网IP。</p><p>参数格式：10.0.0.2</p>
     */
    public $IpAddresses;

    /**
     * @var string <p>限流方向，取值为In代表入向，Out代表出向。当前仅标准型Nat实例网关流控带宽方向可设置入向限流。</p>
     */
    public $Direction;

    /**
     * @param string $GatewayId <p>网关实例ID，目前我们支持的网关实例类型有，<br>专线网关实例ID，形如，<code>dcg-ltjahce6</code>；<br>Nat网关实例ID，形如，<code>nat-ltjahce6</code>；<br>VPN网关实例ID，形如，<code>vpn-ltjahce6</code>。</p>
     * @param integer $Bandwidth <p>流控带宽值。取值大于0，表示限流到指定的Mbps；取值等于0，表示完全限流；取值为-1，不限流。</p>
     * @param array $IpAddresses <p>限流的云服务器内网IP。</p><p>参数格式：10.0.0.2</p>
     * @param string $Direction <p>限流方向，取值为In代表入向，Out代表出向。当前仅标准型Nat实例网关流控带宽方向可设置入向限流。</p>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("IpAddresses",$param) and $param["IpAddresses"] !== null) {
            $this->IpAddresses = $param["IpAddresses"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
