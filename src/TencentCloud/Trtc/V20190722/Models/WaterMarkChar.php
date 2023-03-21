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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义文字水印数据结构
 *
 * @method integer getTop() 获取文字水印的起始坐标Y值，从左上角开始
 * @method void setTop(integer $Top) 设置文字水印的起始坐标Y值，从左上角开始
 * @method integer getLeft() 获取文字水印的起始坐标X值，从左上角开始
 * @method void setLeft(integer $Left) 设置文字水印的起始坐标X值，从左上角开始
 * @method integer getWidth() 获取文字水印的宽度，单位像素值
 * @method void setWidth(integer $Width) 设置文字水印的宽度，单位像素值
 * @method integer getHeight() 获取文字水印的高度，单位像素值
 * @method void setHeight(integer $Height) 设置文字水印的高度，单位像素值
 * @method string getChars() 获取水印文字的内容
 * @method void setChars(string $Chars) 设置水印文字的内容
 * @method integer getFontSize() 获取水印文字的大小，单位像素，默认14
 * @method void setFontSize(integer $FontSize) 设置水印文字的大小，单位像素，默认14
 * @method string getFontColor() 获取水印文字的颜色，默认白色
 * @method void setFontColor(string $FontColor) 设置水印文字的颜色，默认白色
 * @method string getBackGroundColor() 获取水印文字的背景色，为空代表背景透明，默认为空
 * @method void setBackGroundColor(string $BackGroundColor) 设置水印文字的背景色，为空代表背景透明，默认为空
 */
class WaterMarkChar extends AbstractModel
{
    /**
     * @var integer 文字水印的起始坐标Y值，从左上角开始
     */
    public $Top;

    /**
     * @var integer 文字水印的起始坐标X值，从左上角开始
     */
    public $Left;

    /**
     * @var integer 文字水印的宽度，单位像素值
     */
    public $Width;

    /**
     * @var integer 文字水印的高度，单位像素值
     */
    public $Height;

    /**
     * @var string 水印文字的内容
     */
    public $Chars;

    /**
     * @var integer 水印文字的大小，单位像素，默认14
     */
    public $FontSize;

    /**
     * @var string 水印文字的颜色，默认白色
     */
    public $FontColor;

    /**
     * @var string 水印文字的背景色，为空代表背景透明，默认为空
     */
    public $BackGroundColor;

    /**
     * @param integer $Top 文字水印的起始坐标Y值，从左上角开始
     * @param integer $Left 文字水印的起始坐标X值，从左上角开始
     * @param integer $Width 文字水印的宽度，单位像素值
     * @param integer $Height 文字水印的高度，单位像素值
     * @param string $Chars 水印文字的内容
     * @param integer $FontSize 水印文字的大小，单位像素，默认14
     * @param string $FontColor 水印文字的颜色，默认白色
     * @param string $BackGroundColor 水印文字的背景色，为空代表背景透明，默认为空
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
        if (array_key_exists("Top",$param) and $param["Top"] !== null) {
            $this->Top = $param["Top"];
        }

        if (array_key_exists("Left",$param) and $param["Left"] !== null) {
            $this->Left = $param["Left"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Chars",$param) and $param["Chars"] !== null) {
            $this->Chars = $param["Chars"];
        }

        if (array_key_exists("FontSize",$param) and $param["FontSize"] !== null) {
            $this->FontSize = $param["FontSize"];
        }

        if (array_key_exists("FontColor",$param) and $param["FontColor"] !== null) {
            $this->FontColor = $param["FontColor"];
        }

        if (array_key_exists("BackGroundColor",$param) and $param["BackGroundColor"] !== null) {
            $this->BackGroundColor = $param["BackGroundColor"];
        }
    }
}
