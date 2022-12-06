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
 * 混流布局参数。
 *
 * @method UserMediaStream getUserMediaStream() 获取用户媒体流参数。不填时腾讯云后台按照上行主播的进房顺序自动填充。
 * @method void setUserMediaStream(UserMediaStream $UserMediaStream) 设置用户媒体流参数。不填时腾讯云后台按照上行主播的进房顺序自动填充。
 * @method integer getImageWidth() 获取子画面在输出时的宽度，单位为像素值，不填默认为0。
 * @method void setImageWidth(integer $ImageWidth) 设置子画面在输出时的宽度，单位为像素值，不填默认为0。
 * @method integer getImageHeight() 获取子画面在输出时的高度，单位为像素值，不填默认为0。
 * @method void setImageHeight(integer $ImageHeight) 设置子画面在输出时的高度，单位为像素值，不填默认为0。
 * @method integer getLocationX() 获取子画面在输出时的X偏移，单位为像素值，LocationX与ImageWidth之和不能超过混流输出的总宽度，不填默认为0。
 * @method void setLocationX(integer $LocationX) 设置子画面在输出时的X偏移，单位为像素值，LocationX与ImageWidth之和不能超过混流输出的总宽度，不填默认为0。
 * @method integer getLocationY() 获取子画面在输出时的Y偏移，单位为像素值，LocationY与ImageHeight之和不能超过混流输出的总高度，不填默认为0。
 * @method void setLocationY(integer $LocationY) 设置子画面在输出时的Y偏移，单位为像素值，LocationY与ImageHeight之和不能超过混流输出的总高度，不填默认为0。
 * @method integer getZOrder() 获取子画面在输出时的层级，不填默认为0。
 * @method void setZOrder(integer $ZOrder) 设置子画面在输出时的层级，不填默认为0。
 * @method integer getRenderMode() 获取子画面在输出时的显示模式：0为裁剪，1为缩放，2为缩放并显示黑底。不填默认为0。
 * @method void setRenderMode(integer $RenderMode) 设置子画面在输出时的显示模式：0为裁剪，1为缩放，2为缩放并显示黑底。不填默认为0。
 * @method string getBackGroundColor() 获取子画面的背景颜色，常用的颜色有：
红色：0xcc0033。
黄色：0xcc9900。
绿色：0xcccc33。
蓝色：0x99CCFF。
黑色：0x000000。
白色：0xFFFFFF。
灰色：0x999999。
 * @method void setBackGroundColor(string $BackGroundColor) 设置子画面的背景颜色，常用的颜色有：
红色：0xcc0033。
黄色：0xcc9900。
绿色：0xcccc33。
蓝色：0x99CCFF。
黑色：0x000000。
白色：0xFFFFFF。
灰色：0x999999。
 * @method string getBackgroundImageUrl() 获取子画面的背景图url，填写该参数，当用户关闭摄像头或未进入TRTC房间时，会在布局位置填充为指定图片。若指定图片与布局位置尺寸比例不一致，则会对图片进行拉伸处理，优先级高于BackGroundColor。
 * @method void setBackgroundImageUrl(string $BackgroundImageUrl) 设置子画面的背景图url，填写该参数，当用户关闭摄像头或未进入TRTC房间时，会在布局位置填充为指定图片。若指定图片与布局位置尺寸比例不一致，则会对图片进行拉伸处理，优先级高于BackGroundColor。
 * @method McuCustomCrop getCustomCrop() 获取客户自定义裁剪，针对原始输入流裁剪
 * @method void setCustomCrop(McuCustomCrop $CustomCrop) 设置客户自定义裁剪，针对原始输入流裁剪
 */
class McuLayout extends AbstractModel
{
    /**
     * @var UserMediaStream 用户媒体流参数。不填时腾讯云后台按照上行主播的进房顺序自动填充。
     */
    public $UserMediaStream;

    /**
     * @var integer 子画面在输出时的宽度，单位为像素值，不填默认为0。
     */
    public $ImageWidth;

    /**
     * @var integer 子画面在输出时的高度，单位为像素值，不填默认为0。
     */
    public $ImageHeight;

    /**
     * @var integer 子画面在输出时的X偏移，单位为像素值，LocationX与ImageWidth之和不能超过混流输出的总宽度，不填默认为0。
     */
    public $LocationX;

    /**
     * @var integer 子画面在输出时的Y偏移，单位为像素值，LocationY与ImageHeight之和不能超过混流输出的总高度，不填默认为0。
     */
    public $LocationY;

    /**
     * @var integer 子画面在输出时的层级，不填默认为0。
     */
    public $ZOrder;

    /**
     * @var integer 子画面在输出时的显示模式：0为裁剪，1为缩放，2为缩放并显示黑底。不填默认为0。
     */
    public $RenderMode;

    /**
     * @var string 子画面的背景颜色，常用的颜色有：
红色：0xcc0033。
黄色：0xcc9900。
绿色：0xcccc33。
蓝色：0x99CCFF。
黑色：0x000000。
白色：0xFFFFFF。
灰色：0x999999。
     */
    public $BackGroundColor;

    /**
     * @var string 子画面的背景图url，填写该参数，当用户关闭摄像头或未进入TRTC房间时，会在布局位置填充为指定图片。若指定图片与布局位置尺寸比例不一致，则会对图片进行拉伸处理，优先级高于BackGroundColor。
     */
    public $BackgroundImageUrl;

    /**
     * @var McuCustomCrop 客户自定义裁剪，针对原始输入流裁剪
     */
    public $CustomCrop;

    /**
     * @param UserMediaStream $UserMediaStream 用户媒体流参数。不填时腾讯云后台按照上行主播的进房顺序自动填充。
     * @param integer $ImageWidth 子画面在输出时的宽度，单位为像素值，不填默认为0。
     * @param integer $ImageHeight 子画面在输出时的高度，单位为像素值，不填默认为0。
     * @param integer $LocationX 子画面在输出时的X偏移，单位为像素值，LocationX与ImageWidth之和不能超过混流输出的总宽度，不填默认为0。
     * @param integer $LocationY 子画面在输出时的Y偏移，单位为像素值，LocationY与ImageHeight之和不能超过混流输出的总高度，不填默认为0。
     * @param integer $ZOrder 子画面在输出时的层级，不填默认为0。
     * @param integer $RenderMode 子画面在输出时的显示模式：0为裁剪，1为缩放，2为缩放并显示黑底。不填默认为0。
     * @param string $BackGroundColor 子画面的背景颜色，常用的颜色有：
红色：0xcc0033。
黄色：0xcc9900。
绿色：0xcccc33。
蓝色：0x99CCFF。
黑色：0x000000。
白色：0xFFFFFF。
灰色：0x999999。
     * @param string $BackgroundImageUrl 子画面的背景图url，填写该参数，当用户关闭摄像头或未进入TRTC房间时，会在布局位置填充为指定图片。若指定图片与布局位置尺寸比例不一致，则会对图片进行拉伸处理，优先级高于BackGroundColor。
     * @param McuCustomCrop $CustomCrop 客户自定义裁剪，针对原始输入流裁剪
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
        if (array_key_exists("UserMediaStream",$param) and $param["UserMediaStream"] !== null) {
            $this->UserMediaStream = new UserMediaStream();
            $this->UserMediaStream->deserialize($param["UserMediaStream"]);
        }

        if (array_key_exists("ImageWidth",$param) and $param["ImageWidth"] !== null) {
            $this->ImageWidth = $param["ImageWidth"];
        }

        if (array_key_exists("ImageHeight",$param) and $param["ImageHeight"] !== null) {
            $this->ImageHeight = $param["ImageHeight"];
        }

        if (array_key_exists("LocationX",$param) and $param["LocationX"] !== null) {
            $this->LocationX = $param["LocationX"];
        }

        if (array_key_exists("LocationY",$param) and $param["LocationY"] !== null) {
            $this->LocationY = $param["LocationY"];
        }

        if (array_key_exists("ZOrder",$param) and $param["ZOrder"] !== null) {
            $this->ZOrder = $param["ZOrder"];
        }

        if (array_key_exists("RenderMode",$param) and $param["RenderMode"] !== null) {
            $this->RenderMode = $param["RenderMode"];
        }

        if (array_key_exists("BackGroundColor",$param) and $param["BackGroundColor"] !== null) {
            $this->BackGroundColor = $param["BackGroundColor"];
        }

        if (array_key_exists("BackgroundImageUrl",$param) and $param["BackgroundImageUrl"] !== null) {
            $this->BackgroundImageUrl = $param["BackgroundImageUrl"];
        }

        if (array_key_exists("CustomCrop",$param) and $param["CustomCrop"] !== null) {
            $this->CustomCrop = new McuCustomCrop();
            $this->CustomCrop->deserialize($param["CustomCrop"]);
        }
    }
}
