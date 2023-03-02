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
 * 位置坐标
 *
 * @method integer getX() 获取x坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setX(integer $X) 设置x坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getY() 获取y坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setY(integer $Y) 设置y坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getW() 获取宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setW(integer $W) 设置宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getH() 获取高
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setH(integer $H) 设置高
注意：此字段可能返回 null，表示取不到有效值。
 */
class Rectangle extends AbstractModel
{
    /**
     * @var integer x坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $X;

    /**
     * @var integer y坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Y;

    /**
     * @var integer 宽
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $W;

    /**
     * @var integer 高
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $H;

    /**
     * @param integer $X x坐标
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Y y坐标
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $W 宽
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $H 高
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

        if (array_key_exists("W",$param) and $param["W"] !== null) {
            $this->W = $param["W"];
        }

        if (array_key_exists("H",$param) and $param["H"] !== null) {
            $this->H = $param["H"];
        }
    }
}
