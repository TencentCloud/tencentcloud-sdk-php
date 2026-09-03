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
 * 结果列表
 *
 * @method array getQuestion() 获取<p>题干</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuestion(array $Question) 设置<p>题干</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOption() 获取<p>选项</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOption(array $Option) 设置<p>选项</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFigure() 获取<p>插图</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFigure(array $Figure) 设置<p>插图</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTable() 获取<p>表格</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTable(array $Table) 设置<p>表格</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAnswer() 获取<p>答案</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnswer(array $Answer) 设置<p>答案</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParse() 获取<p>解析</p>
 * @method void setParse(array $Parse) 设置<p>解析</p>
 * @method array getCoord() 获取<p>整题的坐标，多页单题跨页/单页单题跨栏场景下，存在一道题有多个坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoord(array $Coord) 设置<p>整题的坐标，多页单题跨页/单页单题跨栏场景下，存在一道题有多个坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCoordPageIndex() 获取<p>多坐标返回，显示坐标所在页</p><p>默认值：[]</p>
 * @method void setCoordPageIndex(array $CoordPageIndex) 设置<p>多坐标返回，显示坐标所在页</p><p>默认值：[]</p>
 */
class ResultList extends AbstractModel
{
    /**
     * @var array <p>题干</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Question;

    /**
     * @var array <p>选项</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Option;

    /**
     * @var array <p>插图</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Figure;

    /**
     * @var array <p>表格</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Table;

    /**
     * @var array <p>答案</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Answer;

    /**
     * @var array <p>解析</p>
     */
    public $Parse;

    /**
     * @var array <p>整题的坐标，多页单题跨页/单页单题跨栏场景下，存在一道题有多个坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Coord;

    /**
     * @var array <p>多坐标返回，显示坐标所在页</p><p>默认值：[]</p>
     */
    public $CoordPageIndex;

    /**
     * @param array $Question <p>题干</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Option <p>选项</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Figure <p>插图</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Table <p>表格</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Answer <p>答案</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Parse <p>解析</p>
     * @param array $Coord <p>整题的坐标，多页单题跨页/单页单题跨栏场景下，存在一道题有多个坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CoordPageIndex <p>多坐标返回，显示坐标所在页</p><p>默认值：[]</p>
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
        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = [];
            foreach ($param["Question"] as $key => $value){
                $obj = new Element();
                $obj->deserialize($value);
                array_push($this->Question, $obj);
            }
        }

        if (array_key_exists("Option",$param) and $param["Option"] !== null) {
            $this->Option = [];
            foreach ($param["Option"] as $key => $value){
                $obj = new Element();
                $obj->deserialize($value);
                array_push($this->Option, $obj);
            }
        }

        if (array_key_exists("Figure",$param) and $param["Figure"] !== null) {
            $this->Figure = [];
            foreach ($param["Figure"] as $key => $value){
                $obj = new Element();
                $obj->deserialize($value);
                array_push($this->Figure, $obj);
            }
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = [];
            foreach ($param["Table"] as $key => $value){
                $obj = new Element();
                $obj->deserialize($value);
                array_push($this->Table, $obj);
            }
        }

        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = [];
            foreach ($param["Answer"] as $key => $value){
                $obj = new Element();
                $obj->deserialize($value);
                array_push($this->Answer, $obj);
            }
        }

        if (array_key_exists("Parse",$param) and $param["Parse"] !== null) {
            $this->Parse = [];
            foreach ($param["Parse"] as $key => $value){
                $obj = new Element();
                $obj->deserialize($value);
                array_push($this->Parse, $obj);
            }
        }

        if (array_key_exists("Coord",$param) and $param["Coord"] !== null) {
            $this->Coord = [];
            foreach ($param["Coord"] as $key => $value){
                $obj = new Polygon();
                $obj->deserialize($value);
                array_push($this->Coord, $obj);
            }
        }

        if (array_key_exists("CoordPageIndex",$param) and $param["CoordPageIndex"] !== null) {
            $this->CoordPageIndex = $param["CoordPageIndex"];
        }
    }
}
