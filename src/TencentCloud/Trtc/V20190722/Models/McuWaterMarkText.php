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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文字水印参数。
 *
 * @method string getText() 获取文字水印内容。
 * @method void setText(string $Text) 设置文字水印内容。
 * @method integer getWaterMarkWidth() 获取水印在输出时的宽。单位为像素值。
 * @method void setWaterMarkWidth(integer $WaterMarkWidth) 设置水印在输出时的宽。单位为像素值。
 * @method integer getWaterMarkHeight() 获取水印在输出时的高。单位为像素值。
 * @method void setWaterMarkHeight(integer $WaterMarkHeight) 设置水印在输出时的高。单位为像素值。
 * @method integer getLocationX() 获取水印在输出时的X偏移。单位为像素值。
 * @method void setLocationX(integer $LocationX) 设置水印在输出时的X偏移。单位为像素值。
 * @method integer getLocationY() 获取水印在输出时的Y偏移。单位为像素值。
 * @method void setLocationY(integer $LocationY) 设置水印在输出时的Y偏移。单位为像素值。
 * @method integer getFontSize() 获取字体大小
 * @method void setFontSize(integer $FontSize) 设置字体大小
 * @method string getFontColor() 获取字体颜色，默认为白色。常用的颜色有： 红色：0xcc0033。 黄色：0xcc9900。 绿色：0xcccc33。 蓝色：0x99CCFF。 黑色：0x000000。 白色：0xFFFFFF。 灰色：0x999999。	
 * @method void setFontColor(string $FontColor) 设置字体颜色，默认为白色。常用的颜色有： 红色：0xcc0033。 黄色：0xcc9900。 绿色：0xcccc33。 蓝色：0x99CCFF。 黑色：0x000000。 白色：0xFFFFFF。 灰色：0x999999。	
 * @method string getBackGroundColor() 获取字体背景色，不配置默认为透明。常用的颜色有： 红色：0xcc0033。 黄色：0xcc9900。 绿色：0xcccc33。 蓝色：0x99CCFF。 黑色：0x000000。 白色：0xFFFFFF。 灰色：0x999999。	
 * @method void setBackGroundColor(string $BackGroundColor) 设置字体背景色，不配置默认为透明。常用的颜色有： 红色：0xcc0033。 黄色：0xcc9900。 绿色：0xcccc33。 蓝色：0x99CCFF。 黑色：0x000000。 白色：0xFFFFFF。 灰色：0x999999。	
 * @method integer getDynamicPosType() 获取动态水印类型，默认为0。0:关闭；1:随机位置，每秒变动一次；2:边界扫描反弹，每帧变动一次。
 * @method void setDynamicPosType(integer $DynamicPosType) 设置动态水印类型，默认为0。0:关闭；1:随机位置，每秒变动一次；2:边界扫描反弹，每帧变动一次。
 * @method integer getZOrder() 获取水印在输出时的层级，不填默认为0。
 * @method void setZOrder(integer $ZOrder) 设置水印在输出时的层级，不填默认为0。
 * @method string getFont() 获取水印字体，不填默认为Tencent。支持设置以下值： Tencent （默认） SourceHanSans
 * @method void setFont(string $Font) 设置水印字体，不填默认为Tencent。支持设置以下值： Tencent （默认） SourceHanSans
 */
class McuWaterMarkText extends AbstractModel
{
    /**
     * @var string 文字水印内容。
     */
    public $Text;

    /**
     * @var integer 水印在输出时的宽。单位为像素值。
     */
    public $WaterMarkWidth;

    /**
     * @var integer 水印在输出时的高。单位为像素值。
     */
    public $WaterMarkHeight;

    /**
     * @var integer 水印在输出时的X偏移。单位为像素值。
     */
    public $LocationX;

    /**
     * @var integer 水印在输出时的Y偏移。单位为像素值。
     */
    public $LocationY;

    /**
     * @var integer 字体大小
     */
    public $FontSize;

    /**
     * @var string 字体颜色，默认为白色。常用的颜色有： 红色：0xcc0033。 黄色：0xcc9900。 绿色：0xcccc33。 蓝色：0x99CCFF。 黑色：0x000000。 白色：0xFFFFFF。 灰色：0x999999。	
     */
    public $FontColor;

    /**
     * @var string 字体背景色，不配置默认为透明。常用的颜色有： 红色：0xcc0033。 黄色：0xcc9900。 绿色：0xcccc33。 蓝色：0x99CCFF。 黑色：0x000000。 白色：0xFFFFFF。 灰色：0x999999。	
     */
    public $BackGroundColor;

    /**
     * @var integer 动态水印类型，默认为0。0:关闭；1:随机位置，每秒变动一次；2:边界扫描反弹，每帧变动一次。
     */
    public $DynamicPosType;

    /**
     * @var integer 水印在输出时的层级，不填默认为0。
     */
    public $ZOrder;

    /**
     * @var string 水印字体，不填默认为Tencent。支持设置以下值： Tencent （默认） SourceHanSans
     */
    public $Font;

    /**
     * @param string $Text 文字水印内容。
     * @param integer $WaterMarkWidth 水印在输出时的宽。单位为像素值。
     * @param integer $WaterMarkHeight 水印在输出时的高。单位为像素值。
     * @param integer $LocationX 水印在输出时的X偏移。单位为像素值。
     * @param integer $LocationY 水印在输出时的Y偏移。单位为像素值。
     * @param integer $FontSize 字体大小
     * @param string $FontColor 字体颜色，默认为白色。常用的颜色有： 红色：0xcc0033。 黄色：0xcc9900。 绿色：0xcccc33。 蓝色：0x99CCFF。 黑色：0x000000。 白色：0xFFFFFF。 灰色：0x999999。	
     * @param string $BackGroundColor 字体背景色，不配置默认为透明。常用的颜色有： 红色：0xcc0033。 黄色：0xcc9900。 绿色：0xcccc33。 蓝色：0x99CCFF。 黑色：0x000000。 白色：0xFFFFFF。 灰色：0x999999。	
     * @param integer $DynamicPosType 动态水印类型，默认为0。0:关闭；1:随机位置，每秒变动一次；2:边界扫描反弹，每帧变动一次。
     * @param integer $ZOrder 水印在输出时的层级，不填默认为0。
     * @param string $Font 水印字体，不填默认为Tencent。支持设置以下值： Tencent （默认） SourceHanSans
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

        if (array_key_exists("WaterMarkWidth",$param) and $param["WaterMarkWidth"] !== null) {
            $this->WaterMarkWidth = $param["WaterMarkWidth"];
        }

        if (array_key_exists("WaterMarkHeight",$param) and $param["WaterMarkHeight"] !== null) {
            $this->WaterMarkHeight = $param["WaterMarkHeight"];
        }

        if (array_key_exists("LocationX",$param) and $param["LocationX"] !== null) {
            $this->LocationX = $param["LocationX"];
        }

        if (array_key_exists("LocationY",$param) and $param["LocationY"] !== null) {
            $this->LocationY = $param["LocationY"];
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

        if (array_key_exists("DynamicPosType",$param) and $param["DynamicPosType"] !== null) {
            $this->DynamicPosType = $param["DynamicPosType"];
        }

        if (array_key_exists("ZOrder",$param) and $param["ZOrder"] !== null) {
            $this->ZOrder = $param["ZOrder"];
        }

        if (array_key_exists("Font",$param) and $param["Font"] !== null) {
            $this->Font = $param["Font"];
        }
    }
}
