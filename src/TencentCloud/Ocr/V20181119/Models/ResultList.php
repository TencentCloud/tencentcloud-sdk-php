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
 * @method array getQuestion() 获取题干
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuestion(array $Question) 设置题干
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOption() 获取选项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOption(array $Option) 设置选项
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFigure() 获取插图
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFigure(array $Figure) 设置插图
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTable() 获取表格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTable(array $Table) 设置表格
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAnswer() 获取答案
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnswer(array $Answer) 设置答案
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParse() 获取解析
 * @method void setParse(array $Parse) 设置解析
 * @method array getCoord() 获取整题的坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoord(array $Coord) 设置整题的坐标
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResultList extends AbstractModel
{
    /**
     * @var array 题干
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Question;

    /**
     * @var array 选项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Option;

    /**
     * @var array 插图
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Figure;

    /**
     * @var array 表格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Table;

    /**
     * @var array 答案
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Answer;

    /**
     * @var array 解析
     */
    public $Parse;

    /**
     * @var array 整题的坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Coord;

    /**
     * @param array $Question 题干
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Option 选项
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Figure 插图
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Table 表格
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Answer 答案
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Parse 解析
     * @param array $Coord 整题的坐标
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
    }
}
