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
 * 音量均衡配置。
 *
 * @method string getSwitch() 获取音量均衡控制开关，可选值：
<li>ON：开启音量均衡；</li>
<li>OFF：关闭音量均衡。</li>
 * @method void setSwitch(string $Switch) 设置音量均衡控制开关，可选值：
<li>ON：开启音量均衡；</li>
<li>OFF：关闭音量均衡。</li>
 * @method string getType() 获取类型，可选值：
<li>loudNorm：响度标准化</li>
<li>gainControl：减小突变</li>
默认值：loudNorm。
 * @method void setType(string $Type) 设置类型，可选值：
<li>loudNorm：响度标准化</li>
<li>gainControl：减小突变</li>
默认值：loudNorm。
 */
class AudioVolumeBalanceInfo extends AbstractModel
{
    /**
     * @var string 音量均衡控制开关，可选值：
<li>ON：开启音量均衡；</li>
<li>OFF：关闭音量均衡。</li>
     */
    public $Switch;

    /**
     * @var string 类型，可选值：
<li>loudNorm：响度标准化</li>
<li>gainControl：减小突变</li>
默认值：loudNorm。
     */
    public $Type;

    /**
     * @param string $Switch 音量均衡控制开关，可选值：
<li>ON：开启音量均衡；</li>
<li>OFF：关闭音量均衡。</li>
     * @param string $Type 类型，可选值：
<li>loudNorm：响度标准化</li>
<li>gainControl：减小突变</li>
默认值：loudNorm。
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
    }
}
