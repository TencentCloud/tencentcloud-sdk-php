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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 沙箱自定义 dns 配置
 *
 * @method array getServers() 获取<p>DNS 服务器地址</p><p>参数格式：需要有效 IP 地址</p><p>默认值：10.0.0.1</p>
 * @method void setServers(array $Servers) 设置<p>DNS 服务器地址</p><p>参数格式：需要有效 IP 地址</p><p>默认值：10.0.0.1</p>
 * @method array getSearches() 获取<p>搜索域(对应 resolv.conf 的 search 指令)</p>
 * @method void setSearches(array $Searches) 设置<p>搜索域(对应 resolv.conf 的 search 指令)</p>
 * @method array getOptions() 获取<p>配置项(对应  resolv.conf 选项)</p>
 * @method void setOptions(array $Options) 设置<p>配置项(对应  resolv.conf 选项)</p>
 */
class DNSConfig extends AbstractModel
{
    /**
     * @var array <p>DNS 服务器地址</p><p>参数格式：需要有效 IP 地址</p><p>默认值：10.0.0.1</p>
     */
    public $Servers;

    /**
     * @var array <p>搜索域(对应 resolv.conf 的 search 指令)</p>
     */
    public $Searches;

    /**
     * @var array <p>配置项(对应  resolv.conf 选项)</p>
     */
    public $Options;

    /**
     * @param array $Servers <p>DNS 服务器地址</p><p>参数格式：需要有效 IP 地址</p><p>默认值：10.0.0.1</p>
     * @param array $Searches <p>搜索域(对应 resolv.conf 的 search 指令)</p>
     * @param array $Options <p>配置项(对应  resolv.conf 选项)</p>
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
        if (array_key_exists("Servers",$param) and $param["Servers"] !== null) {
            $this->Servers = $param["Servers"];
        }

        if (array_key_exists("Searches",$param) and $param["Searches"] !== null) {
            $this->Searches = $param["Searches"];
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = $param["Options"];
        }
    }
}
