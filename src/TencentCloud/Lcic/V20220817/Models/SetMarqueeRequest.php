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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetMarquee请求参数结构体
 *
 * @method integer getSdkAppId() 获取学校ID
 * @method void setSdkAppId(integer $SdkAppId) 设置学校ID
 * @method integer getRoomId() 获取房间号
 * @method void setRoomId(integer $RoomId) 设置房间号
 * @method integer getMarqueeType() 获取 跑马灯类型：1为固定值，2为用户昵称，3为固定值+用户昵称，4为用户ID，5为originId+固定值，6为用户昵称（originId）
 * @method void setMarqueeType(integer $MarqueeType) 设置 跑马灯类型：1为固定值，2为用户昵称，3为固定值+用户昵称，4为用户ID，5为originId+固定值，6为用户昵称（originId）
 * @method integer getDisplayMode() 获取显示方式：1为滚动，2为闪烁
 * @method void setDisplayMode(integer $DisplayMode) 设置显示方式：1为滚动，2为闪烁
 * @method string getContent() 获取固定值内容（当MarqueeType=1或5，则展示固定值内容）
 * @method void setContent(string $Content) 设置固定值内容（当MarqueeType=1或5，则展示固定值内容）
 * @method integer getFontSize() 获取字体大小（数字，像素单位，范围：10到24）。
 * @method void setFontSize(integer $FontSize) 设置字体大小（数字，像素单位，范围：10到24）。
 * @method integer getFontWeight() 获取字体粗细：1为粗体，0为细体
 * @method void setFontWeight(integer $FontWeight) 设置字体粗细：1为粗体，0为细体
 * @method string getFontColor() 获取字体颜色（十六进制颜色值，例如：#00FF00（绿色））
 * @method void setFontColor(string $FontColor) 设置字体颜色（十六进制颜色值，例如：#00FF00（绿色））
 * @method float getFontOpacity() 获取字体透明度（数字，范围 0.0 到 1.0）
 * @method void setFontOpacity(float $FontOpacity) 设置字体透明度（数字，范围 0.0 到 1.0）
 * @method string getBackgroundColor() 获取背景颜色（十六进制颜色值，例如：#FFFF00（黄色））
 * @method void setBackgroundColor(string $BackgroundColor) 设置背景颜色（十六进制颜色值，例如：#FFFF00（黄色））
 * @method float getBackgroundOpacity() 获取背景透明度（数字，范围 0.0 到 1.0）
 * @method void setBackgroundOpacity(float $BackgroundOpacity) 设置背景透明度（数字，范围 0.0 到 1.0）
 * @method integer getDuration() 获取跑马灯文字移动/闪烁指定像素所需时间，范围：1-10；数值越小，跑马灯滚动/闪烁速度越快
 * @method void setDuration(integer $Duration) 设置跑马灯文字移动/闪烁指定像素所需时间，范围：1-10；数值越小，跑马灯滚动/闪烁速度越快
 * @method integer getMarqueeCount() 获取跑马灯个数：目前仅支持1或2, 对应显示单排或双排
 * @method void setMarqueeCount(integer $MarqueeCount) 设置跑马灯个数：目前仅支持1或2, 对应显示单排或双排
 */
class SetMarqueeRequest extends AbstractModel
{
    /**
     * @var integer 学校ID
     */
    public $SdkAppId;

    /**
     * @var integer 房间号
     */
    public $RoomId;

    /**
     * @var integer  跑马灯类型：1为固定值，2为用户昵称，3为固定值+用户昵称，4为用户ID，5为originId+固定值，6为用户昵称（originId）
     */
    public $MarqueeType;

    /**
     * @var integer 显示方式：1为滚动，2为闪烁
     */
    public $DisplayMode;

    /**
     * @var string 固定值内容（当MarqueeType=1或5，则展示固定值内容）
     */
    public $Content;

    /**
     * @var integer 字体大小（数字，像素单位，范围：10到24）。
     */
    public $FontSize;

    /**
     * @var integer 字体粗细：1为粗体，0为细体
     */
    public $FontWeight;

    /**
     * @var string 字体颜色（十六进制颜色值，例如：#00FF00（绿色））
     */
    public $FontColor;

    /**
     * @var float 字体透明度（数字，范围 0.0 到 1.0）
     */
    public $FontOpacity;

    /**
     * @var string 背景颜色（十六进制颜色值，例如：#FFFF00（黄色））
     */
    public $BackgroundColor;

    /**
     * @var float 背景透明度（数字，范围 0.0 到 1.0）
     */
    public $BackgroundOpacity;

    /**
     * @var integer 跑马灯文字移动/闪烁指定像素所需时间，范围：1-10；数值越小，跑马灯滚动/闪烁速度越快
     */
    public $Duration;

    /**
     * @var integer 跑马灯个数：目前仅支持1或2, 对应显示单排或双排
     */
    public $MarqueeCount;

    /**
     * @param integer $SdkAppId 学校ID
     * @param integer $RoomId 房间号
     * @param integer $MarqueeType  跑马灯类型：1为固定值，2为用户昵称，3为固定值+用户昵称，4为用户ID，5为originId+固定值，6为用户昵称（originId）
     * @param integer $DisplayMode 显示方式：1为滚动，2为闪烁
     * @param string $Content 固定值内容（当MarqueeType=1或5，则展示固定值内容）
     * @param integer $FontSize 字体大小（数字，像素单位，范围：10到24）。
     * @param integer $FontWeight 字体粗细：1为粗体，0为细体
     * @param string $FontColor 字体颜色（十六进制颜色值，例如：#00FF00（绿色））
     * @param float $FontOpacity 字体透明度（数字，范围 0.0 到 1.0）
     * @param string $BackgroundColor 背景颜色（十六进制颜色值，例如：#FFFF00（黄色））
     * @param float $BackgroundOpacity 背景透明度（数字，范围 0.0 到 1.0）
     * @param integer $Duration 跑马灯文字移动/闪烁指定像素所需时间，范围：1-10；数值越小，跑马灯滚动/闪烁速度越快
     * @param integer $MarqueeCount 跑马灯个数：目前仅支持1或2, 对应显示单排或双排
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("MarqueeType",$param) and $param["MarqueeType"] !== null) {
            $this->MarqueeType = $param["MarqueeType"];
        }

        if (array_key_exists("DisplayMode",$param) and $param["DisplayMode"] !== null) {
            $this->DisplayMode = $param["DisplayMode"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("FontSize",$param) and $param["FontSize"] !== null) {
            $this->FontSize = $param["FontSize"];
        }

        if (array_key_exists("FontWeight",$param) and $param["FontWeight"] !== null) {
            $this->FontWeight = $param["FontWeight"];
        }

        if (array_key_exists("FontColor",$param) and $param["FontColor"] !== null) {
            $this->FontColor = $param["FontColor"];
        }

        if (array_key_exists("FontOpacity",$param) and $param["FontOpacity"] !== null) {
            $this->FontOpacity = $param["FontOpacity"];
        }

        if (array_key_exists("BackgroundColor",$param) and $param["BackgroundColor"] !== null) {
            $this->BackgroundColor = $param["BackgroundColor"];
        }

        if (array_key_exists("BackgroundOpacity",$param) and $param["BackgroundOpacity"] !== null) {
            $this->BackgroundOpacity = $param["BackgroundOpacity"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("MarqueeCount",$param) and $param["MarqueeCount"] !== null) {
            $this->MarqueeCount = $param["MarqueeCount"];
        }
    }
}
