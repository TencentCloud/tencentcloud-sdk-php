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
 * 视频编辑/合成任务 字幕样式。
 *
 * @method string getHeight() 获取字幕高度。支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示为画布高度的百分比大小，如 10% 表示为画布高度的 10%。</li>
<li>当字符串以 px 结尾，表示单位为像素，如 100px 表示为100像素。</li>
默认为 FontSize 大小。
 * @method void setHeight(string $Height) 设置字幕高度。支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示为画布高度的百分比大小，如 10% 表示为画布高度的 10%。</li>
<li>当字符串以 px 结尾，表示单位为像素，如 100px 表示为100像素。</li>
默认为 FontSize 大小。
 * @method string getMarginBottom() 获取字幕距离下边框距离，支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示为画布高度的百分比大小，如 10% 表示为画布高度的 10%。</li>
<li>当字符串以 px 结尾，表示单位为像素，如 100px 表示为100像素。</li>
默认：0px
 * @method void setMarginBottom(string $MarginBottom) 设置字幕距离下边框距离，支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示为画布高度的百分比大小，如 10% 表示为画布高度的 10%。</li>
<li>当字符串以 px 结尾，表示单位为像素，如 100px 表示为100像素。</li>
默认：0px
 * @method string getFontType() 获取字体类型，支持：
<li>SimHei：黑体（默认）。</li>
<li>SimSun：宋体。</li>
 * @method void setFontType(string $FontType) 设置字体类型，支持：
<li>SimHei：黑体（默认）。</li>
<li>SimSun：宋体。</li>
 * @method string getFontSize() 获取字体大小，支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示为画布高度的百分比大小，如 10% 表示为画布高度的 10%。</li>
<li>当字符串以 px 结尾，表示单位为像素，如 100px 表示为100像素。</li>
默认：2%
 * @method void setFontSize(string $FontSize) 设置字体大小，支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示为画布高度的百分比大小，如 10% 表示为画布高度的 10%。</li>
<li>当字符串以 px 结尾，表示单位为像素，如 100px 表示为100像素。</li>
默认：2%
 * @method integer getFontBold() 获取是否使用粗体，和字体相关，可选值：
<li>0：否（默认）。</li>
<li>1：是。</li>
 * @method void setFontBold(integer $FontBold) 设置是否使用粗体，和字体相关，可选值：
<li>0：否（默认）。</li>
<li>1：是。</li>
 * @method integer getFontItalic() 获取是否使用斜体，和字体相关，可选值：
<li>0：否（默认）。</li>
<li>1：是。</li>
 * @method void setFontItalic(integer $FontItalic) 设置是否使用斜体，和字体相关，可选值：
<li>0：否（默认）。</li>
<li>1：是。</li>
 * @method string getFontColor() 获取字体颜色，格式：#RRGGBBAA。  
默认值：0x000000FF（黑色）。  
注意：其中 AA 部分指的是透明度，为可选。

 * @method void setFontColor(string $FontColor) 设置字体颜色，格式：#RRGGBBAA。  
默认值：0x000000FF（黑色）。  
注意：其中 AA 部分指的是透明度，为可选。

 * @method string getFontAlign() 获取文字对齐方式：
<li>Center：居中（默认）。</li>
<li>Left：左对齐。</li>
<li>Right：右对齐。</li>
 * @method void setFontAlign(string $FontAlign) 设置文字对齐方式：
<li>Center：居中（默认）。</li>
<li>Left：左对齐。</li>
<li>Right：右对齐。</li>
 * @method string getFontAlignMargin() 获取用于字幕对齐留白：
<li>FontAlign=Left 时，表示距离左边距离。</li>
<li>FontAlign=Right时，表示距离右边距离。</li>
支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示为画布宽度的百分比大小，如 10% 表示为画布宽度的 10%。</li>
<li>当字符串以 px 结尾，表示单位为像素，如 100px 表示为100像素。</li>
 * @method void setFontAlignMargin(string $FontAlignMargin) 设置用于字幕对齐留白：
<li>FontAlign=Left 时，表示距离左边距离。</li>
<li>FontAlign=Right时，表示距离右边距离。</li>
支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示为画布宽度的百分比大小，如 10% 表示为画布宽度的 10%。</li>
<li>当字符串以 px 结尾，表示单位为像素，如 100px 表示为100像素。</li>
 * @method string getBorderWidth() 获取字体边框宽度，支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示为画布高度的百分比大小，如 10% 表示为画布高度的 10%。</li>
<li>当字符串以 px 结尾，表示单位为像素，如 100px 表示为100像素。</li>
默认： 0，表示不需要边框。
 * @method void setBorderWidth(string $BorderWidth) 设置字体边框宽度，支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示为画布高度的百分比大小，如 10% 表示为画布高度的 10%。</li>
<li>当字符串以 px 结尾，表示单位为像素，如 100px 表示为100像素。</li>
默认： 0，表示不需要边框。
 * @method string getBorderColor() 获取边框颜色，当 BorderWidth 不为 0 时生效，其值格式和 FontColor 一致。
 * @method void setBorderColor(string $BorderColor) 设置边框颜色，当 BorderWidth 不为 0 时生效，其值格式和 FontColor 一致。
 * @method string getBottomColor() 获取文字底色，其值格式和 FontColor 一致。  
默认为空， 表示不使用底色。
 * @method void setBottomColor(string $BottomColor) 设置文字底色，其值格式和 FontColor 一致。  
默认为空， 表示不使用底色。
 */
class ComposeSubtitleStyle extends AbstractModel
{
    /**
     * @var string 字幕高度。支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示为画布高度的百分比大小，如 10% 表示为画布高度的 10%。</li>
<li>当字符串以 px 结尾，表示单位为像素，如 100px 表示为100像素。</li>
默认为 FontSize 大小。
     */
    public $Height;

    /**
     * @var string 字幕距离下边框距离，支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示为画布高度的百分比大小，如 10% 表示为画布高度的 10%。</li>
<li>当字符串以 px 结尾，表示单位为像素，如 100px 表示为100像素。</li>
默认：0px
     */
    public $MarginBottom;

    /**
     * @var string 字体类型，支持：
<li>SimHei：黑体（默认）。</li>
<li>SimSun：宋体。</li>
     */
    public $FontType;

    /**
     * @var string 字体大小，支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示为画布高度的百分比大小，如 10% 表示为画布高度的 10%。</li>
<li>当字符串以 px 结尾，表示单位为像素，如 100px 表示为100像素。</li>
默认：2%
     */
    public $FontSize;

    /**
     * @var integer 是否使用粗体，和字体相关，可选值：
<li>0：否（默认）。</li>
<li>1：是。</li>
     */
    public $FontBold;

    /**
     * @var integer 是否使用斜体，和字体相关，可选值：
<li>0：否（默认）。</li>
<li>1：是。</li>
     */
    public $FontItalic;

    /**
     * @var string 字体颜色，格式：#RRGGBBAA。  
默认值：0x000000FF（黑色）。  
注意：其中 AA 部分指的是透明度，为可选。

     */
    public $FontColor;

    /**
     * @var string 文字对齐方式：
<li>Center：居中（默认）。</li>
<li>Left：左对齐。</li>
<li>Right：右对齐。</li>
     */
    public $FontAlign;

    /**
     * @var string 用于字幕对齐留白：
<li>FontAlign=Left 时，表示距离左边距离。</li>
<li>FontAlign=Right时，表示距离右边距离。</li>
支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示为画布宽度的百分比大小，如 10% 表示为画布宽度的 10%。</li>
<li>当字符串以 px 结尾，表示单位为像素，如 100px 表示为100像素。</li>
     */
    public $FontAlignMargin;

    /**
     * @var string 字体边框宽度，支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示为画布高度的百分比大小，如 10% 表示为画布高度的 10%。</li>
<li>当字符串以 px 结尾，表示单位为像素，如 100px 表示为100像素。</li>
默认： 0，表示不需要边框。
     */
    public $BorderWidth;

    /**
     * @var string 边框颜色，当 BorderWidth 不为 0 时生效，其值格式和 FontColor 一致。
     */
    public $BorderColor;

    /**
     * @var string 文字底色，其值格式和 FontColor 一致。  
默认为空， 表示不使用底色。
     */
    public $BottomColor;

    /**
     * @param string $Height 字幕高度。支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示为画布高度的百分比大小，如 10% 表示为画布高度的 10%。</li>
<li>当字符串以 px 结尾，表示单位为像素，如 100px 表示为100像素。</li>
默认为 FontSize 大小。
     * @param string $MarginBottom 字幕距离下边框距离，支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示为画布高度的百分比大小，如 10% 表示为画布高度的 10%。</li>
<li>当字符串以 px 结尾，表示单位为像素，如 100px 表示为100像素。</li>
默认：0px
     * @param string $FontType 字体类型，支持：
<li>SimHei：黑体（默认）。</li>
<li>SimSun：宋体。</li>
     * @param string $FontSize 字体大小，支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示为画布高度的百分比大小，如 10% 表示为画布高度的 10%。</li>
<li>当字符串以 px 结尾，表示单位为像素，如 100px 表示为100像素。</li>
默认：2%
     * @param integer $FontBold 是否使用粗体，和字体相关，可选值：
<li>0：否（默认）。</li>
<li>1：是。</li>
     * @param integer $FontItalic 是否使用斜体，和字体相关，可选值：
<li>0：否（默认）。</li>
<li>1：是。</li>
     * @param string $FontColor 字体颜色，格式：#RRGGBBAA。  
默认值：0x000000FF（黑色）。  
注意：其中 AA 部分指的是透明度，为可选。

     * @param string $FontAlign 文字对齐方式：
<li>Center：居中（默认）。</li>
<li>Left：左对齐。</li>
<li>Right：右对齐。</li>
     * @param string $FontAlignMargin 用于字幕对齐留白：
<li>FontAlign=Left 时，表示距离左边距离。</li>
<li>FontAlign=Right时，表示距离右边距离。</li>
支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示为画布宽度的百分比大小，如 10% 表示为画布宽度的 10%。</li>
<li>当字符串以 px 结尾，表示单位为像素，如 100px 表示为100像素。</li>
     * @param string $BorderWidth 字体边框宽度，支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示为画布高度的百分比大小，如 10% 表示为画布高度的 10%。</li>
<li>当字符串以 px 结尾，表示单位为像素，如 100px 表示为100像素。</li>
默认： 0，表示不需要边框。
     * @param string $BorderColor 边框颜色，当 BorderWidth 不为 0 时生效，其值格式和 FontColor 一致。
     * @param string $BottomColor 文字底色，其值格式和 FontColor 一致。  
默认为空， 表示不使用底色。
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
        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("MarginBottom",$param) and $param["MarginBottom"] !== null) {
            $this->MarginBottom = $param["MarginBottom"];
        }

        if (array_key_exists("FontType",$param) and $param["FontType"] !== null) {
            $this->FontType = $param["FontType"];
        }

        if (array_key_exists("FontSize",$param) and $param["FontSize"] !== null) {
            $this->FontSize = $param["FontSize"];
        }

        if (array_key_exists("FontBold",$param) and $param["FontBold"] !== null) {
            $this->FontBold = $param["FontBold"];
        }

        if (array_key_exists("FontItalic",$param) and $param["FontItalic"] !== null) {
            $this->FontItalic = $param["FontItalic"];
        }

        if (array_key_exists("FontColor",$param) and $param["FontColor"] !== null) {
            $this->FontColor = $param["FontColor"];
        }

        if (array_key_exists("FontAlign",$param) and $param["FontAlign"] !== null) {
            $this->FontAlign = $param["FontAlign"];
        }

        if (array_key_exists("FontAlignMargin",$param) and $param["FontAlignMargin"] !== null) {
            $this->FontAlignMargin = $param["FontAlignMargin"];
        }

        if (array_key_exists("BorderWidth",$param) and $param["BorderWidth"] !== null) {
            $this->BorderWidth = $param["BorderWidth"];
        }

        if (array_key_exists("BorderColor",$param) and $param["BorderColor"] !== null) {
            $this->BorderColor = $param["BorderColor"];
        }

        if (array_key_exists("BottomColor",$param) and $param["BottomColor"] !== null) {
            $this->BottomColor = $param["BottomColor"];
        }
    }
}
