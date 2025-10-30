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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片框选区域信息
 *
 * @method string getType() 获取图片框选区域类型，可选值：
<li>logo：图标；</li>
<li>text：文字；</li>
默认值：logo。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置图片框选区域类型，可选值：
<li>logo：图标；</li>
<li>text：文字；</li>
默认值：logo。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAreaCoordSet() 获取图片框选区域坐标 (像素级)，[x1, y1, x2, y2]，即左上角坐标、右下角坐标。
示例值：[101, 85, 111, 95]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAreaCoordSet(array $AreaCoordSet) 设置图片框选区域坐标 (像素级)，[x1, y1, x2, y2]，即左上角坐标、右下角坐标。
示例值：[101, 85, 111, 95]
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBoundingBox() 获取图片框选区域坐标，[x1, y1, x2, y2]，即左上角坐标、右下角坐标， 当AreaCoordSet未指定时生效。
- [0.1, 0.1, 0.3, 0.3] :  表示比例 （数值小于1）
- [50, 50, 350, 280] : 表示像素 （数值大于等于1）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBoundingBox(array $BoundingBox) 设置图片框选区域坐标，[x1, y1, x2, y2]，即左上角坐标、右下角坐标， 当AreaCoordSet未指定时生效。
- [0.1, 0.1, 0.3, 0.3] :  表示比例 （数值小于1）
- [50, 50, 350, 280] : 表示像素 （数值大于等于1）
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageAreaBoxInfo extends AbstractModel
{
    /**
     * @var string 图片框选区域类型，可选值：
<li>logo：图标；</li>
<li>text：文字；</li>
默认值：logo。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var array 图片框选区域坐标 (像素级)，[x1, y1, x2, y2]，即左上角坐标、右下角坐标。
示例值：[101, 85, 111, 95]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AreaCoordSet;

    /**
     * @var array 图片框选区域坐标，[x1, y1, x2, y2]，即左上角坐标、右下角坐标， 当AreaCoordSet未指定时生效。
- [0.1, 0.1, 0.3, 0.3] :  表示比例 （数值小于1）
- [50, 50, 350, 280] : 表示像素 （数值大于等于1）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BoundingBox;

    /**
     * @param string $Type 图片框选区域类型，可选值：
<li>logo：图标；</li>
<li>text：文字；</li>
默认值：logo。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AreaCoordSet 图片框选区域坐标 (像素级)，[x1, y1, x2, y2]，即左上角坐标、右下角坐标。
示例值：[101, 85, 111, 95]
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BoundingBox 图片框选区域坐标，[x1, y1, x2, y2]，即左上角坐标、右下角坐标， 当AreaCoordSet未指定时生效。
- [0.1, 0.1, 0.3, 0.3] :  表示比例 （数值小于1）
- [50, 50, 350, 280] : 表示像素 （数值大于等于1）
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AreaCoordSet",$param) and $param["AreaCoordSet"] !== null) {
            $this->AreaCoordSet = $param["AreaCoordSet"];
        }

        if (array_key_exists("BoundingBox",$param) and $param["BoundingBox"] !== null) {
            $this->BoundingBox = $param["BoundingBox"];
        }
    }
}
