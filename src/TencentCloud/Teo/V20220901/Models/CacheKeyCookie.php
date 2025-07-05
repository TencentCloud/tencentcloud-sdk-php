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
 * 自定义 Cache Key Cookie 配置参数。
 *
 * @method string getSwitch() 获取功能开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置功能开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method string getAction() 获取缓存动作，取值有：
<li>full：全部保留；</li>
<li> ignore：全部忽略；</li>
<li> includeCustom：保留指定参数；</li>
<li>excludeCustom：忽略指定参数。</li>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
 * @method void setAction(string $Action) 设置缓存动作，取值有：
<li>full：全部保留；</li>
<li> ignore：全部忽略；</li>
<li> includeCustom：保留指定参数；</li>
<li>excludeCustom：忽略指定参数。</li>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
 * @method array getValues() 获取自定义 Cache Key Cookie 名称列表。<br>注意：当 Action 为 includeCustom 或 excludeCustom 时，此字段必填；当 Action 为 full 或 ignore 时，无需填写此字段，若填写则不生效。
 * @method void setValues(array $Values) 设置自定义 Cache Key Cookie 名称列表。<br>注意：当 Action 为 includeCustom 或 excludeCustom 时，此字段必填；当 Action 为 full 或 ignore 时，无需填写此字段，若填写则不生效。
 */
class CacheKeyCookie extends AbstractModel
{
    /**
     * @var string 功能开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Switch;

    /**
     * @var string 缓存动作，取值有：
<li>full：全部保留；</li>
<li> ignore：全部忽略；</li>
<li> includeCustom：保留指定参数；</li>
<li>excludeCustom：忽略指定参数。</li>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
     */
    public $Action;

    /**
     * @var array 自定义 Cache Key Cookie 名称列表。<br>注意：当 Action 为 includeCustom 或 excludeCustom 时，此字段必填；当 Action 为 full 或 ignore 时，无需填写此字段，若填写则不生效。
     */
    public $Values;

    /**
     * @param string $Switch 功能开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param string $Action 缓存动作，取值有：
<li>full：全部保留；</li>
<li> ignore：全部忽略；</li>
<li> includeCustom：保留指定参数；</li>
<li>excludeCustom：忽略指定参数。</li>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
     * @param array $Values 自定义 Cache Key Cookie 名称列表。<br>注意：当 Action 为 includeCustom 或 excludeCustom 时，此字段必填；当 Action 为 full 或 ignore 时，无需填写此字段，若填写则不生效。
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

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
