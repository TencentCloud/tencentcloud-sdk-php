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
 * 试题识别结果-元素内容
 *
 * @method string getText() 获取<p>元素内容，当type为figure时该字段内容为图片的位置</p>
 * @method void setText(string $Text) 设置<p>元素内容，当type为figure时该字段内容为图片的位置</p>
 * @method Polygon getCoord() 获取<p>元素坐标</p>
 * @method void setCoord(Polygon $Coord) 设置<p>元素坐标</p>
 * @method string getGroupType() 获取<p>元素group类型，包括multiple-choice(选择题)、fill-in-the-blank(填空题)、problem-solving(解答题)、arithmetic(算术题)</p>
 * @method void setGroupType(string $GroupType) 设置<p>元素group类型，包括multiple-choice(选择题)、fill-in-the-blank(填空题)、problem-solving(解答题)、arithmetic(算术题)</p>
 * @method array getResultList() 获取<p>结果列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultList(array $ResultList) 设置<p>结果列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndex() 获取<p>元素索引</p>
 * @method void setIndex(integer $Index) 设置<p>元素索引</p>
 * @method integer getPageIndex() 获取<p>元素所在页</p><p>单位：页</p><p>默认值：1</p>
 * @method void setPageIndex(integer $PageIndex) 设置<p>元素所在页</p><p>单位：页</p><p>默认值：1</p>
 */
class Element extends AbstractModel
{
    /**
     * @var string <p>元素内容，当type为figure时该字段内容为图片的位置</p>
     */
    public $Text;

    /**
     * @var Polygon <p>元素坐标</p>
     */
    public $Coord;

    /**
     * @var string <p>元素group类型，包括multiple-choice(选择题)、fill-in-the-blank(填空题)、problem-solving(解答题)、arithmetic(算术题)</p>
     */
    public $GroupType;

    /**
     * @var array <p>结果列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultList;

    /**
     * @var integer <p>元素索引</p>
     */
    public $Index;

    /**
     * @var integer <p>元素所在页</p><p>单位：页</p><p>默认值：1</p>
     */
    public $PageIndex;

    /**
     * @param string $Text <p>元素内容，当type为figure时该字段内容为图片的位置</p>
     * @param Polygon $Coord <p>元素坐标</p>
     * @param string $GroupType <p>元素group类型，包括multiple-choice(选择题)、fill-in-the-blank(填空题)、problem-solving(解答题)、arithmetic(算术题)</p>
     * @param array $ResultList <p>结果列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Index <p>元素索引</p>
     * @param integer $PageIndex <p>元素所在页</p><p>单位：页</p><p>默认值：1</p>
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Coord",$param) and $param["Coord"] !== null) {
            $this->Coord = new Polygon();
            $this->Coord->deserialize($param["Coord"]);
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("ResultList",$param) and $param["ResultList"] !== null) {
            $this->ResultList = [];
            foreach ($param["ResultList"] as $key => $value){
                $obj = new ResultList();
                $obj->deserialize($value);
                array_push($this->ResultList, $obj);
            }
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }
    }
}
