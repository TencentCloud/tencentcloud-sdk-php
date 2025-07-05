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
 * 水印配置
 *
 * @method string getUrl() 获取水印图片的url
 * @method void setUrl(string $Url) 设置水印图片的url
 * @method float getWidth() 获取水印宽。为比例值
 * @method void setWidth(float $Width) 设置水印宽。为比例值
 * @method float getHeight() 获取水印高。为比例值
 * @method void setHeight(float $Height) 设置水印高。为比例值
 * @method float getLocationX() 获取水印X偏移, 取值:0-100, 表示区域X方向的百分比。比如50，则表示位于X轴中间。
 * @method void setLocationX(float $LocationX) 设置水印X偏移, 取值:0-100, 表示区域X方向的百分比。比如50，则表示位于X轴中间。
 * @method float getLocationY() 获取水印Y偏移, 取值:0-100, 表示区域Y方向的百分比。比如50，则表示位于Y轴中间。
 * @method void setLocationY(float $LocationY) 设置水印Y偏移, 取值:0-100, 表示区域Y方向的百分比。比如50，则表示位于Y轴中间。
 */
class WatermarkConfig extends AbstractModel
{
    /**
     * @var string 水印图片的url
     */
    public $Url;

    /**
     * @var float 水印宽。为比例值
     */
    public $Width;

    /**
     * @var float 水印高。为比例值
     */
    public $Height;

    /**
     * @var float 水印X偏移, 取值:0-100, 表示区域X方向的百分比。比如50，则表示位于X轴中间。
     */
    public $LocationX;

    /**
     * @var float 水印Y偏移, 取值:0-100, 表示区域Y方向的百分比。比如50，则表示位于Y轴中间。
     */
    public $LocationY;

    /**
     * @param string $Url 水印图片的url
     * @param float $Width 水印宽。为比例值
     * @param float $Height 水印高。为比例值
     * @param float $LocationX 水印X偏移, 取值:0-100, 表示区域X方向的百分比。比如50，则表示位于X轴中间。
     * @param float $LocationY 水印Y偏移, 取值:0-100, 表示区域Y方向的百分比。比如50，则表示位于Y轴中间。
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("LocationX",$param) and $param["LocationX"] !== null) {
            $this->LocationX = $param["LocationX"];
        }

        if (array_key_exists("LocationY",$param) and $param["LocationY"] !== null) {
            $this->LocationY = $param["LocationY"];
        }
    }
}
