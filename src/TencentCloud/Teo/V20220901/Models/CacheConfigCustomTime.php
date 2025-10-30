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
 * 节点缓存 TTL 自定义缓存时间配置参数。
 *
 * @method string getSwitch() 获取自定义缓存时间开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置自定义缓存时间开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method integer getCacheTime() 获取自定义缓存时间数值，单位为秒，取值：0-315360000。<br>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
 * @method void setCacheTime(integer $CacheTime) 设置自定义缓存时间数值，单位为秒，取值：0-315360000。<br>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
 */
class CacheConfigCustomTime extends AbstractModel
{
    /**
     * @var string 自定义缓存时间开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Switch;

    /**
     * @var integer 自定义缓存时间数值，单位为秒，取值：0-315360000。<br>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
     */
    public $CacheTime;

    /**
     * @param string $Switch 自定义缓存时间开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param integer $CacheTime 自定义缓存时间数值，单位为秒，取值：0-315360000。<br>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
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

        if (array_key_exists("CacheTime",$param) and $param["CacheTime"] !== null) {
            $this->CacheTime = $param["CacheTime"];
        }
    }
}
