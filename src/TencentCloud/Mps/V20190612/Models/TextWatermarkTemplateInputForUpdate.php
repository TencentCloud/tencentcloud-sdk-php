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
 * 文字水印模板
 *
 * @method string getFontType() 获取字体类型，目前可以支持两种：
<li>simkai.ttf：可以支持中文和英文；</li>
<li>arial.ttf：仅支持英文。</li>
 * @method void setFontType(string $FontType) 设置字体类型，目前可以支持两种：
<li>simkai.ttf：可以支持中文和英文；</li>
<li>arial.ttf：仅支持英文。</li>
 * @method string getFontSize() 获取字体大小，格式：Npx，N 为数值。N的取值范围：[0,1] 和 [8, 4096]
 * @method void setFontSize(string $FontSize) 设置字体大小，格式：Npx，N 为数值。N的取值范围：[0,1] 和 [8, 4096]
 * @method string getFontColor() 获取字体颜色，格式：0xRRGGBB，默认值：0xFFFFFF（白色）。
 * @method void setFontColor(string $FontColor) 设置字体颜色，格式：0xRRGGBB，默认值：0xFFFFFF（白色）。
 * @method float getFontAlpha() 获取文字透明度，取值范围：(0, 1]
<li>0：完全透明</li>
<li>1：完全不透明</li>
 * @method void setFontAlpha(float $FontAlpha) 设置文字透明度，取值范围：(0, 1]
<li>0：完全透明</li>
<li>1：完全不透明</li>
 * @method string getTextContent() 获取文字内容，长度不超过100个字符。
 * @method void setTextContent(string $TextContent) 设置文字内容，长度不超过100个字符。
 */
class TextWatermarkTemplateInputForUpdate extends AbstractModel
{
    /**
     * @var string 字体类型，目前可以支持两种：
<li>simkai.ttf：可以支持中文和英文；</li>
<li>arial.ttf：仅支持英文。</li>
     */
    public $FontType;

    /**
     * @var string 字体大小，格式：Npx，N 为数值。N的取值范围：[0,1] 和 [8, 4096]
     */
    public $FontSize;

    /**
     * @var string 字体颜色，格式：0xRRGGBB，默认值：0xFFFFFF（白色）。
     */
    public $FontColor;

    /**
     * @var float 文字透明度，取值范围：(0, 1]
<li>0：完全透明</li>
<li>1：完全不透明</li>
     */
    public $FontAlpha;

    /**
     * @var string 文字内容，长度不超过100个字符。
     */
    public $TextContent;

    /**
     * @param string $FontType 字体类型，目前可以支持两种：
<li>simkai.ttf：可以支持中文和英文；</li>
<li>arial.ttf：仅支持英文。</li>
     * @param string $FontSize 字体大小，格式：Npx，N 为数值。N的取值范围：[0,1] 和 [8, 4096]
     * @param string $FontColor 字体颜色，格式：0xRRGGBB，默认值：0xFFFFFF（白色）。
     * @param float $FontAlpha 文字透明度，取值范围：(0, 1]
<li>0：完全透明</li>
<li>1：完全不透明</li>
     * @param string $TextContent 文字内容，长度不超过100个字符。
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
        if (array_key_exists("FontType",$param) and $param["FontType"] !== null) {
            $this->FontType = $param["FontType"];
        }

        if (array_key_exists("FontSize",$param) and $param["FontSize"] !== null) {
            $this->FontSize = $param["FontSize"];
        }

        if (array_key_exists("FontColor",$param) and $param["FontColor"] !== null) {
            $this->FontColor = $param["FontColor"];
        }

        if (array_key_exists("FontAlpha",$param) and $param["FontAlpha"] !== null) {
            $this->FontAlpha = $param["FontAlpha"];
        }

        if (array_key_exists("TextContent",$param) and $param["TextContent"] !== null) {
            $this->TextContent = $param["TextContent"];
        }
    }
}
