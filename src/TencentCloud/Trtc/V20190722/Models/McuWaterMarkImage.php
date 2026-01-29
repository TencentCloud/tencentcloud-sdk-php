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
 * 图片水印参数。
 *
 * @method string getWaterMarkUrl() 获取水印图片URL地址，支持png、jpg、jpeg格式。图片分辨率限制不超过2K，图片大小限制不超过5MB。
注：
1，您需要确保图片链接的可访问性，后台单次下载超时时间为10秒，最多重试3次，若最终图片下载失败，水印图片将不会生效。
2，url可支持字符集：【'0-9','a-z','A-Z','-', '.', '_', '~', ':', '/', '?', '#', '[', ']','@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|'】，您需要确保url字符在可支持字符集内，若存在可支持字符集外的字符，水印图片将不会生效。
 * @method void setWaterMarkUrl(string $WaterMarkUrl) 设置水印图片URL地址，支持png、jpg、jpeg格式。图片分辨率限制不超过2K，图片大小限制不超过5MB。
注：
1，您需要确保图片链接的可访问性，后台单次下载超时时间为10秒，最多重试3次，若最终图片下载失败，水印图片将不会生效。
2，url可支持字符集：【'0-9','a-z','A-Z','-', '.', '_', '~', ':', '/', '?', '#', '[', ']','@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|'】，您需要确保url字符在可支持字符集内，若存在可支持字符集外的字符，水印图片将不会生效。
 * @method integer getWaterMarkWidth() 获取水印在输出时的宽。单位为像素值。
 * @method void setWaterMarkWidth(integer $WaterMarkWidth) 设置水印在输出时的宽。单位为像素值。
 * @method integer getWaterMarkHeight() 获取水印在输出时的高。单位为像素值。
 * @method void setWaterMarkHeight(integer $WaterMarkHeight) 设置水印在输出时的高。单位为像素值。
 * @method integer getLocationX() 获取水印在输出时的X偏移。单位为像素值。
 * @method void setLocationX(integer $LocationX) 设置水印在输出时的X偏移。单位为像素值。
 * @method integer getLocationY() 获取水印在输出时的Y偏移。单位为像素值。
 * @method void setLocationY(integer $LocationY) 设置水印在输出时的Y偏移。单位为像素值。
 * @method integer getZOrder() 获取水印在输出时的层级，不填默认为0。
 * @method void setZOrder(integer $ZOrder) 设置水印在输出时的层级，不填默认为0。
 * @method integer getDynamicPosType() 获取动态水印类型，默认为0。0:关闭；1:随机位置，每秒变动一次；2:边界扫描反弹，每帧变动一次。
 * @method void setDynamicPosType(integer $DynamicPosType) 设置动态水印类型，默认为0。0:关闭；1:随机位置，每秒变动一次；2:边界扫描反弹，每帧变动一次。
 */
class McuWaterMarkImage extends AbstractModel
{
    /**
     * @var string 水印图片URL地址，支持png、jpg、jpeg格式。图片分辨率限制不超过2K，图片大小限制不超过5MB。
注：
1，您需要确保图片链接的可访问性，后台单次下载超时时间为10秒，最多重试3次，若最终图片下载失败，水印图片将不会生效。
2，url可支持字符集：【'0-9','a-z','A-Z','-', '.', '_', '~', ':', '/', '?', '#', '[', ']','@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|'】，您需要确保url字符在可支持字符集内，若存在可支持字符集外的字符，水印图片将不会生效。
     */
    public $WaterMarkUrl;

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
     * @var integer 水印在输出时的层级，不填默认为0。
     */
    public $ZOrder;

    /**
     * @var integer 动态水印类型，默认为0。0:关闭；1:随机位置，每秒变动一次；2:边界扫描反弹，每帧变动一次。
     */
    public $DynamicPosType;

    /**
     * @param string $WaterMarkUrl 水印图片URL地址，支持png、jpg、jpeg格式。图片分辨率限制不超过2K，图片大小限制不超过5MB。
注：
1，您需要确保图片链接的可访问性，后台单次下载超时时间为10秒，最多重试3次，若最终图片下载失败，水印图片将不会生效。
2，url可支持字符集：【'0-9','a-z','A-Z','-', '.', '_', '~', ':', '/', '?', '#', '[', ']','@', '!', '&', '(', ')', '*', '+', ',', '%', '=', ';', '|'】，您需要确保url字符在可支持字符集内，若存在可支持字符集外的字符，水印图片将不会生效。
     * @param integer $WaterMarkWidth 水印在输出时的宽。单位为像素值。
     * @param integer $WaterMarkHeight 水印在输出时的高。单位为像素值。
     * @param integer $LocationX 水印在输出时的X偏移。单位为像素值。
     * @param integer $LocationY 水印在输出时的Y偏移。单位为像素值。
     * @param integer $ZOrder 水印在输出时的层级，不填默认为0。
     * @param integer $DynamicPosType 动态水印类型，默认为0。0:关闭；1:随机位置，每秒变动一次；2:边界扫描反弹，每帧变动一次。
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
        if (array_key_exists("WaterMarkUrl",$param) and $param["WaterMarkUrl"] !== null) {
            $this->WaterMarkUrl = $param["WaterMarkUrl"];
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

        if (array_key_exists("ZOrder",$param) and $param["ZOrder"] !== null) {
            $this->ZOrder = $param["ZOrder"];
        }

        if (array_key_exists("DynamicPosType",$param) and $param["DynamicPosType"] !== null) {
            $this->DynamicPosType = $param["DynamicPosType"];
        }
    }
}
