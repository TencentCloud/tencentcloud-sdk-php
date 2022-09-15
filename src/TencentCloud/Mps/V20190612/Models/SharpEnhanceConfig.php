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
 * 细节增强配置
 *
 * @method string getSwitch() 获取能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
 * @method void setSwitch(string $Switch) 设置能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
 * @method float getIntensity() 获取强度，取值范围：0.0~1.0。
默认：0.0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntensity(float $Intensity) 设置强度，取值范围：0.0~1.0。
默认：0.0。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SharpEnhanceConfig extends AbstractModel
{
    /**
     * @var string 能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
     */
    public $Switch;

    /**
     * @var float 强度，取值范围：0.0~1.0。
默认：0.0。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Intensity;

    /**
     * @param string $Switch 能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
     * @param float $Intensity 强度，取值范围：0.0~1.0。
默认：0.0。
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

        if (array_key_exists("Intensity",$param) and $param["Intensity"] !== null) {
            $this->Intensity = $param["Intensity"];
        }
    }
}
