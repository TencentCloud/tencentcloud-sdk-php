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
namespace TencentCloud\Ims\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 坐标
 *
 * @method float getX() 获取该参数用于返回检测框**左上角位置的横坐标**（x）所在的像素位置，结合剩余参数可唯一确定检测框的大小和位置。
 * @method void setX(float $X) 设置该参数用于返回检测框**左上角位置的横坐标**（x）所在的像素位置，结合剩余参数可唯一确定检测框的大小和位置。
 * @method float getY() 获取该参数用于返回检测框**左上角位置的纵坐标**（y）所在的像素位置，结合剩余参数可唯一确定检测框的大小和位置。
 * @method void setY(float $Y) 设置该参数用于返回检测框**左上角位置的纵坐标**（y）所在的像素位置，结合剩余参数可唯一确定检测框的大小和位置。
 * @method float getWidth() 获取该参数用于返回**检测框的宽度**（由左上角出发在x轴向右延伸的长度），结合剩余参数可唯一确定检测框的大小和位置。
 * @method void setWidth(float $Width) 设置该参数用于返回**检测框的宽度**（由左上角出发在x轴向右延伸的长度），结合剩余参数可唯一确定检测框的大小和位置。
 * @method float getHeight() 获取该参数用于返回**检测框的高度**（由左上角出发在y轴向下延伸的长度），结合剩余参数可唯一确定检测框的大小和位置。
 * @method void setHeight(float $Height) 设置该参数用于返回**检测框的高度**（由左上角出发在y轴向下延伸的长度），结合剩余参数可唯一确定检测框的大小和位置。
 * @method float getRotate() 获取该参数用于返回**检测框的旋转角度**，该参数结合X和Y两个坐标参数可唯一确定检测框的具体位置；取值：**0-360**（**角度制**），方向为**逆时针旋转**。
 * @method void setRotate(float $Rotate) 设置该参数用于返回**检测框的旋转角度**，该参数结合X和Y两个坐标参数可唯一确定检测框的具体位置；取值：**0-360**（**角度制**），方向为**逆时针旋转**。
 */
class Location extends AbstractModel
{
    /**
     * @var float 该参数用于返回检测框**左上角位置的横坐标**（x）所在的像素位置，结合剩余参数可唯一确定检测框的大小和位置。
     */
    public $X;

    /**
     * @var float 该参数用于返回检测框**左上角位置的纵坐标**（y）所在的像素位置，结合剩余参数可唯一确定检测框的大小和位置。
     */
    public $Y;

    /**
     * @var float 该参数用于返回**检测框的宽度**（由左上角出发在x轴向右延伸的长度），结合剩余参数可唯一确定检测框的大小和位置。
     */
    public $Width;

    /**
     * @var float 该参数用于返回**检测框的高度**（由左上角出发在y轴向下延伸的长度），结合剩余参数可唯一确定检测框的大小和位置。
     */
    public $Height;

    /**
     * @var float 该参数用于返回**检测框的旋转角度**，该参数结合X和Y两个坐标参数可唯一确定检测框的具体位置；取值：**0-360**（**角度制**），方向为**逆时针旋转**。
     */
    public $Rotate;

    /**
     * @param float $X 该参数用于返回检测框**左上角位置的横坐标**（x）所在的像素位置，结合剩余参数可唯一确定检测框的大小和位置。
     * @param float $Y 该参数用于返回检测框**左上角位置的纵坐标**（y）所在的像素位置，结合剩余参数可唯一确定检测框的大小和位置。
     * @param float $Width 该参数用于返回**检测框的宽度**（由左上角出发在x轴向右延伸的长度），结合剩余参数可唯一确定检测框的大小和位置。
     * @param float $Height 该参数用于返回**检测框的高度**（由左上角出发在y轴向下延伸的长度），结合剩余参数可唯一确定检测框的大小和位置。
     * @param float $Rotate 该参数用于返回**检测框的旋转角度**，该参数结合X和Y两个坐标参数可唯一确定检测框的具体位置；取值：**0-360**（**角度制**），方向为**逆时针旋转**。
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

        if (array_key_exists("Rotate",$param) and $param["Rotate"] !== null) {
            $this->Rotate = $param["Rotate"];
        }
    }
}
