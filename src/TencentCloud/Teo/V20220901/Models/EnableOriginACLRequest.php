<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getZoneId() 获取站点ID。
 * @method void setZoneId(string $ZoneId) 设置站点ID。
 * @method string getL7EnableMode() 获取七层加速域名开启回源白名单的模式。
<li>all：为站点下的所有七层加速域名开启回源白名单。</li>
<li>specific：为站点下指定的七层加速域名开启回源白名单。</li>
当参数为空时，默认为specific。
 * @method void setL7EnableMode(string $L7EnableMode) 设置七层加速域名开启回源白名单的模式。
<li>all：为站点下的所有七层加速域名开启回源白名单。</li>
<li>specific：为站点下指定的七层加速域名开启回源白名单。</li>
当参数为空时，默认为specific。
 * @method array getL7Hosts() 获取开启回源白名单的七层加速域名列表，当请求参数 L7EnableMode 为 all 时必须为空。
 * @method void setL7Hosts(array $L7Hosts) 设置开启回源白名单的七层加速域名列表，当请求参数 L7EnableMode 为 all 时必须为空。
 * @method string getL4EnableMode() 获取四层代理 ID 开启回源白名单的模式。
<li>all：为站点下的所有四层代理开启回源白名单。</li>
<li>specific：为站点下指定的四层代理 ID 开启回源白名单。</li>
当参数为空时，默认为specific。
 * @method void setL4EnableMode(string $L4EnableMode) 设置四层代理 ID 开启回源白名单的模式。
<li>all：为站点下的所有四层代理开启回源白名单。</li>
<li>specific：为站点下指定的四层代理 ID 开启回源白名单。</li>
当参数为空时，默认为specific。
 * @method array getL4ProxyIds() 获取开启回源白名单的四层代理 ID 列表，当请求参数 L4EnableMode 为 all 时必须为空。单次最多支持 200 个实例。
 * @method void setL4ProxyIds(array $L4ProxyIds) 设置开启回源白名单的四层代理 ID 列表，当请求参数 L4EnableMode 为 all 时必须为空。单次最多支持 200 个实例。
 */
class EnableOriginACLRequest extends AbstractModel
{
    /**
     * @var string 站点ID。
     */
    public $ZoneId;

    /**
     * @var string 七层加速域名开启回源白名单的模式。
<li>all：为站点下的所有七层加速域名开启回源白名单。</li>
<li>specific：为站点下指定的七层加速域名开启回源白名单。</li>
当参数为空时，默认为specific。
     */
    public $L7EnableMode;

    /**
     * @var array 开启回源白名单的七层加速域名列表，当请求参数 L7EnableMode 为 all 时必须为空。
     */
    public $L7Hosts;

    /**
     * @var string 四层代理 ID 开启回源白名单的模式。
<li>all：为站点下的所有四层代理开启回源白名单。</li>
<li>specific：为站点下指定的四层代理 ID 开启回源白名单。</li>
当参数为空时，默认为specific。
     */
    public $L4EnableMode;

    /**
     * @var array 开启回源白名单的四层代理 ID 列表，当请求参数 L4EnableMode 为 all 时必须为空。单次最多支持 200 个实例。
     */
    public $L4ProxyIds;

    /**
     * @param string $ZoneId 站点ID。
     * @param string $L7EnableMode 七层加速域名开启回源白名单的模式。
<li>all：为站点下的所有七层加速域名开启回源白名单。</li>
<li>specific：为站点下指定的七层加速域名开启回源白名单。</li>
当参数为空时，默认为specific。
     * @param array $L7Hosts 开启回源白名单的七层加速域名列表，当请求参数 L7EnableMode 为 all 时必须为空。
     * @param string $L4EnableMode 四层代理 ID 开启回源白名单的模式。
<li>all：为站点下的所有四层代理开启回源白名单。</li>
<li>specific：为站点下指定的四层代理 ID 开启回源白名单。</li>
当参数为空时，默认为specific。
     * @param array $L4ProxyIds 开启回源白名单的四层代理 ID 列表，当请求参数 L4EnableMode 为 all 时必须为空。单次最多支持 200 个实例。
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
    }
}
