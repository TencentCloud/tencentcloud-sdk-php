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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 导播台文字水印配置。
 *
 * @method integer getMarkWordIndex() 获取文字水印Index。
 * @method void setMarkWordIndex(integer $MarkWordIndex) 设置文字水印Index。
 * @method string getMarkWordText() 获取文字水印内容。
 * @method void setMarkWordText(string $MarkWordText) 设置文字水印内容。
 * @method integer getMarkWordFontSize() 获取文字水印的字号。
范围[16, 60]
 * @method void setMarkWordFontSize(integer $MarkWordFontSize) 设置文字水印的字号。
范围[16, 60]
 * @method string getMarkWordFontColor() 获取文字水印的颜色，值为HEX颜色代码
 * @method void setMarkWordFontColor(string $MarkWordFontColor) 设置文字水印的颜色，值为HEX颜色代码
 * @method integer getMarkWordFontType() 获取文字水印的字体类型。
范围[1,2]。
1. 宋体
2. 黑体
 * @method void setMarkWordFontType(integer $MarkWordFontType) 设置文字水印的字体类型。
范围[1,2]。
1. 宋体
2. 黑体
 * @method float getMarkWordLocationX() 获取文字水印的x坐标位置，单位百分比。
范围[0.0, 1.0]

 * @method void setMarkWordLocationX(float $MarkWordLocationX) 设置文字水印的x坐标位置，单位百分比。
范围[0.0, 1.0]

 * @method float getMarkWordLocationY() 获取文字水印的Y坐标位置，单位百分比。
范围[0.0, 1.0]

 * @method void setMarkWordLocationY(float $MarkWordLocationY) 设置文字水印的Y坐标位置，单位百分比。
范围[0.0, 1.0]

 * @method boolean getMarkWordRollEnable() 获取是否开启文字跑马灯功能。
默认为false。
 * @method void setMarkWordRollEnable(boolean $MarkWordRollEnable) 设置是否开启文字跑马灯功能。
默认为false。
 * @method integer getMarkWordRollOnceTime() 获取跑马灯文字显示一遍的时间，单位为秒。
默认为5s。
范围[5, 600]。
 * @method void setMarkWordRollOnceTime(integer $MarkWordRollOnceTime) 设置跑马灯文字显示一遍的时间，单位为秒。
默认为5s。
范围[5, 600]。
 * @method integer getMarkWordRollDirection() 获取跑马灯文字的方向。
默认值为0。
范围[0,1]。
0 从左到右
1 从右到左
 * @method void setMarkWordRollDirection(integer $MarkWordRollDirection) 设置跑马灯文字的方向。
默认值为0。
范围[0,1]。
0 从左到右
1 从右到左
 * @method float getMarkWordRollStartLocationX() 获取跑马灯文字显示的起始x坐标，单位百分比。
范围[0.0, 1.0]
 * @method void setMarkWordRollStartLocationX(float $MarkWordRollStartLocationX) 设置跑马灯文字显示的起始x坐标，单位百分比。
范围[0.0, 1.0]
 * @method float getMarkWordRollEndLocationX() 获取跑马灯文字显示的截止x坐标，单位百分比。
范围[0.0, 1.0]
 * @method void setMarkWordRollEndLocationX(float $MarkWordRollEndLocationX) 设置跑马灯文字显示的截止x坐标，单位百分比。
范围[0.0, 1.0]
 */
class CasterMarkWordInfo extends AbstractModel
{
    /**
     * @var integer 文字水印Index。
     */
    public $MarkWordIndex;

    /**
     * @var string 文字水印内容。
     */
    public $MarkWordText;

    /**
     * @var integer 文字水印的字号。
范围[16, 60]
     */
    public $MarkWordFontSize;

    /**
     * @var string 文字水印的颜色，值为HEX颜色代码
     */
    public $MarkWordFontColor;

    /**
     * @var integer 文字水印的字体类型。
范围[1,2]。
1. 宋体
2. 黑体
     */
    public $MarkWordFontType;

    /**
     * @var float 文字水印的x坐标位置，单位百分比。
范围[0.0, 1.0]

     */
    public $MarkWordLocationX;

    /**
     * @var float 文字水印的Y坐标位置，单位百分比。
范围[0.0, 1.0]

     */
    public $MarkWordLocationY;

    /**
     * @var boolean 是否开启文字跑马灯功能。
默认为false。
     */
    public $MarkWordRollEnable;

    /**
     * @var integer 跑马灯文字显示一遍的时间，单位为秒。
默认为5s。
范围[5, 600]。
     */
    public $MarkWordRollOnceTime;

    /**
     * @var integer 跑马灯文字的方向。
默认值为0。
范围[0,1]。
0 从左到右
1 从右到左
     */
    public $MarkWordRollDirection;

    /**
     * @var float 跑马灯文字显示的起始x坐标，单位百分比。
范围[0.0, 1.0]
     */
    public $MarkWordRollStartLocationX;

    /**
     * @var float 跑马灯文字显示的截止x坐标，单位百分比。
范围[0.0, 1.0]
     */
    public $MarkWordRollEndLocationX;

    /**
     * @param integer $MarkWordIndex 文字水印Index。
     * @param string $MarkWordText 文字水印内容。
     * @param integer $MarkWordFontSize 文字水印的字号。
范围[16, 60]
     * @param string $MarkWordFontColor 文字水印的颜色，值为HEX颜色代码
     * @param integer $MarkWordFontType 文字水印的字体类型。
范围[1,2]。
1. 宋体
2. 黑体
     * @param float $MarkWordLocationX 文字水印的x坐标位置，单位百分比。
范围[0.0, 1.0]

     * @param float $MarkWordLocationY 文字水印的Y坐标位置，单位百分比。
范围[0.0, 1.0]

     * @param boolean $MarkWordRollEnable 是否开启文字跑马灯功能。
默认为false。
     * @param integer $MarkWordRollOnceTime 跑马灯文字显示一遍的时间，单位为秒。
默认为5s。
范围[5, 600]。
     * @param integer $MarkWordRollDirection 跑马灯文字的方向。
默认值为0。
范围[0,1]。
0 从左到右
1 从右到左
     * @param float $MarkWordRollStartLocationX 跑马灯文字显示的起始x坐标，单位百分比。
范围[0.0, 1.0]
     * @param float $MarkWordRollEndLocationX 跑马灯文字显示的截止x坐标，单位百分比。
范围[0.0, 1.0]
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
        if (array_key_exists("MarkWordIndex",$param) and $param["MarkWordIndex"] !== null) {
            $this->MarkWordIndex = $param["MarkWordIndex"];
        }

        if (array_key_exists("MarkWordText",$param) and $param["MarkWordText"] !== null) {
            $this->MarkWordText = $param["MarkWordText"];
        }

        if (array_key_exists("MarkWordFontSize",$param) and $param["MarkWordFontSize"] !== null) {
            $this->MarkWordFontSize = $param["MarkWordFontSize"];
        }

        if (array_key_exists("MarkWordFontColor",$param) and $param["MarkWordFontColor"] !== null) {
            $this->MarkWordFontColor = $param["MarkWordFontColor"];
        }

        if (array_key_exists("MarkWordFontType",$param) and $param["MarkWordFontType"] !== null) {
            $this->MarkWordFontType = $param["MarkWordFontType"];
        }

        if (array_key_exists("MarkWordLocationX",$param) and $param["MarkWordLocationX"] !== null) {
            $this->MarkWordLocationX = $param["MarkWordLocationX"];
        }

        if (array_key_exists("MarkWordLocationY",$param) and $param["MarkWordLocationY"] !== null) {
            $this->MarkWordLocationY = $param["MarkWordLocationY"];
        }

        if (array_key_exists("MarkWordRollEnable",$param) and $param["MarkWordRollEnable"] !== null) {
            $this->MarkWordRollEnable = $param["MarkWordRollEnable"];
        }

        if (array_key_exists("MarkWordRollOnceTime",$param) and $param["MarkWordRollOnceTime"] !== null) {
            $this->MarkWordRollOnceTime = $param["MarkWordRollOnceTime"];
        }

        if (array_key_exists("MarkWordRollDirection",$param) and $param["MarkWordRollDirection"] !== null) {
            $this->MarkWordRollDirection = $param["MarkWordRollDirection"];
        }

        if (array_key_exists("MarkWordRollStartLocationX",$param) and $param["MarkWordRollStartLocationX"] !== null) {
            $this->MarkWordRollStartLocationX = $param["MarkWordRollStartLocationX"];
        }

        if (array_key_exists("MarkWordRollEndLocationX",$param) and $param["MarkWordRollEndLocationX"] !== null) {
            $this->MarkWordRollEndLocationX = $param["MarkWordRollEndLocationX"];
        }
    }
}
