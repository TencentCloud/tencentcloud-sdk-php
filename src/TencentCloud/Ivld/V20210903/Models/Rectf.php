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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 矩形内容框
 *
 * @method float getX() 获取矩形框左上角水平座标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setX(float $X) 设置矩形框左上角水平座标
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getY() 获取矩形框左上角竖直座标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setY(float $Y) 设置矩形框左上角竖直座标
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getWidth() 获取矩形框宽度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidth(float $Width) 设置矩形框宽度
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getHeight() 获取矩形框长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeight(float $Height) 设置矩形框长度
注意：此字段可能返回 null，表示取不到有效值。
 */
class Rectf extends AbstractModel
{
    /**
     * @var float 矩形框左上角水平座标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $X;

    /**
     * @var float 矩形框左上角竖直座标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Y;

    /**
     * @var float 矩形框宽度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Width;

    /**
     * @var float 矩形框长度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Height;

    /**
     * @param float $X 矩形框左上角水平座标
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Y 矩形框左上角竖直座标
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Width 矩形框宽度
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Height 矩形框长度
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
