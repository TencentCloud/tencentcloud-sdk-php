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
<li>standard：通用超分</li>
<li>super：高级超分。</li>
默认值：standard。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置类型，可选值：
<li>standard：通用超分</li>
<li>super：高级超分。</li>
默认值：standard。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMode() 获取输出图片模式，默认percent。
<li> aspect: 超分至指定宽高的较大矩形。</li>
<li> fixed: 超分至固定宽高，强制缩放。</li>
<li> percent: 超分倍率，可以为小数。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMode(string $Mode) 设置输出图片模式，默认percent。
<li> aspect: 超分至指定宽高的较大矩形。</li>
<li> fixed: 超分至固定宽高，强制缩放。</li>
<li> percent: 超分倍率，可以为小数。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getPercent() 获取超分倍率，可以为小数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPercent(float $Percent) 设置超分倍率，可以为小数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWidth() 获取目标图片宽度，不能超过4096。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidth(integer $Width) 设置目标图片宽度，不能超过4096。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHeight() 获取目标图片高度，不能超过4096。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeight(integer $Height) 设置目标图片高度，不能超过4096。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AdvancedSuperResolutionConfig extends AbstractModel
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
<li>standard：通用超分</li>
<li>super：高级超分。</li>
默认值：standard。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 输出图片模式，默认percent。
<li> aspect: 超分至指定宽高的较大矩形。</li>
<li> fixed: 超分至固定宽高，强制缩放。</li>
<li> percent: 超分倍率，可以为小数。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mode;

    /**
     * @var float 超分倍率，可以为小数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Percent;

    /**
     * @var integer 目标图片宽度，不能超过4096。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Width;

    /**
     * @var integer 目标图片高度，不能超过4096。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Height;

    /**
     * @param string $Switch 能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
     * @param string $Type 类型，可选值：
<li>standard：通用超分</li>
<li>super：高级超分。</li>
默认值：standard。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mode 输出图片模式，默认percent。
<li> aspect: 超分至指定宽高的较大矩形。</li>
<li> fixed: 超分至固定宽高，强制缩放。</li>
<li> percent: 超分倍率，可以为小数。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Percent 超分倍率，可以为小数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Width 目标图片宽度，不能超过4096。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Height 目标图片高度，不能超过4096。
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

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}
