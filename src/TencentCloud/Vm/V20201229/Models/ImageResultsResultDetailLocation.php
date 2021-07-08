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
namespace TencentCloud\Vm\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片详情位置信息
 *
 * @method float getX() 获取该参数用于标识OCR检测框左上角位置的**横坐标**（x）所在的像素位置，结合剩余参数可唯一确定检测框的大小和位置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setX(float $X) 设置该参数用于标识OCR检测框左上角位置的**横坐标**（x）所在的像素位置，结合剩余参数可唯一确定检测框的大小和位置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getY() 获取该参数用于标识OCR检测框左上角位置的**纵坐标**（y）所在的像素位置，结合剩余参数可唯一确定检测框的大小和位置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setY(float $Y) 设置该参数用于标识OCR检测框左上角位置的**纵坐标**（y）所在的像素位置，结合剩余参数可唯一确定检测框的大小和位置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWidth() 获取该参数用于标识OCR检测框的宽度（**由左上角出发在x轴向右延伸的长度**）。结合剩余参数可唯一确定检测框的大小和位置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidth(integer $Width) 设置该参数用于标识OCR检测框的宽度（**由左上角出发在x轴向右延伸的长度**）。结合剩余参数可唯一确定检测框的大小和位置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHeight() 获取该参数用于标识OCR检测框的高度（**由左上角出发在y轴向下延伸的长度**）。结合剩余参数可唯一确定检测框的大小和位置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeight(integer $Height) 设置该参数用于标识OCR检测框的高度（**由左上角出发在y轴向下延伸的长度**）。结合剩余参数可唯一确定检测框的大小和位置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRotate() 获取该参数用于标识OCR检测框的旋转角度，该参数结合X和Y两个坐标参数可唯一确定检测框的具体位置；取值：0-360（**角度制**），方向为**逆时针旋**转。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRotate(float $Rotate) 设置该参数用于标识OCR检测框的旋转角度，该参数结合X和Y两个坐标参数可唯一确定检测框的具体位置；取值：0-360（**角度制**），方向为**逆时针旋**转。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageResultsResultDetailLocation extends AbstractModel
{
    /**
     * @var float 该参数用于标识OCR检测框左上角位置的**横坐标**（x）所在的像素位置，结合剩余参数可唯一确定检测框的大小和位置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $X;

    /**
     * @var float 该参数用于标识OCR检测框左上角位置的**纵坐标**（y）所在的像素位置，结合剩余参数可唯一确定检测框的大小和位置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Y;

    /**
     * @var integer 该参数用于标识OCR检测框的宽度（**由左上角出发在x轴向右延伸的长度**）。结合剩余参数可唯一确定检测框的大小和位置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Width;

    /**
     * @var integer 该参数用于标识OCR检测框的高度（**由左上角出发在y轴向下延伸的长度**）。结合剩余参数可唯一确定检测框的大小和位置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Height;

    /**
     * @var float 该参数用于标识OCR检测框的旋转角度，该参数结合X和Y两个坐标参数可唯一确定检测框的具体位置；取值：0-360（**角度制**），方向为**逆时针旋**转。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rotate;

    /**
     * @param float $X 该参数用于标识OCR检测框左上角位置的**横坐标**（x）所在的像素位置，结合剩余参数可唯一确定检测框的大小和位置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Y 该参数用于标识OCR检测框左上角位置的**纵坐标**（y）所在的像素位置，结合剩余参数可唯一确定检测框的大小和位置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Width 该参数用于标识OCR检测框的宽度（**由左上角出发在x轴向右延伸的长度**）。结合剩余参数可唯一确定检测框的大小和位置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Height 该参数用于标识OCR检测框的高度（**由左上角出发在y轴向下延伸的长度**）。结合剩余参数可唯一确定检测框的大小和位置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Rotate 该参数用于标识OCR检测框的旋转角度，该参数结合X和Y两个坐标参数可唯一确定检测框的具体位置；取值：0-360（**角度制**），方向为**逆时针旋**转。
注意：此字段可能返回 null，表示取不到有效值。
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
