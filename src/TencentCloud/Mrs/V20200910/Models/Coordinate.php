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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 坐标
 *
 * @method integer getX() 获取左上角x坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setX(integer $X) 设置左上角x坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getY() 获取左上角y坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setY(integer $Y) 设置左上角y坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWidth() 获取宽度，单位像素
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidth(integer $Width) 设置宽度，单位像素
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHeight() 获取高度，单位像素
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeight(integer $Height) 设置高度，单位像素
注意：此字段可能返回 null，表示取不到有效值。
 */
class Coordinate extends AbstractModel
{
    /**
     * @var integer 左上角x坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $X;

    /**
     * @var integer 左上角y坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Y;

    /**
     * @var integer 宽度，单位像素
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Width;

    /**
     * @var integer 高度，单位像素
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Height;

    /**
     * @param integer $X 左上角x坐标
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Y 左上角y坐标
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Width 宽度，单位像素
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Height 高度，单位像素
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
    }
}
