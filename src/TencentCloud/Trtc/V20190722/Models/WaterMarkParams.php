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
 * MCU混流水印参数
 *
 * @method integer getWaterMarkId() 获取混流-水印图片ID。取值为实时音视频控制台上传的图片ID。
 * @method void setWaterMarkId(integer $WaterMarkId) 设置混流-水印图片ID。取值为实时音视频控制台上传的图片ID。
 * @method integer getWaterMarkWidth() 获取混流-水印宽。单位为像素值。水印宽+X偏移不能超过整个画布宽。
 * @method void setWaterMarkWidth(integer $WaterMarkWidth) 设置混流-水印宽。单位为像素值。水印宽+X偏移不能超过整个画布宽。
 * @method integer getWaterMarkHeight() 获取混流-水印高。单位为像素值。水印高+Y偏移不能超过整个画布高。
 * @method void setWaterMarkHeight(integer $WaterMarkHeight) 设置混流-水印高。单位为像素值。水印高+Y偏移不能超过整个画布高。
 * @method integer getLocationX() 获取水印在输出时的X偏移。单位为像素值。水印宽+X偏移不能超过整个画布宽。
 * @method void setLocationX(integer $LocationX) 设置水印在输出时的X偏移。单位为像素值。水印宽+X偏移不能超过整个画布宽。
 * @method integer getLocationY() 获取水印在输出时的Y偏移。单位为像素值。水印高+Y偏移不能超过整个画布高。
 * @method void setLocationY(integer $LocationY) 设置水印在输出时的Y偏移。单位为像素值。水印高+Y偏移不能超过整个画布高。
 * @method string getWaterMarkUrl() 获取混流-水印图片URL地址，支持png、jpg、jpeg、bmp格式，暂不支持透明通道。URL链接长度限制为512字节。WaterMarkUrl和WaterMarkId参数都填时，以WaterMarkUrl为准。图片大小限制不超过2MB。
 * @method void setWaterMarkUrl(string $WaterMarkUrl) 设置混流-水印图片URL地址，支持png、jpg、jpeg、bmp格式，暂不支持透明通道。URL链接长度限制为512字节。WaterMarkUrl和WaterMarkId参数都填时，以WaterMarkUrl为准。图片大小限制不超过2MB。
 */
class WaterMarkParams extends AbstractModel
{
    /**
     * @var integer 混流-水印图片ID。取值为实时音视频控制台上传的图片ID。
     */
    public $WaterMarkId;

    /**
     * @var integer 混流-水印宽。单位为像素值。水印宽+X偏移不能超过整个画布宽。
     */
    public $WaterMarkWidth;

    /**
     * @var integer 混流-水印高。单位为像素值。水印高+Y偏移不能超过整个画布高。
     */
    public $WaterMarkHeight;

    /**
     * @var integer 水印在输出时的X偏移。单位为像素值。水印宽+X偏移不能超过整个画布宽。
     */
    public $LocationX;

    /**
     * @var integer 水印在输出时的Y偏移。单位为像素值。水印高+Y偏移不能超过整个画布高。
     */
    public $LocationY;

    /**
     * @var string 混流-水印图片URL地址，支持png、jpg、jpeg、bmp格式，暂不支持透明通道。URL链接长度限制为512字节。WaterMarkUrl和WaterMarkId参数都填时，以WaterMarkUrl为准。图片大小限制不超过2MB。
     */
    public $WaterMarkUrl;

    /**
     * @param integer $WaterMarkId 混流-水印图片ID。取值为实时音视频控制台上传的图片ID。
     * @param integer $WaterMarkWidth 混流-水印宽。单位为像素值。水印宽+X偏移不能超过整个画布宽。
     * @param integer $WaterMarkHeight 混流-水印高。单位为像素值。水印高+Y偏移不能超过整个画布高。
     * @param integer $LocationX 水印在输出时的X偏移。单位为像素值。水印宽+X偏移不能超过整个画布宽。
     * @param integer $LocationY 水印在输出时的Y偏移。单位为像素值。水印高+Y偏移不能超过整个画布高。
     * @param string $WaterMarkUrl 混流-水印图片URL地址，支持png、jpg、jpeg、bmp格式，暂不支持透明通道。URL链接长度限制为512字节。WaterMarkUrl和WaterMarkId参数都填时，以WaterMarkUrl为准。图片大小限制不超过2MB。
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
        if (array_key_exists("WaterMarkId",$param) and $param["WaterMarkId"] !== null) {
            $this->WaterMarkId = $param["WaterMarkId"];
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

        if (array_key_exists("WaterMarkUrl",$param) and $param["WaterMarkUrl"] !== null) {
            $this->WaterMarkUrl = $param["WaterMarkUrl"];
        }
    }
}
