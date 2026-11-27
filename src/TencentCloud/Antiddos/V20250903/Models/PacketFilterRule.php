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
 * 特征过滤规则。
 *
 * @method string getAction() 获取<p>匹配后执行的动作。</p><p>枚举值：</p><ul><li>drop： 丢弃。</li><li>allow： 放行。</li><li>drop_and_block： 丢弃并拉黑。</li><li>forward： 继续防护，即继续执行下一个防护子策略，而非特征过滤内的其他规则。</li></ul>
 * @method void setAction(string $Action) 设置<p>匹配后执行的动作。</p><p>枚举值：</p><ul><li>drop： 丢弃。</li><li>allow： 放行。</li><li>drop_and_block： 丢弃并拉黑。</li><li>forward： 继续防护，即继续执行下一个防护子策略，而非特征过滤内的其他规则。</li></ul>
 * @method string getProtocol() 获取<p>协议类型。</p><p>枚举值：</p><ul><li>tcp： TCP 协议。</li><li>udp： UDP 协议。</li><li>all： 所有协议。</li></ul>
 * @method void setProtocol(string $Protocol) 设置<p>协议类型。</p><p>枚举值：</p><ul><li>tcp： TCP 协议。</li><li>udp： UDP 协议。</li><li>all： 所有协议。</li></ul>
 * @method SizeRange getPacketSizeRange() 获取<p>报文长度范围。</p>
 * @method void setPacketSizeRange(SizeRange $PacketSizeRange) 设置<p>报文长度范围。</p>
 * @method PortRange getSourcePortRange() 获取<p>源端口范围。</p>
 * @method void setSourcePortRange(PortRange $SourcePortRange) 设置<p>源端口范围。</p>
 * @method PortRange getDestinationPortRange() 获取<p>目的端口范围。</p>
 * @method void setDestinationPortRange(PortRange $DestinationPortRange) 设置<p>目的端口范围。</p>
 * @method array getPacketFilterConditions() 获取<p>报文匹配条件列表。</p>
 * @method void setPacketFilterConditions(array $PacketFilterConditions) 设置<p>报文匹配条件列表。</p>
 */
class PacketFilterRule extends AbstractModel
{
    /**
     * @var string <p>匹配后执行的动作。</p><p>枚举值：</p><ul><li>drop： 丢弃。</li><li>allow： 放行。</li><li>drop_and_block： 丢弃并拉黑。</li><li>forward： 继续防护，即继续执行下一个防护子策略，而非特征过滤内的其他规则。</li></ul>
     */
    public $Action;

    /**
     * @var string <p>协议类型。</p><p>枚举值：</p><ul><li>tcp： TCP 协议。</li><li>udp： UDP 协议。</li><li>all： 所有协议。</li></ul>
     */
    public $Protocol;

    /**
     * @var SizeRange <p>报文长度范围。</p>
     */
    public $PacketSizeRange;

    /**
     * @var PortRange <p>源端口范围。</p>
     */
    public $SourcePortRange;

    /**
     * @var PortRange <p>目的端口范围。</p>
     */
    public $DestinationPortRange;

    /**
     * @var array <p>报文匹配条件列表。</p>
     */
    public $PacketFilterConditions;

    /**
     * @param string $Action <p>匹配后执行的动作。</p><p>枚举值：</p><ul><li>drop： 丢弃。</li><li>allow： 放行。</li><li>drop_and_block： 丢弃并拉黑。</li><li>forward： 继续防护，即继续执行下一个防护子策略，而非特征过滤内的其他规则。</li></ul>
     * @param string $Protocol <p>协议类型。</p><p>枚举值：</p><ul><li>tcp： TCP 协议。</li><li>udp： UDP 协议。</li><li>all： 所有协议。</li></ul>
     * @param SizeRange $PacketSizeRange <p>报文长度范围。</p>
     * @param PortRange $SourcePortRange <p>源端口范围。</p>
     * @param PortRange $DestinationPortRange <p>目的端口范围。</p>
     * @param array $PacketFilterConditions <p>报文匹配条件列表。</p>
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("PacketSizeRange",$param) and $param["PacketSizeRange"] !== null) {
            $this->PacketSizeRange = new SizeRange();
            $this->PacketSizeRange->deserialize($param["PacketSizeRange"]);
        }

        if (array_key_exists("SourcePortRange",$param) and $param["SourcePortRange"] !== null) {
            $this->SourcePortRange = new PortRange();
            $this->SourcePortRange->deserialize($param["SourcePortRange"]);
        }

        if (array_key_exists("DestinationPortRange",$param) and $param["DestinationPortRange"] !== null) {
            $this->DestinationPortRange = new PortRange();
            $this->DestinationPortRange->deserialize($param["DestinationPortRange"]);
        }

        if (array_key_exists("PacketFilterConditions",$param) and $param["PacketFilterConditions"] !== null) {
            $this->PacketFilterConditions = [];
            foreach ($param["PacketFilterConditions"] as $key => $value){
                $obj = new PacketFilterCondition();
                $obj->deserialize($value);
                array_push($this->PacketFilterConditions, $obj);
            }
        }
    }
}
