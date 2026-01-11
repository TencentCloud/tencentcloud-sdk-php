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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频美化配置。
 *
 * @method string getSwitch() 获取音频美化控制开关，可选值：
<li>ON：开启音频美化；</li>
<li>OFF：关闭音频美化。</li>
 * @method void setSwitch(string $Switch) 设置音频美化控制开关，可选值：
<li>ON：开启音频美化；</li>
<li>OFF：关闭音频美化。</li>
 * @method array getTypes() 获取类型，可多选，可选值：
<li>declick：杂音去除</li>
<li>deesser：齿音压制</li>
默认值：declick。
 * @method void setTypes(array $Types) 设置类型，可多选，可选值：
<li>declick：杂音去除</li>
<li>deesser：齿音压制</li>
默认值：declick。
 */
class AudioBeautifyInfo extends AbstractModel
{
    /**
     * @var string 音频美化控制开关，可选值：
<li>ON：开启音频美化；</li>
<li>OFF：关闭音频美化。</li>
     */
    public $Switch;

    /**
     * @var array 类型，可多选，可选值：
<li>declick：杂音去除</li>
<li>deesser：齿音压制</li>
默认值：declick。
     */
    public $Types;

    /**
     * @param string $Switch 音频美化控制开关，可选值：
<li>ON：开启音频美化；</li>
<li>OFF：关闭音频美化。</li>
     * @param array $Types 类型，可多选，可选值：
<li>declick：杂音去除</li>
<li>deesser：齿音压制</li>
默认值：declick。
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

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = $param["Types"];
        }
    }
}
