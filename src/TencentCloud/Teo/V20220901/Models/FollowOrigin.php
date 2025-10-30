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
 * 缓存遵循源站配置。
 *
 * @method string getSwitch() 获取遵循源站配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置遵循源站配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method string getDefaultCache() 获取源站未返回 Cache-Control 头时，缓存/不缓存开关。当 Switch 为 on 时，此字段必填，当 Switch 为 off 时，无需填写此字段，若填写则不生效。取值有：
<li>on：缓存；</li>
<li>off：不缓存。</li>
 * @method void setDefaultCache(string $DefaultCache) 设置源站未返回 Cache-Control 头时，缓存/不缓存开关。当 Switch 为 on 时，此字段必填，当 Switch 为 off 时，无需填写此字段，若填写则不生效。取值有：
<li>on：缓存；</li>
<li>off：不缓存。</li>
 * @method string getDefaultCacheStrategy() 获取源站未返回 Cache-Control 头时，使用/不使用默认缓存策略开关。当 DefaultCache 为 on 时，此字段必填，否则此字段不生效；当 DefaultCacheTime 不为 0 时，此字段必须为 off。取值有：
<li>on：使用默认缓存策略；</li>
<li>off：不使用默认缓存策略。</li>
 * @method void setDefaultCacheStrategy(string $DefaultCacheStrategy) 设置源站未返回 Cache-Control 头时，使用/不使用默认缓存策略开关。当 DefaultCache 为 on 时，此字段必填，否则此字段不生效；当 DefaultCacheTime 不为 0 时，此字段必须为 off。取值有：
<li>on：使用默认缓存策略；</li>
<li>off：不使用默认缓存策略。</li>
 * @method integer getDefaultCacheTime() 获取源站未返回 Cache-Control 头时，表示默认的缓存时间，单位为秒，取值：0-315360000。当 DefaultCache 为 on 时，此字段必填，否则此字段不生效；当 DefaultCacheStrategy 为 on 时， 此字段必须为 0。
 * @method void setDefaultCacheTime(integer $DefaultCacheTime) 设置源站未返回 Cache-Control 头时，表示默认的缓存时间，单位为秒，取值：0-315360000。当 DefaultCache 为 on 时，此字段必填，否则此字段不生效；当 DefaultCacheStrategy 为 on 时， 此字段必须为 0。
 */
class FollowOrigin extends AbstractModel
{
    /**
     * @var string 遵循源站配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Switch;

    /**
     * @var string 源站未返回 Cache-Control 头时，缓存/不缓存开关。当 Switch 为 on 时，此字段必填，当 Switch 为 off 时，无需填写此字段，若填写则不生效。取值有：
<li>on：缓存；</li>
<li>off：不缓存。</li>
     */
    public $DefaultCache;

    /**
     * @var string 源站未返回 Cache-Control 头时，使用/不使用默认缓存策略开关。当 DefaultCache 为 on 时，此字段必填，否则此字段不生效；当 DefaultCacheTime 不为 0 时，此字段必须为 off。取值有：
<li>on：使用默认缓存策略；</li>
<li>off：不使用默认缓存策略。</li>
     */
    public $DefaultCacheStrategy;

    /**
     * @var integer 源站未返回 Cache-Control 头时，表示默认的缓存时间，单位为秒，取值：0-315360000。当 DefaultCache 为 on 时，此字段必填，否则此字段不生效；当 DefaultCacheStrategy 为 on 时， 此字段必须为 0。
     */
    public $DefaultCacheTime;

    /**
     * @param string $Switch 遵循源站配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param string $DefaultCache 源站未返回 Cache-Control 头时，缓存/不缓存开关。当 Switch 为 on 时，此字段必填，当 Switch 为 off 时，无需填写此字段，若填写则不生效。取值有：
<li>on：缓存；</li>
<li>off：不缓存。</li>
     * @param string $DefaultCacheStrategy 源站未返回 Cache-Control 头时，使用/不使用默认缓存策略开关。当 DefaultCache 为 on 时，此字段必填，否则此字段不生效；当 DefaultCacheTime 不为 0 时，此字段必须为 off。取值有：
<li>on：使用默认缓存策略；</li>
<li>off：不使用默认缓存策略。</li>
     * @param integer $DefaultCacheTime 源站未返回 Cache-Control 头时，表示默认的缓存时间，单位为秒，取值：0-315360000。当 DefaultCache 为 on 时，此字段必填，否则此字段不生效；当 DefaultCacheStrategy 为 on 时， 此字段必须为 0。
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

        if (array_key_exists("DefaultCache",$param) and $param["DefaultCache"] !== null) {
            $this->DefaultCache = $param["DefaultCache"];
        }

        if (array_key_exists("DefaultCacheStrategy",$param) and $param["DefaultCacheStrategy"] !== null) {
            $this->DefaultCacheStrategy = $param["DefaultCacheStrategy"];
        }

        if (array_key_exists("DefaultCacheTime",$param) and $param["DefaultCacheTime"] !== null) {
            $this->DefaultCacheTime = $param["DefaultCacheTime"];
        }
    }
}
