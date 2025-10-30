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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP 访问限制规则，当前支持配置 IP 黑名单和白名单。
 *
 * @method string getStatus() 获取IP 访问限制状态，可选值：
<li>Enabled：启用；</li>
<li>Disabled：禁用。</li>
 * @method void setStatus(string $Status) 设置IP 访问限制状态，可选值：
<li>Enabled：启用；</li>
<li>Disabled：禁用。</li>
 * @method string getFilterType() 获取IP 访问限制类型：  <li>Black：黑名单方式校验。只有来自 IPList 列表中的 IP 请求会被拦截。</li>
<li>White：白名单方式校验。只有来自 IPList 列表中的 IP 请求会被放行。</li>当 Status 取值为 Enabled 时，FilterType  必须赋值。
 * @method void setFilterType(string $FilterType) 设置IP 访问限制类型：  <li>Black：黑名单方式校验。只有来自 IPList 列表中的 IP 请求会被拦截。</li>
<li>White：白名单方式校验。只有来自 IPList 列表中的 IP 请求会被放行。</li>当 Status 取值为 Enabled 时，FilterType  必须赋值。
 * @method array getIPList() 获取IP 列表，支持 X.X.X.X 格式 IPV4 地址，或 X:X:X:X:X:X:X:X 格式 IPV6 地址，或网段格式 /N（IPV4:1≤N≤32；IPV6:1≤N≤128）；最多可填充 200 个 IP 或网段。当 Status 取值为 Enabled 时，IPList 必须赋值。
 * @method void setIPList(array $IPList) 设置IP 列表，支持 X.X.X.X 格式 IPV4 地址，或 X:X:X:X:X:X:X:X 格式 IPV6 地址，或网段格式 /N（IPV4:1≤N≤32；IPV6:1≤N≤128）；最多可填充 200 个 IP 或网段。当 Status 取值为 Enabled 时，IPList 必须赋值。
 */
class IPFilterPolicy extends AbstractModel
{
    /**
     * @var string IP 访问限制状态，可选值：
<li>Enabled：启用；</li>
<li>Disabled：禁用。</li>
     */
    public $Status;

    /**
     * @var string IP 访问限制类型：  <li>Black：黑名单方式校验。只有来自 IPList 列表中的 IP 请求会被拦截。</li>
<li>White：白名单方式校验。只有来自 IPList 列表中的 IP 请求会被放行。</li>当 Status 取值为 Enabled 时，FilterType  必须赋值。
     */
    public $FilterType;

    /**
     * @var array IP 列表，支持 X.X.X.X 格式 IPV4 地址，或 X:X:X:X:X:X:X:X 格式 IPV6 地址，或网段格式 /N（IPV4:1≤N≤32；IPV6:1≤N≤128）；最多可填充 200 个 IP 或网段。当 Status 取值为 Enabled 时，IPList 必须赋值。
     */
    public $IPList;

    /**
     * @param string $Status IP 访问限制状态，可选值：
<li>Enabled：启用；</li>
<li>Disabled：禁用。</li>
     * @param string $FilterType IP 访问限制类型：  <li>Black：黑名单方式校验。只有来自 IPList 列表中的 IP 请求会被拦截。</li>
<li>White：白名单方式校验。只有来自 IPList 列表中的 IP 请求会被放行。</li>当 Status 取值为 Enabled 时，FilterType  必须赋值。
     * @param array $IPList IP 列表，支持 X.X.X.X 格式 IPV4 地址，或 X:X:X:X:X:X:X:X 格式 IPV6 地址，或网段格式 /N（IPV4:1≤N≤32；IPV6:1≤N≤128）；最多可填充 200 个 IP 或网段。当 Status 取值为 Enabled 时，IPList 必须赋值。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("IPList",$param) and $param["IPList"] !== null) {
            $this->IPList = $param["IPList"];
        }
    }
}
