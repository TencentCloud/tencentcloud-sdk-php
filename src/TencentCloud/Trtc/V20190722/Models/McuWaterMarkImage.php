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
 * 图片水印参数。
 *
 * @method string getWaterMarkUrl() 获取水印图片URL地址，支持png、jpg、jpeg格式。图片大小限制不超过5MB。
 * @method void setWaterMarkUrl(string $WaterMarkUrl) 设置水印图片URL地址，支持png、jpg、jpeg格式。图片大小限制不超过5MB。
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
 */
class McuWaterMarkImage extends AbstractModel
{
    /**
     * @var string 水印图片URL地址，支持png、jpg、jpeg格式。图片大小限制不超过5MB。
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
     * @param string $WaterMarkUrl 水印图片URL地址，支持png、jpg、jpeg格式。图片大小限制不超过5MB。
     * @param integer $WaterMarkWidth 水印在输出时的宽。单位为像素值。
     * @param integer $WaterMarkHeight 水印在输出时的高。单位为像素值。
     * @param integer $LocationX 水印在输出时的X偏移。单位为像素值。
     * @param integer $LocationY 水印在输出时的Y偏移。单位为像素值。
     * @param integer $ZOrder 水印在输出时的层级，不填默认为0。
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
    }
}
