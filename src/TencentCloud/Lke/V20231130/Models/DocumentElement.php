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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文档元素字段
 *
 * @method integer getIndex() 获取文档元素索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(integer $Index) 设置文档元素索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取元素类型，包括paragraph、table、formula、figure、title、header、footer、figure_text

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置元素类型，包括paragraph、table、formula、figure、title、header、footer、figure_text

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getText() 获取元素内容，当type为figure或formula(公式识别关闭)时该字段内容为图片的位置

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置元素内容，当type为figure或formula(公式识别关闭)时该字段内容为图片的位置

注意：此字段可能返回 null，表示取不到有效值。
 * @method Polygon getPolygon() 获取元素坐标，左上角(x1, y1)，右上角(x2, y2)，右下角(x3, y3)，左下角(x4, y4)

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolygon(Polygon $Polygon) 设置元素坐标，左上角(x1, y1)，右上角(x2, y2)，右下角(x3, y3)，左下角(x4, y4)

注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevel() 获取元素层级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(integer $Level) 设置元素层级
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInsetImageName() 获取入参开启EnableInsetImage后返回，表示在InsetImagePackage中的内嵌图片名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInsetImageName(string $InsetImageName) 设置入参开启EnableInsetImage后返回，表示在InsetImagePackage中的内嵌图片名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getElements() 获取嵌套的文档元素信息，一般包含的是文档内嵌入图片的文字识别结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElements(array $Elements) 设置嵌套的文档元素信息，一般包含的是文档内嵌入图片的文字识别结果
注意：此字段可能返回 null，表示取不到有效值。
 */
class DocumentElement extends AbstractModel
{
    /**
     * @var integer 文档元素索引
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @var string 元素类型，包括paragraph、table、formula、figure、title、header、footer、figure_text

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 元素内容，当type为figure或formula(公式识别关闭)时该字段内容为图片的位置

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var Polygon 元素坐标，左上角(x1, y1)，右上角(x2, y2)，右下角(x3, y3)，左下角(x4, y4)

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Polygon;

    /**
     * @var integer 元素层级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var string 入参开启EnableInsetImage后返回，表示在InsetImagePackage中的内嵌图片名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InsetImageName;

    /**
     * @var array 嵌套的文档元素信息，一般包含的是文档内嵌入图片的文字识别结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Elements;

    /**
     * @param integer $Index 文档元素索引
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 元素类型，包括paragraph、table、formula、figure、title、header、footer、figure_text

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Text 元素内容，当type为figure或formula(公式识别关闭)时该字段内容为图片的位置

注意：此字段可能返回 null，表示取不到有效值。
     * @param Polygon $Polygon 元素坐标，左上角(x1, y1)，右上角(x2, y2)，右下角(x3, y3)，左下角(x4, y4)

注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Level 元素层级
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InsetImageName 入参开启EnableInsetImage后返回，表示在InsetImagePackage中的内嵌图片名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Elements 嵌套的文档元素信息，一般包含的是文档内嵌入图片的文字识别结果
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Polygon",$param) and $param["Polygon"] !== null) {
            $this->Polygon = new Polygon();
            $this->Polygon->deserialize($param["Polygon"]);
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("InsetImageName",$param) and $param["InsetImageName"] !== null) {
            $this->InsetImageName = $param["InsetImageName"];
        }

        if (array_key_exists("Elements",$param) and $param["Elements"] !== null) {
            $this->Elements = [];
            foreach ($param["Elements"] as $key => $value){
                $obj = new DocumentElement();
                $obj->deserialize($value);
                array_push($this->Elements, $obj);
            }
        }
    }
}
