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
 * 缓存预刷新 配置参数。
 *
 * @method string getSwitch() 获取缓存预刷新开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置缓存预刷新开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method integer getCacheTimePercent() 获取预刷新时间设置为节点缓存时间的百分比数值，取值：1～99。<br>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
 * @method void setCacheTimePercent(integer $CacheTimePercent) 设置预刷新时间设置为节点缓存时间的百分比数值，取值：1～99。<br>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
 */
class CachePrefreshParameters extends AbstractModel
{
    /**
     * @var string 缓存预刷新开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Switch;

    /**
     * @var integer 预刷新时间设置为节点缓存时间的百分比数值，取值：1～99。<br>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
     */
    public $CacheTimePercent;

    /**
     * @param string $Switch 缓存预刷新开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param integer $CacheTimePercent 预刷新时间设置为节点缓存时间的百分比数值，取值：1～99。<br>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
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

        if (array_key_exists("CacheTimePercent",$param) and $param["CacheTimePercent"] !== null) {
            $this->CacheTimePercent = $param["CacheTimePercent"];
        }
    }
}
