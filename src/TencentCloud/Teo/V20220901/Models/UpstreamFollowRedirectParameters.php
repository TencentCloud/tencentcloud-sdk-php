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
 * 回源跟随重定向参数配置。
 *
 * @method string getSwitch() 获取回源跟随重定向配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置回源跟随重定向配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method integer getMaxTimes() 获取最大重定向次数。取值为 1-5。
注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
 * @method void setMaxTimes(integer $MaxTimes) 设置最大重定向次数。取值为 1-5。
注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
 */
class UpstreamFollowRedirectParameters extends AbstractModel
{
    /**
     * @var string 回源跟随重定向配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Switch;

    /**
     * @var integer 最大重定向次数。取值为 1-5。
注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
     */
    public $MaxTimes;

    /**
     * @param string $Switch 回源跟随重定向配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param integer $MaxTimes 最大重定向次数。取值为 1-5。
注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
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

        if (array_key_exists("MaxTimes",$param) and $param["MaxTimes"] !== null) {
            $this->MaxTimes = $param["MaxTimes"];
        }
    }
}
