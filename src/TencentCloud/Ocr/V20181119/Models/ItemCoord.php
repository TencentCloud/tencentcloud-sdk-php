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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文本行在旋转纠正之后的图像中的像素坐标，表示为（左上角x, 左上角y，宽width，高height）
 *
 * @method integer getX() 获取左上角x
 * @method void setX(integer $X) 设置左上角x
 * @method integer getY() 获取左上角y
 * @method void setY(integer $Y) 设置左上角y
 * @method integer getWidth() 获取宽width
 * @method void setWidth(integer $Width) 设置宽width
 * @method integer getHeight() 获取高height
 * @method void setHeight(integer $Height) 设置高height
 */
class ItemCoord extends AbstractModel
{
    /**
     * @var integer 左上角x
     */
    public $X;

    /**
     * @var integer 左上角y
     */
    public $Y;

    /**
     * @var integer 宽width
     */
    public $Width;

    /**
     * @var integer 高height
     */
    public $Height;

    /**
     * @param integer $X 左上角x
     * @param integer $Y 左上角y
     * @param integer $Width 宽width
     * @param integer $Height 高height
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
        if (array_key_exists("X",$param) and $param["X"] !== null) {
            $this->X = $param["X"];
        }

        if (array_key_exists("Y",$param) and $param["Y"] !== null) {
            $this->Y = $param["Y"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}
