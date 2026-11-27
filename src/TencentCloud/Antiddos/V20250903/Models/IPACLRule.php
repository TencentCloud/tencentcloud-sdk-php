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
 * IP 黑白名单规则。
 *
 * @method string getAction() 获取<p>处置方式。</p><p>枚举值：</p><ul><li>drop： 黑名单（拦截）。</li><li>allow： 白名单（放行）。</li></ul>
 * @method void setAction(string $Action) 设置<p>处置方式。</p><p>枚举值：</p><ul><li>drop： 黑名单（拦截）。</li><li>allow： 白名单（放行）。</li></ul>
 * @method array getIPs() 获取<p>IP 列表。</p><p>参数格式：支持 IPv4、IPv6 和 CIDR 格式。</p>
 * @method void setIPs(array $IPs) 设置<p>IP 列表。</p><p>参数格式：支持 IPv4、IPv6 和 CIDR 格式。</p>
 */
class IPACLRule extends AbstractModel
{
    /**
     * @var string <p>处置方式。</p><p>枚举值：</p><ul><li>drop： 黑名单（拦截）。</li><li>allow： 白名单（放行）。</li></ul>
     */
    public $Action;

    /**
     * @var array <p>IP 列表。</p><p>参数格式：支持 IPv4、IPv6 和 CIDR 格式。</p>
     */
    public $IPs;

    /**
     * @param string $Action <p>处置方式。</p><p>枚举值：</p><ul><li>drop： 黑名单（拦截）。</li><li>allow： 白名单（放行）。</li></ul>
     * @param array $IPs <p>IP 列表。</p><p>参数格式：支持 IPv4、IPv6 和 CIDR 格式。</p>
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

        if (array_key_exists("IPs",$param) and $param["IPs"] !== null) {
            $this->IPs = $param["IPs"];
        }
    }
}
