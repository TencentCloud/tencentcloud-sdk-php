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
 * 水印参数。
 *
 * @method integer getWaterMarkType() 获取水印类型，0为图片（默认），1为文字。
 * @method void setWaterMarkType(integer $WaterMarkType) 设置水印类型，0为图片（默认），1为文字。
 * @method McuWaterMarkImage getWaterMarkImage() 获取图片水印参数。WaterMarkType为0指定。
 * @method void setWaterMarkImage(McuWaterMarkImage $WaterMarkImage) 设置图片水印参数。WaterMarkType为0指定。
 * @method McuWaterMarkText getWaterMarkText() 获取文字水印参数。WaterMarkType为1指定。
 * @method void setWaterMarkText(McuWaterMarkText $WaterMarkText) 设置文字水印参数。WaterMarkType为1指定。
 */
class McuWaterMarkParams extends AbstractModel
{
    /**
     * @var integer 水印类型，0为图片（默认），1为文字。
     */
    public $WaterMarkType;

    /**
     * @var McuWaterMarkImage 图片水印参数。WaterMarkType为0指定。
     */
    public $WaterMarkImage;

    /**
     * @var McuWaterMarkText 文字水印参数。WaterMarkType为1指定。
     */
    public $WaterMarkText;

    /**
     * @param integer $WaterMarkType 水印类型，0为图片（默认），1为文字。
     * @param McuWaterMarkImage $WaterMarkImage 图片水印参数。WaterMarkType为0指定。
     * @param McuWaterMarkText $WaterMarkText 文字水印参数。WaterMarkType为1指定。
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
        if (array_key_exists("WaterMarkType",$param) and $param["WaterMarkType"] !== null) {
            $this->WaterMarkType = $param["WaterMarkType"];
        }

        if (array_key_exists("WaterMarkImage",$param) and $param["WaterMarkImage"] !== null) {
            $this->WaterMarkImage = new McuWaterMarkImage();
            $this->WaterMarkImage->deserialize($param["WaterMarkImage"]);
        }

        if (array_key_exists("WaterMarkText",$param) and $param["WaterMarkText"] !== null) {
            $this->WaterMarkText = new McuWaterMarkText();
            $this->WaterMarkText->deserialize($param["WaterMarkText"]);
        }
    }
}
