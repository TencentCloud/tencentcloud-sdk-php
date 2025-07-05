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
 * IP 归属信息查询
 *
 * @method string getIP() 获取IP 地址，IPV4 或 IPV6。
 * @method void setIP(string $IP) 设置IP 地址，IPV4 或 IPV6。
 * @method string getIsEdgeOneIP() 获取IP 是否属于 EdgeOne 节点，取值有：
<li>yes：该 IP 属于 EdgeOne 节点；</li>
<li>no：该 IP 不属于 EdgeOne 节点。</li>
 * @method void setIsEdgeOneIP(string $IsEdgeOneIP) 设置IP 是否属于 EdgeOne 节点，取值有：
<li>yes：该 IP 属于 EdgeOne 节点；</li>
<li>no：该 IP 不属于 EdgeOne 节点。</li>
 */
class IPRegionInfo extends AbstractModel
{
    /**
     * @var string IP 地址，IPV4 或 IPV6。
     */
    public $IP;

    /**
     * @var string IP 是否属于 EdgeOne 节点，取值有：
<li>yes：该 IP 属于 EdgeOne 节点；</li>
<li>no：该 IP 不属于 EdgeOne 节点。</li>
     */
    public $IsEdgeOneIP;

    /**
     * @param string $IP IP 地址，IPV4 或 IPV6。
     * @param string $IsEdgeOneIP IP 是否属于 EdgeOne 节点，取值有：
<li>yes：该 IP 属于 EdgeOne 节点；</li>
<li>no：该 IP 不属于 EdgeOne 节点。</li>
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
        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("IsEdgeOneIP",$param) and $param["IsEdgeOneIP"] !== null) {
            $this->IsEdgeOneIP = $param["IsEdgeOneIP"];
        }
    }
}
