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
 * 自定义 nameservers
 *
 * @method string getSwitch() 获取自定义 ns 开关，取值有：
<li> on：开启；</li>
<li> off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置自定义 ns 开关，取值有：
<li> on：开启；</li>
<li> off：关闭。</li>
 * @method array getServers() 获取自定义 ns 列表。
 * @method void setServers(array $Servers) 设置自定义 ns 列表。
 */
class VanityNameServers extends AbstractModel
{
    /**
     * @var string 自定义 ns 开关，取值有：
<li> on：开启；</li>
<li> off：关闭。</li>
     */
    public $Switch;

    /**
     * @var array 自定义 ns 列表。
     */
    public $Servers;

    /**
     * @param string $Switch 自定义 ns 开关，取值有：
<li> on：开启；</li>
<li> off：关闭。</li>
     * @param array $Servers 自定义 ns 列表。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Servers",$param) and $param["Servers"] !== null) {
            $this->Servers = $param["Servers"];
        }
    }
}
