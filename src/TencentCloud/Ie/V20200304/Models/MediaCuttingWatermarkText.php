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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒体剪切文字水印参数。
 *
 * @method string getText() 获取水印文字。
 * @method void setText(string $Text) 设置水印文字。
 * @method integer getFontSize() 获取文字大小
 * @method void setFontSize(integer $FontSize) 设置文字大小
 * @method integer getPosX() 获取水印水平坐标，单位像素，默认：0。
 * @method void setPosX(integer $PosX) 设置水印水平坐标，单位像素，默认：0。
 * @method integer getPosY() 获取水印垂直坐标，单位像素，默认：0。
 * @method void setPosY(integer $PosY) 设置水印垂直坐标，单位像素，默认：0。
 * @method string getFontColor() 获取文字颜色，格式为：#RRGGBBAA，默认值：#000000。
 * @method void setFontColor(string $FontColor) 设置文字颜色，格式为：#RRGGBBAA，默认值：#000000。
 * @method integer getFontAlpha() 获取文字透明度，范围：0~100，默认值：100。
 * @method void setFontAlpha(integer $FontAlpha) 设置文字透明度，范围：0~100，默认值：100。
 * @method string getPosOriginType() 获取指定坐标原点，可选值：
<li>LeftTop：PosXY 表示水印左上点到图片左上点的相对位置</li>
<li>RightTop：PosXY 表示水印右上点到图片右上点的相对位置</li>
<li>LeftBottom：PosXY 表示水印左下点到图片左下点的相对位置</li>
<li>RightBottom：PosXY 表示水印右下点到图片右下点的相对位置</li>
<li>Center：PosXY 表示水印中心点到图片中心点的相对位置</li>
默认：LeftTop。
 * @method void setPosOriginType(string $PosOriginType) 设置指定坐标原点，可选值：
<li>LeftTop：PosXY 表示水印左上点到图片左上点的相对位置</li>
<li>RightTop：PosXY 表示水印右上点到图片右上点的相对位置</li>
<li>LeftBottom：PosXY 表示水印左下点到图片左下点的相对位置</li>
<li>RightBottom：PosXY 表示水印右下点到图片右下点的相对位置</li>
<li>Center：PosXY 表示水印中心点到图片中心点的相对位置</li>
默认：LeftTop。
 * @method string getFont() 获取字体，可选值：
<li>SimHei</li>
<li>SimKai</li>
<li>Arial</li>
默认 SimHei。
 * @method void setFont(string $Font) 设置字体，可选值：
<li>SimHei</li>
<li>SimKai</li>
<li>Arial</li>
默认 SimHei。
 */
class MediaCuttingWatermarkText extends AbstractModel
{
    /**
     * @var string 水印文字。
     */
    public $Text;

    /**
     * @var integer 文字大小
     */
    public $FontSize;

    /**
     * @var integer 水印水平坐标，单位像素，默认：0。
     */
    public $PosX;

    /**
     * @var integer 水印垂直坐标，单位像素，默认：0。
     */
    public $PosY;

    /**
     * @var string 文字颜色，格式为：#RRGGBBAA，默认值：#000000。
     */
    public $FontColor;

    /**
     * @var integer 文字透明度，范围：0~100，默认值：100。
     */
    public $FontAlpha;

    /**
     * @var string 指定坐标原点，可选值：
<li>LeftTop：PosXY 表示水印左上点到图片左上点的相对位置</li>
<li>RightTop：PosXY 表示水印右上点到图片右上点的相对位置</li>
<li>LeftBottom：PosXY 表示水印左下点到图片左下点的相对位置</li>
<li>RightBottom：PosXY 表示水印右下点到图片右下点的相对位置</li>
<li>Center：PosXY 表示水印中心点到图片中心点的相对位置</li>
默认：LeftTop。
     */
    public $PosOriginType;

    /**
     * @var string 字体，可选值：
<li>SimHei</li>
<li>SimKai</li>
<li>Arial</li>
默认 SimHei。
     */
    public $Font;

    /**
     * @param string $Text 水印文字。
     * @param integer $FontSize 文字大小
     * @param integer $PosX 水印水平坐标，单位像素，默认：0。
     * @param integer $PosY 水印垂直坐标，单位像素，默认：0。
     * @param string $FontColor 文字颜色，格式为：#RRGGBBAA，默认值：#000000。
     * @param integer $FontAlpha 文字透明度，范围：0~100，默认值：100。
     * @param string $PosOriginType 指定坐标原点，可选值：
<li>LeftTop：PosXY 表示水印左上点到图片左上点的相对位置</li>
<li>RightTop：PosXY 表示水印右上点到图片右上点的相对位置</li>
<li>LeftBottom：PosXY 表示水印左下点到图片左下点的相对位置</li>
<li>RightBottom：PosXY 表示水印右下点到图片右下点的相对位置</li>
<li>Center：PosXY 表示水印中心点到图片中心点的相对位置</li>
默认：LeftTop。
     * @param string $Font 字体，可选值：
<li>SimHei</li>
<li>SimKai</li>
<li>Arial</li>
默认 SimHei。
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("FontSize",$param) and $param["FontSize"] !== null) {
            $this->FontSize = $param["FontSize"];
        }

        if (array_key_exists("PosX",$param) and $param["PosX"] !== null) {
            $this->PosX = $param["PosX"];
        }

        if (array_key_exists("PosY",$param) and $param["PosY"] !== null) {
            $this->PosY = $param["PosY"];
        }

        if (array_key_exists("FontColor",$param) and $param["FontColor"] !== null) {
            $this->FontColor = $param["FontColor"];
        }

        if (array_key_exists("FontAlpha",$param) and $param["FontAlpha"] !== null) {
            $this->FontAlpha = $param["FontAlpha"];
        }

        if (array_key_exists("PosOriginType",$param) and $param["PosOriginType"] !== null) {
            $this->PosOriginType = $param["PosOriginType"];
        }

        if (array_key_exists("Font",$param) and $param["Font"] !== null) {
            $this->Font = $param["Font"];
        }
    }
}
