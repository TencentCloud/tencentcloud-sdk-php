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
 * 字幕压制模块文字描边配置
 *
 * @method integer getSubtitleOutlineConfigSwitch() 获取<p>文字描边配置开关，0关闭，1开启，默认0</p>
 * @method void setSubtitleOutlineConfigSwitch(integer $SubtitleOutlineConfigSwitch) 设置<p>文字描边配置开关，0关闭，1开启，默认0</p>
 * @method float getOutlineWidth() 获取<p>描边宽度，默认单位像素，底层默认值为源视频高度的0.3%</p>
 * @method void setOutlineWidth(float $OutlineWidth) 设置<p>描边宽度，默认单位像素，底层默认值为源视频高度的0.3%</p>
 * @method integer getOutlineWidthUnit() 获取<p>描边宽度单位，0 像素，1百分比，默认为0，像素</p>
 * @method void setOutlineWidthUnit(integer $OutlineWidthUnit) 设置<p>描边宽度单位，0 像素，1百分比，默认为0，像素</p>
 * @method string getOutlineColor() 获取<p>描边颜色。6位16进制RGB。不填默认黑色。</p>
 * @method void setOutlineColor(string $OutlineColor) 设置<p>描边颜色。6位16进制RGB。不填默认黑色。</p>
 * @method float getOutlineAlpha() 获取<p>描边透明度。(0，1] 正浮点数。不填默认1，完全不透明</p>
 * @method void setOutlineAlpha(float $OutlineAlpha) 设置<p>描边透明度。(0，1] 正浮点数。不填默认1，完全不透明</p>
 */
class SubtitleOutlineConfig extends AbstractModel
{
    /**
     * @var integer <p>文字描边配置开关，0关闭，1开启，默认0</p>
     */
    public $SubtitleOutlineConfigSwitch;

    /**
     * @var float <p>描边宽度，默认单位像素，底层默认值为源视频高度的0.3%</p>
     */
    public $OutlineWidth;

    /**
     * @var integer <p>描边宽度单位，0 像素，1百分比，默认为0，像素</p>
     */
    public $OutlineWidthUnit;

    /**
     * @var string <p>描边颜色。6位16进制RGB。不填默认黑色。</p>
     */
    public $OutlineColor;

    /**
     * @var float <p>描边透明度。(0，1] 正浮点数。不填默认1，完全不透明</p>
     */
    public $OutlineAlpha;

    /**
     * @param integer $SubtitleOutlineConfigSwitch <p>文字描边配置开关，0关闭，1开启，默认0</p>
     * @param float $OutlineWidth <p>描边宽度，默认单位像素，底层默认值为源视频高度的0.3%</p>
     * @param integer $OutlineWidthUnit <p>描边宽度单位，0 像素，1百分比，默认为0，像素</p>
     * @param string $OutlineColor <p>描边颜色。6位16进制RGB。不填默认黑色。</p>
     * @param float $OutlineAlpha <p>描边透明度。(0，1] 正浮点数。不填默认1，完全不透明</p>
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
        if (array_key_exists("SubtitleOutlineConfigSwitch",$param) and $param["SubtitleOutlineConfigSwitch"] !== null) {
            $this->SubtitleOutlineConfigSwitch = $param["SubtitleOutlineConfigSwitch"];
        }

        if (array_key_exists("OutlineWidth",$param) and $param["OutlineWidth"] !== null) {
            $this->OutlineWidth = $param["OutlineWidth"];
        }

        if (array_key_exists("OutlineWidthUnit",$param) and $param["OutlineWidthUnit"] !== null) {
            $this->OutlineWidthUnit = $param["OutlineWidthUnit"];
        }

        if (array_key_exists("OutlineColor",$param) and $param["OutlineColor"] !== null) {
            $this->OutlineColor = $param["OutlineColor"];
        }

        if (array_key_exists("OutlineAlpha",$param) and $param["OutlineAlpha"] !== null) {
            $this->OutlineAlpha = $param["OutlineAlpha"];
        }
    }
}
