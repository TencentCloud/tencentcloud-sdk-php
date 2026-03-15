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
 * EnableOriginACL请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getL7EnableMode() 获取站点首次开启源站防护时，为七层加速域名配置特定回源 IP 网段的模式。
<li>all：针对当前站点下的所有七层加速域名开启，当域名数量超过 200 时，请先通过 specific 模式启用 200 个域名，剩余资源通过 ModifyOriginACL 接口启用。</li>
<li>specific：针对站点下指定的七层加速域名开启。</li>注意：当参数为空时，默认为 specific。后续新增七层加速域名/四层代理实例均请通过 ModifyOriginACL 接口配置。
 * @method void setL7EnableMode(string $L7EnableMode) 设置站点首次开启源站防护时，为七层加速域名配置特定回源 IP 网段的模式。
<li>all：针对当前站点下的所有七层加速域名开启，当域名数量超过 200 时，请先通过 specific 模式启用 200 个域名，剩余资源通过 ModifyOriginACL 接口启用。</li>
<li>specific：针对站点下指定的七层加速域名开启。</li>注意：当参数为空时，默认为 specific。后续新增七层加速域名/四层代理实例均请通过 ModifyOriginACL 接口配置。
 * @method array getL7Hosts() 获取开启源站防护的七层加速域名列表，仅当参数 L7EnableMode 为 specific 时生效。L7EnableMode 为 all 时，请保留此参数为空。单次最大仅支持填写 200 个七层加速域名。
 * @method void setL7Hosts(array $L7Hosts) 设置开启源站防护的七层加速域名列表，仅当参数 L7EnableMode 为 specific 时生效。L7EnableMode 为 all 时，请保留此参数为空。单次最大仅支持填写 200 个七层加速域名。
 * @method string getL4EnableMode() 获取站点首次开启源站防护时，为四层代理实例配置特定回源 IP 网段的模式。
<li>all：针对当前站点下的所有四层代理实例开启，当实例数量超过 100 时，请先通过 specific 模式启用 100 个域名，剩余资源通过 ModifyOriginACL 接口启用。</li>
<li>specific：针对站点下指定的四层代理实例开启。</li>注意：当参数为空时，默认为 specific。后续新增七层加速域名/四层代理实例均请通过 ModifyOriginACL 接口配置。
 * @method void setL4EnableMode(string $L4EnableMode) 设置站点首次开启源站防护时，为四层代理实例配置特定回源 IP 网段的模式。
<li>all：针对当前站点下的所有四层代理实例开启，当实例数量超过 100 时，请先通过 specific 模式启用 100 个域名，剩余资源通过 ModifyOriginACL 接口启用。</li>
<li>specific：针对站点下指定的四层代理实例开启。</li>注意：当参数为空时，默认为 specific。后续新增七层加速域名/四层代理实例均请通过 ModifyOriginACL 接口配置。
 * @method array getL4ProxyIds() 获取开启源站防护的四层代理实例列表，仅当参数 L4EnableMode 为 specific 时生效。L4EnableMode 为 all 时，请保留此参数为空。单次最大仅支持填写 100 个四层代理实例。
 * @method void setL4ProxyIds(array $L4ProxyIds) 设置开启源站防护的四层代理实例列表，仅当参数 L4EnableMode 为 specific 时生效。L4EnableMode 为 all 时，请保留此参数为空。单次最大仅支持填写 100 个四层代理实例。
 * @method string getOriginACLFamily() 获取源站防护回源ACL控制域，不填则默认用标准全球控制域；可用控制域信息可以通过DescribeAvailableOriginACLFamily接口查询获得。
具体取值说明如下：
<li>gaz：标准全球可用区控制域；</li>
<li>mlc：标准中国大陆可用区控制域；</li>
<li>emc：标准全球(不含中国大陆)可用区控制域；</li>
<li>plat-gaz：精简全球可用区控制域；</li>
<li>plat-mlc：精简中国大陆可用区控制域；</li>
<li>plat-emc：精简全球(不含中国大陆)可用区控制域；</li>
 * @method void setOriginACLFamily(string $OriginACLFamily) 设置源站防护回源ACL控制域，不填则默认用标准全球控制域；可用控制域信息可以通过DescribeAvailableOriginACLFamily接口查询获得。
具体取值说明如下：
<li>gaz：标准全球可用区控制域；</li>
<li>mlc：标准中国大陆可用区控制域；</li>
<li>emc：标准全球(不含中国大陆)可用区控制域；</li>
<li>plat-gaz：精简全球可用区控制域；</li>
<li>plat-mlc：精简中国大陆可用区控制域；</li>
<li>plat-emc：精简全球(不含中国大陆)可用区控制域；</li>
 */
class EnableOriginACLRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 站点首次开启源站防护时，为七层加速域名配置特定回源 IP 网段的模式。
<li>all：针对当前站点下的所有七层加速域名开启，当域名数量超过 200 时，请先通过 specific 模式启用 200 个域名，剩余资源通过 ModifyOriginACL 接口启用。</li>
<li>specific：针对站点下指定的七层加速域名开启。</li>注意：当参数为空时，默认为 specific。后续新增七层加速域名/四层代理实例均请通过 ModifyOriginACL 接口配置。
     */
    public $L7EnableMode;

    /**
     * @var array 开启源站防护的七层加速域名列表，仅当参数 L7EnableMode 为 specific 时生效。L7EnableMode 为 all 时，请保留此参数为空。单次最大仅支持填写 200 个七层加速域名。
     */
    public $L7Hosts;

    /**
     * @var string 站点首次开启源站防护时，为四层代理实例配置特定回源 IP 网段的模式。
<li>all：针对当前站点下的所有四层代理实例开启，当实例数量超过 100 时，请先通过 specific 模式启用 100 个域名，剩余资源通过 ModifyOriginACL 接口启用。</li>
<li>specific：针对站点下指定的四层代理实例开启。</li>注意：当参数为空时，默认为 specific。后续新增七层加速域名/四层代理实例均请通过 ModifyOriginACL 接口配置。
     */
    public $L4EnableMode;

    /**
     * @var array 开启源站防护的四层代理实例列表，仅当参数 L4EnableMode 为 specific 时生效。L4EnableMode 为 all 时，请保留此参数为空。单次最大仅支持填写 100 个四层代理实例。
     */
    public $L4ProxyIds;

    /**
     * @var string 源站防护回源ACL控制域，不填则默认用标准全球控制域；可用控制域信息可以通过DescribeAvailableOriginACLFamily接口查询获得。
具体取值说明如下：
<li>gaz：标准全球可用区控制域；</li>
<li>mlc：标准中国大陆可用区控制域；</li>
<li>emc：标准全球(不含中国大陆)可用区控制域；</li>
<li>plat-gaz：精简全球可用区控制域；</li>
<li>plat-mlc：精简中国大陆可用区控制域；</li>
<li>plat-emc：精简全球(不含中国大陆)可用区控制域；</li>
     */
    public $OriginACLFamily;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $L7EnableMode 站点首次开启源站防护时，为七层加速域名配置特定回源 IP 网段的模式。
<li>all：针对当前站点下的所有七层加速域名开启，当域名数量超过 200 时，请先通过 specific 模式启用 200 个域名，剩余资源通过 ModifyOriginACL 接口启用。</li>
<li>specific：针对站点下指定的七层加速域名开启。</li>注意：当参数为空时，默认为 specific。后续新增七层加速域名/四层代理实例均请通过 ModifyOriginACL 接口配置。
     * @param array $L7Hosts 开启源站防护的七层加速域名列表，仅当参数 L7EnableMode 为 specific 时生效。L7EnableMode 为 all 时，请保留此参数为空。单次最大仅支持填写 200 个七层加速域名。
     * @param string $L4EnableMode 站点首次开启源站防护时，为四层代理实例配置特定回源 IP 网段的模式。
<li>all：针对当前站点下的所有四层代理实例开启，当实例数量超过 100 时，请先通过 specific 模式启用 100 个域名，剩余资源通过 ModifyOriginACL 接口启用。</li>
<li>specific：针对站点下指定的四层代理实例开启。</li>注意：当参数为空时，默认为 specific。后续新增七层加速域名/四层代理实例均请通过 ModifyOriginACL 接口配置。
     * @param array $L4ProxyIds 开启源站防护的四层代理实例列表，仅当参数 L4EnableMode 为 specific 时生效。L4EnableMode 为 all 时，请保留此参数为空。单次最大仅支持填写 100 个四层代理实例。
     * @param string $OriginACLFamily 源站防护回源ACL控制域，不填则默认用标准全球控制域；可用控制域信息可以通过DescribeAvailableOriginACLFamily接口查询获得。
具体取值说明如下：
<li>gaz：标准全球可用区控制域；</li>
<li>mlc：标准中国大陆可用区控制域；</li>
<li>emc：标准全球(不含中国大陆)可用区控制域；</li>
<li>plat-gaz：精简全球可用区控制域；</li>
<li>plat-mlc：精简中国大陆可用区控制域；</li>
<li>plat-emc：精简全球(不含中国大陆)可用区控制域；</li>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
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

        if (array_key_exists("OriginACLFamily",$param) and $param["OriginACLFamily"] !== null) {
            $this->OriginACLFamily = $param["OriginACLFamily"];
        }
    }
}
