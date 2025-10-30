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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 七层加速域名/四层代理实例与回源 IP 网段的绑定关系，以及回源 IP 网段详情。
 *
 * @method array getL7Hosts() 获取启用了特定回源 IP 网段回源的七层加速域名列表。源站防护未开启时为空。
 * @method void setL7Hosts(array $L7Hosts) 设置启用了特定回源 IP 网段回源的七层加速域名列表。源站防护未开启时为空。
 * @method array getL4ProxyIds() 获取启用了特定回源 IP 网段回源的四层代理实例列表。源站防护未开启时为空。
 * @method void setL4ProxyIds(array $L4ProxyIds) 设置启用了特定回源 IP 网段回源的四层代理实例列表。源站防护未开启时为空。
 * @method CurrentOriginACL getCurrentOriginACL() 获取当前生效的回源 IP 网段。源站防护未开启时为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentOriginACL(CurrentOriginACL $CurrentOriginACL) 设置当前生效的回源 IP 网段。源站防护未开启时为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method NextOriginACL getNextOriginACL() 获取当回源 IP 网段发生更新时，该字段会返回下一个版本将要生效的回源 IP 网段，包含与当前回源 IP 网段的对比。无更新或者源站防护未开启时该字段为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextOriginACL(NextOriginACL $NextOriginACL) 设置当回源 IP 网段发生更新时，该字段会返回下一个版本将要生效的回源 IP 网段，包含与当前回源 IP 网段的对比。无更新或者源站防护未开启时该字段为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取源站防护状态，取值有：
<li>online：已生效；</li>
<li>offline：已停用；</li>
<li>updating: 配置部署中。</li>
 * @method void setStatus(string $Status) 设置源站防护状态，取值有：
<li>online：已生效；</li>
<li>offline：已停用；</li>
<li>updating: 配置部署中。</li>
 */
class OriginACLInfo extends AbstractModel
{
    /**
     * @var array 启用了特定回源 IP 网段回源的七层加速域名列表。源站防护未开启时为空。
     */
    public $L7Hosts;

    /**
     * @var array 启用了特定回源 IP 网段回源的四层代理实例列表。源站防护未开启时为空。
     */
    public $L4ProxyIds;

    /**
     * @var CurrentOriginACL 当前生效的回源 IP 网段。源站防护未开启时为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentOriginACL;

    /**
     * @var NextOriginACL 当回源 IP 网段发生更新时，该字段会返回下一个版本将要生效的回源 IP 网段，包含与当前回源 IP 网段的对比。无更新或者源站防护未开启时该字段为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextOriginACL;

    /**
     * @var string 源站防护状态，取值有：
<li>online：已生效；</li>
<li>offline：已停用；</li>
<li>updating: 配置部署中。</li>
     */
    public $Status;

    /**
     * @param array $L7Hosts 启用了特定回源 IP 网段回源的七层加速域名列表。源站防护未开启时为空。
     * @param array $L4ProxyIds 启用了特定回源 IP 网段回源的四层代理实例列表。源站防护未开启时为空。
     * @param CurrentOriginACL $CurrentOriginACL 当前生效的回源 IP 网段。源站防护未开启时为空。
注意：此字段可能返回 null，表示取不到有效值。
     * @param NextOriginACL $NextOriginACL 当回源 IP 网段发生更新时，该字段会返回下一个版本将要生效的回源 IP 网段，包含与当前回源 IP 网段的对比。无更新或者源站防护未开启时该字段为空。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 源站防护状态，取值有：
<li>online：已生效；</li>
<li>offline：已停用；</li>
<li>updating: 配置部署中。</li>
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
        if (array_key_exists("L7Hosts",$param) and $param["L7Hosts"] !== null) {
            $this->L7Hosts = $param["L7Hosts"];
        }

        if (array_key_exists("L4ProxyIds",$param) and $param["L4ProxyIds"] !== null) {
            $this->L4ProxyIds = $param["L4ProxyIds"];
        }

        if (array_key_exists("CurrentOriginACL",$param) and $param["CurrentOriginACL"] !== null) {
            $this->CurrentOriginACL = new CurrentOriginACL();
            $this->CurrentOriginACL->deserialize($param["CurrentOriginACL"]);
        }

        if (array_key_exists("NextOriginACL",$param) and $param["NextOriginACL"] !== null) {
            $this->NextOriginACL = new NextOriginACL();
            $this->NextOriginACL->deserialize($param["NextOriginACL"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
