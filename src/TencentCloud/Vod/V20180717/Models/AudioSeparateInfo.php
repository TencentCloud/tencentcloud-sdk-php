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
 * 音频分离配置。
 *
 * @method string getSwitch() 获取音频分离控制开关，可选值：
<li>ON：开启音频分离；</li>
<li>OFF：关闭音频分离。</li>
 * @method void setSwitch(string $Switch) 设置音频分离控制开关，可选值：
<li>ON：开启音频分离；</li>
<li>OFF：关闭音频分离。</li>
 * @method string getType() 获取场景类型，可选值：
<li>normal：人声背景声场景</li>
<li>music：演唱伴奏场景</li>
默认值：normal。
 * @method void setType(string $Type) 设置场景类型，可选值：
<li>normal：人声背景声场景</li>
<li>music：演唱伴奏场景</li>
默认值：normal。
 * @method string getTrack() 获取输出音轨，可选值：
<li>vocal：输出人声</li>
<li>background：应用场景为normal时输出背景声，应用场景为music时输出伴奏</li>
默认值：vocal。
 * @method void setTrack(string $Track) 设置输出音轨，可选值：
<li>vocal：输出人声</li>
<li>background：应用场景为normal时输出背景声，应用场景为music时输出伴奏</li>
默认值：vocal。
 */
class AudioSeparateInfo extends AbstractModel
{
    /**
     * @var string 音频分离控制开关，可选值：
<li>ON：开启音频分离；</li>
<li>OFF：关闭音频分离。</li>
     */
    public $Switch;

    /**
     * @var string 场景类型，可选值：
<li>normal：人声背景声场景</li>
<li>music：演唱伴奏场景</li>
默认值：normal。
     */
    public $Type;

    /**
     * @var string 输出音轨，可选值：
<li>vocal：输出人声</li>
<li>background：应用场景为normal时输出背景声，应用场景为music时输出伴奏</li>
默认值：vocal。
     */
    public $Track;

    /**
     * @param string $Switch 音频分离控制开关，可选值：
<li>ON：开启音频分离；</li>
<li>OFF：关闭音频分离。</li>
     * @param string $Type 场景类型，可选值：
<li>normal：人声背景声场景</li>
<li>music：演唱伴奏场景</li>
默认值：normal。
     * @param string $Track 输出音轨，可选值：
<li>vocal：输出人声</li>
<li>background：应用场景为normal时输出背景声，应用场景为music时输出伴奏</li>
默认值：vocal。
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Track",$param) and $param["Track"] !== null) {
            $this->Track = $param["Track"];
        }
    }
}
