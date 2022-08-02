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
 * 水印布局参数
 *
 * @method integer getWaterMarkType() 获取水印类型，0为图片（默认），1为文字（暂不支持）。
 * @method void setWaterMarkType(integer $WaterMarkType) 设置水印类型，0为图片（默认），1为文字（暂不支持）。
 * @method WaterMarkImage getWaterMarkImage() 获取水印为图片时的参数列表，水印为图片时校验必填。
 * @method void setWaterMarkImage(WaterMarkImage $WaterMarkImage) 设置水印为图片时的参数列表，水印为图片时校验必填。
 */
class WaterMark extends AbstractModel
{
    /**
     * @var integer 水印类型，0为图片（默认），1为文字（暂不支持）。
     */
    public $WaterMarkType;

    /**
     * @var WaterMarkImage 水印为图片时的参数列表，水印为图片时校验必填。
     */
    public $WaterMarkImage;

    /**
     * @param integer $WaterMarkType 水印类型，0为图片（默认），1为文字（暂不支持）。
     * @param WaterMarkImage $WaterMarkImage 水印为图片时的参数列表，水印为图片时校验必填。
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
            $this->WaterMarkImage = new WaterMarkImage();
            $this->WaterMarkImage->deserialize($param["WaterMarkImage"]);
        }
    }
}
