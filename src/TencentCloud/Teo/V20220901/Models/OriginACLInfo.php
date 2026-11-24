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
 * 七层加速域名/四层代理实例与回源 IP 网段的绑定关系，同时包含回源 IP 网段详情和选择可切换的回源 IP 网段列表。
 *
 * @method string getL7EnableMode() 获取<p>七层加速域名源站防护模式，取值有：<li>all：自动纳入防护模式，站点内所有七层加速域名已纳入源站防护列表，包含后续新增的七层加速域名；</li><li>specific：指定加入防护模式，仅防护已绑定的七层加速域名。</li></p>
 * @method void setL7EnableMode(string $L7EnableMode) 设置<p>七层加速域名源站防护模式，取值有：<li>all：自动纳入防护模式，站点内所有七层加速域名已纳入源站防护列表，包含后续新增的七层加速域名；</li><li>specific：指定加入防护模式，仅防护已绑定的七层加速域名。</li></p>
 * @method array getL7Hosts() 获取<p>启用了特定回源 IP 网段回源的七层加速域名列表。源站防护未开启时为空。</p>
 * @method void setL7Hosts(array $L7Hosts) 设置<p>启用了特定回源 IP 网段回源的七层加速域名列表。源站防护未开启时为空。</p>
 * @method string getL4EnableMode() 获取<p>四层代理实例源站防护模式，取值有：<li>all：自动纳入防护模式，站点内所有四层代理实例已纳入源站防护列表，包含后续新增的四层代理实例；</li><li>specific：指定加入防护模式，仅防护已绑定的四层代理实例。</li></p>
 * @method void setL4EnableMode(string $L4EnableMode) 设置<p>四层代理实例源站防护模式，取值有：<li>all：自动纳入防护模式，站点内所有四层代理实例已纳入源站防护列表，包含后续新增的四层代理实例；</li><li>specific：指定加入防护模式，仅防护已绑定的四层代理实例。</li></p>
 * @method array getL4ProxyIds() 获取<p>启用了特定回源 IP 网段回源的四层代理实例列表。源站防护未开启时为空。</p>
 * @method void setL4ProxyIds(array $L4ProxyIds) 设置<p>启用了特定回源 IP 网段回源的四层代理实例列表。源站防护未开启时为空。</p>
 * @method CurrentOriginACL getCurrentOriginACL() 获取<p>当前生效的回源 IP 网段。源站防护未开启时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentOriginACL(CurrentOriginACL $CurrentOriginACL) 设置<p>当前生效的回源 IP 网段。源站防护未开启时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method NextOriginACL getNextOriginACL() 获取<p>当回源 IP 网段发生更新时，该字段会返回下一个版本将要生效的回源 IP 网段，包含与当前回源 IP 网段的对比。无更新或者源站防护未开启时该字段为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextOriginACL(NextOriginACL $NextOriginACL) 设置<p>当回源 IP 网段发生更新时，该字段会返回下一个版本将要生效的回源 IP 网段，包含与当前回源 IP 网段的对比。无更新或者源站防护未开启时该字段为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>源站防护状态，取值有：</p><li>online：已生效；</li><li>offline：已停用；</li><li>updating: 配置部署中。</li>
 * @method void setStatus(string $Status) 设置<p>源站防护状态，取值有：</p><li>online：已生效；</li><li>offline：已停用；</li><li>updating: 配置部署中。</li>
 * @method string getOriginACLFamily() 获取<p>源站防护回源ACL控制域。</p>
 * @method void setOriginACLFamily(string $OriginACLFamily) 设置<p>源站防护回源ACL控制域。</p>
 */
class OriginACLInfo extends AbstractModel
{
    /**
     * @var string <p>七层加速域名源站防护模式，取值有：<li>all：自动纳入防护模式，站点内所有七层加速域名已纳入源站防护列表，包含后续新增的七层加速域名；</li><li>specific：指定加入防护模式，仅防护已绑定的七层加速域名。</li></p>
     */
    public $L7EnableMode;

    /**
     * @var array <p>启用了特定回源 IP 网段回源的七层加速域名列表。源站防护未开启时为空。</p>
     */
    public $L7Hosts;

    /**
     * @var string <p>四层代理实例源站防护模式，取值有：<li>all：自动纳入防护模式，站点内所有四层代理实例已纳入源站防护列表，包含后续新增的四层代理实例；</li><li>specific：指定加入防护模式，仅防护已绑定的四层代理实例。</li></p>
     */
    public $L4EnableMode;

    /**
     * @var array <p>启用了特定回源 IP 网段回源的四层代理实例列表。源站防护未开启时为空。</p>
     */
    public $L4ProxyIds;

    /**
     * @var CurrentOriginACL <p>当前生效的回源 IP 网段。源站防护未开启时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentOriginACL;

    /**
     * @var NextOriginACL <p>当回源 IP 网段发生更新时，该字段会返回下一个版本将要生效的回源 IP 网段，包含与当前回源 IP 网段的对比。无更新或者源站防护未开启时该字段为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextOriginACL;

    /**
     * @var string <p>源站防护状态，取值有：</p><li>online：已生效；</li><li>offline：已停用；</li><li>updating: 配置部署中。</li>
     */
    public $Status;

    /**
     * @var string <p>源站防护回源ACL控制域。</p>
     */
    public $OriginACLFamily;

    /**
     * @param string $L7EnableMode <p>七层加速域名源站防护模式，取值有：<li>all：自动纳入防护模式，站点内所有七层加速域名已纳入源站防护列表，包含后续新增的七层加速域名；</li><li>specific：指定加入防护模式，仅防护已绑定的七层加速域名。</li></p>
     * @param array $L7Hosts <p>启用了特定回源 IP 网段回源的七层加速域名列表。源站防护未开启时为空。</p>
     * @param string $L4EnableMode <p>四层代理实例源站防护模式，取值有：<li>all：自动纳入防护模式，站点内所有四层代理实例已纳入源站防护列表，包含后续新增的四层代理实例；</li><li>specific：指定加入防护模式，仅防护已绑定的四层代理实例。</li></p>
     * @param array $L4ProxyIds <p>启用了特定回源 IP 网段回源的四层代理实例列表。源站防护未开启时为空。</p>
     * @param CurrentOriginACL $CurrentOriginACL <p>当前生效的回源 IP 网段。源站防护未开启时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param NextOriginACL $NextOriginACL <p>当回源 IP 网段发生更新时，该字段会返回下一个版本将要生效的回源 IP 网段，包含与当前回源 IP 网段的对比。无更新或者源站防护未开启时该字段为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>源站防护状态，取值有：</p><li>online：已生效；</li><li>offline：已停用；</li><li>updating: 配置部署中。</li>
     * @param string $OriginACLFamily <p>源站防护回源ACL控制域。</p>
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
        if (array_key_exists("L7EnableMode",$param) and $param["L7EnableMode"] !== null) {
            $this->L7EnableMode = $param["L7EnableMode"];
        }

        if (array_key_exists("L7Hosts",$param) and $param["L7Hosts"] !== null) {
            $this->L7Hosts = $param["L7Hosts"];
        }

        if (array_key_exists("L4EnableMode",$param) and $param["L4EnableMode"] !== null) {
            $this->L4EnableMode = $param["L4EnableMode"];
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

        if (array_key_exists("OriginACLFamily",$param) and $param["OriginACLFamily"] !== null) {
            $this->OriginACLFamily = $param["OriginACLFamily"];
        }
    }
}
