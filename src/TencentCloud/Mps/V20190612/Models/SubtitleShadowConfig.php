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
 * 字幕压制模块文字阴影配置
 *
 * @method integer getSubtitleShadowConfigSwitch() 获取文字阴影配置开关，0关闭，1开启，默认0
 * @method void setSubtitleShadowConfigSwitch(integer $SubtitleShadowConfigSwitch) 设置文字阴影配置开关，0关闭，1开启，默认0
 * @method float getShadowWidth() 获取阴影宽度，默认单位像素，底层默认值为0，无阴影

 * @method void setShadowWidth(float $ShadowWidth) 设置阴影宽度，默认单位像素，底层默认值为0，无阴影

 * @method integer getShadowWidthUnit() 获取阴影宽度单位， 0 像素，1百分比，默认为0，像素

 * @method void setShadowWidthUnit(integer $ShadowWidthUnit) 设置阴影宽度单位， 0 像素，1百分比，默认为0，像素

 * @method string getShadowColor() 获取阴影颜色。6位16进制RGB。不填默认黑色（有设置阴影的情况下）

 * @method void setShadowColor(string $ShadowColor) 设置阴影颜色。6位16进制RGB。不填默认黑色（有设置阴影的情况下）

 * @method float getShadowAlpha() 获取阴影透明度。(0，1] 正浮点数。不填默认1，完全不透明（有设置阴影的情况下）

 * @method void setShadowAlpha(float $ShadowAlpha) 设置阴影透明度。(0，1] 正浮点数。不填默认1，完全不透明（有设置阴影的情况下）
 */
class SubtitleShadowConfig extends AbstractModel
{
    /**
     * @var integer 文字阴影配置开关，0关闭，1开启，默认0
     */
    public $SubtitleShadowConfigSwitch;

    /**
     * @var float 阴影宽度，默认单位像素，底层默认值为0，无阴影

     */
    public $ShadowWidth;

    /**
     * @var integer 阴影宽度单位， 0 像素，1百分比，默认为0，像素

     */
    public $ShadowWidthUnit;

    /**
     * @var string 阴影颜色。6位16进制RGB。不填默认黑色（有设置阴影的情况下）

     */
    public $ShadowColor;

    /**
     * @var float 阴影透明度。(0，1] 正浮点数。不填默认1，完全不透明（有设置阴影的情况下）

     */
    public $ShadowAlpha;

    /**
     * @param integer $SubtitleShadowConfigSwitch 文字阴影配置开关，0关闭，1开启，默认0
     * @param float $ShadowWidth 阴影宽度，默认单位像素，底层默认值为0，无阴影

     * @param integer $ShadowWidthUnit 阴影宽度单位， 0 像素，1百分比，默认为0，像素

     * @param string $ShadowColor 阴影颜色。6位16进制RGB。不填默认黑色（有设置阴影的情况下）

     * @param float $ShadowAlpha 阴影透明度。(0，1] 正浮点数。不填默认1，完全不透明（有设置阴影的情况下）
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
