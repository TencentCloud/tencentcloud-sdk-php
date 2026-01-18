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
 * 图片缩放配置
 *
 * @method string getSwitch() 获取能力配置开关，可选值：
<li>ON：开启</li>
<li>OFF：关闭</li>
默认值：ON。
 * @method void setSwitch(string $Switch) 设置能力配置开关，可选值：
<li>ON：开启</li>
<li>OFF：关闭</li>
默认值：ON。
 * @method string getMode() 获取输出图片模式，可选模式：
<li>percent: 指定缩放倍率，可以为小数</li>
<li>mfit: 缩放至指定宽高的较大矩形</li>
<li>lfit: 缩放至指定宽高的较小矩形</li>
<li>fill: 缩放至指定宽高的较大矩形，并居中裁剪指定宽高</li>
<li>pad: 缩放至指定宽高的较小矩形，并填充到指定宽高</li>
<li>fixed: 缩放至固定宽高，强制缩放</li>
默认值：percent。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMode(string $Mode) 设置输出图片模式，可选模式：
<li>percent: 指定缩放倍率，可以为小数</li>
<li>mfit: 缩放至指定宽高的较大矩形</li>
<li>lfit: 缩放至指定宽高的较小矩形</li>
<li>fill: 缩放至指定宽高的较大矩形，并居中裁剪指定宽高</li>
<li>pad: 缩放至指定宽高的较小矩形，并填充到指定宽高</li>
<li>fixed: 缩放至固定宽高，强制缩放</li>
默认值：percent。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getPercent() 获取缩放倍率，可以为小数，当Mode为percent时使用。

默认值：1.0。
取值范围：[0.1，10.0]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPercent(float $Percent) 设置缩放倍率，可以为小数，当Mode为percent时使用。

默认值：1.0。
取值范围：[0.1，10.0]
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWidth() 获取目标图片宽度。

取值范围：[1，16384]。
注意：此字段在Mode非percent时优先使用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidth(integer $Width) 设置目标图片宽度。

取值范围：[1，16384]。
注意：此字段在Mode非percent时优先使用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHeight() 获取目标图片高度。

取值范围：[1，16384]。
注意：此字段在Mode非percent时优先使用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeight(integer $Height) 设置目标图片高度。

取值范围：[1，16384]。
注意：此字段在Mode非percent时优先使用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLongSide() 获取目标图片长边。

取值范围：[1，16384]。
注意：此字段在Mode非percent且未配置Width和Height时使用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLongSide(integer $LongSide) 设置目标图片长边。

取值范围：[1，16384]。
注意：此字段在Mode非percent且未配置Width和Height时使用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getShortSide() 获取目标图片短边。

取值范围：[1，16384]。
注意：此字段在Mode非percent且未配置Width和Height时使用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShortSide(integer $ShortSide) 设置目标图片短边。

取值范围：[1，16384]。
注意：此字段在Mode非percent且未配置Width和Height时使用。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageResizeConfig extends AbstractModel
{
    /**
     * @var string 能力配置开关，可选值：
<li>ON：开启</li>
<li>OFF：关闭</li>
默认值：ON。
     */
    public $Switch;

    /**
     * @var string 输出图片模式，可选模式：
<li>percent: 指定缩放倍率，可以为小数</li>
<li>mfit: 缩放至指定宽高的较大矩形</li>
<li>lfit: 缩放至指定宽高的较小矩形</li>
<li>fill: 缩放至指定宽高的较大矩形，并居中裁剪指定宽高</li>
<li>pad: 缩放至指定宽高的较小矩形，并填充到指定宽高</li>
<li>fixed: 缩放至固定宽高，强制缩放</li>
默认值：percent。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mode;

    /**
     * @var float 缩放倍率，可以为小数，当Mode为percent时使用。

默认值：1.0。
取值范围：[0.1，10.0]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Percent;

    /**
     * @var integer 目标图片宽度。

取值范围：[1，16384]。
注意：此字段在Mode非percent时优先使用。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Width;

    /**
     * @var integer 目标图片高度。

取值范围：[1，16384]。
注意：此字段在Mode非percent时优先使用。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Height;

    /**
     * @var integer 目标图片长边。

取值范围：[1，16384]。
注意：此字段在Mode非percent且未配置Width和Height时使用。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LongSide;

    /**
     * @var integer 目标图片短边。

取值范围：[1，16384]。
注意：此字段在Mode非percent且未配置Width和Height时使用。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShortSide;

    /**
     * @param string $Switch 能力配置开关，可选值：
<li>ON：开启</li>
<li>OFF：关闭</li>
默认值：ON。
     * @param string $Mode 输出图片模式，可选模式：
<li>percent: 指定缩放倍率，可以为小数</li>
<li>mfit: 缩放至指定宽高的较大矩形</li>
<li>lfit: 缩放至指定宽高的较小矩形</li>
<li>fill: 缩放至指定宽高的较大矩形，并居中裁剪指定宽高</li>
<li>pad: 缩放至指定宽高的较小矩形，并填充到指定宽高</li>
<li>fixed: 缩放至固定宽高，强制缩放</li>
默认值：percent。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Percent 缩放倍率，可以为小数，当Mode为percent时使用。

默认值：1.0。
取值范围：[0.1，10.0]
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Width 目标图片宽度。

取值范围：[1，16384]。
注意：此字段在Mode非percent时优先使用。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Height 目标图片高度。

取值范围：[1，16384]。
注意：此字段在Mode非percent时优先使用。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LongSide 目标图片长边。

取值范围：[1，16384]。
注意：此字段在Mode非percent且未配置Width和Height时使用。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ShortSide 目标图片短边。

取值范围：[1，16384]。
注意：此字段在Mode非percent且未配置Width和Height时使用。
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

        if (array_key_exists("LongSide",$param) and $param["LongSide"] !== null) {
            $this->LongSide = $param["LongSide"];
        }

        if (array_key_exists("ShortSide",$param) and $param["ShortSide"] !== null) {
            $this->ShortSide = $param["ShortSide"];
        }
    }
}
