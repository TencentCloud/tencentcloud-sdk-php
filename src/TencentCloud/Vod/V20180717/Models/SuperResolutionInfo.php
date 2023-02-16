<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 画面超分控制参数
 *
 * @method string getSwitch() 获取画面超分控制开关，可选值：
<li>ON：开启画面超分；</li>
<li>OFF：关闭画面超分。</li>
当开启画面超分时，默认2倍超分。
 * @method void setSwitch(string $Switch) 设置画面超分控制开关，可选值：
<li>ON：开启画面超分；</li>
<li>OFF：关闭画面超分。</li>
当开启画面超分时，默认2倍超分。
 * @method string getType() 获取画面超分类型，仅当画面超分控制开关为 ON 时有效，可选值：
<li>lq：针对低清晰度有较多噪声视频的超分；</li>
<li>hq：针对高清晰度视频超分。</li>
默认值：lq。
 * @method void setType(string $Type) 设置画面超分类型，仅当画面超分控制开关为 ON 时有效，可选值：
<li>lq：针对低清晰度有较多噪声视频的超分；</li>
<li>hq：针对高清晰度视频超分。</li>
默认值：lq。
 * @method integer getSize() 获取超分倍数，可选值：2。
默认值：2。
 * @method void setSize(integer $Size) 设置超分倍数，可选值：2。
默认值：2。
 */
class SuperResolutionInfo extends AbstractModel
{
    /**
     * @var string 画面超分控制开关，可选值：
<li>ON：开启画面超分；</li>
<li>OFF：关闭画面超分。</li>
当开启画面超分时，默认2倍超分。
     */
    public $Switch;

    /**
     * @var string 画面超分类型，仅当画面超分控制开关为 ON 时有效，可选值：
<li>lq：针对低清晰度有较多噪声视频的超分；</li>
<li>hq：针对高清晰度视频超分。</li>
默认值：lq。
     */
    public $Type;

    /**
     * @var integer 超分倍数，可选值：2。
默认值：2。
     */
    public $Size;

    /**
     * @param string $Switch 画面超分控制开关，可选值：
<li>ON：开启画面超分；</li>
<li>OFF：关闭画面超分。</li>
当开启画面超分时，默认2倍超分。
     * @param string $Type 画面超分类型，仅当画面超分控制开关为 ON 时有效，可选值：
<li>lq：针对低清晰度有较多噪声视频的超分；</li>
<li>hq：针对高清晰度视频超分。</li>
默认值：lq。
     * @param integer $Size 超分倍数，可选值：2。
默认值：2。
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

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }
    }
}
