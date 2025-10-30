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
 * HSTS 配置参数。
 *
 * @method string getSwitch() 获取HSTS 配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置HSTS 配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method integer getTimeout() 获取缓存 HSTS 头部时间，单位为秒，取值：1-31536000。<br>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
 * @method void setTimeout(integer $Timeout) 设置缓存 HSTS 头部时间，单位为秒，取值：1-31536000。<br>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
 * @method string getIncludeSubDomains() 获取是否允许其他子域名继承相同的 HSTS 头部，取值有：
<li>on：允许其他子域名继承相同的 HSTS 头部；</li>
<li>off：不允许其他子域名继承相同的 HSTS 头部。</li>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
 * @method void setIncludeSubDomains(string $IncludeSubDomains) 设置是否允许其他子域名继承相同的 HSTS 头部，取值有：
<li>on：允许其他子域名继承相同的 HSTS 头部；</li>
<li>off：不允许其他子域名继承相同的 HSTS 头部。</li>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
 * @method string getPreload() 获取是否允许浏览器预加载 HSTS 头部，取值有：
<li>on：允许浏览器预加载 HSTS 头部；</li>
<li>off：不允许浏览器预加载 HSTS 头部。</li>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
 * @method void setPreload(string $Preload) 设置是否允许浏览器预加载 HSTS 头部，取值有：
<li>on：允许浏览器预加载 HSTS 头部；</li>
<li>off：不允许浏览器预加载 HSTS 头部。</li>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
 */
class HSTSParameters extends AbstractModel
{
    /**
     * @var string HSTS 配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Switch;

    /**
     * @var integer 缓存 HSTS 头部时间，单位为秒，取值：1-31536000。<br>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
     */
    public $Timeout;

    /**
     * @var string 是否允许其他子域名继承相同的 HSTS 头部，取值有：
<li>on：允许其他子域名继承相同的 HSTS 头部；</li>
<li>off：不允许其他子域名继承相同的 HSTS 头部。</li>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
     */
    public $IncludeSubDomains;

    /**
     * @var string 是否允许浏览器预加载 HSTS 头部，取值有：
<li>on：允许浏览器预加载 HSTS 头部；</li>
<li>off：不允许浏览器预加载 HSTS 头部。</li>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
     */
    public $Preload;

    /**
     * @param string $Switch HSTS 配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param integer $Timeout 缓存 HSTS 头部时间，单位为秒，取值：1-31536000。<br>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
     * @param string $IncludeSubDomains 是否允许其他子域名继承相同的 HSTS 头部，取值有：
<li>on：允许其他子域名继承相同的 HSTS 头部；</li>
<li>off：不允许其他子域名继承相同的 HSTS 头部。</li>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
     * @param string $Preload 是否允许浏览器预加载 HSTS 头部，取值有：
<li>on：允许浏览器预加载 HSTS 头部；</li>
<li>off：不允许浏览器预加载 HSTS 头部。</li>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
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

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("IncludeSubDomains",$param) and $param["IncludeSubDomains"] !== null) {
            $this->IncludeSubDomains = $param["IncludeSubDomains"];
        }

        if (array_key_exists("Preload",$param) and $param["Preload"] !== null) {
            $this->Preload = $param["Preload"];
        }
    }
}
