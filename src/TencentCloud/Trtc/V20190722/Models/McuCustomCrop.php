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
 * 混流自定义裁剪参数
 *
 * @method integer getLocationX() 获取自定义裁剪起始位置的X偏移，单位为像素值，大于等于0。
 * @method void setLocationX(integer $LocationX) 设置自定义裁剪起始位置的X偏移，单位为像素值，大于等于0。
 * @method integer getLocationY() 获取自定义裁剪起始位置的Y偏移，单位为像素值，大于等于0。
 * @method void setLocationY(integer $LocationY) 设置自定义裁剪起始位置的Y偏移，单位为像素值，大于等于0。
 * @method integer getWidth() 获取自定义裁剪画面的宽度，单位为像素值，大于0，且LocationX+Width不超过10000
 * @method void setWidth(integer $Width) 设置自定义裁剪画面的宽度，单位为像素值，大于0，且LocationX+Width不超过10000
 * @method integer getHeight() 获取自定义裁剪画面的高度，单位为像素值，大于0，且LocationY+Height不超过10000
 * @method void setHeight(integer $Height) 设置自定义裁剪画面的高度，单位为像素值，大于0，且LocationY+Height不超过10000
 */
class McuCustomCrop extends AbstractModel
{
    /**
     * @var integer 自定义裁剪起始位置的X偏移，单位为像素值，大于等于0。
     */
    public $LocationX;

    /**
     * @var integer 自定义裁剪起始位置的Y偏移，单位为像素值，大于等于0。
     */
    public $LocationY;

    /**
     * @var integer 自定义裁剪画面的宽度，单位为像素值，大于0，且LocationX+Width不超过10000
     */
    public $Width;

    /**
     * @var integer 自定义裁剪画面的高度，单位为像素值，大于0，且LocationY+Height不超过10000
     */
    public $Height;

    /**
     * @param integer $LocationX 自定义裁剪起始位置的X偏移，单位为像素值，大于等于0。
     * @param integer $LocationY 自定义裁剪起始位置的Y偏移，单位为像素值，大于等于0。
     * @param integer $Width 自定义裁剪画面的宽度，单位为像素值，大于0，且LocationX+Width不超过10000
     * @param integer $Height 自定义裁剪画面的高度，单位为像素值，大于0，且LocationY+Height不超过10000
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
        if (array_key_exists("LocationX",$param) and $param["LocationX"] !== null) {
            $this->LocationX = $param["LocationX"];
        }

        if (array_key_exists("LocationY",$param) and $param["LocationY"] !== null) {
            $this->LocationY = $param["LocationY"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}
