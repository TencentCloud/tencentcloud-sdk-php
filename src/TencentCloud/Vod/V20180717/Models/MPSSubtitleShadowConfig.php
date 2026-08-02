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
 * MPS字幕压制模块文字阴影配置
 *
 * @method integer getSubtitleShadowConfigSwitch() 获取<p>文字阴影配置开关，0关闭，1开启，默认0</p>
 * @method void setSubtitleShadowConfigSwitch(integer $SubtitleShadowConfigSwitch) 设置<p>文字阴影配置开关，0关闭，1开启，默认0</p>
 * @method float getShadowWidth() 获取<p>阴影宽度，默认单位像素，底层默认值为0，无阴影</p>
 * @method void setShadowWidth(float $ShadowWidth) 设置<p>阴影宽度，默认单位像素，底层默认值为0，无阴影</p>
 * @method integer getShadowWidthUnit() 获取<p>阴影宽度单位， 0 像素，1百分比，默认为0，像素</p>
 * @method void setShadowWidthUnit(integer $ShadowWidthUnit) 设置<p>阴影宽度单位， 0 像素，1百分比，默认为0，像素</p>
 * @method string getShadowColor() 获取<p>阴影颜色。6位16进制RGB。不填默认黑色（有设置阴影的情况下）</p>
 * @method void setShadowColor(string $ShadowColor) 设置<p>阴影颜色。6位16进制RGB。不填默认黑色（有设置阴影的情况下）</p>
 * @method float getShadowAlpha() 获取<p>阴影透明度。(0，1] 正浮点数。不填默认1，完全不透明（有设置阴影的情况下）</p>
 * @method void setShadowAlpha(float $ShadowAlpha) 设置<p>阴影透明度。(0，1] 正浮点数。不填默认1，完全不透明（有设置阴影的情况下）</p>
 */
class MPSSubtitleShadowConfig extends AbstractModel
{
    /**
     * @var integer <p>文字阴影配置开关，0关闭，1开启，默认0</p>
     */
    public $SubtitleShadowConfigSwitch;

    /**
     * @var float <p>阴影宽度，默认单位像素，底层默认值为0，无阴影</p>
     */
    public $ShadowWidth;

    /**
     * @var integer <p>阴影宽度单位， 0 像素，1百分比，默认为0，像素</p>
     */
    public $ShadowWidthUnit;

    /**
     * @var string <p>阴影颜色。6位16进制RGB。不填默认黑色（有设置阴影的情况下）</p>
     */
    public $ShadowColor;

    /**
     * @var float <p>阴影透明度。(0，1] 正浮点数。不填默认1，完全不透明（有设置阴影的情况下）</p>
     */
    public $ShadowAlpha;

    /**
     * @param integer $SubtitleShadowConfigSwitch <p>文字阴影配置开关，0关闭，1开启，默认0</p>
     * @param float $ShadowWidth <p>阴影宽度，默认单位像素，底层默认值为0，无阴影</p>
     * @param integer $ShadowWidthUnit <p>阴影宽度单位， 0 像素，1百分比，默认为0，像素</p>
     * @param string $ShadowColor <p>阴影颜色。6位16进制RGB。不填默认黑色（有设置阴影的情况下）</p>
     * @param float $ShadowAlpha <p>阴影透明度。(0，1] 正浮点数。不填默认1，完全不透明（有设置阴影的情况下）</p>
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
        if (array_key_exists("SubtitleShadowConfigSwitch",$param) and $param["SubtitleShadowConfigSwitch"] !== null) {
            $this->SubtitleShadowConfigSwitch = $param["SubtitleShadowConfigSwitch"];
        }

        if (array_key_exists("ShadowWidth",$param) and $param["ShadowWidth"] !== null) {
            $this->ShadowWidth = $param["ShadowWidth"];
        }

        if (array_key_exists("ShadowWidthUnit",$param) and $param["ShadowWidthUnit"] !== null) {
            $this->ShadowWidthUnit = $param["ShadowWidthUnit"];
        }

        if (array_key_exists("ShadowColor",$param) and $param["ShadowColor"] !== null) {
            $this->ShadowColor = $param["ShadowColor"];
        }

        if (array_key_exists("ShadowAlpha",$param) and $param["ShadowAlpha"] !== null) {
            $this->ShadowAlpha = $param["ShadowAlpha"];
        }
    }
}
