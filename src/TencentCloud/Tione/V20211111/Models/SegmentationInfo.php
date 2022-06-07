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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片分割参数信息
 *
 * @method array getPoints() 获取点坐标数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPoints(array $Points) 设置点坐标数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabel() 获取分割标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabel(string $Label) 设置分割标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGray() 获取灰度值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGray(integer $Gray) 设置灰度值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColor() 获取颜色
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColor(string $Color) 设置颜色
注意：此字段可能返回 null，表示取不到有效值。
 */
class SegmentationInfo extends AbstractModel
{
    /**
     * @var array 点坐标数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Points;

    /**
     * @var string 分割标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Label;

    /**
     * @var integer 灰度值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Gray;

    /**
     * @var string 颜色
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Color;

    /**
     * @param array $Points 点坐标数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Label 分割标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Gray 灰度值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Color 颜色
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
        if (array_key_exists("Points",$param) and $param["Points"] !== null) {
            $this->Points = [];
            foreach ($param["Points"] as $key => $value){
                $obj = new PointInfo();
                $obj->deserialize($value);
                array_push($this->Points, $obj);
            }
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Gray",$param) and $param["Gray"] !== null) {
            $this->Gray = $param["Gray"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }
    }
}
