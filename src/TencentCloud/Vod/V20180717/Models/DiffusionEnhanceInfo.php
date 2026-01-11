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
 * 大模型增强配置。
 *
 * @method string getSwitch() 获取大模型增强开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
 * @method void setSwitch(string $Switch) 设置大模型增强开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
 * @method string getType() 获取强度类型，仅当大模型增强控制开关为 ON 时有效，可选值：
<li>weak：弱；</li>
<li>normal：正常；</li>
<li>strong：强。</li>
默认值：normal。
 * @method void setType(string $Type) 设置强度类型，仅当大模型增强控制开关为 ON 时有效，可选值：
<li>weak：弱；</li>
<li>normal：正常；</li>
<li>strong：强。</li>
默认值：normal。
 */
class DiffusionEnhanceInfo extends AbstractModel
{
    /**
     * @var string 大模型增强开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
     */
    public $Switch;

    /**
     * @var string 强度类型，仅当大模型增强控制开关为 ON 时有效，可选值：
<li>weak：弱；</li>
<li>normal：正常；</li>
<li>strong：强。</li>
默认值：normal。
     */
    public $Type;

    /**
     * @param string $Switch 大模型增强开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
     * @param string $Type 强度类型，仅当大模型增强控制开关为 ON 时有效，可选值：
<li>weak：弱；</li>
<li>normal：正常；</li>
<li>strong：强。</li>
默认值：normal。
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
