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
 * 画质重生子任务文字水印信息
 *
 * @method string getText() 获取文字内容。
 * @method void setText(string $Text) 设置文字内容。
 * @method integer getPosX() 获取文字水印X坐标。
 * @method void setPosX(integer $PosX) 设置文字水印X坐标。
 * @method integer getPosY() 获取文字水印Y坐标。
 * @method void setPosY(integer $PosY) 设置文字水印Y坐标。
 * @method integer getFontSize() 获取文字大小
 * @method void setFontSize(integer $FontSize) 设置文字大小
 * @method string getFontFile() 获取字体，可选项：hei,song，simkai,arial；默认hei(黑体）。
 * @method void setFontFile(string $FontFile) 设置字体，可选项：hei,song，simkai,arial；默认hei(黑体）。
 * @method string getFontColor() 获取字体颜色，颜色见附录，不填默认black。
 * @method void setFontColor(string $FontColor) 设置字体颜色，颜色见附录，不填默认black。
 * @method float getFontAlpha() 获取文字透明度，可选值0-1。0：不透明，1：全透明。默认为0
 * @method void setFontAlpha(float $FontAlpha) 设置文字透明度，可选值0-1。0：不透明，1：全透明。默认为0
 */
class TextMarkInfoItem extends AbstractModel
{
    /**
     * @var string 文字内容。
     */
    public $Text;

    /**
     * @var integer 文字水印X坐标。
     */
    public $PosX;

    /**
     * @var integer 文字水印Y坐标。
     */
    public $PosY;

    /**
     * @var integer 文字大小
     */
    public $FontSize;

    /**
     * @var string 字体，可选项：hei,song，simkai,arial；默认hei(黑体）。
     */
    public $FontFile;

    /**
     * @var string 字体颜色，颜色见附录，不填默认black。
     */
    public $FontColor;

    /**
     * @var float 文字透明度，可选值0-1。0：不透明，1：全透明。默认为0
     */
    public $FontAlpha;

    /**
     * @param string $Text 文字内容。
     * @param integer $PosX 文字水印X坐标。
     * @param integer $PosY 文字水印Y坐标。
     * @param integer $FontSize 文字大小
     * @param string $FontFile 字体，可选项：hei,song，simkai,arial；默认hei(黑体）。
     * @param string $FontColor 字体颜色，颜色见附录，不填默认black。
     * @param float $FontAlpha 文字透明度，可选值0-1。0：不透明，1：全透明。默认为0
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

        if (array_key_exists("PosX",$param) and $param["PosX"] !== null) {
            $this->PosX = $param["PosX"];
        }

        if (array_key_exists("PosY",$param) and $param["PosY"] !== null) {
            $this->PosY = $param["PosY"];
        }

        if (array_key_exists("FontSize",$param) and $param["FontSize"] !== null) {
            $this->FontSize = $param["FontSize"];
        }

        if (array_key_exists("FontFile",$param) and $param["FontFile"] !== null) {
            $this->FontFile = $param["FontFile"];
        }

        if (array_key_exists("FontColor",$param) and $param["FontColor"] !== null) {
            $this->FontColor = $param["FontColor"];
        }

        if (array_key_exists("FontAlpha",$param) and $param["FontAlpha"] !== null) {
            $this->FontAlpha = $param["FontAlpha"];
        }
    }
}
