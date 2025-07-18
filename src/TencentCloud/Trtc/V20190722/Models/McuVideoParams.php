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
 * 混流转推的视频相关参数。
 *
 * @method VideoEncode getVideoEncode() 获取输出流视频编码参数。
 * @method void setVideoEncode(VideoEncode $VideoEncode) 设置输出流视频编码参数。
 * @method McuLayoutParams getLayoutParams() 获取混流布局参数。
 * @method void setLayoutParams(McuLayoutParams $LayoutParams) 设置混流布局参数。
 * @method string getBackGroundColor() 获取整个画布背景颜色，常用的颜色有：
红色：0xcc0033。
黄色：0xcc9900。
绿色：0xcccc33。
蓝色：0x99CCFF。
黑色：0x000000。
白色：0xFFFFFF。
灰色：0x999999。
 * @method void setBackGroundColor(string $BackGroundColor) 设置整个画布背景颜色，常用的颜色有：
红色：0xcc0033。
黄色：0xcc9900。
绿色：0xcccc33。
蓝色：0x99CCFF。
黑色：0x000000。
白色：0xFFFFFF。
灰色：0x999999。
 * @method string getBackgroundImageUrl() 获取整个画布的背景图url，优先级高于BackGroundColor。支持png、jpg、jpeg格式。图片大小限制不超过5MB。
注：您需要确保图片链接的可访问性，后台单次下载超时时间为10秒，最多重试3次，若最终图片下载失败，背景图将不会生效。
 * @method void setBackgroundImageUrl(string $BackgroundImageUrl) 设置整个画布的背景图url，优先级高于BackGroundColor。支持png、jpg、jpeg格式。图片大小限制不超过5MB。
注：您需要确保图片链接的可访问性，后台单次下载超时时间为10秒，最多重试3次，若最终图片下载失败，背景图将不会生效。
 * @method array getWaterMarkList() 获取混流布局的水印参数。
 * @method void setWaterMarkList(array $WaterMarkList) 设置混流布局的水印参数。
 * @method integer getBackgroundRenderMode() 获取背景图在输出时的显示模式：0为裁剪，1为缩放并显示黑底，2为变比例伸缩。后台默认为变比例伸缩。
 * @method void setBackgroundRenderMode(integer $BackgroundRenderMode) 设置背景图在输出时的显示模式：0为裁剪，1为缩放并显示黑底，2为变比例伸缩。后台默认为变比例伸缩。
 */
class McuVideoParams extends AbstractModel
{
    /**
     * @var VideoEncode 输出流视频编码参数。
     */
    public $VideoEncode;

    /**
     * @var McuLayoutParams 混流布局参数。
     */
    public $LayoutParams;

    /**
     * @var string 整个画布背景颜色，常用的颜色有：
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
     * @var string 整个画布的背景图url，优先级高于BackGroundColor。支持png、jpg、jpeg格式。图片大小限制不超过5MB。
注：您需要确保图片链接的可访问性，后台单次下载超时时间为10秒，最多重试3次，若最终图片下载失败，背景图将不会生效。
     */
    public $BackgroundImageUrl;

    /**
     * @var array 混流布局的水印参数。
     */
    public $WaterMarkList;

    /**
     * @var integer 背景图在输出时的显示模式：0为裁剪，1为缩放并显示黑底，2为变比例伸缩。后台默认为变比例伸缩。
     */
    public $BackgroundRenderMode;

    /**
     * @param VideoEncode $VideoEncode 输出流视频编码参数。
     * @param McuLayoutParams $LayoutParams 混流布局参数。
     * @param string $BackGroundColor 整个画布背景颜色，常用的颜色有：
红色：0xcc0033。
黄色：0xcc9900。
绿色：0xcccc33。
蓝色：0x99CCFF。
黑色：0x000000。
白色：0xFFFFFF。
灰色：0x999999。
     * @param string $BackgroundImageUrl 整个画布的背景图url，优先级高于BackGroundColor。支持png、jpg、jpeg格式。图片大小限制不超过5MB。
注：您需要确保图片链接的可访问性，后台单次下载超时时间为10秒，最多重试3次，若最终图片下载失败，背景图将不会生效。
     * @param array $WaterMarkList 混流布局的水印参数。
     * @param integer $BackgroundRenderMode 背景图在输出时的显示模式：0为裁剪，1为缩放并显示黑底，2为变比例伸缩。后台默认为变比例伸缩。
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
        if (array_key_exists("VideoEncode",$param) and $param["VideoEncode"] !== null) {
            $this->VideoEncode = new VideoEncode();
            $this->VideoEncode->deserialize($param["VideoEncode"]);
        }

        if (array_key_exists("LayoutParams",$param) and $param["LayoutParams"] !== null) {
            $this->LayoutParams = new McuLayoutParams();
            $this->LayoutParams->deserialize($param["LayoutParams"]);
        }

        if (array_key_exists("BackGroundColor",$param) and $param["BackGroundColor"] !== null) {
            $this->BackGroundColor = $param["BackGroundColor"];
        }

        if (array_key_exists("BackgroundImageUrl",$param) and $param["BackgroundImageUrl"] !== null) {
            $this->BackgroundImageUrl = $param["BackgroundImageUrl"];
        }

        if (array_key_exists("WaterMarkList",$param) and $param["WaterMarkList"] !== null) {
            $this->WaterMarkList = [];
            foreach ($param["WaterMarkList"] as $key => $value){
                $obj = new McuWaterMarkParams();
                $obj->deserialize($value);
                array_push($this->WaterMarkList, $obj);
            }
        }

        if (array_key_exists("BackgroundRenderMode",$param) and $param["BackgroundRenderMode"] !== null) {
            $this->BackgroundRenderMode = $param["BackgroundRenderMode"];
        }
    }
}
