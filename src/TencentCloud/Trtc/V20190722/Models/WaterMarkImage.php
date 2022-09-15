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
 * 水印类型为图片的参数列表
 *
 * @method string getWaterMarkUrl() 获取下载的url地址， 只支持jpg， png，大小限制不超过5M。
 * @method void setWaterMarkUrl(string $WaterMarkUrl) 设置下载的url地址， 只支持jpg， png，大小限制不超过5M。
 * @method integer getTop() 获取画布上该画面左上角的 y 轴坐标，取值范围 [0, 2560]，不能超过画布的高。
 * @method void setTop(integer $Top) 设置画布上该画面左上角的 y 轴坐标，取值范围 [0, 2560]，不能超过画布的高。
 * @method integer getLeft() 获取画布上该画面左上角的 x 轴坐标，取值范围 [0, 2560]，不能超过画布的宽。
 * @method void setLeft(integer $Left) 设置画布上该画面左上角的 x 轴坐标，取值范围 [0, 2560]，不能超过画布的宽。
 * @method integer getWidth() 获取画布上该画面宽度的相对值，取值范围 [0, 2560]，与Left相加不应超过画布的宽。
 * @method void setWidth(integer $Width) 设置画布上该画面宽度的相对值，取值范围 [0, 2560]，与Left相加不应超过画布的宽。
 * @method integer getHeight() 获取画布上该画面高度的相对值，取值范围 [0, 2560]，与Top相加不应超过画布的高。
 * @method void setHeight(integer $Height) 设置画布上该画面高度的相对值，取值范围 [0, 2560]，与Top相加不应超过画布的高。
 */
class WaterMarkImage extends AbstractModel
{
    /**
     * @var string 下载的url地址， 只支持jpg， png，大小限制不超过5M。
     */
    public $WaterMarkUrl;

    /**
     * @var integer 画布上该画面左上角的 y 轴坐标，取值范围 [0, 2560]，不能超过画布的高。
     */
    public $Top;

    /**
     * @var integer 画布上该画面左上角的 x 轴坐标，取值范围 [0, 2560]，不能超过画布的宽。
     */
    public $Left;

    /**
     * @var integer 画布上该画面宽度的相对值，取值范围 [0, 2560]，与Left相加不应超过画布的宽。
     */
    public $Width;

    /**
     * @var integer 画布上该画面高度的相对值，取值范围 [0, 2560]，与Top相加不应超过画布的高。
     */
    public $Height;

    /**
     * @param string $WaterMarkUrl 下载的url地址， 只支持jpg， png，大小限制不超过5M。
     * @param integer $Top 画布上该画面左上角的 y 轴坐标，取值范围 [0, 2560]，不能超过画布的高。
     * @param integer $Left 画布上该画面左上角的 x 轴坐标，取值范围 [0, 2560]，不能超过画布的宽。
     * @param integer $Width 画布上该画面宽度的相对值，取值范围 [0, 2560]，与Left相加不应超过画布的宽。
     * @param integer $Height 画布上该画面高度的相对值，取值范围 [0, 2560]，与Top相加不应超过画布的高。
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

        if (array_key_exists("Top",$param) and $param["Top"] !== null) {
            $this->Top = $param["Top"];
        }

        if (array_key_exists("Left",$param) and $param["Left"] !== null) {
            $this->Left = $param["Left"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}
