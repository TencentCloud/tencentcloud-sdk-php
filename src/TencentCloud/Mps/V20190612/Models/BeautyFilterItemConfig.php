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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 美颜滤镜配置项
 *
 * @method string getType() 获取类型名称。取值如下：

<li>Dongjing：东京</li>
<li>QingJiaopian：轻胶片</li>
<li>Meiwei：美味</li>


 * @method void setType(string $Type) 设置类型名称。取值如下：

<li>Dongjing：东京</li>
<li>QingJiaopian：轻胶片</li>
<li>Meiwei：美味</li>


 * @method string getSwitch() 获取能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
 * @method void setSwitch(string $Switch) 设置能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
 * @method integer getValue() 获取效果强度，值范围：[0, 100]。
 * @method void setValue(integer $Value) 设置效果强度，值范围：[0, 100]。
 */
class BeautyFilterItemConfig extends AbstractModel
{
    /**
     * @var string 类型名称。取值如下：

<li>Dongjing：东京</li>
<li>QingJiaopian：轻胶片</li>
<li>Meiwei：美味</li>


     */
    public $Type;

    /**
     * @var string 能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
     */
    public $Switch;

    /**
     * @var integer 效果强度，值范围：[0, 100]。
     */
    public $Value;

    /**
     * @param string $Type 类型名称。取值如下：

<li>Dongjing：东京</li>
<li>QingJiaopian：轻胶片</li>
<li>Meiwei：美味</li>


     * @param string $Switch 能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
     * @param integer $Value 效果强度，值范围：[0, 100]。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
