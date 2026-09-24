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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型思考强度
 *
 * @method string getMode() 获取<p>模式</p><p>枚举值：</p><ul><li>toggle： 可开关</li><li>always_on： 固定开启</li><li>always_off： 固定关闭</li><li>unconfigured： 未配置</li></ul>
 * @method void setMode(string $Mode) 设置<p>模式</p><p>枚举值：</p><ul><li>toggle： 可开关</li><li>always_on： 固定开启</li><li>always_off： 固定关闭</li><li>unconfigured： 未配置</li></ul>
 * @method boolean getDefaultEnabled() 获取<p>默认是否开启思考</p>
 * @method void setDefaultEnabled(boolean $DefaultEnabled) 设置<p>默认是否开启思考</p>
 * @method array getEffortOptions() 获取<p>思考强度可选项，如 [&quot;high&quot;,&quot;max&quot;]</p>
 * @method void setEffortOptions(array $EffortOptions) 设置<p>思考强度可选项，如 [&quot;high&quot;,&quot;max&quot;]</p>
 * @method string getDefaultEffort() 获取<p>默认思考强度</p>
 * @method void setDefaultEffort(string $DefaultEffort) 设置<p>默认思考强度</p>
 */
class Thinking extends AbstractModel
{
    /**
     * @var string <p>模式</p><p>枚举值：</p><ul><li>toggle： 可开关</li><li>always_on： 固定开启</li><li>always_off： 固定关闭</li><li>unconfigured： 未配置</li></ul>
     */
    public $Mode;

    /**
     * @var boolean <p>默认是否开启思考</p>
     */
    public $DefaultEnabled;

    /**
     * @var array <p>思考强度可选项，如 [&quot;high&quot;,&quot;max&quot;]</p>
     */
    public $EffortOptions;

    /**
     * @var string <p>默认思考强度</p>
     */
    public $DefaultEffort;

    /**
     * @param string $Mode <p>模式</p><p>枚举值：</p><ul><li>toggle： 可开关</li><li>always_on： 固定开启</li><li>always_off： 固定关闭</li><li>unconfigured： 未配置</li></ul>
     * @param boolean $DefaultEnabled <p>默认是否开启思考</p>
     * @param array $EffortOptions <p>思考强度可选项，如 [&quot;high&quot;,&quot;max&quot;]</p>
     * @param string $DefaultEffort <p>默认思考强度</p>
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("DefaultEnabled",$param) and $param["DefaultEnabled"] !== null) {
            $this->DefaultEnabled = $param["DefaultEnabled"];
        }

        if (array_key_exists("EffortOptions",$param) and $param["EffortOptions"] !== null) {
            $this->EffortOptions = $param["EffortOptions"];
        }

        if (array_key_exists("DefaultEffort",$param) and $param["DefaultEffort"] !== null) {
            $this->DefaultEffort = $param["DefaultEffort"];
        }
    }
}
