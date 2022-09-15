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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 超分配置
 *
 * @method string getSwitch() 获取能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
 * @method void setSwitch(string $Switch) 设置能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
 * @method string getType() 获取类型，可选值：
<li>lq：针对低清晰度有较多噪声视频的超分；</li>
<li>hq：针对高清晰度视频超分。</li>
默认值：lq。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置类型，可选值：
<li>lq：针对低清晰度有较多噪声视频的超分；</li>
<li>hq：针对高清晰度视频超分。</li>
默认值：lq。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSize() 获取超分倍数，可选值：
<li>2：目前只支持 2 倍超分。</li>
默认值：2。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(integer $Size) 设置超分倍数，可选值：
<li>2：目前只支持 2 倍超分。</li>
默认值：2。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SuperResolutionConfig extends AbstractModel
{
    /**
     * @var string 能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
     */
    public $Switch;

    /**
     * @var string 类型，可选值：
<li>lq：针对低清晰度有较多噪声视频的超分；</li>
<li>hq：针对高清晰度视频超分。</li>
默认值：lq。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 超分倍数，可选值：
<li>2：目前只支持 2 倍超分。</li>
默认值：2。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @param string $Switch 能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
     * @param string $Type 类型，可选值：
<li>lq：针对低清晰度有较多噪声视频的超分；</li>
<li>hq：针对高清晰度视频超分。</li>
默认值：lq。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Size 超分倍数，可选值：
<li>2：目前只支持 2 倍超分。</li>
默认值：2。
注意：此字段可能返回 null，表示取不到有效值。
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
